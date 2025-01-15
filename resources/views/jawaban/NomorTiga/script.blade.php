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
    console.log('Tombol Edit diklik');
    const id = $(this).data('id');
    console.log('ID:', id); // Debug ID yang diambil

    $.ajax({
        url: "{{ route('event.get-selected-data') }}",
        type: "GET",
        data: { id: id },
        success: function (data) {
            console.log('Data API:', data); // Debug response dari API
            $('#editModal #id').val(data.id);
            $('#editModal #event').val(data.name);
            $('#editModal #start').val(data.start);
            $('#editModal #end').val(data.end);
            $('#editModal').modal('show');
        },
        error: function (xhr) {
            console.error('Error API:', xhr.responseText); // Debug error response
            alert('Gagal mengambil data jadwal.');
        	},
    	});
	});

</script>