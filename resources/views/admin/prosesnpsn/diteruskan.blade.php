@extends('layouts.app')

@section('header')
Permintaan NPSN(Diteruskan)
@endsection

@section('breadcrumb')
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></div>
    <div class="breadcrumb-item">Permintaan NPSN(Diteruskan)</a></div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
   
        <br>
        <div class="card">
            <div class="card-header">
                <h4>Data Permintaan NPSN(Diteruskan)</h4>
                
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>Nama Sekolah</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th>Petugas Verifikasi</th>
                                <th>Detail</th>
                            </tr>

                            @if(!$npsn->isEmpty())
                            @foreach($npsn as $key => $data)
                            <tr>
                                <td>{{$key + $npsn->firstItem()}}</td>

                                <td>{{$data->sekolah->nama_sekolah}}</td>
                                <td>{{$data->sekolah->alamat}}</td>
                                <td>
                                @if($data->sekolah->status == 'Pending')
                                <span class="dot-warning"></span> {{$data->sekolah->status}}
                                @elseif($data->sekolah->status == 'Diteruskan')
                                <span class="dot-info"></span> {{$data->sekolah->status}}
                                @else
                                <span class="dot-danger"></span> {{$data->sekolah->status}}
                                @endif
                                </td>
                                <td>{{$data->petugas_validasi}}</td>
                                <td><button class="btn btn-sm btn-info" id="viewprosesnpsn" href="#modalprosesnpsn" data-toggle="modal"
                                        data-target="#modalprosesnpsn" style="text-decoration:none;"
                                        data-nama="{{$data->sekolah->nama_sekolah}}" data-alamat="{{$data->sekolah->alamat}}"
                                        data-id="{{$data->sekolah->id}}"
                                        data-status="{{$data->sekolah->status}}" data-npsn="{{$data->sekolah->npsn}}"
                                        data-sp="{{$data->sekolah->surat_permohonan}}" data-si="{{$data->sekolah->surat_ijin_pendirian}}"
                                        data-sklm="{{$data->sekolah->sk_luas_tanah_milik}}" data-sklb="{{$data->sekolah->sk_luas_bukan_milik}}"
                                        data-fpapan="{{$data->sekolah->foto_papan}}" data-fsek="{{$data->sekolah->foto_sekolah}}"
                                        data-koordinat="{{$data->sekolah->koordinat}}" data-keterangan="{{$data->sekolah->keterangan}}"  data-petugas="{{$data->petugas_validasi}}">Lihat Detail</button>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <th colspan="6" class="text-center"><i>Data Permintaan NPSN Baru Saat Ini Kosong</i></th>
                            </tr>
                            @endif
                        </tbody>
                    </table>

                </div>
            </div>

            {{$npsn->links()}}
        </div>
    </div>
</div>

<!-- Ini Modal Buat Lihat Data Customer -->
<div class="modal fade" id="modalprosesnpsn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Permintaan NPSN Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tbody>
                    <tr>
                            <th>NPSN</th>
                            <th>:</th>
                            <td id="npsn-sekolah"></td>
                        </tr>
                        <tr>
                            <th>Nama Sekolah</th>
                            <th>:</th>
                            <td id="nama-sekolah"></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <th>:</th>
                            <td id="alamat-sekolah"></td>
                        </tr>
                        <tr>
                            <th>koordinat</th>
                            <th>:</th>
                            <td id="koordinat-sekolah"></td>
                        </tr>
                        <tr>
                            <th>Surat Permohonan NPSN Baru</th>
                            <th>:</th>
                            <td><a id="splink" href="" target="_blank">Surat Permohonan NPSN Baru</a></td>
                        </tr>
                        <tr>
                            <th>Surat Ijin Pendirian & Operasional</th>
                            <th>:</th>
                            <td><a id="silink" href="" target="_blank">Surat Ijin Pendirian & Operasional</a></td>
                        </tr>
                        <tr>
                            <th>Surat Keterangan Luas Tanah Milik</th>
                            <th>:</th>
                            <td><a id="sklmlink" href="" target="_blank">Surat Keterangan Luas Tanah Milik</a></td>
                        </tr>
                        <tr>
                            <th>Surat Keterangan Luas Tanah Bukan Milik</th>
                            <th>:</th>
                            <td><a id="sklblink" href="" target="_blank">Surat Keterangan Luas Tanah Bukan Milik</a></td>
                        </tr>
                        <tr>
                            <th>Foto Papan Nama Sekolah</th>
                            <th>:</th>
                            <td><a id="fpapanlink" href="" target="_blank">Foto Papan Nama Sekolah</a></td>
                        </tr>
                        <tr>
                            <th>Foto Sekolah Tampak Depan</th>
                            <th>:</th>
                            <td><a id="fseklink" href="" target="_blank">Foto Sekolah Tampak Depan</a></td>
                        </tr>
                        <tr>
                            <th>status</th>
                            <th>:</th>
                            <td id="status-sekolah"></td>
                        </tr>
                        <tr>
                            <th>Keterangan</th>
                            <th>:</th>
                            <td id="keterangan-sekolah"></td>
                        </tr>
                        <tr>
                            <th>Petugas Validasi</th>
                            <th>:</th>
                            <td id="petugas-validasi"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
            </div>
        </div>
    </div>
</div>
@endsection
