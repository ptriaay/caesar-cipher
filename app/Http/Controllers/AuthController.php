<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function prosesLogin()
    {
        return redirect('/dashboard');
    }

    public function logout()
    {
        return redirect('/login');
    }
}