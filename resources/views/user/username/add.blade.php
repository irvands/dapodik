@extends('layouts.app')

@section('header')
Username Dapodik
@endsection

@section('breadcrumb')
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a>Dashboard</a></div>
    <div class="breadcrumb-item"><a href="{{route('nomenklatur')}}">Username Dapodik</a></div>
    <div class="breadcrumb-item active">Tambah Permintaan</a></div>
</div>
@endsection

@section('content')
<div class="row">

    <div class="col-md-7">
        <div class="card" style="margin-top:20px;">
            <div class="card-header border-transparent">
                <h4><i class="fas fa-plus"></i> Tambah Permintaan Username Dapodik</h4>

            </div>
            <!-- /.card-header -->

            <div class="card-body">

                <form action="{{route('addusernamedapodik')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>NPSN(*)</label>
                        <input type="text" name="npsn" class="form-control @error('npsn') is-invalid @enderror" value="{{old('npsn')}}">
                        @error('npsn')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Nama Sekolah(*)</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama')}}">
                        @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Alamat(*)</label>
                        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{old('alamat')}}">
                        @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Surat Permohonan Username(*)</label>
                        <input type="file" name="spu" class="form-control @error('spu') is-invalid @enderror">
                        @error('spu')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Surat Tugas Operator</label>
                        <input type="file" name="sto" class="form-control @error('sto') is-invalid @enderror">
                        @error('sto')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    

                    <div class="card-footer">
                        <input type="submit" class="btn btn-success" Value="Simpan">
                        <input type="reset" class="btn btn-danger" Value="Reset">
                        <a class="btn btn-warning" href="{{route('nomenklatur')}}">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-5" style="margin-top:20px;">
        <div class="card">
            <div class="card-header border-transparent">
                <h4><i class="far fa-lightbulb"></i> Informasi Penting</h4>

            </div>
            <div class="card-body">

                <ul>
                    <b>
                        <li>Surat Permohonan Username harus berupa dokumen PDF</li>
                        <li>Surat Tugas Operator harus barupa berupa dokumen PDF</li>
                    </b>
                </ul>
            </div>
        </div>

    </div>
</div>
@endsection
