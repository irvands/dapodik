@extends('layouts.app')

@section('header')
Input Username Dapodik
@endsection

@section('breadcrumb')
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></div>
    <div class="breadcrumb-item">Input Username Dapodik</a></div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">

        <br>
        <div class="card">
            <div class="card-header">
                <h4>Input Username Dapodik</h4>

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
                                    <button class="btn btn-sm btn-success btn-block" id="inputusername"
                                        data-toggle="modal" data-target="#modalinputusername"
                                        data-idsek="{{$data->id}}">Input NPSN</button>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <th colspan="6" class="text-center"><i>Data Permintaan Username Dapodik Saat Ini
                                        Kosong</i>
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



<!-- Modal Keterangan Input NPSN -->
<div class="modal fade" id="modalinputusername" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Ussername</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('prosesinputusername')}}" method="POST">
                    @csrf
                    <input type="hidden" id="id-sekolah" name="id">
                    <div class="form-group">
                        <label>Username(*)</label>
                        <input id="username" type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                            value="{{old('username')}}">
                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Password(*)</label>
                        <input id="password" type="text" name="password" class="form-control @error('password') is-invalid @enderror"
                            value="{{old('password')}}">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
                <input type="submit" class="btn btn-success" value="Submit">
            </div>
            </form>
        </div>
    </div>
</div>



@endsection
