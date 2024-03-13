<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class authenticateLogin extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = request()->only('username', 'password');
        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();
            return redirect('registro');
        } else {
            return redirect('/');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
