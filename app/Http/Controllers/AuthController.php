<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // Tampilkan halaman Sign In
    public function showSignin()
    {
        return view('signin');
    }

    // Proses Sign In
    public function processSignin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('profile')->with('success', 'Sign in successful!');
        }

        return back()->with('error', 'Invalid credentials');
    }

    // Tampilkan halaman Sign Up
    public function showSignup()
    {
        return view('signup');
    }

    // Proses Sign Up
    public function processSignup(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'description' => 'nullable|string',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'description' => $request->description,
        ]);

        return redirect()->route('signin')->with('success', 'Account created successfully!');
    }
}
