<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-light border-bottom" style="background-color: {{$navcolor}}">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>

    </ul>

    <!-- SEARCH FORM -->
    {{--//... <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="搜索" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
    <i class="fa fa-search"></i>
  </button>
            </div>
        </div>
    </form> --}}

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item ">
            <a class="nav-link"  href="{{ route('myprofile') }}">
                <i class="fa fa-user"></i>
                {{-- <span class="badge badge-danger navbar-badge">3</span> --}}
            </a>            
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item ">
            <a class="nav-link"  href="{{ route('logout') }}"
                onclick="event.preventDefault();   document.getElementById('logout-form').submit();">

                <i class="fa  fa-power-off"></i>
                {{-- <span class="badge badge-warning navbar-badge">15</span> --}}

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </a>            
        </li>
    </ul>
</nav>
<!-- /.navbar -->