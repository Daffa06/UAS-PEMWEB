<script type="text/javascript">
	
	$('.table-schedule').DataTable({
        language: {
            paginate: {
                next: '<i class="bi bi-arrow-right"></i>',
                previous: '<i class="bi bi-arrow-left"></i>',
            },
            emptyTable: "Data tidak ditemukan",
        },
    });

    // Trigger untuk tombol edit
    $(document).on('click', '.btn-edit', function () {
        const id = $(this).data('id');
        
        // Panggil API untuk mendapatkan data jadwal berdasarkan ID
        $.ajax({
            url: "{{ route('event.get-selected-data') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                id: id,
            },
            success: function (data) {
                // Isi form modal dengan data yang diterima dari API
				$('#editModal #id').val(data.id);
                $('#editModal #event').val(data.name);
                $('#editModal #start').val(data.start);
                $('#editModal #end').val(data.end);

                // Tampilkan modal
                $('#editModal').modal('show');
            },
            error: function (err) {
                alert("Gagal mengambil data jadwal.");
            },
        });
    });

	// Tuliskan trigger saat menekan tombol edit
	// Di dalam trigger tersebut, tambahkan API untuk meload data 1 jadwal

</script>