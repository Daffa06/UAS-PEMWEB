<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form class="modal-content" method="POST" action="{{ route('event.submit') }}">
            @csrf <!-- Token CSRF untuk keamanan -->
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Tambah Jadwal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="event">Nama Kegiatan</label>
                    <input type="text" class="form-control" id="event" name="event" placeholder="Masukkan nama kegiatan" required>
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
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
