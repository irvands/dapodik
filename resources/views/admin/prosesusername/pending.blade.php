@extends('layouts.app')

@section('header')
Permintaan Username Dapodik(Pending)
@endsection

@section('breadcrumb')
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></div>
    <div class="breadcrumb-item">Permintaan  Username Dapodik(Pending)</a></div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">

        <br>
        <div class="card">
            <div class="card-header">
                <h4>Data  Username Dapodik(Pending)</h4>

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
                                <th>Detail</th>
                                <th>Aksi</th>
                            </tr>

                            @if(!$username->isEmpty())
                            @foreach($username as $key => $data)
                            <tr>
                                <td>{{$key + $username->firstItem()}}</td>
                                <td>{{$data->npsn}}</td>
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
                                <td>
                                <button class="btn btn-info" id="viewprosesusername" href="#modalviewprosesusername" data-toggle="modal" style="text-decoration:none;"
                                        data-target="#modalviewprosesusername" data-npsn="{{$data->npsn}}"
                                        data-nama="{{$data->nama_sekolah}}" data-alamat="{{$data->alamat}}"
                                        data-status="{{$data->status}}" data-spu="{{$data->surat_permohonan_username}}"
                                        data-sto="{{$data->surat_tugas_operator}}" data-keterangan="{{$data->keterangan}}"
                                        >Lihat Detail</button>
                
                                <td>
                                    <a class="btn btn-sm btn-success btn-block" id="diteruskan"
                                        href="proses/teruskan/{{$data->id}}"><i class="fas fa-check"></i> Teruskan</a>
                                    <button class="btn btn-sm btn-danger btn-block" id="tolakpermintaan" data-toggle="modal" data-target="#modalketerangan" data-idsek="{{$data->id}}" ><i class="fas fa-times"></i> Tolak</button>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <th colspan="6" class="text-center"><i>Data Permintaan  Username Dapodik Saat Ini Kosong</i>
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

<!-- Modal Keterangan Tolak Permintaan -->
<div class="modal fade" id="modalketerangan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Keterangan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('tolakusername')}}" method="POST">
                    @csrf
                    <input type="hidden" id="id-sekolah" name="id">
                    <div class="form-group">
                        <label>Keterangan Permintaan Ditolak(*)</label>
                        <textarea name="keterangan" class="form-control @error('keterangan') is-invalid @enderror"></textarea>
                        @error('keterangan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal" >Keluar</button>
                <input type="submit" class="btn btn-danger" value="Tolak">
            </div>
            </form>
        </div>
    </div>
</div>



@endsection
