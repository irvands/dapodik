$('body').on('click', '#viewnpsn', function (event) {
    $('#modalviewnpsn').appendTo('body');
    var npsnsekolah = $(this).data('npsn');
    var namasekolah = $(this).data('nama');
    var alamatsekolah = $(this).data('alamat');
    var statussekolah = $(this).data('status');
    var spsekolah = $(this).data('sp');
    var sisekolah = $(this).data('si');
    var sklmsekolah = $(this).data('sklm');
    var sklbsekolah = $(this).data('sklb');
    var fpapansekolah = $(this).data('fpapan');
    var fseksekolah = $(this).data('fsek');
    var koordinatsekolah = $(this).data('koordinat');
    var keterangansekolah = $(this).data('keterangan');

    if (npsnsekolah == '') {
        $("#npsn-sekolah").html('-');
    } else {
        $("#npsn-sekolah").html(npsnsekolah);
    }
    $("#nama-sekolah").html(namasekolah);
    $("#alamat-sekolah").html(alamatsekolah);
    $("#status-sekolah").html(statussekolah);
    $("#koordinat-sekolah").html(koordinatsekolah);
    $("#keterangan-sekolah").html(keterangansekolah);
    
    document.getElementById("splink").href = "../Dokumen/Npsn/Surat Permohonan NPSN Baru/"+spsekolah; 
    document.getElementById("silink").href = "../Dokumen/Npsn//Surat Ijin Pendirian & Operasional/"+sisekolah; 
    document.getElementById("sklmlink").href = "../Dokumen/Npsn/Surat Keterangan Luas Tanah Milik/"+sklmsekolah;
    document.getElementById("sklblink").href = "../Dokumen/Npsn/Surat Keterangan Luas Tanah Bukan Milik/"+sklbsekolah; 
    document.getElementById("fpapanlink").href = "../Dokumen/Npsn/Foto Papan Nama Sekolah/"+fpapansekolah;
    document.getElementById("fseklink").href = "../Dokumen/Npsn/Foto Sekolah Tampak Depan/"+fseksekolah;

});

$('body').on('click', '#destroynpsn', function (event) {
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

