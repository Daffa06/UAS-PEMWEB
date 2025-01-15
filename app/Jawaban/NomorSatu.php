<?php

namespace App\Jawaban;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NomorSatu {

    public function auth(Request $request) {

        // Validasi input email/username dan password
        $credentials = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            // Jika berhasil login
            $request->session()->regenerate();
            return redirect()->route('event.home')->with('success', 'Login successful!');
        }

        // Jika gagal login
        return back()->withErrors([
            'email' => 'Invalid credentials provided.',
        ])->withInput($request->except('password'));
    }

    public function logout(Request $request) {
        Auth::logout();

        // Menghapus semua sesi
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('event.home')->with('success', 'You have been logged out.');
    }
}

?>