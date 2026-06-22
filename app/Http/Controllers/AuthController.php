<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan halaman form login
    public function index()
    {
        return view('auth.login');
    }

    // Memproses data login (Validasi & Pengecekan Session)
    public function authenticate(Request $request)
    {
        // 1. Validasi inputan form
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // 2. Cek kredensial dengan Auth Laravel
        if (Auth::attempt($credentials)) {
            // Jika berhasil, buat session baru untuk keamanan
            $request->session()->regenerate();

            // Arahkan ke halaman admin (dashboard)
            return redirect()->intended('/admin/dashboard');
        }

        // 3. Jika gagal, kembalikan ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'Kredensial yang diberikan tidak cocok dengan data kami.',
        ])->onlyInput('email');
    }

    // Memproses logout
    public function logout(Request $request)
    {
        Auth::logout();

        // Hapus session agar tidak bisa di-back
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}   