  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/" class="nav-link">Return to webpage</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
            </button>
            </div>
        </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        
        <!-- App Setting -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" alt>
                <i class="fa fa-cog"></i>
                Settings
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-header">App Settings</span>
                <div class="dropdown-divider"></div>
                    <router-link to="/users" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> Users
                    </router-link>
                    <router-link to="/offices" class="dropdown-item">
                        <i class="fas fa-map-marked-alt mr-2"></i> Offices
                    </router-link>
                {{-- <a href="#" class="dropdown-item">
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-map-marked-alt mr-2"></i> Offices
                </a> --}}
            </div>
        </li>
        <!-- Log out -->
        <li class="nav-item">
            {{-- <a class="nav-link" href="#" role="button"><i
                class="fas fa-th-large"></i></a> --}}

            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>
                    Logout
            </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
        </li>
    </ul>
</nav>
<!-- /.navbar -->