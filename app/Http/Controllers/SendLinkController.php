<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendLinktoEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class SendLinkController extends Controller
{
    //
    
    public function SendLink(Request $request){
        $validated_data = $request->validate([
            "email" => "required|email",
            "password" => "required",
            "tanggallahir" => "required|date"
        ]);
        $user = DB::table('users')->where('email', $request->email)->first();
        if ($user != null && Hash::check($request->password, $user->password) && $request->tanggallahir == $user->tanggallahir) {
            Mail::to($request->email)->send(new SendLinktoEmail($user->slug_coverimage));
            return back()->with('sendlink_message','Link pembaharuan stego image telah terkirim ke email anda');
        } else{
            return back()->with('sendlink_message','Masukan anda tidak sesuai dengan data yang sebenarnya');
        }
        // if(Auth::attempt($validated_data)){
            //     $request->session()->regenerate();
            //     Mail::to("pengirim@gmail.com")->send(new SendLinktoEmail());
            //     return back();
            // }
            // Mail::to("pengirim@gmail.com")->send(new SendLinktoEmail());
            // return "Email Telah dikirim";
            
        }
    }
    