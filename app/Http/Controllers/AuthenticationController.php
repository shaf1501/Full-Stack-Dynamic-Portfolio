<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthenticationController extends Controller
{
    function login(Request $request){     
        $credentials = $request->validate([
            
            'email' => 'required',
            'password' => 'required',

        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/admin/dashboard');
        }
        else {
            return redirect('/login');
        }
    }

     function registration(Request $request){     
        $credentials = $request->validate([
            
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);

        $user = User::create([
           'name' => $request->name,
           'email' => $request->email,
           'password' => bcrypt($request->password),
         ]);
        
        return redirect('/login');
     }
}