@extends('layouts.app')

@section('header')
Permintaan Username Dapodik
@endsection

@section('breadcrumb')
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></div>
    <div class="breadcrumb-item">Permintaan Username Dapodik</a></div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">

        <br>
        <div class="card">
            <div class="card-header">
                <h4>Permintaan Username Dapodik</h4>

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
                                <th>Petugas Verifikasi</th>
                                <th>Berita Acara</th>
                                <th>Aksi</th>
                            </tr>

                            @if(!$username->isEmpty())
                            @foreach($username as $key => $data)
                            <tr>
                                <td>{{$key + $username->firstItem()}}</td>

                                <td>{{$data->sekolah->npsn}}</td>
                                <td>{{$data->sekolah->nama_sekolah}}</td>
                                <td>{{$data->sekolah->alamat}}</td>
                                <td>{{$data->petugas_validasi}}</td>
                                <td>
                                <a href="username-dapodik/berita-acara/download/{{$data->id}}" class="btn btn-info btn-block"><i class="fas fa-download"></i> Download</a>
                                </td>
                                <td>
                                <a href="username-dapodik/proses/setujui/{{$data->id}}" class="btn btn-success btn-block"><i class="fas fa-check-double"></i> Setujui</a>
                                </td> 
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <th colspan="6" class="text-center"><i>Data Permintaan Perubahan Nomenklatur Saat Ini Kosong</i>
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
<div class="modal fade" id="modalviewprosesnomenklatur" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
