@extends('layouts.app')

@section('header')
Aktivasi Nomenklatur Baru
@endsection

@section('breadcrumb')
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></div>
    <div class="breadcrumb-item">Aktivasi Nomenklatur Baru</a></div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">

        <br>
        <div class="card">
            <div class="card-header">
                <h4>Aktivasi Nomenklatur Baru</h4>

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
                                <th>Aksi</th>
                            </tr>

                            @if(!$nomenklatur->isEmpty())
                            @foreach($nomenklatur as $key => $data)
                            <tr>
                                <td>{{$key + $nomenklatur->firstItem()}}</td>

                                <td>{{$data->nama_sekolah}}</td>
                                <td>{{$data->alamat}}</td>
                                <td>{{$data->nomenklatur_baru}}</td>
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
                                    <a id="aktivasi" class="btn btn-sm btn-success btn-block" href="aktivasi/{{$data->id}}" >Aktifkan</a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <th colspan="6" class="text-center"><i>Data PermintaanPerubahan Nomenklatur Saat Ini Kosong</i>
                                </th>
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




@endsection
