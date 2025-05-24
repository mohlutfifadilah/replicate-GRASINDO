@extends('template.main')
@section('title', 'GRASINDO')
@section('content')

<div class="container">
    <nav aria-label="breadcrumb" class="mt-4">
        <ol class="breadcrumb bg-white">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profil</li>
        </ol>
    </nav>
</div>

<div class="container">
    <h2>
        Profil Akun
    </h2>
    <div class="row">
        <div class="col-md-3">
            <dl class="row">
                <dt class="col-sm-6">Kode Pendaki</dt>
                <dd class="col-sm-6">{{ $user->kode_pendaki }}</dd>
            </dl>
        </div>
        <div class="col-md-5">
            <dl class="row">
                <dt class="col-sm-5">Nama Lengkap</dt>
                <dd class="col-sm-7">{{ $user->nama_lengkap }}</dd>

                <dt class="col-sm-5">No Identitas</dt>
                <dd class="col-sm-7">[{{ $jenis->jenis_identitas }}]{{ $user->nomor_identitas }}</dd>

                <dt class="col-sm-5">Alamat</dt>
                <dd class="col-sm-7">{{ $user->alamat }}</dd>

                <dt class="col-sm-5">No Telepon</dt>
                <dd class="col-sm-7">{{ $user->no_telepon }}</dd>

            </dl>
        </div>
        <div class="col-md-4">
            <dl class="row">
                <dt class="col-sm-6">Email</dt>
                <dd class="col-sm-6">{{ $user->email }}</dd>

                <dt class="col-sm-6">Usia</dt>
                <dd class="col-sm-6">{{ $user->usia }}</dd>

                <dt class="col-sm-6">Berat Badan</dt>
                <dd class="col-sm-6">{{ $user->berat_badan }}</dd>

                <dt class="col-sm-6">Tinggi Badan</dt>
                <dd class="col-sm-6">{{ $user->tinggi_badan }}</dd>
            </dl>
        </div>
    </div>
</div>


@endsection
@section('script')
@endsection
