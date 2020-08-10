<nav class="main-header navbar navbar-expand navbar-primary navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('notas.index')}}" class="nav-link">
                <i class="nav-icon fas fa-clipboard"></i> Notas
            </a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    {{-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> --}}

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-user-circle"></i>
                <span class="">Perfil</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="{{route('login.login')}}" class="dropdown-item">
                    <i class="fas fa-sign-in-alt mr-2"></i>Entrar
                </a>
                <a href="{{route('login.logout')}}" class="dropdown-item">
                    <i class="fas fa-sign-out-alt mr-2"></i>Salir
                </a>
                @if(session()->get("roles") && count(session()->get("roles")) > 1)
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item cambiar-rol">
                        <i class="fas fa-person-booth mr-2"></i> Cambiar Rol
                    </a>                    
                @endif
            </div>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->