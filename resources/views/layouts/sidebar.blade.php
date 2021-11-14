<aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> LAYANAN DAPODIK</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">LD</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="{{activelink('home')}}"><a class="nav-link" href="{{route('home')}}"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>
              <li class="menu-header">Menu</li>
              @if(Auth::user()->role == 'User')
              <li class="dropdown {{activelink(['npsn','addnpsnindex','npsnsekolahditolak','npsnsekolahdisetujui'])}}" >
                <a class="nav-link has-dropdown"><i class="fas fa-school"></i> <span>NPSN</span></a>
                <ul class="dropdown-menu" style="display: none;">
                  <li class="{{activelink(['npsn','addnpsnindex'])}}"><a class="nav-link" href="{{route('npsn')}}"><i class="fas fa-clock"></i> <span>Permintaan</span></a></li>
                  <li class="{{activelink(['npsnsekolahditolak'])}}"><a class="nav-link" href="{{route('npsnsekolahditolak')}}"><i class="fas fa-times"></i> <span>Ditolak</span></a></li>
                  <li class="{{activelink(['npsnsekolahdisetujui'])}}"><a class="nav-link" href="{{route('npsnsekolahdisetujui')}}"><i class="fas fa-check-double"></i> <span>Disetujui</span></a></li>
                </ul>
              </li>

              <li class="dropdown {{activelink(['addnomenklaturindex','nomenklatur','nomenklatursekolahditolak','nomenklatursekolahdisetujui'])}}" >
                <a class="nav-link has-dropdown"><i class="fas fa-book"></i> <span>Nomenklatur</span></a>
                <ul class="dropdown-menu" style="display: none;">
                  <li class="{{activelink(['addnomenklaturindex','nomenklatur'])}}"><a class="nav-link" href="{{route('nomenklatur')}}"><i class="fas fa-clock"></i> <span>Permintaan</span></a></li>
                  <li class="{{activelink(['nomenklatursekolahditolak'])}}"><a class="nav-link" href="{{route('nomenklatursekolahditolak')}}"><i class="fas fa-times"></i> <span>Ditolak</span></a></li>
                  <li class="{{activelink(['nomenklatursekolahdisetujui'])}}"><a class="nav-link" href="{{route('nomenklatursekolahdisetujui')}}"><i class="fas fa-check-double"></i> <span>Disetujui</span></a></li>
                </ul>
              </li>

              <li class="dropdown {{activelink(['addusernamedapodikindex','usernamedapodik','usernamesekolahditolak','usernamesekolahdisetujui'])}}" >
                <a class="nav-link has-dropdown"><i class="fas fa-users"></i> <span>Username</span></a>
                <ul class="dropdown-menu" style="display: none;">
                  <li class="{{activelink(['addusernamedapodikindex','usernamedapodik'])}}"><a class="nav-link" href="{{route('usernamedapodik')}}"><i class="fas fa-clock"></i> <span>Permintaan</span></a></li>
                  <li class="{{activelink(['usernamesekolahditolak'])}}"><a class="nav-link" href="{{route('usernamesekolahditolak')}}"><i class="fas fa-times"></i> <span>Ditolak</span></a></li>
                  <li class="{{activelink(['usernamesekolahdisetujui'])}}"><a class="nav-link" href="{{route('usernamesekolahdisetujui')}}"><i class="fas fa-check-double"></i> <span>Disetujui</span></a></li>
                </ul>
              </li>
              @endif
              @if(Auth::user()->role == 'Admin')
              
              <li class="dropdown {{activelink(['npsnpending','npsnditeruskan','npsnditolak','npsndisetujui'])}}" >
                <a class="nav-link has-dropdown"><i class="fas fa-school"></i> <span>NPSN</span></a>
                <ul class="dropdown-menu" style="display: none;">
                  <li class="{{activelink(['npsnpending'])}}"><a class="nav-link" href="{{route('npsnpending')}}"><i class="fas fa-clock"></i> <span>Pending</span></a></li>
                  <li class="{{activelink(['npsnditeruskan'])}}"><a class="nav-link" href="{{route('npsnditeruskan')}}"><i class="fas fa-check"></i> <span>Diteruskan</span></a></li>
                  <li class="{{activelink(['npsnditolak'])}}"><a class="nav-link" href="{{route('npsnditolak')}}"><i class="fas fa-times"></i> <span>Ditolak</span></a></li>
                  <li class="{{activelink(['npsndisetujui'])}}"><a class="nav-link" href="{{route('npsndisetujui')}}"><i class="fas fa-check-double"></i> <span>Disetujui</span></a></li>
                </ul>
              </li>

              <li class="dropdown {{activelink(['nomenklaturpending','nomenklaturditeruskan','nomenklaturditolak','nomenklaturdisetujui'])}}" >
                <a class="nav-link has-dropdown"><i class="fas fa-book"></i> <span>Nomenklatur</span></a>
                <ul class="dropdown-menu" style="display: none;">
                  <li class="{{activelink(['nomenklaturpending'])}}"><a class="nav-link" href="{{route('nomenklaturpending')}}"><i class="fas fa-clock"></i> <span>Pending</span></a></li>
                  <li class="{{activelink(['nomenklaturditeruskan'])}}"><a class="nav-link" href="{{route('nomenklaturditeruskan')}}"><i class="fas fa-check"></i> <span>Diteruskan</span></a></li>
                  <li class="{{activelink(['nomenklaturditolak'])}}"><a class="nav-link" href="{{route('nomenklaturditolak')}}"><i class="fas fa-times"></i> <span>Ditolak</span></a></li>
                  <li class="{{activelink(['nomenklaturdisetujui'])}}"><a class="nav-link" href="{{route('nomenklaturdisetujui')}}"><i class="fas fa-check-double"></i> <span>Disetujui</span></a></li>
                </ul>
              </li>

              <li class="dropdown {{activelink(['usernamepending','usernamediteruskan','usernameditolak','usernamedisetujui'])}}" >
                <a class="nav-link has-dropdown"><i class="fas fa-users"></i> <span>Username</span></a>
                <ul class="dropdown-menu" style="display: none;">
                <li class="{{activelink(['usernamepending'])}}"><a class="nav-link" href="{{route('usernamepending')}}"><i class="fas fa-clock"></i> <span>Pending</span></a></li>
                  <li class="{{activelink(['usernamediteruskan'])}}"><a class="nav-link" href="{{route('usernamediteruskan')}}"><i class="fas fa-check"></i> <span>Diteruskan</span></a></li>
                  <li class="{{activelink(['usernameditolak'])}}"><a class="nav-link" href="{{route('usernameditolak')}}"><i class="fas fa-times"></i> <span>Ditolak</span></a></li>
                  <li class="{{activelink(['usernamedisetujui'])}}"><a class="nav-link" href="{{route('usernamedisetujui')}}"><i class="fas fa-check-double"></i> <span>Disetujui</span></a></li>
                </ul>
              </li>
              
              @endif

              @if(Auth::user()->role == 'Provinsi')
              
              <li class="dropdown {{activelink(['npsnprovinsi','inputnpsn','npsnselesai'])}}" >
                <a class="nav-link has-dropdown"><i class="fas fa-school"></i> <span>NPSN</span></a>
                <ul class="dropdown-menu" style="display: none;">
                  <li class="{{activelink(['npsnprovinsi'])}}"><a class="nav-link" href="{{route('npsnprovinsi')}}"><i class="fas fa-clock"></i> <span>Permintaan</span></a></li>
                  <li class="{{activelink(['inputnpsn'])}}"><a class="nav-link" href="{{route('inputnpsn')}}"><i class="fas fa-pencil-alt"></i> <span>Input NPSN</span></a></li>
                  <li class="{{activelink(['npsnselesai'])}}"><a class="nav-link" href="{{route('npsnselesai')}}"><i class="fas fa-check-double"></i> <span>Selesai</span></a></li>
                </ul>
              </li>

              
              <li class="dropdown {{activelink(['nomenklaturprovinsi','aktivasi','nomenklaturselesai'])}}" >
                <a class="nav-link has-dropdown"><i class="fas fa-book"></i> <span>Nomenklatur</span></a>
                <ul class="dropdown-menu" style="display: none;">
                <li class="{{activelink(['nomenklaturprovinsi'])}}"><a class="nav-link" href="{{route('nomenklaturprovinsi')}}"><i class="fas fa-clock"></i> <span>Permintaan</span></a></li>
                  <li class="{{activelink(['aktivasi'])}}"><a class="nav-link" href="{{route('aktivasi')}}"><i class="fas fa-pencil-alt"></i> <span>Aktivasi</span></a></li>
                  <li class="{{activelink(['nomenklaturselesai'])}}"><a class="nav-link" href="{{route('nomenklaturselesai')}}"><i class="fas fa-check-double"></i> <span>Selesai</span></a></li>
                </ul>
              </li>

              <li class="dropdown {{activelink(['usernameprovinsi','inputusername','usernameselesai'])}}" >
                <a class="nav-link has-dropdown"><i class="fas fa-users"></i> <span>Username</span></a>
                <ul class="dropdown-menu" style="display: none;">
                <li class="{{activelink(['usernameprovinsi'])}}"><a class="nav-link" href="{{route('usernameprovinsi')}}"><i class="fas fa-clock"></i> <span>Permintaan</span></a></li>
                  <li class="{{activelink(['inputusername'])}}"><a class="nav-link" href="{{route('inputusername')}}"><i class="fas fa-pencil-alt"></i> <span>Aktivasi</span></a></li>
                  <li class="{{activelink(['usernameselesai'])}}"><a class="nav-link" href="{{route('usernameselesai')}}"><i class="fas fa-check-double"></i> <span>Selesai</span></a></li>
                </ul>
              </li>


              @endif
              <li class="{{activelink('pengaturan')}}"><a class="nav-link" href="{{route('pengaturan')}}"><i class="fas fa-user-cog"></i> <span>Pengaturan User</span></a></li>
            
            
            </ul>
            
            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-users-cog"></i>Manajemen User
              </a>
            </div>
        </aside>

        