<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function register(){
        if ( Auth::check() ) {
            return redirect('/');
        }
        else {
            return view('loginregis.register');
        }
    }
    public function registerAction(Request $request) {
        $req = $request->all();
        $req['password'] = Hash::make($request->password);

        User::create($req);
        Alert::success('Success', 'Berhasil membuat akun');
        return redirect('/login');
    }
}
