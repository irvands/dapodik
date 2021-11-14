@extends('layouts.app')

@section('header')
Pengaturan Akun
@endsection

@section('breadcrumb')
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></div>
    <div class="breadcrumb-item">Pengaturan Akun</a></div>
</div>
@endsection

@section('content')
<div class="row">
   
    <div class="col-md-8 mx-auto">
        <div class="card" style="margin-top:20px;">
            <div class="card-header border-transparent">
                <h4>Pengaturan Akun</h4>

            </div>
            <!-- /.card-header -->

            <div class="card-body">
                @if($errors->any())
                <div class="alert alert-danger alert-dismissible alert-has-icon">

                    <div class="alert-icon"><i class="far fa-times-circle"></i></div>

                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>×</span>
                        </button>
                        <div class="alert-title">Gagal !</div>
                        <ul>
                            @foreach($errors->all() as $e)
                            <li>{{$e}}</li>
                            @endforeach
                        </ul>

                    </div>
                </div>
                @endif
                <form action="{{route('editpersonaluser')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{Auth::user()->id}}">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{Auth::user()->email}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="name"
                                value="{{Auth::user()->name}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Passsword</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Konfirmasi Password</label>
                            <input type="password" class="form-control @error('nama') is-invalid @enderror"
                                name="password_confirmation">
                        </div>


                    </div>

                    <div class="card-footer">
                        <input type="submit" class="btn btn-success" Value="Simpan">
                        <input type="reset" class="btn btn-danger" Value="Reset">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    @endsection
