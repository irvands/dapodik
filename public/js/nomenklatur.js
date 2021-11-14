$('body').on('click', '#viewnomenklatur', function (event) {
    $('#modalviewnomenklatur').appendTo('body');
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
    
    document.getElementById("spnslink").href = "../Dokumen/Nomenklatur/Surat Perubahan Nama Sekolah/"+spnssekolah; 
    document.getElementById("silink").href = "../Dokumen/Nomenklatur//Surat Ijin Operasional/"+sisekolah; 
    document.getElementById("skklink").href = "../Dokumen/Nomenklatur/Surat Keterangan KEMENKUMHAM/"+skksekolah;
    document.getElementById("spclink").href = "../Dokumen/Nomenklatur/Surat Pengantar Cabang Dinas/"+spcsekolah; 
    document.getElementById("spslink").href = "../Dokumen/Nomenklatur/Surat Permohanan Sekolah/"+spssekolah; 

});

$('body').on('click', '#destroynomenklatur', function (event) {
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

