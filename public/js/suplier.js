$('body').on('click', '#viewsup', function (event) {
    $('#modalviewsuplier').appendTo('body');
    var namasup = $(this).data('nama');
    var nohpsup = $(this).data('nohp');
    var alamatsup = $(this).data('alamat');
    var deskripsisup = $(this).data('deskripsi');
    $("#nama-suplier").html(namasup);
    $("#nohp-suplier").html(nohpsup);
    $("#alamat-suplier").html(alamatsup);
    if (deskripsisup == '') {
        $("#deskripsi-suplier").html('-');
    } else {
        $("#deskripsi-suplier").html(deskripsisup);
    }

});

$('body').on('click', '#destroysup', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Apakah Yakin Untuk Mengahpus?',
        text: 'Data akan dihapus secara permanen!',
        icon: 'warning',
        buttons: ["Batal", "Yakin!"],
    }).then(function (value) {
        if (value) {
            window.location.href = url;
        }
    });
});

$('body').on('click', '#editsup', function (event) {
    $('#modaleditsuplier').appendTo('body');
    var idsup = $(this).data('id');
    var namasup = $(this).data('nama');
    var nohpsup = $(this).data('nohp');
    var alamatsup = $(this).data('alamat');
    var deskripsisup = $(this).data('deskripsi');
    $("#id").val(idsup);
    $("#nama").val(namasup);
    $("#nohp").val(nohpsup);
    $("#alamat").val(alamatsup);
    $("#deskripsi").val(deskripsisup);
    if (deskripsisup == '') {
        $("#deskripsi").val('');
    } else {
        $("#deskripsi").val(deskripsisup);
    }

});
