<nav class="navbar navbar-expand-lg py-0 my-0">
    <div class="container">
        <a class="navbar-brand" href="/"><img class="img-fluid" src="{{ asset('storage/assets/image/logo.png') }}" alt="Logo"></a>
        {{-- <span class="mt-1 text-white">Grasindo</span> --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::segment(1) === null ? 'active' : '' }}"><a class="nav-link" href="/">Beranda</a></li>
                <li class="nav-item {{ Request::segment(1) === 'panduan' ? 'active' : '' }}"><a class="nav-link" href="/panduan">Panduan Booking</a></li>
                <li class="nav-item {{ Request::segment(1) === 'sop' ? 'active' : '' }}"><a class="nav-link" href="/sop">S.O.P</a></li>
                <li class="nav-item {{ Request::segment(1) === 'cek_kuota' ? 'active' : '' }}"><a class="nav-link" href="/cek_kuota">Cek Kuota</a></li>
                @if (Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->nama_lengkap }}
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('profil') }}">Profil</a>
                            <a class="dropdown-item" href="{{ route('booking') }}">Booking</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                        </div>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link btn btn-md text-decoration-none btn-light" style="color: #FF8D21; font-size: 14px;" href="/login">Login</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
