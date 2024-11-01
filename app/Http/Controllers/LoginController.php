<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Mencoba untuk login menggunakan email dan password
        if (!Auth::attempt($request->only('email', 'password'))) {
            return redirect()->back()->withErrors([
                'message' => 'Email atau Password Anda salah'
            ]);
        }

        return redirect('/homelogin')->with('success', 'Selamat datang kembali ' . Auth::user()->name . '!');
    }
}
