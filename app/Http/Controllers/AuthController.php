<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
    public function authenticating(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        
        if (Auth::attempt($credentials)) {
            //cek status user = active
            if(Auth::user()->status != 'active'){
                Session::flash('status', 'failed');
                Session::flash('message', 'your account is not active, please contact admin');
                return redirect('/login');
            }

            $request->session()->regenerate();
            if(Auth::user()->role_id == 1){
                return redirect('/admin/dashboard');
            }
            if(Auth::user()->role_id == 2){
                return redirect('/client/dashboard');
            }
            
            //return redirect()->intended('dashboard');
        }
        Session::flash('status', 'failed');
        Session::flash('message', 'login invalid');
        return redirect('/login');
    }
}
