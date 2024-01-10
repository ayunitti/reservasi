$(function() {

    $('.tombolTambahData').on('click', function(){
        
        $('#exampleModalLabel').html('Tambah Data User');
        $('.modal-footer button[type=submit]').html('Simpan');

    });

    $('.tampilModalUbah').on('click', function(){
        
        $('#exampleModalLabel').html('Ubah Data Pengguna');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/reservasi/public/admin/ubahUser');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/reservasi/public/admin/getubahUser',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#nama').val(data.nama);
                $('#email').val(data.email);
                $('#password').val(data.password);
                $('#akses').val(data.akses);
                $('#id').val(data.id);
            }
        })

    });
});
