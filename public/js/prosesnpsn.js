$('body').on('click', '#viewprosesnpsn', function (event) {
    $('#modalprosesnpsn').appendTo('body');
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
    var idsekolah = $(this).data('id');
    var keterangansekolah = $(this).data('keterangan');
    var petugasvalidasi = $(this).data('petugas');

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
    $("#petugas-validasi").html(petugasvalidasi);
    
    document.getElementById("splink").href = "../../Dokumen/Npsn/Surat Permohonan NPSN Baru/"+spsekolah; 
    document.getElementById("silink").href = "../../Dokumen/Npsn/Surat Ijin Pendirian & Operasional/"+sisekolah; 
    document.getElementById("sklmlink").href = "../../Dokumen/Npsn/Surat Keterangan Luas Tanah Milik/"+sklmsekolah;
    document.getElementById("sklblink").href = "../../Dokumen/Npsn/Surat Keterangan Luas Tanah Bukan Milik/"+sklbsekolah; 
    document.getElementById("fpapanlink").href = "../../Dokumen/Npsn/Foto Papan Nama Sekolah/"+fpapansekolah;
    document.getElementById("fseklink").href = "../../Dokumen/Npsn/Foto Sekolah Tampak Depan/"+fseksekolah;

   
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

// ================ ini js saat akun provinsi input npsn
$('body').on('click', '#inputnpsn', function (event) {
    $('#modalinputnpsn').appendTo('body');
    var idsekolah = $(this).data('idsek');
    $("#id-sekolah").val(idsekolah);

});
