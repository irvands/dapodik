@extends('layouts.app')

@section('header')
NPSN Selesai
@endsection

@section('breadcrumb')
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></div>
    <div class="breadcrumb-item">NPSN Selesai/a></div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">

        <br>
        <div class="card">
            <div class="card-header">
                <h4>NPSN Selesai</h4>

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
                            </tr>

                            @if(!$npsn->isEmpty())
                            @foreach($npsn as $key => $data)
                            <tr>
                                <td>{{$key + $npsn->firstItem()}}</td>
                                <td>{{$data->npsn}}</td>
                                <td>{{$data->nama_sekolah}}</td>
                                <td>{{$data->alamat}}</td>
                                
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <th colspan="6" class="text-center"><i>Data Permintaan NPSN Baru Saat Ini Kosong</i>
                                </th>
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



<!-- Modal Keterangan Input NPSN -->
<div class="modal fade" id="modalinputnpsn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input NPSN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('prosesinputnpsn')}}" method="POST">
                    @csrf
                    <input type="hidden" id="id-sekolah" name="id">
                    <div class="form-group">
                        <label>Input NPSN(*)</label>
                        <input type="text" name="npsn" class="form-control @error('npsn') is-invalid @enderror"
                            value="{{old('npsn')}}">
                        @error('npsn')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal" >Keluar</button>
                <input type="submit" class="btn btn-success" value="Submit">
            </div>
            </form>
        </div>
    </div>
</div>



@endsection
