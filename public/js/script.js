$(function() {

    $('.tombolTambahData').on('click', function(){
        
        $('#exampleModalLabel').html('Tambah Data Reservasi');
        $('.modal-footer button[type=submit]').html('Simpan');

    });

    $('.tampilModalUbah').on('click', function(){
        
        $('#exampleModalLabel').html('Ubah Data Reservasi');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/reservasi/public/admin/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/reservasi/public/admin/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#atas_nama').val(data.atas_nama);
                $('#tanggal_reservasi').val(data.tanggal_reservasi);
                $('#total_harga').val(data.total_harga);
                $('#status_bayar').val(data.status_bayar);
                $('#id').val(data.id);
            }
        })

    });
});
