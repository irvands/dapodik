@extends('layouts.app')

@section('header')
NPSN Baru
@endsection

@section('breadcrumb')
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></div>
    <div class="breadcrumb-item">Npsn Baru</a></div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
    <a class="btn btn-sm btn-primary text-white" style="margin-bottom:10px;" href="{{route('addnpsnindex')}}"><i class="fas fa-plus-circle"></i> Tambah Permintaan</a>
        <br>
        <div class="card">
            <div class="card-header">
                <h4>Data Permintaan NPSN</h4>
                
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
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>

                            @if(!$npsn->isEmpty())
                            @foreach($npsn as $key => $data)
                            <tr>
                                <td>{{$key + $npsn->firstItem()}}</td>

                                <td>{{$data->nama_sekolah}}</td>
                                <td>{{$data->alamat}}</td>
                                <td>
                                @if($data->status == 'Pending')
                                <span class="dot-warning"></span> {{$data->status}}
                                @elseif($data->status == 'Disetujui')
                                <span class="dot-success"></span> {{$data->status}}
                                @else
                                <span class="dot-danger"></span> {{$data->status}}
                                @endif
                                </td>
                                <td>{{$data->keterangan}}</td>
                                <td>
                                    <a id="viewnpsn" href="#modalviewnpsn" data-toggle="modal" style="text-decoration:none;"
                                        data-target="#modalviewnpsn"
                                        data-nama="{{$data->nama_sekolah}}" data-alamat="{{$data->alamat}}"
                                        data-status="{{$data->status}}" data-npsn="{{$data->npsn}}"
                                        data-sp="{{$data->surat_permohonan}}" data-si="{{$data->surat_ijin_pendirian}}"
                                        data-sklm="{{$data->sk_luas_tanah_milik}}" data-sklb="{{$data->sk_luas_bukan_milik}}"
                                        data-fpapan="{{$data->foto_papan}}" data-fsek="{{$data->foto_sekolah}}"
                                        data-koordinat="{{$data->koordinat}}" data-keterangan="{{$data->keterangan}}"
                                        >
                                        <i class="far fa-eye text-success"></i>
                                    </a>

                                    <a id="destroynpsn" href="npsn/destroy/{{$data->id}}"
                                        style="text-decoration:none;">
                                        <i class="fas fa-trash-alt text-danger"></i>
                                    </a>
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
<div class="modal fade" id="modalviewnpsn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
            </div>
        </div>
    </div>
</div>


@endsection
