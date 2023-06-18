<?php

namespace App\Http\Controllers;

use App\Models\CoverImage;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use SplPriorityQueue;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function registration(Request $request){
        $validated_data = $request->validate([
            'namalengkap' => 'required',
            'password' => 'required',
            'email' => 'required|email|unique:users',
            'tanggallahir' => 'required|date|before:today',
            'jeniskelamin' => 'required',
            'coverimage' => 'required',
        ]);
        $coverimage = CoverImage::firstWhere('id', $validated_data['coverimage']);
        $img = imagecreatefrompng("storage/".$coverimage->url_lokal);
        $width = imagesx($img);
        $height = imagesy($img);
        $slug = $coverimage->slug;
        
        $slug = uniqid($slug, true);
        $validated_data["slug_coverimage"] = base64_encode($validated_data["email"].$slug);
        $message = $validated_data["email"] . "+" . $validated_data["password"] . "+" . $validated_data["slug_coverimage"];
        $P = $this->texttobinary($message);
        $T = 0;
        $coverdata = $this->getpixelimage($height, $width, $img);
        $h = $this->get_h($height, $width, $coverdata);
        $l = $this->get_l($height, $width, $coverdata);
        $credentials = array(
            'email' => $validated_data["email"],
            'password' => $validated_data["password"]
        );
        $locmapRDE = $this->reduce_difference_expansion($img,$width,$height,$message,$P,$T,$coverdata,$h,$l,$validated_data["email"]);

        $P = $P.$locmapRDE;
        // $this->difference_expansion($img,$width,$height,$P,$T,$coverdata,$h,$l,$validated_data["email"]);
        $validated_data["password"] = Hash::make($validated_data["password"]);
        User::create($validated_data);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard')->with('register_success', 'Pendaftaran berhasil dilakukan');
        }
        
        return back()->with('register_error', 'Pendaftaran gagal dilakukan');
    }
    
    public function reduce_difference_expansion($img,$width,$height,$message,$P,$T,$coverdata,$h,$l,$email){
        global $h_reduksi;
        $h_reduksi = $this->get_h_reduksi($h);     
        $location_map_reduksi = $this->get_location_map_reduksi($h, $h_reduksi);
        do{
            global $bitstream, $original_set;   
            $original_set = $this->get_original_set($h_reduksi, $l, $T);
            $capacity = $this->get_capacity($original_set);
            $location_map = $this->get_location_map($original_set);
            $LSB = $this->get_LSB($original_set, $h_reduksi);
            
            // kompresi locmap reduksi
            $strlocmap_red = null;
            for ($i=0; $i < count($location_map); $i++) { 
                $strlocmap_red .= implode('', $location_map_reduksi[$i]);
            }
            $RLE_locmap_reduksi = $this->RLE($strlocmap_red);
            $L_reduksi= $this->huffman_compress($RLE_locmap_reduksi);
            $length_L_reduksi = $this->texttobinary(strlen($L_reduksi));
            
            // kompresi locmap
            $strlocmap = null;
            for ($i=0; $i < count($location_map); $i++) { 
                $strlocmap .= implode('', $location_map[$i]);
            }
            $RLE_locmap = $this->RLE($strlocmap);
            $L= $this->huffman_compress($RLE_locmap);
            $length_L = $this->texttobinary(strlen($L));
            
            // kompresi LSB
            $RLE_C = $this->RLE($LSB);
            $C = $this->huffman_compress($RLE_C);
            $length_C = $this->texttobinary(strlen($C));
            
            // menghitung panjang P
            $length_P = $this->texttobinary(strlen($P));
            
            // // mendapatkan nilai Bitstream
            $konjungsi = $this->texttobinary("&");
            $limitheader = $this->texttobinary("&&");
            $bitstream = $length_L_reduksi.$konjungsi.$length_L.$konjungsi.$length_C.$konjungsi.$length_P.$limitheader.$L_reduksi.$L.$C.$P;
            
            if ($T > 255) {
                if (strlen($bitstream) > $capacity) {
                    echo(strlen($bitstream)." ". $capacity);
                    exit();
                }
            }
            $T+=51;
        }while (strlen($bitstream) > $capacity);
        
        $h_expanded = $this->get_h_expanded($bitstream, $height, $width, $original_set, $h_reduksi);
        $stegodata = imagecreatetruecolor($width, $height);
        $stegodata = $this->get_stegodata($height, $width, $coverdata, $l, $h_expanded, $stegodata);
        if (file_exists("storage/$email")) {
            $this->export_png($stegodata, "storage/$email/$email"."RDE.png");
            // ddd("TRUE");
        } else{
            mkdir("storage/$email", 0777, true);
            $this->export_png($stegodata, "storage/$email/$email"."RDE.png");
        }
        return $L_reduksi;
    }
    
    public function difference_expansion($img,$width,$height,$P,$T,$coverdata,$h,$l,$email){
        do{
            global $bitstream, $original_set;
            $original_set = $this->get_original_set($h, $l, $T);
            global $capacity;
            $capacity = $this->get_capacity($original_set);
            $location_map = $this->get_location_map($original_set);
            $LSB = $this->get_LSB($original_set, $h);
            
            // kompresi locmap
            $strlocmap = null;
            for ($i=0; $i < count($location_map); $i++) { 
                $strlocmap .= implode('', $location_map[$i]);
            }
            $RLE_locmap = $this->RLE($strlocmap);
            $L= $this->huffman_compress($RLE_locmap);
            $length_L = $this->texttobinary(strlen($L));
            
            // kompresi LSB
            $RLE_C = $this->RLE($LSB);
            $C = $this->huffman_compress($RLE_C);
            $length_C = $this->texttobinary(strlen($C));
            
            // menghitung panjang P
            $length_P = $this->texttobinary(strlen($P));
            
            // // mendapatkan nilai Bitstream
            $konjungsi = $this->texttobinary("&");
            $limitheader = $this->texttobinary("&&");
            $bitstream = $length_L.$konjungsi.$length_C.$konjungsi.$length_P.$limitheader.$L.$C.$P;
            
            if ($T > 255) {
                if (strlen($bitstream) > $capacity) {
                    break;
                }
            }
            $T+=51;
        }while (strlen($bitstream) > $capacity);
        
        $h_expanded = $this->get_h_expanded($bitstream, $height, $width, $original_set, $h);
        $stegodata = imagecreatetruecolor($width, $height);
        $stegodata = $this->get_stegodata($height, $width, $coverdata, $l, $h_expanded, $stegodata);
        if (file_exists("storage/$email")) {
            $this->export_png($stegodata, "storage/$email/$email"."DE.png");
        } else{
            mkdir("storage/$email");
            $this->export_png($stegodata, "storage/$email/$email"."DE.png");
        }
    }
    
    // mendapatkan pixel image
    public function getpixelimage($height, $width, $image){
        for ($i=0; $i < $height; $i++) { 
            for ($j=0; $j <$width ; $j++) { 
                $coverdata[$i][$j] = imagecolorat($image, $j, $i); 
            }
        }
        return $coverdata;
    }
    
    // mendapatkan nilai selisih
    public function get_h($height, $width, $coverdata){
        for ($i=0; $i < $height; $i++) { 
            $x_virtual = 0;
            for ($j=0; $j + 1 < $width; $j+=2) { 
                $x = ($coverdata[$i][$j] >> 16) &0xFF;
                $y = ($coverdata[$i][$j + 1] >> 16) &0xFF;
                $h[$i][$x_virtual] = $x - $y;
                $x_virtual++;
            }
        }
        return $h;
    }
    
    // mendapatkan nilai rata rata
    public function get_l($height, $width, $coverdata){
        for ($i=0; $i < $height; $i++) { 
            $x_virtual = 0;
            for ($j=0; $j + 1 < $width; $j+=2) { 
                $x = ($coverdata[$i][$j] >> 16) &0xFF;
                $y = ($coverdata[$i][$j + 1] >> 16) &0xFF;
                $l[$i][$x_virtual] = floor(($x + $y)/2);
                $x_virtual++;
            }
        }
        return $l;
    }
    
    // melakukan reduksi pada selisih
    public function get_h_reduksi($h){
        for ($i=0; $i < count($h); $i++) {
            for ($j=0; $j < count($h[$i]); $j++) { 
                if ($h[$i][$j] < 2) {
                    $h_reduksi[$i][$j] = $h[$i][$j];
                }else{
                    $h_reduksi[$i][$j] = $h[$i][$j] - pow(2, floor(log($h[$i][$j],2)) - 1);
                }
            }
        }
        return $h_reduksi;
    }
    
    // menentukan location map selisih yang tereduksi
    public function get_location_map_reduksi($h, $h_reduksi){
        for ($i=0; $i < count($h_reduksi) ; $i++) { 
            for ($j=0; $j < count($h_reduksi[$i]) ; $j++) { 
                $criteria1 = pow(2, floor(log10($h_reduksi[$i][$j]) / log10(2)));
                $criteria2 = pow(2, floor(log10($h[$i][$j]) / log10(2)));
                if ($h[$i][$j] == $h_reduksi[$i][$j]) {
                    $location_map_reduksi[$i][$j] = 0;
                } else {
                    $location_map_reduksi[$i][$j] = 1;
                }
            }
        }
        return $location_map_reduksi;
    }
    
    // menentukan original set
    public function get_original_set($h, $l, $T){
        for ($i=0; $i < count($h); $i++) { 
            for ($j=0; $j < count($h[$i]) ; $j++) { 
                $exp0 = 2 * $h[$i][$j] + 0;
                $exp1 = 2 * $h[$i][$j] + 1;
                $qualified = min(2 * (255 - $l[$i][$j]) , 2 * $l[$i][$j] + 1);
                $chg0 = 2 * floor($h[$i][$j] / 2) + 0;
                $chg1 = 2 * floor($h[$i][$j] / 2) + 1;
                if (abs($exp0) <= $qualified && abs($exp1) <= $qualified) {
                    if ($h[$i][$j] == 0 || $h[$i][$j] == (-1)) {
                        $original_set[$i][$j] = "EZ";
                    }elseif (abs($h[$i][$j]) <= $T ) {
                        $original_set[$i][$j] = "EN1";
                    }else{
                        $original_set[$i][$j] = "EN2";
                    }
                } elseif(abs($chg0) <= $qualified && abs($chg1) <= $qualified){
                    $original_set[$i][$j] = "CN";
                } else{
                    $original_set[$i][$j] = "NC";
                }
            }
        }
        return $original_set;
    }
    
    // mendapatkan kapasitas gambar dalam menampung pesan rahasia
    public function get_capacity($original_set){
        $EZ = 0;
        $EN1 = 0;
        $EN2 = 0;
        $CN = 0;
        for ($i=0; $i < count($original_set); $i++) { 
            for ($j=0; $j < count($original_set[$i]) ; $j++) { 
                if ($original_set[$i][$j] == "EZ") {
                    $EZ++;
                } elseif ($original_set[$i][$j] == "EN1") {
                    $EN1++;
                } elseif ($original_set[$i][$j] == "EN2") {
                    $EN2++;
                } elseif ($original_set[$i][$j] == "CN") {
                    $CN++;
                }
            }
        }
        $capacity = $EZ + $EN1 + $EN2 + $CN;
        return $capacity;
    }
    
    // menentukan location map selisih yang dapat disisipi pesan
    public function get_location_map($original_set){
        for ($i=0; $i < count($original_set); $i++) { 
            for ($j=0; $j < count($original_set[$i]); $j++) { 
                if ($original_set[$i][$j] == "EZ" || $original_set[$i][$j] == "EN1") {
                    $location_map[$i][$j] = 1;
                } else{
                    $location_map[$i][$j] = 0;
                }
            }
        }
        return $location_map;
    }
    
    // mendapatkan LSB dari selisih EN2 dan CN
    public function get_LSB($original_set, $h){
        $LSB = null;
        for ($i=0; $i < count($original_set); $i++) { 
            for ($j=0; $j < count($original_set[$i]); $j++) { 
                if ($original_set[$i][$j] == "EN2" || $original_set[$i][$j] == "CN") {
                    if ($h[$i][$j] != 1 && $h[$i][$j] != -2) {
                        $binary_h = decbin($h[$i][$j]);
                        $LSB .= substr($binary_h, strlen($binary_h) - 1, 1);
                    }
                }
            }
        }
        return $LSB;
    }
    
    // konversi biner ke ASCII
    public function binarytotext($binary){
        $returntext = null;
        
        // mengubah biner menjadi teks
        for ($i=0; $i + 6 < strlen($binary) ; $i+=7) { 
            
            $returntext .= pack('H*', dechex(bindec(substr($binary, $i, 7))));
        }
        return $returntext;
    }
    
    // konversi ASCII ke biner
    public function texttobinary($text){
        // membagi teks menjadi array
        $characters = str_split($text);
        
        // mengubah array teks menjadi biner
        $binaryText = [];
        foreach ($characters as $character){
            $data = unpack('H*', $character);
            $binaryText[] = str_pad(base_convert($data[1], 16, 2), 7, "0", STR_PAD_LEFT);;
        }
        
        // menggabungkan semua biner menjadi satu variabel
        $binaryTextImplode = implode('', $binaryText);
        
        return $binaryTextImplode;
    }
    
    // kompresi Run Length Encoding
    public function RLE($teks){
        $n = strlen($teks);
        $returntext = null;
        for ($i=0; $i < $n ; $i++) { 
            $count = 1;
            while ($i < ($n - 1) && substr($teks, $i, 1) == substr($teks, $i + 1, 1)) {
                $count++;
                $i++;
            }
            $returntext .= substr($teks, $i, 1).$count."|"; 
        }
        return $returntext;
    }
    
    // extraksi Run Length Encoding
    public function decode_RLE($strRLE){
        $explodeRLE = explode("|", $strRLE);
        $decodeRLE = null;
        for ($i=0; $i < count($explodeRLE); $i++) { 
            $biner = substr($explodeRLE[$i], 0, 1);
            $count = substr($explodeRLE[$i], 1, (strlen($explodeRLE[$i]) - 1));
            for ($j=0; $j < $count; $j++) { 
                $decodeRLE .= $biner;
            }
        }
        return $decodeRLE;
    }
    
    // ekspansi pesan rahasia pada selisih
    public function get_h_expanded($bitstream, $height, $width, $original_set, $h){
        $secretIndex = 0;
        $bitstream_length = strlen($bitstream);
        for ($i=0; $i < $height; $i++) { 
            for ($j=0; $j < count($h[$i]); $j++) {
                $subs = substr($bitstream, $secretIndex, 1);
                $int = ($subs);
                if ($original_set[$i][$j] == "EZ" || $original_set[$i][$j] == "EN1") {
                    if ($secretIndex < $bitstream_length) {
                        $h_expanded[$i][$j] = 2 * $h[$i][$j] + $int;
                        $secretIndex++;
                    } else{
                        $h_expanded[$i][$j] = 2 * $h[$i][$j] + 0;
                    }
                } elseif($original_set[$i][$j] == "EN2" || $original_set[$i][$j] == "CN"){
                    if ($secretIndex < $bitstream_length) {
                        $h_expanded[$i][$j] = 2 * floor($h[$i][$j]/2) + $int;
                        $secretIndex++;
                    } else{
                        $h_expanded[$i][$j] = 2 * floor($h[$i][$j]/2) + 0;
                    }
                } else{
                    $h_expanded[$i][$j] = $h[$i][$j];
                }
            }
        }
        return $h_expanded;
    }
    
    // mendapatkan stegodata
    public function get_stegodata($height, $width, $coverdata, $l, $h_expanded, $stegodata){
        for ($i=0; $i < $height ; $i++) { 
            $x_virtual = 0;
            for ($j=0; $j + 1 < $width ; $j+=2) { 
                $x_exp = ($l[$i][$x_virtual] + floor(($h_expanded[$i][$x_virtual] + 1) / 2));
                $y_exp = ($l[$i][$x_virtual] - floor($h_expanded[$i][$x_virtual] / 2));
                $color = imagecolorallocate($stegodata, $x_exp, ($coverdata[$i][$j] >> 8) & 0xFF,  ($coverdata[$i][$j]) & 0xFF);
                imagesetpixel($stegodata, $j, $i, $color);
                $color = imagecolorallocate($stegodata,  $y_exp, ($coverdata[$i][$j + 1] >> 8) & 0xFF, ($coverdata[$i][$j + 1]) & 0xFF);
                imagesetpixel($stegodata, $j + 1, $i, $color);
                $x_virtual++;
            }
        }
        // ddd(($stegodata[54][1046]>>16) &0xFF);
        return $stegodata;
    }
    
    // Eksport gambar menjadi png
    public function export_png($image, $url){
        // ddd("FALSE");
        header('Content-type:image/png');
        imagepng($image, $url);
        // imagedestroy($image);
    }   
    
    function huffman_encode($symb2freq) {
        $heap = new SplPriorityQueue;
        $heap->setExtractFlags(SplPriorityQueue::EXTR_BOTH);
        foreach ($symb2freq as $sym => $wt)
        $heap->insert(array($sym => ''), -$wt);
        
        while ($heap->count() > 1) {
            $lo = $heap->extract();
            $hi = $heap->extract();
            foreach ($lo['data'] as &$x)
            $x = '1'.$x;
            foreach ($hi['data'] as &$x)
            $x = '0'.$x;
            $heap->insert($lo['data'] + $hi['data'],
            $lo['priority'] + $hi['priority']);
        }
        $result = $heap->extract();
        return $result['data'];
    }
    
    function huffman_compress($txt){
        $arr_text = str_split($txt);
        $symb2freq = array_count_values(str_split($txt));
        $huff = $this->huffman_encode($symb2freq);
        $code = null;
        for($i=0;$i<count($arr_text);$i++){
            $code .= $huff[$arr_text[$i]]; 
        }
        $sym = null;
        foreach ($symb2freq as $key => $value) {
            $sym .= ($key." ".$symb2freq[$key]." ");
        }
        
        $sym = $this->texttobinary($sym."--");
        $result = $sym.$code;
        $length_result = $this->texttobinary(strlen($code)."--");
        // echo(strlen($code));
        $result = $length_result.$result;
        return $result;
    }
    
    function huffman_decompress($encode) {
        $sym = $this->binarytotext($encode);
        $arr_sym = explode("--", $sym);
        $length_code = $arr_sym[0];
        $sym = $arr_sym[1];
        $length_start = strlen($this->texttobinary($length_code."--".$sym."--"));
        $arr_sym = explode(" ", $sym);
        $symb2freq=array();
        for ($i=0; $i+1 < count($arr_sym); $i+=2) { 
            $symb2freq += [$arr_sym[$i]=>(int)($arr_sym[$i+1])];
        }
        $huff = $this->huffman_encode($symb2freq);
        $code = substr($encode, $length_start,$length_code);
        $subs_code = null;
        $txt = null;
        $indexhuff = array();
        foreach ($huff as $key => $value) {
            array_push($indexhuff, $key);
        }
        for ($i=0; $i < strlen($code) ; $i++) { 
            $subs_code .= substr($code, $i, 1);
            for ($j=0; $j < count($indexhuff); $j++) { 
                if ($subs_code===$huff[$indexhuff[$j]]) {
                    $txt.=$indexhuff[$j];
                    $subs_code = null;
                }
            }
        }
        return $txt;
    }
    
}
