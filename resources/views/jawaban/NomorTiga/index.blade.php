<table class="table table-schedule">
    <thead>
        <tr>
            <th>Nama Kegiatan</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Selesai</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($events as $event)
        <tr>
            <td>{{ $event->name }}</td>
            <td>{{ $event->start }}</td>
            <td>{{ $event->end }}</td>
            <td>
                <button class="btn btn-primary btn-edit" data-id="{{ $event->id }}">Edit</button>
                <form method="POST" action="{{ route('event.delete') }}" class="d-inline">
                    @csrf
                    <input type="hidden" name="id" value="{{ $event->id }}">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Gunakan tag form dibawah ini untuk submit data jadwal yang akan diupdate. Gunakan contoh modal yang sudah dibuat pada nomor 1 dan 2 sebagai referensi -->
<!-- <form class="modal-content" method="POST" action="{{ route('event.update') }}"> </form> -->
