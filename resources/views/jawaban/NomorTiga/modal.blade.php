<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form class="modal-content" method="POST" action="{{ route('event.update') }}">
            @csrf
            <input type="hidden" name="id" id="id">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Jadwal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="name">Nama Kegiatan</label>
                    <input type="text" class="form-control" id="event" name="event" required>
                </div>
                <div class="form-group">
                    <label for="start">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="start" name="start" required>
                </div>
                <div class="form-group">
                    <label for="end">Tanggal Selesai</label>
                    <input type="date" class="form-control" id="end" name="end" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            </div>
        </form>
    </div>
</div>
