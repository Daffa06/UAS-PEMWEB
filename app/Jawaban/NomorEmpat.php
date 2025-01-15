<?php

namespace App\Jawaban;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Event;

class NomorEmpat {

    public function getJson() {
        $userId = Auth::id();

        // Ambil semua data jadwal dari tabel Event
        $data = Event::all()->map(function ($event) use ($userId) {
            return [
                'name' => $event->event,
                'start' => $event->start,
                'end' => $event->end,
                'color' => $event->user_id == $userId ? 'blue' : 'gray',
            ];
        });
        return response()->json($data);
    }
}

?>