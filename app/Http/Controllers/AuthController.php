<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    return view('daftar_pengguna');
}



public function prosesLogin(Request $request)
{
    $email = $request->email;
    $password = $request->password;

    $user = DB::table('pengguna')
        ->where('email', $email)
        ->where('password', $password)
        ->first();

    if ($user) {
        session(['login' => true]);
        return redirect('/daftar_pengguna');
    } else {
        return redirect('/login')->with('error', 'Email atau password salah');
    }
}

public function daftarPengguna()
{
    if (!session('login')) {
    return redirect('/login');
}
    $users = DB::table('pengguna')->get();

    return view('daftar_pengguna', compact('users'));
}

  public function logout()
{
    session()->forget('login');

    return redirect('/login');
}
}