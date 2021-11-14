@extends('layouts.app')

@section('header')
Permintaan Username Dapodik(Diteruskan)
@endsection

@section('breadcrumb')
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></div>
    <div class="breadcrumb-item">Permintaan Username Dapodik(Diteruskan)</a></div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">

        <br>
        <div class="card">
            <div class="card-header">
                <h4>Data Perubahan Username Dapodik(Diteruskan)</h4>

            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tbody>
                            <tr>
                                 <th>#</th>
                                 <th>NPSN</th>
                                <th>Nama Sekolah</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th>Petugas Verifikasi</th>
                                <th>Detail</th>
                            </tr>

                            @if(!$username->isEmpty())
                            @foreach($username as $key => $data)
                            <tr>
                                <td>{{$key + $username->firstItem()}}</td>

                                <td>{{$data->sekolah->npsn}}</td>
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
                                <td>
                                <button class="btn btn-info" id="viewprosesusername" href="#modalviewprosesusername" data-toggle="modal" style="text-decoration:none;"
                                        data-target="#modalviewprosesusername" data-npsn="{{$data->npsn}}"
                                        data-nama="{{$data->nama_sekolah}}" data-alamat="{{$data->alamat}}"
                                        data-status="{{$data->status}}" data-spu="{{$data->surat_permohonan_username}}"
                                        data-sto="{{$data->surat_tugas_operator}}" data-keterangan="{{$data->keterangan}}"
                                        >Lihat Detail</button>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <th colspan="6" class="text-center"><i>Data Permintaan Username Dapodik Saat Ini Kosong</i>
                                </th>
                            </tr>
                            @endif
                        </tbody>
                    </table>

                </div>
            </div>

            {{$username->links()}}
        </div>
    </div>
</div>

<!-- Modal Detail Permintaan -->
<div class="modal fade" id="modalviewprosesusername" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Permintaan Username</h5>
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
                            <th>Surat Permohonan Username</th>
                            <th>:</th>
                            <td><a id="spulink" href="" target="_blank">Surat Permohonan Username</a></td>
                        </tr>
                        <tr>
                            <th>Surat Tugas Operator</th>
                            <th>:</th>
                            <td><a id="stolink" href="" target="_blank">Surat Tugas Operator</a></td>
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
