@extends('layouts.app')

@section('header')
Permintaan Perubahan Nomenklatur(Ditolak)
@endsection

@section('breadcrumb')
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></div>
    <div class="breadcrumb-item">Permintaan Perubahan Nomenklatur(Ditolak)</a></div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
   
        <br>
        <div class="card">
            <div class="card-header">
                <h4>Data Permintaan Perubahan Nomenklatur(Ditolak)</h4>
                
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>Nama Sekolah</th>
                                <th>Alamat</th>
                                <th>Nomenklatur Baru</th>
                                <th>Status</th>
                                <th>Keterangan</th>
                                <th>Detail</th>
                            </tr>

                            @if(!$nomenklatur->isEmpty())
                            @foreach($nomenklatur as $key => $data)
                            <tr>
                                <td>{{$key + $nomenklatur->firstItem()}}</td>
                                
                                <td>{{$data->sekolah->nama_sekolah}}</td>
                                <td>{{$data->sekolah->alamat}}</td>
                                <td>{{$data->sekolah->nomenklatur_baru}}</td>
                                <td>
                                @if($data->sekolah->status == 'Pending')
                                <span class="dot-warning"></span> {{$data->sekolah->status}}
                                @elseif($data->sekolah->status == 'Disetujui')
                                <span class="dot-success"></span> {{$data->sekolah->status}}
                                @else
                                <span class="dot-danger"></span> {{$data->sekolah->status}}
                                @endif
                                </td>
                                <td>{{$data->sekolah->keterangan}}</td>
                                <td> <button id="viewprosesnomenklatur" class="btn btn-sm btn-info" href="#modalviewprosesnomenklatur" data-toggle="modal" style="text-decoration:none;"
                                        data-target="#modalviewprosesnomenklatur"
                                        data-nama="{{$data->sekolah->nama_sekolah}}" data-alamat="{{$data->sekolah->alamat}}"
                                        data-status="{{$data->sekolah->status}}" data-nomenkalturbaru="{{$data->sekolah->nomenklatur_baru}}"
                                        data-spns="{{$data->sekolah->surat_perubahan_nama_sekolah}}" data-si="{{$data->sekolah->surat_ijin_operasional}}"
                                        data-skk="{{$data->sekolah->sk_kemenkumham}}" data-spc="{{$data->sekolah->surat_pengantar_cabang_dinas}}"
                                        data-sps="{{$data->sekolah->surat_permohonan_sekolah}}" data-keterangan="{{$data->sekolah->keterangan}}"
                                        >Lihat Data</button>
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
