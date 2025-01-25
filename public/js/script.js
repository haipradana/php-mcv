$(function(){

    // $('.tombolTambahData').on('click', function(){
    //     $('#formModalLabel').html('Tambah Data Mahasiswa');
    //     $('.modal-footer button[type=submit]').html('Tambah Data');
    //     $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/tambah');
    //             // Reset form fields
    //     $('#nama').val('');
    //     $('#nim').val('');
    //     $('#email').val('');
    //     $('#prodi').val('');
    //     $('#id').val('');
    // });

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $(".modal-body form").attr("action", `${baseurl}/mahasiswa/tambah`);
        $('#nama').val('');
        $('#nrp').val('');
        $('#email').val('');
        $('#jurusan').val('');
        $('#id').val('');
    });

    $('.tampilModalEdit').on('click', function(){
        
        $('#formModalLabel').html('Edit Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/edit');


        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/getedit',
            data: {id : id}, //id kiri prodi data yg dkrinmkan, yg knana isi datanya
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#email').val(data.email);
                $('#prodi').val(data.prodi);
                $('#id').val(data.id);
            }
        });

    });

});