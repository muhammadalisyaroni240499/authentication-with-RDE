<?php

namespace Database\Seeders;

use App\Models\CoverImage;
use Illuminate\Database\Seeder;
use SplPriorityQueue;

class DatabaseSeeder extends Seeder
{
    /**
    * Seed the application's database.
    *
    * @return void
    */
    
    public function run(){
        
            // $cap_RDE = $this->kapasitas_RDE(storage_path()."\app\public\coverdata\gagal\island.png");
            // $cap_DE = $this->kapasitas_DE(storage_path()."\app\public\coverdata\gagal\island.png");
            // CoverImage::create([
            //     "namagambar" => "Island Of Creativity",
            //     "slug"=> "island-of-creativity",
            //     "pencipta" => "Олег Машков",
            //     "lisensi" => "Public Domain",
            //     "cap_all_RDE" => $cap_RDE[0],
            //     "cap_locmap_RDE" => $cap_RDE[1],
            //     "cap_payload_RDE" => $cap_RDE[2],
            //     "cap_all_DE" => $cap_DE[0],
            //     "cap_locmap_DE" => $cap_DE[1],
            //     "cap_payload_DE" => $cap_DE[2],
            //     "url_lokal" => "coverdata/gagal/_egerek.png",
            //     "url_global" => "https://inkscape.org/id/~V1Oleg/%E2%98%85travelers",
            // ]);
            
            // $cap_RDE = $this->kapasitas_RDE(storage_path()."\app\public\coverdata\gagal\_egerek.png");
            // $cap_DE = $this->kapasitas_DE(storage_path()."\app\public\coverdata\gagal\_egerek.png");
            // CoverImage::create([
            //     "namagambar" => "The Moon Made From Cheese",
            //     "slug"=> "the-moon",
            //     "pencipta" => "Олег Машков",
            //     "lisensi" => "Public Domain",
            //     "cap_all_RDE" => $cap_RDE[0],
            //     "cap_locmap_RDE" => $cap_RDE[1],
            //     "cap_payload_RDE" => $cap_RDE[2],
            //     "cap_all_DE" => $cap_DE[0],
            //     "cap_locmap_DE" => $cap_DE[1],
            //     "cap_payload_DE" => $cap_DE[2],
            //     "url_lokal" => "coverdata/gagal/_egerek.png",
            //     "url_global" => "https://inkscape.org/id/~V1Oleg/%E2%98%85travelers",
            // ]);
            
            // $cap_RDE = $this->kapasitas_RDE(storage_path()."\app\public\coverdata\gagal\a_new_dawn.png");
            // $cap_DE = $this->kapasitas_DE(storage_path()."\app\public\coverdata\gagal\a_new_dawn.png");
            // CoverImage::create([
            //     "namagambar" => "A New Dawn",
            //     "slug"=> "a-newn-down",
            //     "pencipta" => "Олег Машков",
            //     "lisensi" => "Public Domain",
            //     "cap_all_RDE" => $cap_RDE[0],
            //     "cap_locmap_RDE" => $cap_RDE[1],
            //     "cap_payload_RDE" => $cap_RDE[2],
            //     "cap_all_DE" => $cap_DE[0],
            //     "cap_locmap_DE" => $cap_DE[1],
            //     "cap_payload_DE" => $cap_DE[2],
            //     "url_lokal" => "coverdata/gagal/_egerek.png",
            //     "url_global" => "https://inkscape.org/id/~V1Oleg/%E2%98%85travelers",
            // ]);
            
            $cap_RDE = $this->kapasitas_RDE(storage_path()."\app\public\coverdata\hamburger.png");
            $cap_DE = $this->kapasitas_DE(storage_path()."\app\public\coverdata\hamburger.png");
            CoverImage::create([
                "namagambar" => "Hamburger",
                "slug"=> "hamburger",
                "pencipta" => "Unknown",
                "lisensi" => "Public Domain",
                "cap_all_RDE" => $cap_RDE[0],
                "cap_locmap_RDE" => $cap_RDE[1],
                "cap_payload_RDE" => $cap_RDE[2],
                "cap_all_DE" => $cap_DE[0],
                "cap_locmap_DE" => $cap_DE[1],
                "cap_payload_DE" => $cap_DE[2],
                "url_lokal" => "coverdata/hamburger.png",
                "url_global" => "https://inkscape.org/~theeagleowl/%E2%98%85hamburger",
            ]);
            
            // $cap_RDE = $this->kapasitas_RDE(storage_path()."\app\public\coverdata\gagal\yogi.png");
            // $cap_DE = $this->kapasitas_DE(storage_path()."\app\public\coverdata\gagal\yogi.png");
            // CoverImage::create([
            //     "namagambar" => "Just Draw It",
            //     "slug"=> "just-draw-it",
            //     "pencipta" => "Олег Машков",
            //     "lisensi" => "Public Domain",
            //     "cap_all_RDE" => $cap_RDE[0],
            //     "cap_locmap_RDE" => $cap_RDE[1],
            //     "cap_payload_RDE" => $cap_RDE[2],
            //     "cap_all_DE" => $cap_DE[0],
            //     "cap_locmap_DE" => $cap_DE[1],
            //     "cap_payload_DE" => $cap_DE[2],
            //     "url_lokal" => "coverdata/gagal/_egerek.png",
            //     "url_global" => "https://inkscape.org/id/~V1Oleg/%E2%98%85travelers",
            // ]);
            
            $cap_RDE = $this->kapasitas_RDE(storage_path()."\app\public\coverdata\Inkscape_Funtastic.png");
            $cap_DE = $this->kapasitas_DE(storage_path()."\app\public\coverdata\Inkscape_Funtastic.png");
            CoverImage::create([
                "namagambar" => "Inkscape Funtastic",
                "slug"=> "inkscape-funtastic",
                "pencipta" => "Muhammad Farlly",
                "lisensi" => "CC-BY-SA",
                "cap_all_RDE" => $cap_RDE[0],
                "cap_locmap_RDE" => $cap_RDE[1],
                "cap_payload_RDE" => $cap_RDE[2],
                "cap_all_DE" => $cap_DE[0],
                "cap_locmap_DE" => $cap_DE[1],
                "cap_payload_DE" => $cap_DE[2],
                "url_lokal" => "coverdata/Inkscape_Funtastic.png",
                "url_global" => "https://inkscape.org/~mfarlly/%E2%98%85inkscape-funtastic-i-muhamad-farlly",
            ]);
            
            $cap_RDE = $this->kapasitas_RDE(storage_path()."\app\public\coverdata\Splash_Screen.png");
            $cap_DE = $this->kapasitas_DE(storage_path()."\app\public\coverdata\Splash_Screen.png");
            CoverImage::create([
                "namagambar" => "Splash Screen",
                "slug"=> "splash-screen",
                "pencipta" => "Fauzan Syukri",
                "lisensi" => "CC-BY-SA",
                "cap_all_RDE" => $cap_RDE[0],
                "cap_locmap_RDE" => $cap_RDE[1],
                "cap_payload_RDE" => $cap_RDE[2],
                "cap_all_DE" => $cap_DE[0],
                "cap_locmap_DE" => $cap_DE[1],
                "cap_payload_DE" => $cap_DE[2],
                "url_lokal" => "coverdata/Splash_Screen.png",
                "url_global" => "https://inkscape.org/~ozant/%E2%98%85inkscape-11-splash-screen",
            ]);
            
            // $cap_RDE = $this->kapasitas_RDE(storage_path()."\app\public\coverdata\gagal\artfriends.png");
            // $cap_DE = $this->kapasitas_DE(storage_path()."\app\public\coverdata\gagal\artfriends.png");
            // CoverImage::create([
            //     "namagambar" => "Art Friends",
            //     "slug"=> "art-friends",
            //     "pencipta" => "Олег Машков",
            //     "lisensi" => "Public Domain",
            //     "cap_all_RDE" => $cap_RDE[0],
            //     "cap_locmap_RDE" => $cap_RDE[1],
            //     "cap_payload_RDE" => $cap_RDE[2],
            //     "cap_all_DE" => $cap_DE[0],
            //     "cap_locmap_DE" => $cap_DE[1],
            //     "cap_payload_DE" => $cap_DE[2],
            //     "url_lokal" => "coverdata/gagal/.png",
            //     "url_global" => "https://inkscape.org/id/~V1Oleg/%E2%98%85travelers",
            // ]);
            
            // $cap_RDE = $this->kapasitas_RDE(storage_path()."\app\public\coverdata\gagal\DARU.png");
            // $cap_DE = $this->kapasitas_DE(storage_path()."\app\public\coverdata\gagal\DARU.png");
            // CoverImage::create([
            //     "namagambar" => "3D Plants Still Live",
            //     "slug"=> "3d-plant",
            //     "pencipta" => "Олег Машков",
            //     "lisensi" => "Public Domain",
            //     "cap_all_RDE" => $cap_RDE[0],
            //     "cap_locmap_RDE" => $cap_RDE[1],
            //     "cap_payload_RDE" => $cap_RDE[2],
            //     "cap_all_DE" => $cap_DE[0],
            //     "cap_locmap_DE" => $cap_DE[1],
            //     "cap_payload_DE" => $cap_DE[2],
            //     "url_lokal" => "coverdata/gagal/_egerek.png",
            //     "url_global" => "https://inkscape.org/id/~V1Oleg/%E2%98%85travelers",
            // ]);
            
            $cap_RDE = $this->kapasitas_RDE(storage_path()."\app\public\coverdata\_bactery.png");
            $cap_DE = $this->kapasitas_DE(storage_path()."\app\public\coverdata\_bactery.png");
            CoverImage::create([
                "namagambar" => "Be Free",
                "slug"=> "be-free",
                "pencipta" => "Tiago Oliveira",
                "lisensi" => "CC-BY-SA",
                "cap_all_RDE" => $cap_RDE[0],
                "cap_locmap_RDE" => $cap_RDE[1],
                "cap_payload_RDE" => $cap_RDE[2],
                "cap_all_DE" => $cap_DE[0],
                "cap_locmap_DE" => $cap_DE[1],
                "cap_payload_DE" => $cap_DE[2],
                "url_lokal" => "coverdata/_bactery.png",
                "url_global" => "https://inkscape.org/id/~TiagoOHEE/%E2%98%85be-free",
            ]);
            
            // $cap_RDE = $this->kapasitas_RDE(storage_path()."\app\public\coverdata\gagal\coleman.png");
            // $cap_DE = $this->kapasitas_DE(storage_path()."\app\public\coverdata\gagal\coleman.png");
            // CoverImage::create([
            //     "namagambar" => "About Screen Coleman",
            //     "slug"=> "coleman",
            //     "pencipta" => "Олег Машков",
            //     "lisensi" => "Public Domain",
            //     "cap_all_RDE" => $cap_RDE[0],
            //     "cap_locmap_RDE" => $cap_RDE[1],
            //     "cap_payload_RDE" => $cap_RDE[2],
            //     "cap_all_DE" => $cap_DE[0],
            //     "cap_locmap_DE" => $cap_DE[1],
            //     "cap_payload_DE" => $cap_DE[2],
            //     "url_lokal" => "coverdata/gagal/_egerek.png",
            //     "url_global" => "https://inkscape.org/id/~V1Oleg/%E2%98%85travelers",
            // ]);
            
            $cap_RDE = $this->kapasitas_RDE(storage_path()."\app\public\coverdata\cowb.png");
            $cap_DE = $this->kapasitas_DE(storage_path()."\app\public\coverdata\cowb.png");
            CoverImage::create([
                "namagambar" => "Travelers",
                "slug"=> "travelers",
                "pencipta" => "Олег Машков",
                "lisensi" => "Public Domain",
                "cap_all_RDE" => $cap_RDE[0],
                "cap_locmap_RDE" => $cap_RDE[1],
                "cap_payload_RDE" => $cap_RDE[2],
                "cap_all_DE" => $cap_DE[0],
                "cap_locmap_DE" => $cap_DE[1],
                "cap_payload_DE" => $cap_DE[2],
                "url_lokal" => "coverdata/cowb.png",
                "url_global" => "https://inkscape.org/id/~V1Oleg/%E2%98%85travelers",
            ]);
            
            $cap_RDE = $this->kapasitas_RDE(storage_path()."\app\public\coverdata\_ngarai.png");
            $cap_DE = $this->kapasitas_DE(storage_path()."\app\public\coverdata\_ngarai.png");
            CoverImage::create([
                "namagambar" => "Ngarai Sianok",
                "slug"=> "ngarai-sianok",
                "pencipta" => "Fauzan Syukri",
                "lisensi" => "CC-BY-SA",
                "cap_all_RDE" => $cap_RDE[0],
                "cap_locmap_RDE" => $cap_RDE[1],
                "cap_payload_RDE" => $cap_RDE[2],
                "cap_all_DE" => $cap_DE[0],
                "cap_locmap_DE" => $cap_DE[1],
                "cap_payload_DE" => $cap_DE[2],
                "url_lokal" => "coverdata/_ngarai.png",
                "url_global" => "https://inkscape.org/id/~ozant/%E2%98%85ngarai-sianok",
            ]);
            
            $cap_RDE = $this->kapasitas_RDE(storage_path()."\app\public\coverdata\_redcup.png");
            $cap_DE = $this->kapasitas_DE(storage_path()."\app\public\coverdata\_redcup.png");
            CoverImage::create([
                "namagambar" => "Red Cup",
                "slug"=> "red-cup",
                "pencipta" => "unknown",
                "lisensi" => "Public Domain",
                "cap_all_RDE" => $cap_RDE[0],
                "cap_locmap_RDE" => $cap_RDE[1],
                "cap_payload_RDE" => $cap_RDE[2],
                "cap_all_DE" => $cap_DE[0],
                "cap_locmap_DE" => $cap_DE[1],
                "cap_payload_DE" => $cap_DE[2],
                "url_lokal" => "coverdata/_redcup.png",
                "url_global" => "https://inkscape.org/id/~theeagleowl/%E2%98%85red-cup",
            ]);
            
            $cap_RDE = $this->kapasitas_RDE(storage_path()."\app\public\coverdata\_tech.png");
            $cap_DE = $this->kapasitas_DE(storage_path()."\app\public\coverdata\_tech.png");
            CoverImage::create([
                "namagambar" => "Next Inkscape",
                "slug"=> "next-inkscape",
                "pencipta" => "Muhammad Farlly",
                "lisensi" => "CC-BY-SA",
                "cap_all_RDE" => $cap_RDE[0],
                "cap_locmap_RDE" => $cap_RDE[1],
                "cap_payload_RDE" => $cap_RDE[2],
                "cap_all_DE" => $cap_DE[0],
                "cap_locmap_DE" => $cap_DE[1],
                "cap_payload_DE" => $cap_DE[2],
                "url_lokal" => "coverdata/_tech.png",
                "url_global" => "https://inkscape.org/id/~mfarlly/%E2%98%85next-inkscape+1",
            ]);
            
            // $cap_RDE = $this->kapasitas_RDE(storage_path()."\app\public\coverdata\gagal\_fox.png");
            // $cap_DE = $this->kapasitas_DE(storage_path()."\app\public\coverdata\gagal\_fox.png");
            // CoverImage::create([
            //     "namagambar" => "Fox & Drag Bugs",
            //     "slug"=> "fox-drag-bugs",
            //     "pencipta" => "Олег Машков",
            //     "lisensi" => "Public Domain",
            //     "cap_all_RDE" => $cap_RDE[0],
            //     "cap_locmap_RDE" => $cap_RDE[1],
            //     "cap_payload_RDE" => $cap_RDE[2],
            //     "cap_all_DE" => $cap_DE[0],
            //     "cap_locmap_DE" => $cap_DE[1],
            //     "cap_payload_DE" => $cap_DE[2],
            //     "url_lokal" => "coverdata/gagal/_egerek.png",
            //     "url_global" => "https://inkscape.org/id/~V1Oleg/%E2%98%85travelers",
            // ]);
            
            // $cap_RDE = $this->kapasitas_RDE(storage_path()."\app\public\coverdata\gagal\diablada.png");
            // $cap_DE = $this->kapasitas_DE(storage_path()."\app\public\coverdata\gagal\diablada.png");
            // CoverImage::create([
            //     "namagambar" => "La Diablada",
            //     "slug"=> "la-diablada",
            //     "pencipta" => "Roger Condo Ochoa",
            //     "lisensi" => "CC-BY-SA",
            //     "cap_all_RDE" => $cap_RDE[0],
            //     "cap_locmap_RDE" => $cap_RDE[1],
            //     "cap_payload_RDE" => $cap_RDE[2],
            //     "cap_all_DE" => $cap_DE[0],
            //     "cap_locmap_DE" => $cap_DE[1],
            //     "cap_payload_DE" => $cap_DE[2],
            //     "url_lokal" => "coverdata/gagal/diablada.png",
            //     "url_global" => "https://inkscape.org/id/~roger.rognu/%E2%98%85about-screen-10-la-diablada+1",
            // ]);
            
            $cap_RDE = $this->kapasitas_RDE(storage_path()."\app\public\coverdata\bambu.png");
            $cap_DE = $this->kapasitas_DE(storage_path()."\app\public\coverdata\bambu.png");
            CoverImage::create([
                "namagambar" => "Inkscape Bamboo",
                "slug"=> "inkscape-bamboo",
                "pencipta" => "Carolinacosta",
                "lisensi" => "CC-BY-SA",
                "cap_all_RDE" => $cap_RDE[0],
                "cap_locmap_RDE" => $cap_RDE[1],
                "cap_payload_RDE" => $cap_RDE[2],
                "cap_all_DE" => $cap_DE[0],
                "cap_locmap_DE" => $cap_DE[1],
                "cap_payload_DE" => $cap_DE[2],
                "url_lokal" => "coverdata/bambu.png",
                "url_global" => "https://inkscape.org/id/~carolinacosta/%E2%98%85inkscape-bamboo",
            ]);
            
            $cap_RDE = $this->kapasitas_RDE(storage_path()."\app\public\coverdata\dragon.png");
            $cap_DE = $this->kapasitas_DE(storage_path()."\app\public\coverdata\dragon.png");
            CoverImage::create([
                "namagambar" => "Inkscape Funtastic Dragon",
                "slug"=> "inkscape-funtastic-dragon",
                "pencipta" => "Muhammad Farlly",
                "lisensi" => "CC-BY-SA",
                "cap_all_RDE" => $cap_RDE[0],
                "cap_locmap_RDE" => $cap_RDE[1],
                "cap_payload_RDE" => $cap_RDE[2],
                "cap_all_DE" => $cap_DE[0],
                "cap_locmap_DE" => $cap_DE[1],
                "cap_payload_DE" => $cap_DE[2],
                "url_lokal" => "coverdata/dragon.png",
                "url_global" => "https://inkscape.org/id/~mfarlly/%E2%98%85inkscape-funtastic-dragon-i-muhamad-farlly",
            ]);
            
            // $cap_RDE = $this->kapasitas_RDE(storage_path()."\app\public\coverdata\gagal\bezierman.png");
            // $cap_DE = $this->kapasitas_DE(storage_path()."\app\public\coverdata\gagal\bezierman.png");
            // CoverImage::create([
            //     "namagambar" => "Bezierman",
            //     "slug"=> "bezierman",
            //     "pencipta" => "Олег Машков",
            //     "lisensi" => "Public Domain",
            //     "cap_all_RDE" => $cap_RDE[0],
            //     "cap_locmap_RDE" => $cap_RDE[1],
            //     "cap_payload_RDE" => $cap_RDE[2],
            //     "cap_all_DE" => $cap_DE[0],
            //     "cap_locmap_DE" => $cap_DE[1],
            //     "cap_payload_DE" => $cap_DE[2],
            //     "url_lokal" => "coverdata/gagal/_egerek.png",
            //     "url_global" => "https://inkscape.org/id/~V1Oleg/%E2%98%85travelers",
            // ]);
            
        }
        
        public function kapasitas_RDE($url_lokal){
            $T = 0;
            global $P;
            $img = imagecreatefrompng($url_lokal);
            $width = imagesx($img);
            $height = imagesy($img);
            $coverdata = $this->getpixelimage($height, $width, $img);
            $h = $this->get_h($height, $width, $coverdata);
            $l = $this->get_l($height, $width, $coverdata);
            $h_reduksi = $this->get_h_reduksi($h);     
            $location_map_reduksi = $this->get_location_map_reduksi($h, $h_reduksi);
            do{
                global $bitstream, $original_set;
                $original_set = $this->get_original_set($h_reduksi, $l, $T);
                global $capacity;
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
                        break;
                    }
                }
                $T+=51;
            }while (strlen($bitstream) > $capacity);
            
            $all_cap = $capacity;
            $cap_locmap = strlen($bitstream);
            $cap_payload = floor(($capacity - strlen($bitstream))/8);
            
            $return_RDE = array($all_cap, $cap_locmap, $cap_payload);
            return $return_RDE;
        }
        
        public function kapasitas_DE($url_lokal){
            $T = 0;
            global $P;
            $img = imagecreatefrompng($url_lokal);
            $width = imagesx($img);
            $height = imagesy($img);
            $coverdata = $this->getpixelimage($height, $width, $img);
            $h = $this->get_h($height, $width, $coverdata);
            $l = $this->get_l($height, $width, $coverdata);
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
            $all_cap = $capacity;
            $cap_locmap = strlen($bitstream);
            $cap_payload = floor(($capacity - strlen($bitstream))/8);
            
            $return_DE = array($all_cap, $cap_locmap, $cap_payload);
            return $return_DE;
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
                        $h_reduksi[$i][$j] = $h[$i][$j] - pow(2, floor(log10($h[$i][$j])/log10(2)) - 1);
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
        
    }