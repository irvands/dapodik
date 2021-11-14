$('body').on('click', '#viewkat', function (event) {
    $('#modalviewkategori').appendTo('body');
    var namakat = $(this).data('nama');
    $("#nama-kategori").html(namakat);
  
});

$('body').on('click', '#destroykat', function (event) {
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

$('body').on('click', '#editkat', function (event) {
    $('#modaleditkategori').appendTo('body');
    var idsup = $(this).data('id');
    var namakat = $(this).data('nama');
    $("#id").val(idsup);
    $("#nama").val(namakat);
});
