<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function pengaturan() {
        $id = Auth::user()->id;
        $user = User::findOrFail($id);

    }
}
