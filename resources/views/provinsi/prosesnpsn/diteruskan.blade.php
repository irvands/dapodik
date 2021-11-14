@extends('layouts.app')

@section('header')
Permintaan Persetujuan NPSN
@endsection

@section('breadcrumb')
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></div>
    <div class="breadcrumb-item">Permintaan Persetujuan NPSN</a></div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
   
        <br>
        <div class="card">
            <div class="card-header">
                <h4>Data Permintaan Persetujuan NPSN</h4>
                
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>Nama Sekolah</th>
                                <th>Alamat</th>
                                <th>Petugas Verifikasi</th>
                                <th>Berita Acara</th>
                                <th>Aksi</th>
                            </tr>

                            @if(!$npsn->isEmpty())
                            @foreach($npsn as $key => $data)
                            <tr>
                                <td>{{$key + $npsn->firstItem()}}</td>

                                <td>{{$data->sekolah->nama_sekolah}}</td>
                                <td>{{$data->sekolah->alamat}}</td>
                                <td>{{$data->petugas_validasi}}</td>
                                <td>
                                <a href="npsn/berita-acara/download/{{$data->id}}" class="btn btn-info btn-block"><i class="fas fa-download"></i> Download</a>
                                </td>
                                <td>
                                <a href="npsn/proses/setujui/{{$data->id}}" class="btn btn-success btn-block"><i class="fas fa-check-double"></i> Setujui</a>
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

@endsection
