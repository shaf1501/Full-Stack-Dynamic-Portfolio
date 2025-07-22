<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    function login(Request $request){     
        $credentials = $request->validate([
            
            'email' => 'required',
            'password' => 'required',

        ]);

        if (Auth::attempt($credentials)) {
            return view('admin.dashboard');
        }
        else {
            echo "Login failed!";
        }
    }
}
