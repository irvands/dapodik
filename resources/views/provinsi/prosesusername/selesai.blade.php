@extends('layouts.app')

@section('header')
Username Dapodik Selesai
@endsection

@section('breadcrumb')
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></div>
    <div class="breadcrumb-item">Username Dapodik Selesai</a></div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">

        <br>
        <div class="card">
            <div class="card-header">
                <h4>Username Dapodik Selesai</h4>

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
                                <th>Username</th>
                                <th>Password</th>
                             
                            </tr>

                            @if(!$username->isEmpty())
                            @foreach($username as $key => $data)
                            <tr>
                                <td>{{$key + $username->firstItem()}}</td>

                                <td>{{$data->npsn}}</td>
                                <td>{{$data->nama_sekolah}}</td>
                                <td>{{$data->alamat}}</td>
                                <td>{{$data->username}}</td>
                                <td>{{$data->password}}</td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <th colspan="6" class="text-center"><i>Data Permintaan Username Saat Ini Kosong</i>
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




@endsection
