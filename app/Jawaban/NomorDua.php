<?php

namespace App\Jawaban;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Event;

class NomorDua {

    public function submit(Request $request) {
        // Validasi data yang diterima dari form
        $request->validate([
            'event' => 'required|string|max:255',
            'start' => 'required|date',
            'end' => 'required|date|after_or_equal:start',
        ]);

        // Simpan data ke dalam tabel events
        Event::create([
            'user_id' => Auth::id(),
            'name' => $request->event,
            'start' => $request->start,
            'end' => $request->end,
        ]);

        // Redirect ke halaman utama
        return redirect()->route('event.home')->with('success', 'Jadwal berhasil ditambahkan.');
    }
}

?>