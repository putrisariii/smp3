<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Login () {
        return view ('login.login');
    }

    public function LoginProses (Request $request) {
        $cred = $request->validate(
            [
               'email'=>['required'],
               'password'=>['required'], 
            ]
        );
        // Check credentials
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Login successful
            return response()->json(['message' => 'Selamat Datang!']);
        } else {
            // Login failed
            return response()->json(['error' => 'Invalid credentials'], 401);
        }
    }

    public function Logout() {
        Auth::logout();

        return redirect()->route('login');
       
    }
}
