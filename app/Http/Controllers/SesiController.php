<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index(){
        return view('login');
    }

    function login(Request $request) {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email wajib diisi',
            'password.required'=>' wajib diisi',
        ]);

        $infologin =[
            'email'=>$request->email,
            'password'=>$request->password,       
        ];

        if(Auth::attempt($infologin)){
           if(Auth::user()->role =='admin'){
            return redirect('admin/admindashboard');
           }else if(Auth::user()->role =='customer'){
            return redirect('customer/reservation');
           }
        }else{
            return redirect('')->withErrors('Username dan Password yang dimasukkan tidak sesuai')->withInput();
        };
    }
    function logout(){
        Auth::logout();
        return redirect('');
    }
}
