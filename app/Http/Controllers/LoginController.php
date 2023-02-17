<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function login(){
        if( Auth::check() ) {
            return redirect('/');
        }
        else {
            return view('loginregis.login');
        }
    }

    public function loginAction(Request $request){
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if ( Auth::attempt($credentials) ) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        Alert::error('Error Login', 'Email Atau Password Salah');
        return redirect('/login');
    }

    public function logoutAction() {
        Auth::logout();
        return redirect('/login');
    }
}
