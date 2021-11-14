@extends('layouts.app')
@section('header')
Dashboard
@endsection
@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="alert alert-primary">
                <div class="alert-title">Selamat Datang <strong>{{Auth::user()->name}} !</strong></div>
            </div>
        </div>


        @if(Auth::user()->role == 'Admin')
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{route('npsnpending')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Permintaan NPSN (Pending)</h4>
                        </div>
                        <div class="card-body">
                            {{$pending}}
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{route('npsnditeruskan')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-info">
                    <i class="fas fa-check"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Permintaan NPSN (Diteruskan)</h4>
                        </div>
                        <div class="card-body">
                            {{$diteruskan}}
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{route('npsnditolak')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                    <i class="fas fa-times"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Permintaan NPSN (Ditolak)</h4>
                        </div>
                        <div class="card-body">
                            {{$ditolak}}
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{route('npsndisetujui')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                    <i class="fas fa-check-double"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Permintaan NPSN (Disetujui)</h4>
                        </div>
                        <div class="card-body">
                            {{$disetujui}}
                        </div>
                    </div>
                </div>
            </a>
        </div>


        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{route('nomenklaturpending')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Permintaan Nomenklatur (Pending)</h4>
                        </div>
                        <div class="card-body">
                            {{$nomenklaturpending}}
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{route('nomenklaturditeruskan')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-info">
                    <i class="fas fa-check"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Permintaan Nomenklatur (Diteruskan)</h4>
                        </div>
                        <div class="card-body">
                            {{$nomenklaturditeruskan}}
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{route('nomenklaturditolak')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                    <i class="fas fa-times"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Permintaan Nomenklatur (Ditolak)</h4>
                        </div>
                        <div class="card-body">
                            {{$nomenklaturditolak}}
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{route('nomenklaturdisetujui')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                    <i class="fas fa-check-double"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Permintaan Nomenklatur (Disetujui)</h4>
                        </div>
                        <div class="card-body">
                            {{$nomenklaturdisetujui}}
                        </div>
                    </div>
                </div>
            </a>
        </div>


        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{route('usernamepending')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Permintaan Username (Pending)</h4>
                        </div>
                        <div class="card-body">
                            {{$usernamepending}}
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{route('usernamediteruskan')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-info">
                    <i class="fas fa-check"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Permintaan Username (Diteruskan)</h4>
                        </div>
                        <div class="card-body">
                            {{$usernamediteruskan}}
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{route('usernameditolak')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                    <i class="fas fa-times"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Permintaan Username (Ditolak)</h4>
                        </div>
                        <div class="card-body">
                            {{$usernameditolak}}
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{route('usernamedisetujui')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                    <i class="fas fa-check-double"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Permintaan Username (Disetujui)</h4>
                        </div>
                        <div class="card-body">
                            {{$usernamedisetujui}}
                        </div>
                    </div>
                </div>
            </a>
        </div>

        @elseif(Auth::user()->role == 'User')
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{route('npsn')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Permintaan NPSN (Pending)</h4>
                        </div>
                        <div class="card-body">
                            {{$pending}}
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{route('npsnsekolahditolak')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                    <i class="fas fa-times"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Permintaan NPSN (Ditolak)</h4>
                        </div>
                        <div class="card-body">
                            {{$ditolak}}
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{route('npsnsekolahdisetujui')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                    <i class="fas fa-check-double"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Permintaan NPSN (Disetujui)</h4>
                        </div>
                        <div class="card-body">
                            {{$disetujui}}
                        </div>
                    </div>
                </div>
            </a>
        </div>


        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{route('nomenklatur')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Permintaan Nomenklatur (Pending)</h4>
                        </div>
                        <div class="card-body">
                            {{$nomenklaturpending}}
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{route('nomenklatursekolahditolak')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                    <i class="fas fa-times"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Permintaan Nomenklatur (Ditolak)</h4>
                        </div>
                        <div class="card-body">
                            {{$nomenklaturditolak}}
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{route('nomenklatursekolahdisetujui')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                    <i class="fas fa-check-double"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Permintaan Nomenklatur (Disetujui)</h4>
                        </div>
                        <div class="card-body">
                            {{$nomenklaturdisetujui}}
                        </div>
                    </div>
                </div>
            </a>
        </div>


        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{route('usernamedapodik')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Permintaan Username (Pending)</h4>
                        </div>
                        <div class="card-body">
                            {{$usernamepending}}
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{route('usernamesekolahditolak')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                    <i class="fas fa-times"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Permintaan Username (Ditolak)</h4>
                        </div>
                        <div class="card-body">
                            {{$usernameditolak}}
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{route('usernamesekolahdisetujui')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                    <i class="fas fa-check-double"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Permintaan Username (Disetujui)</h4>
                        </div>
                        <div class="card-body">
                            {{$usernamedisetujui}}
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        @elseif(Auth::user()->role == 'Provinsi')
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{route('npsnprovinsi')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>NPSN</h4>
                        </div>
                        <div class="card-body">
                            {{$permintaan}}
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{route('npsnselesai')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                    <i class="fas fa-check-double"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>NPSN (Selesai)</h4>
                        </div>
                        <div class="card-body">
                            {{$selesai}}
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{route('nomenklaturprovinsi')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Nomenklatur</h4>
                        </div>
                        <div class="card-body">
                            {{$permintaannomenklatur}}
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{route('nomenklaturselesai')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                    <i class="fas fa-check-double"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Nomenklatur (Selesai)</h4>
                        </div>
                        <div class="card-body">
                            {{$nomenklaturselesai}}
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{route('usernameprovinsi')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Username</h4>
                        </div>
                        <div class="card-body">
                            {{$permintaanusername}}
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{route('usernameselesai')}}">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                    <i class="fas fa-check-double"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Username (Selesai)</h4>
                        </div>
                        <div class="card-body">
                            {{$usernameselesai}}
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endif


    </div>
</div>
</div>
@endsection
