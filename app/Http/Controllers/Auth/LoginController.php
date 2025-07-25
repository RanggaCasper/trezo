<?php

namespace App\Http\Controllers\Auth;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return Inertia::render('Auth/Login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        try {
            if (Auth::attempt($request->only('email', 'password'))) {
                $request->session()->regenerate();
            
                $user = Auth::user();
            
                if ($user->role_id === 1) {
                    return redirect('/admin')->with('success', 'Login sebagai admin.');
                }
            
                return redirect()->route('home')->with('success', 'Login berhasil.');
            }            

            return back()->withErrors([
                'error' => 'Email atau password salah.',
            ]);
        } catch (\Exception $e) {
            return back()->withErrors([
                'error' => 'Terjadi kesalahan saat login. Silakan coba lagi nanti.',
            ]);
        }
    }
}
