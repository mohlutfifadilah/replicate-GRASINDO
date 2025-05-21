@extends('template.main')
@section('title', 'GRASINDO')
@section('content')

<div class="container">
    <nav aria-label="breadcrumb" class="mt-4">
        <ol class="breadcrumb bg-white">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cek Kuota</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Kuota</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kuota as $k)
                <tr>
                    <td>{{ \Carbon\Carbon::parse($k->tanggal)->format('d-m-Y') }}</td>
                    <td>{{ $k->kuota_sisa }} / {{ $k->kuota_full }}</td>
                    <td>
                        @if ($k->kuota_sisa === $k->kuota_full)
                            <span class="badge badge-danger">Penuh</span>
                        @else
                            <span class="badge badge-success">Tersedia</span>
                        @endif
                    </td>
                    <td>
                        @if ($k->kuota_sisa === $k->kuota_full)
                        <p>-</p>
                        @else
                        <a class="btn btn-sm btn-primary" href="{{ route('bookingg', $k->id) }}">Booking</a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
@section('script')
<script>
</script>
@endsection
