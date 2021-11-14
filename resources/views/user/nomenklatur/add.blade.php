@extends('layouts.app')

@section('header')
Perubahan Nomenklatur
@endsection

@section('breadcrumb')
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a>Dashboard</a></div>
    <div class="breadcrumb-item"><a href="{{route('nomenklatur')}}">Perubahan Nomenklatur</a></div>
    <div class="breadcrumb-item active">Tambah Permintaan</a></div>
</div>
@endsection

@section('content')
<div class="row">

    <div class="col-md-7">
        <div class="card" style="margin-top:20px;">
            <div class="card-header border-transparent">
                <h4><i class="fas fa-plus"></i> Tambah Permintaan Perubahan Nomenklatur</h4>

            </div>
            <!-- /.card-header -->

            <div class="card-body">

                <form action="{{route('addnomenklatur')}}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                        <label>Nomenklatur Baru(*)</label>
                        <input type="text" name="nomenklatur" class="form-control @error('nomenklatur') is-invalid @enderror" value="{{old('nomenklatur')}}">
                        @error('nomenklatur')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Surat Perubahan Nama Sekolah(*)</label>
                        <input type="file" name="spns" class="form-control @error('spns') is-invalid @enderror">
                        @error('spns')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Surat Ijin Operasional Sekolah</label>
                        <input type="file" name="si" class="form-control @error('si') is-invalid @enderror">
                        @error('si')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Surat Keterangan KEMENKUMHAM(*)</label>
                        <input type="file" name="skk" class="form-control @error('skk') is-invalid @enderror">
                        @error('skk')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Surat Pengantar Cabang Dinas(*)</label>
                        <input type="file" name="spc" class="form-control @error('spc') is-invalid @enderror">
                        @error('spc')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Surat Permohanan Sekolah(*)</label>
                        <input type="file" name="sps" class="form-control @error('sps') is-invalid @enderror">
                        @error('sps')
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
                        <li>Surat Perubahan Nama Sekolah harus berupa dokumen PDF</li>
                        <li>Surat Ijin Operasional Sekolah harus barupa berupa dokumen PDF</li>
                        <li>Surat Keterangan KEMENKUMHAM harus barupa berupa dokumen PDF</li>
                        <li>Surat Pengantar Cabang Dinas harus berupa dokumen PDF</li>
                        <li>Surat Permohonan Sekolah harus berupa dokumen PDF</li>
                    </b>
                </ul>
            </div>
        </div>

    </div>
</div>
@endsection
