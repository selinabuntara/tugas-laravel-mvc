<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view('form');
    }
    public function welcome(request $request){
        $nama_depan=$request["first_name"];
        $nama_belakang=$request["last_name"];
        return view('welcome', ["nama_dpn"=>$nama_depan, "nama_blkg"=>$nama_belakang]);
    }
}
