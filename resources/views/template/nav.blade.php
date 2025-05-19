<nav id="{{ Request::segment(1) === null ? 'navbar-main' : 'navbar' }}" class="{{ Request::segment(1) === null ? ' navbar navbar-main' : 'navbar navbar-child' }} navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ asset('logo.png') }}" alt="Logo"></a> <span class="mt-1 text-white">Grasindo</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::segment(1) === null ? 'active' : '' }}"><a class="nav-link" href="/">Beranda</a></li>
                <li class="nav-item {{ Request::segment(1) === 'panduan' ? 'active' : '' }}"><a class="nav-link" href="/panduan">Panduan Booking</a></li>
                <li class="nav-item {{ Request::segment(1) === 'sop' ? 'active' : '' }}"><a class="nav-link" href="/sop">S.O.P</a></li>
                <li class="nav-item {{ Request::segment(1) === 'cek_kuota' ? 'active' : '' }}"><a class="nav-link" href="/cek_kuota">Cek Kuota</a></li>
            </ul>
        </div>
    </div>
</nav>
