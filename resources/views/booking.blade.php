@extends('template.main')
@section('title', 'GRASINDO')
@section('content')

<div class="container">
    <nav aria-label="breadcrumb" class="mt-4">
        <ol class="breadcrumb bg-white">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Booking</li>
        </ol>
    </nav>
</div>

<div class="container-fluid">
    {{-- <img src="{{ asset('alur-booking.png') }}" alt="" width="1350" height="640"
        style="margin-left: auto; margin-right: auto; display: block; margin-top: 20px;"> --}}
    <div class="row">
        <div class="col-md-12">
            <h2>Dalam Proses</h2>
                <div class="table-responsive">
                    @if ($pendaftar_first)
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Kode Pendaki</th>
                                    <th>Tanggal Naik</th>
                                    <th>Tanggal Turun</th>
                                    <th>Total Harga</th>
                                    <th>Registrasi</th>
                                    <th>Status</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div id="accordion">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link" data-toggle="collapse" data-target="#{{ $pendaftar_first->kode_pendaki }}"
                                                            aria-expanded="true" aria-controls="{{ $pendaftar_first->kode_pendaki }}">
                                                            {{ $pendaftar_first->kode_pendaki }}
                                                        </button>
                                                    </h5>
                                                </div>

                                                <div id="{{ $pendaftar_first->kode_pendaki }}" class="collapse show" aria-labelledby="headingOne"
                                                    data-parent="#accordion">
                                                    <div class="card-body">
                                                        <table class="table table-bordered" width="100%" cellspacing="0">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nama</th>
                                                                    <th>Usia</th>
                                                                    <th>No Telepon / Darurat</th>
                                                                    <th>Alamat</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($pendaftar as $p)
                                                                <tr>
                                                                    <td>{{ $p->nama }}</td>
                                                                    <td>{{ $p->usia }}</td>
                                                                    <td>{{ $p->no_telepon }} / {{ $p->no_telepon_darurat }}</td>
                                                                    <td>{{ $p->alamat }}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $pendaftar_first->tanggal_naik }}</td>
                                    <td>{{ $pendaftar_first->tanggal_turun }}</td>
                                    <td>Rp. {{ number_format($harga * $count_pendaftar, 0, ',', '.') }}</td>
                                    <td>{{ $pendaftar_first->created_at }}</td>
                                    <td>
                                        @if (is_null($pendaftar_first->bukti))
                                            <span class="badge badge-pill badge-warning text-white" style="font-size: 11px;">Belum Lunas</span>
                                        @else
                                            <span class="badge badge-pill badge-success" style="font-size: 11px;">Lunas</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('bayar', $pendaftar_first->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary btn-sm alert p-3" data-toggle="modal" data-target="#bukti">
                                                <i class="fas fa-ticket-alt"></i> Bayar
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="bukti" tabindex="-1" role="dialog" aria-labelledby="buktiTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Pembayaran</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="text-left">
                                                                <p>Pembayaran dikirim melalui :</p>
                                                                <ol>
                                                                    <li>Bank BRI : 0932 2198 0983 (Maman)</li>
                                                                    <li>Bank BRI : 0932 2198 0983 (Maman)</li>
                                                                    <li>Bank BRI : 0932 2198 0983 (Maman)</li>
                                                                </ol>
                                                            </div>
                                                            <br>
                                                            <div class="form-group text-center">
                                                                <label for="bukti">Upload Bukti Pembayaran</label>
                                                                <input type="file" class="form-control-file" id="bukti" name="bukti">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                            <button type="submit" class="btn btn-primary">Kirim</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <form id="delete-form-{{ $pendaftar_first->id }}" action="{{ route('hapus_booking', $pendaftar_first->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" href="{{ route('hapus_booking', $pendaftar_first->id) }}" class="btn btn-danger btn-sm alert"
                                                onclick="confirmDelete({{ $pendaftar_first->id }}, 'Booking')"><i class="fas fa-trash"></i> Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    @else
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="100%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tidak ada registrasi</td>
                                </tr>
                            </tbody>
                        </table>
                    @endif
                </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2>Riwayat Pendakian</h2>
                <div class="table-responsive">
                    @if ($riwayat_first)
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Kode Pendaki</th>
                                    <th>Tanggal Naik</th>
                                    <th>Tanggal Turun</th>
                                    <th>Total Harga</th>
                                    <th>Registrasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div id="accordion">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link" data-toggle="collapse" data-target="#{{ $riwayat_first->kode_pendaki }}"
                                                            aria-expanded="true" aria-controls="{{ $riwayat_first->kode_pendaki }}">
                                                            {{ $riwayat_first->kode_pendaki }}
                                                        </button>
                                                    </h5>
                                                </div>

                                                <div id="{{ $riwayat_first->kode_pendaki }}" class="collapse show" aria-labelledby="headingOne"
                                                    data-parent="#accordion">
                                                    <div class="card-body">
                                                        <table class="table table-bordered" width="100%" cellspacing="0">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nama</th>
                                                                    <th>Usia</th>
                                                                    <th>No Telepon / Darurat</th>
                                                                    <th>Alamat</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($riwayat as $p)
                                                                <tr>
                                                                    <td>{{ $p->nama }}</td>
                                                                    <td>{{ $p->usia }}</td>
                                                                    <td>{{ $p->no_telepon }} / {{ $p->no_telepon_darurat }}</td>
                                                                    <td>{{ $p->alamat }}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $riwayat_first->tanggal_naik }}</td>
                                    <td>{{ $riwayat_first->tanggal_turun }}</td>
                                    <td>Rp. {{ number_format($harga * $count_riwayat, 0, ',', '.') }}</td>
                                    <td>{{ $riwayat_first->created_at }}</td>
                                </tr>
                            </tbody>
                        </table>
                    @else
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="100%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tidak ada registrasi</td>
                                </tr>
                            </tbody>
                        </table>
                    @endif
                </div>
        </div>
    </div>
</div>


@endsection
@section('script')
<script>
    function confirmDelete(userId, what) {
        Swal.fire({
            title: 'Hapus ' + what,
            text: "Yakin akan menghapus ini ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + userId).submit();
            }
        });
    }
</script>
@endsection
