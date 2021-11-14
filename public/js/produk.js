$('body').on('click', '#viewpro', function (event) {
    $('#modalviewpro').appendTo('body');
    var barcode = $(this).data('barcode');
    var namapro = $(this).data('nama');
    var kategori = $(this).data('kategori');
    var satuan = $(this).data('satuan');
    var harga = $(this).data('harga');
    var stok = $(this).data('stok');
   
    $("#barcode-produk").html(barcode);
    $("#nama-produk").html(namapro);
    $("#kategori-produk").html(kategori);
    $("#satuan-produk").html(satuan);
    $("#harga-produk").html(harga);

    if(stok == ''){
        $("#stok-produk").html(0);
    }else{
        $("#stok-produk").html(stok);
    }
    
    
});

$('body').on('click', '#destroycus', function (event) {
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

$('body').on('click', '#editcus', function (event) {
    $('#modaleditcustomer').appendTo('body');
    var idcus = $(this).data('id');
    var namacus = $(this).data('nama');
    var jenkelcus = $(this).data('jenkel');
    var nohpcus = $(this).data('nohp');
    var alamatcus = $(this).data('alamat');
    $("#id").val(idcus);
    $("#nama").val(namacus);
    if (nohpcus == '') {
        $("#nohp").val('');
    } else {
        $("#nohp").val(nohpcus);
    }

    if (jenkelcus == 'L') {
        $("#jenkel").val('L');
    } else {
        $("#jenkel").val('P');
    }

    if (alamatcus == '') {
        $("#alamat").val('-');
    } else {
        $("#alamat").val(alamatcus);
    }

});
