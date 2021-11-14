@extends('layouts.app')

@section('header')
NPSN Baru
@endsection

@section('breadcrumb')
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a>Dashboard</a></div>
    <div class="breadcrumb-item"><a href="{{route('npsn')}}">Npsn Baru</a></div>
    <div class="breadcrumb-item active">Tambah Permintaan</a></div>
</div>
@endsection

@section('content')
<div class="row">

    <div class="col-md-7">
        <div class="card" style="margin-top:20px;">
            <div class="card-header border-transparent">
                <h4><i class="fas fa-plus"></i> Tambah Permintaan NPSN Baru</h4>

            </div>
            <!-- /.card-header -->

            <div class="card-body">

                <form action="{{route('addnpsn')}}" method="POST" enctype="multipart/form-data">
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


                    <div id="map"  style="width:100%;height:380px;"></div>
                    <div class="form-group">
                        <label>Koordinat Lokasi(*)</label>
                        <input id="koordinat" type="text" name="koordinat"
                            class="form-control @error('koordinat') is-invalid @enderror" value="{{old('koordinat')}}">
                        @error('koordinat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Surat Permohonan NPSN Baru(*)</label>
                        <input type="file" name="sp" class="form-control @error('sp') is-invalid @enderror">
                        @error('sp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Surat Ijin Pendirian & Operasional(*)</label>
                        <input type="file" name="si" class="form-control @error('si') is-invalid @enderror">
                        @error('si')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Surat Keterangan Luas Tanah Milik(*)</label>
                        <input type="file" name="sklm" class="form-control @error('sklm') is-invalid @enderror">
                        @error('sklm')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Surat Keterangan Luas Tanah Bukan Milik(*)</label>
                        <input type="file" name="sklb" class="form-control @error('sklb') is-invalid @enderror">
                        @error('sklb')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Foto Papan Nama Sekolah(*)</label>
                        <input type="file" name="fpapan" class="form-control @error('fpapan') is-invalid @enderror">
                        @error('fpapan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Foto Sekolah Tampak Depan(*)</label>
                        <input type="file" name="fsek" class="form-control @error('fsek') is-invalid @enderror">
                        @error('fsek')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="card-footer">
                        <input type="submit" class="btn btn-success" Value="Simpan">
                        <input type="reset" class="btn btn-danger" Value="Reset">
                        <a class="btn btn-warning" href="{{route('npsn')}}">Kembali</a>
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
                        <li>Surat Permohonan NPSN Baru harus berupa dokumen PDF</li>
                        <li>Surat Ijin Pendirian & Operasional Sekolah harus barupa file scan dengan format PDF</li>
                        <li>Surat Keterangan Luas Tanah Milik harus barupa file scan dengan format PDF</li>
                        <li>Surat Keterangan Luas Tanah Bukan Milik harus barupa file scan dengan format PDF</li>
                    </b>
                </ul>
            </div>
        </div>

    </div>
</div>
@endsection
