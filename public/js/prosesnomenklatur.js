$('body').on('click', '#viewprosesnomenklatur', function (event) {
    $('#modalviewprosesnomenklatur').appendTo('body');
    var nomenklatursekolah = $(this).data('nomenkalturbaru');
    var namasekolah = $(this).data('nama');
    var alamatsekolah = $(this).data('alamat');
    var spnssekolah = $(this).data('spns');
    var spcsekolah = $(this).data('spc');
    var sisekolah = $(this).data('si');
    var skksekolah = $(this).data('skk');
    var spssekolah = $(this).data('sps');
    var statussekolah = $(this).data('status');
    var keterangansekolah = $(this).data('keterangan');

    
    $("#nama-sekolah").html(namasekolah);
    $("#nomenklatur-sekolah").html(nomenklatursekolah);
    $("#alamat-sekolah").html(alamatsekolah);
    $("#status-sekolah").html(statussekolah);
    $("#keterangan-sekolah").html(keterangansekolah);
    
    document.getElementById("spnslink").href = "../../Dokumen/Nomenklatur/Surat Perubahan Nama Sekolah/"+spnssekolah; 
    document.getElementById("silink").href = "../../Dokumen/Nomenklatur//Surat Ijin Operasional/"+sisekolah; 
    document.getElementById("skklink").href = "../../Dokumen/Nomenklatur/Surat Keterangan KEMENKUMHAM/"+skksekolah;
    document.getElementById("spclink").href = "../../Dokumen/Nomenklatur/Surat Pengantar Cabang Dinas/"+spcsekolah; 
    document.getElementById("spslink").href = "../../Dokumen/Nomenklatur/Surat Permohanan Sekolah/"+spssekolah; 

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

$('body').on('click', '#aktivasi', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Yakin ingin mengaktifkan Nomenklatur?',
        text: 'Nomenklatur baru akan diaktifkan!',
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
