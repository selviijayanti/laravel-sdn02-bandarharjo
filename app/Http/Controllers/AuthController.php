<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['message' => 'User registered successfully'], 201);
    }

    // Login User
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Login successful',
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    // Logout User
    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json(['message' => 'Logged out successfully']);
    }


    // public function loginWeb(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
    //         return redirect()->intended('/admin/dashboard');
    //     }



    //     return back()->with('error', 'Email atau password salah.');
    // }
    // public function loginWeb(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
    //         session(['username' => Auth::user()->name]);

    //         return redirect()->intended('/admin/dashboard');
    //     }

    //     return back()->with('error', 'Email atau password salah.');
    // }


    public function loginWeb(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            session(['username' => Auth::user()->name]);

            return redirect()->intended('/admin/dashboard')
                ->with('success', 'Halo, ' . Auth::user()->name . '! Selamat datang di dashboard.');
        }

        return back()->with('error', 'Email atau password salah.');
    }




    public function showLoginForm()
    {
        return view('layouts.login'); // Ganti 'auth.login' sesuai nama file view login lo
    }
    public function showRegisterForm()
    {
        return view('layouts.register'); // Ganti 'auth.login' sesuai nama file view login lo
    }

    public function registerWeb(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login.form')->with('success', 'Akun berhasil dibuat. Silakan login!');
    }


    public function adminLogout(Request $request)
    {
        Auth::logout(); // keluarin user dari auth

        $request->session()->invalidate(); // hapus semua session
        $request->session()->regenerateToken(); // refresh CSRF token

        return redirect('/'); // buang ke halaman login/home
    }



}
