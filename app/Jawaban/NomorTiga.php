<?php

namespace App\Jawaban;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Event;

class NomorTiga {

    public function getData() {
        // Mengambil semua data jadwal milik user yang sedang login
        $data = Event::where('user_id', Auth::id())->get();
        return $data;
    }

    public function getSelectedData(Request $request) {
        // Validasi ID jadwal
        $request->validate(['id' => 'required|integer|exists:events,id']);

        // Mengambil data jadwal berdasarkan ID
        $data = Event::where('id', $request->id)
            ->where('user_id', Auth::id())
            ->first();

        return response()->json($data);
    }

    public function update(Request $request) {
        // Validasi data input
        $request->validate([
            'id' => 'required|integer|exists:events,id',
            'name' => 'required|string|max:255',
            'start' => 'required|date',
            'end' => 'required|date|after_or_equal:start',
        ]);

        // Mengupdate data jadwal
        Event::where('id', $request->id)
            ->where('user_id', Auth::id())
            ->update([
                'name' => $request->event,
                'start' => $request->start,
                'end' => $request->end,
            ]);

        return redirect()->route('event.home')->with('success', 'Jadwal berhasil diperbarui.');
    }

    public function delete(Request $request) {
        // Validasi ID jadwal
        $request->validate(['id' => 'required|integer|exists:events,id']);

        // Menghapus data jadwal
        Event::where('id', $request->id)
            ->where('user_id', Auth::id())
            ->delete();

        return redirect()->route('event.home')->with('success', 'Jadwal berhasil dihapus.');
    }
}

?>