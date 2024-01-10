$(function() {

    $('.tombolTambahData').on('click', function(){
        
        $('#exampleModalLabel').html('Tambah Daftar Paket');
        $('.modal-footer button[type=submit]').html('Simpan');

    });

    $('.tampilModalUbah').on('click', function(){
        
        $('#exampleModalLabel').html('Ubah Data Paket');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/reservasi/public/admin/ubahPaket');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/reservasi/public/admin/getubahPaket',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#pax').val(data.pax);
                $('#jumlah').val(data.jumlah);
                $('#harga_weekday').val(data.harga_weekday);
                $('#harga_weekend').val(data.harga_weekend);
                $('#jam_buka').val(data.jam_buka);
                $('#jam_tutup').val(data.jam_tutup);
                $('#deskripsi').val(data.deskripsi);
                $('#id').val(data.id);
            }
        })

    });
});