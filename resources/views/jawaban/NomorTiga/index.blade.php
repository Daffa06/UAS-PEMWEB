<table class="table table-schedule">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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

@include('jawaban.NomorTiga.modal')
