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
    if (!session('login')) {
        return redirect('/login');
    }

    return view('dashboard');
}

   public function prosesLogin(Request $request)
{
    session(['login' => true]);

    return redirect('/dashboard');
}

  public function logout()
{
    session()->forget('login');

    return redirect('/login');
}
}