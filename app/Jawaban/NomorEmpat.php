<?php

namespace App\Jawaban;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Event;

class NomorEmpat {

    public function getJson() {
        // Ambil ID pengguna yang sedang login
        $userId = Auth::id();

        // Ambil semua data jadwal dari tabel Event
        $data = Event::all()->map(function ($event) use ($userId) {
            return [
                'name' => $event->event, // Nama event
                'start' => $event->start, // Tanggal mulai
                'end' => $event->end,     // Tanggal selesai
                'color' => $event->user_id == $userId ? 'blue' : 'gray', // Warna sesuai pembuat jadwal
            ];
        });

        // Return data dalam format JSON
        return response()->json($data);
    }
}

?>