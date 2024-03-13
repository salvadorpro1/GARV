<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class authenticateLogin extends Controller
{
    public function authenticate(Request $request){
        $credentials = request()->only('username', 'password');
        if(Auth::attempt($credentials)){
        request()->session()->regenerate();
        return redirect('registro');
    }
    else{
        return redirect('/');
    }
}
}