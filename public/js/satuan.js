$('body').on('click', '#viewsat', function (event) {
    $('#modalviewsatuan').appendTo('body');
    var namasat = $(this).data('nama');
    $("#nama-satuan").html(namasat);
  
});

$('body').on('click', '#destroysat', function (event) {
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

$('body').on('click', '#edisat', function (event) {
    $('#modaleditsatuan').appendTo('body');
    var idsat = $(this).data('id');
    var namasat = $(this).data('nama');
    $("#id").val(idsat);
    $("#nama").val(namasat);
});
