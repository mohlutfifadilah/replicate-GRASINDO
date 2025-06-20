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
                                                        <b>Kategori : {{ $pendaftar_first->kategori }}</b> <br>
                                                        <b>Pesan : </b>{{ $pendaftar_first->pesan }}
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
                                        @if (!$pendaftar_first->kategori)
                                            <form action="{{ route('survey', $pendaftar_first->id) }}" method="post">
                                                @csrf
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-info btn-sm alert p-3" data-toggle="modal" data-target="#survey">
                                                    <i class="fas fa-poll-h"></i> Survey
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="survey" tabindex="-1" role="dialog" aria-labelledby="surveyTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Survey</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-row text-left">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="pernah_mendaki">Pernah mendaki sebelumnya ?</label>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="pernah_mendaki" id="pernah_mendaki_1" value="1">
                                                                            <label class="form-check-label" for="pernah_mendaki_1">Pernah</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="pernah_mendaki" id="pernah_mendaki_0" value="0">
                                                                            <label class="form-check-label" for="pernah_mendaki_0">Tidak Pernah</label>
                                                                        </div>
                                                                        @if (session('pernah_mendaki'))
                                                                            <p class="help-text" id="pernah_mendaki" style="color: red;">{{ session('pernah_mendaki') }}</p>
                                                                        @endif
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="jumlah_pendakian">Berapa kali mendaki ?</label>
                                                                        <input type="text" class="form-control" id="jumlah_pendakian" name="jumlah_pendakian" disabled>
                                                                        @if (session('jumlah_pendakian'))
                                                                            <p class="help-text" id="jumlah_pendakian" style="color: red;">{{ session('jumlah_pendakian') }}</p>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="form-row text-left">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="diatas_2000">Pernah ke ketinggian > 2000 Mdpl ?</label>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="diatas_2000" id="diatas_2000_1" value="1">
                                                                            <label class="form-check-label" for="diatas_2000_1">Pernah</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="diatas_2000" id="diatas_2000_0" value="0">
                                                                            <label class="form-check-label" for="diatas_2000_0">Tidak Pernah</label>
                                                                        </div>
                                                                        @if (session('diatas_2000'))
                                                                            <p class="help-text" id="diatas_2000" style="color: red;">{{ session('diatas_2000') }}</p>
                                                                        @endif
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="bawa_beban">Pernah berjalan membawa beban ?</label>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="bawa_beban" id="bawa_beban_1" value="1">
                                                                            <label class="form-check-label" for="bawa_beban_1">Pernah</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="bawa_beban" id="bawa_beban_0" value="0">
                                                                            <label class="form-check-label" for="bawa_beban_0">Tidak Pernah</label>
                                                                        </div>
                                                                        @if (session('bawa_beban'))
                                                                            <p class="help-text" id="bawa_beban" style="color: red;">{{ session('bawa_beban') }}</p>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="form-row text-left">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="pernah_inap">Pernah berkemah diketinggian ?</label>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="pernah_inap" id="pernah_inap_1" value="1">
                                                                            <label class="form-check-label" for="pernah_inap_1">Pernah</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="pernah_inap" id="pernah_inap_0" value="0">
                                                                            <label class="form-check-label" for="pernah_inap_0">Tidak Pernah</label>
                                                                        </div>
                                                                        @if (session('pernah_inap'))
                                                                            <p class="help-text" id="pernah_inap" style="color: red;">{{ session('pernah_inap') }}</p>
                                                                        @endif
                                                                    </div>
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
                                        @else

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
                                        @endif
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

    document.addEventListener("DOMContentLoaded", function() {
        const pernahRadio = document.getElementById("pernah_mendaki_1");
        const tidakPernahRadio = document.getElementById("pernah_mendaki_0");
        const jumlahPendakian = document.getElementById("jumlah_pendakian");

        // Saat load, pastikan jumlah pendakian disabled
        jumlahPendakian.disabled = true;

        pernahRadio.addEventListener("change", function() {
            if (this.checked) {
                jumlahPendakian.disabled = false;
            }
        });

        tidakPernahRadio.addEventListener("change", function() {
            if (this.checked) {
                jumlahPendakian.disabled = true;
                jumlahPendakian.value = ""; // kosongkan isinya
            }
        });
    });
</script>
@endsection
