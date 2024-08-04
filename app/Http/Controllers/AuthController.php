<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

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
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }

    public function registerProccess(Request $request){
        $validated = $request->validate([
            'username' => 'required|unique:users|max:255',
            'password' => 'required|max:255',
            'phone' => 'max:255',
            'address' => 'required',
        ]);

        $request->password = Hash::make($request->password);
        $user = User::create($request->all());

        Session::flash('status', 'success');
        Session::flash('message', 'Register Succest, Wait Admin to Approval');
        return redirect('register');
    }
}
