$('body').on('click', '#viewcus', function (event) {
            $('#modalviewcustomer').appendTo('body');
            var namacus = $(this).data('nama');
            var jenkelcus = $(this).data('jenkel');
            var nohpcus = $(this).data('nohp');
            var alamatcus = $(this).data('alamat');
            $("#nama-customer").html(namacus);
            if (nohpcus == '') {
                $("#nohp-customer").html('-');
            } else {
                $("#nohp-customer").html(nohpcus);
            }

            if (jenkelcus == 'L') {
                $("#jenkel-customer").html('Laki-Laki');
            } else {
                $("#jenkel-customer").html('Perempuan');
            }

            if (alamatcus == '') {
                $("#alamat-customer").html('-');
            } else {
                $("#alamat-customer").html(alamatcus);
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
