$('body').on('click', '#viewusername', function (event) {
    $('#modalviewusername').appendTo('body');
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
    
    document.getElementById("spulink").href = "../Dokumen/username/Surat Permohonan Username/"+spusekolah; 
    document.getElementById("stolink").href = "../Dokumen/username//Surat Tugas Operator/"+stosekolah; 

});

$('body').on('click', '#destroyusername', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Yakin ingin menghapus permintaan?',
        text: 'Permintaan yang dihapus tidak bisa dikembalikan!',
        buttons: ["Batal", "Yakin!"],
    }).then(function (value) {
        if (value) {
            window.location.href = url;
        }
    });
});