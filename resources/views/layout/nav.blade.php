<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{ asset('stisla/assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="features-profile.html" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <div class="dropdown-divider"></div>
                <!-- <a href="#" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a> -->
                <form method="POST" id="logout" action="{{ route('logout') }}">
                    @csrf
                    
                    <a href="#" onclick="document.getElementById('logout').submit()" class="dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                    <!-- <button type="submit">Logout</button> -->
                </form>
            </div>
        </li>
    </ul>
</nav>

<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('dashboard') }}">Gresik Selatan</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('dashboard') }}">GS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            <li><a class="nav-link" href="{{ url('dashboard') }}"><i class="fas fa-chart-line"></i> <span>Dashboard</span></a></li>
            <li><a class="nav-link" href="{{ url('santri') }}"><i class="fas fa-users"></i> <span>Data Santri</span></a></li>
            <li><a class="nav-link" href="{{ url('presensi') }}"><i class="fas fa-calendar-check"></i> <span>Presensi</span></a></li>
        </ul>
    </aside>
</div>
<noscript>
  <input type="submit" value="Submit form!" />
</noscript>