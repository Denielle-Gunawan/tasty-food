<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }
    function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi'
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(FacadesAuth::attempt($infologin)){
            return redirect('home');
        }else{
            return redirect('')->withErrors('Username atau password yang dimasukkan tidak sesuai')->withInput();
        }
    }
}
