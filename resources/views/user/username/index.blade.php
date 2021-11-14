@extends('layouts.app')

@section('header')
Username Dapodik
@endsection

@section('breadcrumb')
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></div>
    <div class="breadcrumb-item">Username Dapodik</a></div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
    <a class="btn btn-sm btn-primary text-white" style="margin-bottom:10px;" href="{{route('addusernamedapodikindex')}}"><i class="fas fa-plus-circle"></i> Tambah Permintaan</a>
        <br>
        <div class="card">
            <div class="card-header">
                <h4>Data Permintaan Username Dapodik</h4>
                
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

                            @if(!$username->isEmpty())
                            @foreach($username as $key => $data)
                            <tr>
                                <td>{{$key + $username->firstItem()}}</td>

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
                                    <a id="viewusername" href="#modalviewusername" data-toggle="modal" style="text-decoration:none;"
                                        data-target="#modalviewusername" data-npsn="{{$data->npsn}}"
                                        data-nama="{{$data->nama_sekolah}}" data-alamat="{{$data->alamat}}"
                                        data-status="{{$data->status}}" data-spu="{{$data->surat_permohonan_username}}"
                                        data-sto="{{$data->surat_tugas_operator}}" data-keterangan="{{$data->keterangan}}"
                                        >
                                        <i class="far fa-eye text-success"></i>
                                    </a>

                                    <a id="destroyusername" href="username-dapodik/destroy/{{$data->id}}"
                                        style="text-decoration:none;">
                                        <i class="fas fa-trash-alt text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <th colspan="6" class="text-center"><i>Data Permintaan Username Dapodik Saat Ini Kosong</i></th>
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


<div class="modal fade" id="modalviewusername" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
