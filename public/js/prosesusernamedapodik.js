$('body').on('click', '#viewprosesusername', function (event) {
    $('#modalviewprosesusername').appendTo('body');
    var npsnsekolah = $(this).data('npsn');
    var namasekolah = $(this).data('nama');
    var alamatsekolah = $(this).data('alamat');
    var statussekolah = $(this).data('status');
    var spusekolah = $(this).data('spu');
    var stosekolah = $(this).data('sto');
    var keterangansekolah = $(this).data('keterangan');

    if (npsnsekolah == '') {
        $("#npsn-sekolah").html('-');
    } else {
        $("#npsn-sekolah").html(npsnsekolah);
    }
    $("#nama-sekolah").html(namasekolah);
    $("#alamat-sekolah").html(alamatsekolah);
    $("#status-sekolah").html(statussekolah);
    $("#keterangan-sekolah").html(keterangansekolah);
    
    document.getElementById("spulink").href = "../../Dokumen/username/Surat Permohonan Username/"+spusekolah; 
    document.getElementById("stolink").href = "../../Dokumen/username//Surat Tugas Operator/"+stosekolah; 

});


// ================ ini js saat akun admin 2 meneruskan permintaan ke akun provinsi
$('body').on('click', '#diteruskan', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Yakin ingin meneruskan permintaan?',
        text: 'Pastikan Syarat-syarat sudah dipenuhi!',
        buttons: ["Batal", "Yakin!"],
    }).then(function (value) {
        if (value) {
            window.location.href = url;
        }
    });
});

// ================ ini js saat akun admin 2 menolak permintaan
$('body').on('click', '#tolakpermintaan', function (event) {
    $('#modalketerangan').appendTo('body');
    var idsekolah = $(this).data('idsek');
    $("#id-sekolah").val(idsekolah);

});

// ================ ini js saat akun provinsi input username
$('body').on('click', '#inputusername', function (event) {
    $('#modalinputusername').appendTo('body');
    var idsekolah = $(this).data('idsek');
    $("#id-sekolah").val(idsekolah);

});





