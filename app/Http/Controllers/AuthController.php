<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Menampilkan form login
     */
    public function showLoginForm()
    {
        return view('login');
    }

    /**
     * Proses login
     */
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|min:3',
        ]);

        // Simpan username ke session
        $request->session()->put('username', $request->username);

        // Redirect ke dashboard
        return redirect('/');
    }

    /**
     * Menampilkan halaman dashboard
     */
    public function dashboard(Request $request)
    {
        // Ambil username dari session
        $username = $request->session()->get('username');
        
        return view('dashboard', ['username' => $username]);
    }

    /**
     * Logout user
     */
    public function logout(Request $request)
    {
        // Hapus semua session
        $request->session()->flush();

        // Redirect ke halaman login
        return redirect('/login');
    }
}
