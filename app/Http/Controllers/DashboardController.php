<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    //
    public function index(){
        $download = true;
        $email = Auth()->user()->email;
        $updated_at = Auth()->user()->updated_at;
        $now = date("Y-m-d h:i:s");
        $diff = floor((strtotime($now) - strtotime($updated_at))/60);
        if (($diff>30 && file_exists('storage/'.$email)) || !file_exists('storage/'.$email.'/'.$email.'RDE.png')) {
            Storage::deleteDirectory($email);
            $download = false;
        }elseif(!file_exists('storage/'.$email)){
            $download = false;
        }elseif($diff < 30){
            $download = true;
        }
        return view('dashboard.main', [
            "download" => $download,
            "tittle_page" => "Dashboard | ".Auth()->user()->namalengkap
        ]);
    }

    public function download(Request $request){
        // return var_dump($request->url_coverimage);
        // return Storage::download($request->url_coverimage);
        // echo($click);
        return response()->download('Storage/' . $request->url_coverimage)->deleteFileAfterSend(true);
        // ignore_user_abort(true);
        // unlink('storage/'.$request->url_coverimage);

    }
}
