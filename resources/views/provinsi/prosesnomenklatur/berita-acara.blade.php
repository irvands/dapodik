<!DOCTYPE html>
<html>

<head>
    <title>Berita Acara Pengajuan Perubahan Nomenklatur</title>
    <style type="text/css">
        table {
            border-style: double;
            border-width: 3px;
            border-color: white;
        }

        table tr .text2 {
            text-align: left;
            font-size: 13px;
        }

        table tr .text {
            text-align: left;
            font-size: 13px;
        }

        table tr td {
            font-size: 13px;
        }

        .img-l {
            display: block;
            margin-left: 0;
            margin-right: 40;
        }

        .img-r {
            display: block;
            margin-left: 0;
            margin-right: 110;
        }

        .tb-center {
            margin-left: auto;
            margin-right: auto;
        }

        .judul-surat {
            text-align: center;
        }

        .kiri-kanan {
            text-align: justify;
        }

        .ttd-p {
            text-align: left;
            margin-left: 5;
            margin-right: 60;

        }

        .ttd-k {
            text-align: right;
            margin-left: 0;
            margin-right: 110;
        }

        .ttdpemohon {
            text-align: center;
        }

    </style>
</head>

<body>

    <table class="tb-center">
        <tr>
            <td><img class="img-l" src="{{$logo}}" width="50" height="50"></td>
            <td>
                <center>
                    <font size="2"><b>UPT.TIKP DINAS PENDIDIKAN JAWA TIMUR</b> </font><br>
                    <font size="2"><b>Jl.Jagir Sidoresmo V, Wonokromo, 60224</b><br>
                        <font size="2"><b>KOTA SURABAYA</b>
                        </font><br>
                </center>
            </td>
            <td><img class="img-r" src="{{$logo}}" width="50" height="50"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td colspan="3">
                <hr>
            </td>

        </tr>
        <tr>
            <td class="judul-surat" colspan="3"><b>BERITA ACARA </b>
                <br><b>VERIFIKASI DAN IDENTIFIKASI BERKAS PENGAJUAN PERUBAHAN NOMENKLATUR</br>
            </td>

        </tr>

    </table>
    <br>

    <table>
        <tr>
            <td class="kiri-kanan" colspan="3">
                <font size="2">&nbsp; &nbsp; Pada Hari <b>{{Carbon\Carbon::parse($nomenklatur->created_at)
        ->translatedFormat('l, d F Y')}}</b> telah dilakukan proses verifikasi dan identifikasi berkas pengajuan Perubahan Nomenklatur
                    dengan data sebagai berikut :
                </font>
            </td>
            <td></td>
            <td></td>
        </tr>
    </table>

        <table>
        <tr>
            <td>
                <br>
            </td>
        </tr>
        <tr class="text2">
            <td width="180">Nama Sekolah</td>
            <td width="400"> : <b>{{$nomenklatur->sekolah->nama_sekolah}}</b></td>
        </tr>
        <tr>
            <td width="180">Alamat</td>
            <td width="400"> : {{$nomenklatur->sekolah->alamat}}</td>
        </tr>

        <tr>
            <td width="180">Nomenklatur Baru</td>
            <td width="400"> : {{$nomenklatur->sekolah->nomenklatur_baru}}</td>
        </tr>
        </table>

        <table>
        <tr>
            <td>
                <br>
            </td>
        </tr>
        <tr>
            <td class="kiri-kanan" colspan="3">
                <font size="2">&nbsp; &nbsp; Berdasarkan hasil verifikasi dan identifikasi berkas sesuai dengan ajuan maka berkas tersebut
                dinyatakan telah memenuhi syarat dan sesuai dengan ketentuan yang berlaku. Demikian berita acara ini dibuat dan ditandatangani untuk dapat dipergunakan sebagai
                dasar persetujuan pengajuan Perubahan Nomenklatur.
                </font>
            </td>
            <td></td>
            <td></td>
        </tr>
    </table>

        <table>
        <tr>
            <td>
                <br>
                <br>
            </td>
        </tr>
        <tr>
            <td>
                <br>
                <br>
            </td>
        </tr>
        <tr>
            <td>
                <br>
                <br>
            </td>
        </tr>
        <tr>
            <td>
                <br>
                <br>
            </td>
        </tr>
        <tr>
            <td class="ttdpemohon">

            </td>

            <td class="ttdpemohon">
            <b>Surabaya, {{Carbon\Carbon::parse($nomenklatur->created_at)
        ->translatedFormat('d F Y')}}</b><br>
            Megetahui<br>
                Petugas Verifikasi
                <p>
                <br>
                <br>
                <p>{{$nomenklatur->petugas_validasi}}
            </td>

            <td class="ttdpemohon">

            </td>
        </tr>
    </table>
    <br>
        
        
        
    
</body>

</html>
