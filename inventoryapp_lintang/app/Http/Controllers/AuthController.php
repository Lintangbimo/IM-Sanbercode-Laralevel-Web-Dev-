<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // tampilkan halaman register
    public function formregister()
    {
        return view('auth.register');
    }

    // proses register
    public function register(Request $request)
    {
        // validasi
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // cek jumlah user
        $userCount = User::count();

        if ($userCount == 0) {
            $role = "admin";
        } else {
            $role = "staff"; 
        }

        // simpan user
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => $role
        ]);

        return redirect()->route('login');
    }
    public function formlogin()
{
    return view('auth.login');
}

public function login(Request $request)
{
    // validation
    $credentials = $request->validate([
        'email' => 'required|string|email',
        'password' => 'required',
    ]);

    // cek login
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('/');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
}
}