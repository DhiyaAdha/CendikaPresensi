<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function halamanlogin(){
        return view('Login.login-web');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
        
    }


