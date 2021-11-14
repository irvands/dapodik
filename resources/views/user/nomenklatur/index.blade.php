@extends('layouts.app')

@section('header')
Perubahan Nomenklatur
@endsection

@section('breadcrumb')
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></div>
    <div class="breadcrumb-item">Perubahan Nomenklatur</a></div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
    <a class="btn btn-sm btn-primary text-white" style="margin-bottom:10px;" href="{{route('addnomenklaturindex')}}"><i class="fas fa-plus-circle"></i> Tambah Permintaan</a>
        <br>
        <div class="card">
            <div class="card-header">
                <h4>Data Permintaan Perubahan Nomenklatur</h4>
                
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

                            @if(!$nomenklatur->isEmpty())
                            @foreach($nomenklatur as $key => $data)
                            <tr>
                                <td>{{$key + $nomenklatur->firstItem()}}</td>

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
                                    <a id="viewnomenklatur" href="#modalviewnomenklatur" data-toggle="modal" style="text-decoration:none;"
                                        data-target="#modalviewnomenklatur"
                                        data-nama="{{$data->nama_sekolah}}" data-alamat="{{$data->alamat}}"
                                        data-status="{{$data->status}}" data-nomenkalturbaru="{{$data->nomenklatur_baru}}"
                                        data-spns="{{$data->surat_perubahan_nama_sekolah}}" data-si="{{$data->surat_ijin_operasional}}"
                                        data-skk="{{$data->sk_kemenkumham}}" data-spc="{{$data->surat_pengantar_cabang_dinas}}"
                                        data-sps="{{$data->surat_permohonan_sekolah}}" data-keterangan="{{$data->keterangan}}"
                                        >
                                        <i class="far fa-eye text-success"></i>
                                    </a>

                                    <a id="destroynomenklatur" href="nomenklatur/destroy/{{$data->id}}"
                                        style="text-decoration:none;">
                                        <i class="fas fa-trash-alt text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <th colspan="6" class="text-center"><i>Data Permintaan Perubahan Nomenklatur Saat Ini Kosong</i></th>
                            </tr>
                            @endif
                        </tbody>
                    </table>

                </div>
            </div>

            {{$nomenklatur->links()}}
        </div>
    </div>
</div>


<div class="modal fade" id="modalviewnomenklatur" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Permintaan Perubahan Nomenklatur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tbody>
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
                            <th>Nomenklatur Baru</th>
                            <th>:</th>
                            <td id="nomenklatur-sekolah"></td>
                        </tr>
                        <tr>
                            <th>Surat Perubahan Nama Sekolah</th>
                            <th>:</th>
                            <td><a id="spnslink" href="" target="_blank">Surat Perubahan Nama Sekolah</a></td>
                        </tr>
                        <tr>
                            <th>Surat Ijin Operasional Sekolah</th>
                            <th>:</th>
                            <td><a id="silink" href="" target="_blank">Surat Ijin Operasional Sekolah</a></td>
                        </tr>
                        <tr>
                            <th>Surat Keterangan KEMENKUMHAM</th>
                            <th>:</th>
                            <td><a id="skklink" href="" target="_blank">Surat Keterangan KEMENKUMHAM</a></td>
                        </tr>
                        <tr>
                            <th>Surat Pengantar Cabang Dinas</th>
                            <th>:</th>
                            <td><a id="spclink" href="" target="_blank">Surat Pengantar Cabang Dinas</a></td>
                        </tr>
                        <tr>
                            <th>Surat Permohanan Sekolah</th>
                            <th>:</th>
                            <td><a id="spslink" href="" target="_blank">Surat Permohanan Sekolah</a></td>
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
