<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('home.login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email','password'))){
            return redirect('/home');
        }else{
            return redirect('/login')->with('error','Maaf Username Dan Password Anda Masukan Salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        return view('home.login');
    }
}
