<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>LAYANAN DAPODIK</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/components.css')}}">

    <style>
    .dot-warning {
    height: 10px;
    width: 10px;
    background-color: #f0ad4e ;
    border-radius: 50%;
    display: inline-block;
    }

    .dot-info {
    height: 10px;
    width: 10px;
    background-color: #5bc0de  ;
    border-radius: 50%;
    display: inline-block;
    }

    .dot-success {
    height: 10px;
    width: 10px;
    background-color: #5cb85c ;
    border-radius: 50%;
    display: inline-block;
    }

    .dot-danger {
    height: 10px;
    width: 10px;
    background-color: #d9534f  ;
    border-radius: 50%;
    display: inline-block;
    }
    
    </style>
    
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                    class="fas fa-search"></i></a></li>
                    </ul>
                    <div class="search-element">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                            data-width="250">
                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                        <div class="search-backdrop"></div>
                        <div class="search-result">s
                        </div>
                    </div>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{asset('img/avatar/avatar-1.png')}}" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, {{Auth::user()->name}}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="features-activities.html" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
                            </a>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                @section('sidebar')
                @include('layouts.sidebar')
                @show
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>@yield('header')</h1>
                        <div class="section-header-breadcrumb">
                        @yield('breadcrumb')
                        </div>
                    </div>

                    <div class="section-body">
                        @yield('content')
                    </div>
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; {{ now()->year }} <div class="bullet"></div> Made with ❤️ <a href="https://instagram.com/yaelahvannn">Irvan Dwi Setiawan</a>
                </div>
                <div class="footer-right">
                    2.3.0
                </div>
            </footer>
        </div>
    </div>
   
    <!-- General JS Scripts -->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet-src.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    @include('sweetalert::alert')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

    <!-- Page Specific JS File -->

    <script type="text/javascript">
    $('body').on('click', '#carikoordinat', function (event) {
    $('#modalcarikoordinat').appendTo('body');

    });
    </script>

<script>

    var mymap = L.map('map').setView([-7.306018776733318, 112.75855882536668], 13);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1
    }).addTo(mymap);

    var koordinat = document.querySelector("[name=koordinat]");

    var currentlocation = [-7.306018776733318, 112.75855882536668];

    mymap.attributionControl.setPrefix(false);

    var marker = new L.marker(currentlocation,{
        draggable: 'true',
    });

    marker.on('dragend', function(event){
        var position = marker.getLatLng();
        marker.setLatLng(position,{
            draggable : 'true',
        }).bindPopup(position).update();
        $("#koordinat").val(position.lat+', '+position.lng);
    });
    mymap.addLayer(marker);

    mymap.on('click', function(e){
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;
        if(!marker){
            marker = L.marker(e.latlng).addTo(mymap);
        }else{
            marker.setLatLng(e.latlng);
            koordinat.value = lat+', '+lng;
        }
    });

</script>

    @if(Session::has('errors'))
    <script>
        $(document).ready(function(){
            $('#modalketerangan').modal({show: true});;
            $('#modalketerangan').appendTo('body');
            $("#keterangan").val('{{old('keterangan')}}');
            $('#modalketerangan').on('hidden.bs.modal', function (){
                location.reload();
            });
        });   
    </script>
    @endif

    @if(Session::has('errors'))
    <script>
        $(document).ready(function(){
            $('#modalinputnpsn').modal({show: true});;
            $('#modalinputnpsn').appendTo('body');
            $("#npsn").val('{{old('npsn')}}');
            $('#modalinputnpsn').on('hidden.bs.modal', function (){
                location.reload();
            });
        });   
    </script>
    @endif

    @if(Session::has('errors'))
    <script>
        $(document).ready(function(){
            $('#modalinputusername').modal({show: true});;
            $('#modalinputusername').appendTo('body');
            $("#username").val('{{old('username')}}');
            $("#password").val('{{old('password')}}');
            $('#modalinputusername').on('hidden.bs.modal', function (){
                location.reload();
            });
        });   
    </script>
    @endif

    <script src="{{asset('js/npsn.js')}}"></script>
    <script src="{{asset('js/prosesnpsn.js')}}"></script>

    <script src="{{asset('js/nomenklatur.js')}}"></script>
    <script src="{{asset('js/prosesnomenklatur.js')}}"></script>

    <script src="{{asset('js/usernamedapodik.js')}}"></script>
    <script src="{{asset('js/prosesusernamedapodik.js')}}"></script>
    
</body>

</html>
