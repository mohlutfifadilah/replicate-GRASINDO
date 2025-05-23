@extends('template.main')
@section('title', 'GRASINDO')
@section('content')

<div class="container">
    <nav aria-label="breadcrumb" class="mt-4">
        <ol class="breadcrumb bg-white">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Beranda</a></li>
            <li class="breadcrumb-item"><a href="/cek_kuota" class="text-decoration-none">Cek Kuota</a></li>
            <li class="breadcrumb-item active" aria-current="page">Booking</li>
        </ol>
    </nav>
</div>

<div class="container">
    <h2>
        Booking Pendakian
    </h2>
    <form action="{{ route('registrasi', $kuota->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tanggal_naik">Tanggal Naik</label>
                <input type="text" class="form-control" name="tanggal_naik" id="dpd1" data-date-format="yyyy-mm-dd" data-date="{{ $kuota->tanggal }}" value="{{ $kuota->tanggal }}" readonly disabled>
                @if (session('tanggal_naik'))
                <p class="help-text" id="dpd1" style="color: red;">{{ session('tanggal_naik') }}</p>
                @endif
            </div>
            <div class="form-group col-md-6">
                <label for="tanggal_turun">Tanggal Turun</label>
                <input type="text" class="form-control" name="tanggal_turun" id="dpd2" data-date-format="yyyy-mm-dd" data-date="2012-02-20">
                @if (session('tanggal_turun'))
                <p class="help-text" id="tanggal_turun" style="color: red;">{{ session('tanggal_turun') }}</p>
                @endif
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="total_pendaki">Total Pendaki</label>
                <input type="text" class="form-control" name="total_pendaki" id="total_pendaki">
                @if (session('total_pendaki'))
                <p class="help-text" id="total_pendaki" style="color: red;">{{ session('total_pendaki') }}</p>
                @endif
            </div>
        </div>
        <hr>
        <div id="pendaki-container">
            <!-- Konten formulir pendaki akan ditampilkan di sini -->
        </div>
        <div class="d-flex justify-content-end submit button mb-4">
            <a href="/cek_kuota" class="btn btn-md btn-secondary mr-4">Kembali</a>
            <button type="submit" class="btn btn-md text-white" style="background-color: #FF8D21;">Booking</button>
        </div>
    </form>
</div>


@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Script JavaScript
    $(document).ready(function() {
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        // Set nilai otomatis untuk input tanggal naik
        var checkin = $('#dpd1').fdatepicker({
            onRender: function(date) {
                return date.valueOf() < now.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function(ev) {
            if (ev.date) {
                if (ev.date.valueOf() > checkout.date.valueOf()) {
                    var newDate = new Date(ev.date);
                    newDate.setDate(newDate.getDate() + 1);
                    checkout.update(newDate);
                }
                checkin.hide();

                // Jika tanggal naik sudah terisi, tambahkan peristiwa changeDate untuk input tanggal turun
                if ($('#dpd1').val() !== '') {
                    $('#dpd2').on('changeDate', function() {
                        checkout.hide();
                    });
                }
            } else {
                console.error('ev.date is null');
            }
        }).data('datepicker');

        // Ambil nilai tanggal naik dari data-date
        var tanggalNaik = $('#dpd1').data('date');

        // Set nilai tanggal naik dari database ke input tanggal naik
        $('#dpd1').val(tanggalNaik);

        var checkout = $('#dpd2').fdatepicker({
            onRender: function(date) {
                return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
            }
        }).data('datepicker');
    });



    document.addEventListener('DOMContentLoaded', function() {
        // Dapatkan elemen input dan container formulir
        const totalPendakiInput = document.getElementById('total_pendaki');
        const pendakiContainer = document.getElementById('pendaki-container');
        const pendakiInvoice = document.getElementById('pendaki-invoice');

        // Fungsi untuk mengenerate formulir pendaki berdasarkan jumlah total pendaki
        function generatePendakiForms(totalPendaki) {
            pendakiContainer.innerHTML = ''; // Kosongkan container sebelum generate ulang
            for (let i = 1; i <= totalPendaki; i++) {
                // Generate formulir untuk pendaki ke-i
                const pendakiForm = document.createElement('div');
                pendakiForm.classList.add('pendaki-form');
                pendakiForm.innerHTML = `
                    <div class="col-12 col-md-12">
                        <p>Pendaki ${i}</p>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama_pendaki_${i}">Nama Pendaki ${i}</label>
                            <input type="text" class="form-control" name="nama_pendaki_${i}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="usia_pendaki_${i}">Usia Pendaki ${i}</label>
                            <input type="text" class="form-control" name="usia_pendaki_${i}" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="no_telepon_pendaki_${i}">No Telepon Pendaki ${i}</label>
                            <input type="text" class="form-control" name="no_telepon_pendaki_${i}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_telepon_darurat_pendaki_${i}">No Telepon Darurat Pendaki ${i}</label>
                            <input type="text" class="form-control" name="no_telepon_darurat_pendaki_${i}" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="alamat_pendaki_${i}">Alamat Pendaki ${i}</label>
                            <textarea class="form-control" name="alamat_pendaki_${i}" placeholder="" required></textarea>
                        </div>
                    </div>

                `;

                // Tambahkan formulir pendaki ke dalam container
                pendakiContainer.appendChild(pendakiForm);
            }
        }

        // Simpan elemen tombol submit dalam variabel
        const submitButton = document.querySelector('.submit.button');

        // Event listener untuk input total pendaki
        totalPendakiInput.addEventListener('input', function() {
            const totalPendaki = parseInt(totalPendakiInput.value);
            if (!isNaN(totalPendaki) && totalPendaki > 0) {
                generatePendakiForms(totalPendaki);
                // Tampilkan kembali tombol submit setelah mengubah jumlah total pendaki
                submitButton.style.display = 'block';
            } else {
                // Kosongkan container jika input tidak valid
                pendakiContainer.innerHTML = '';
                // Sembunyikan tombol submit jika jumlah total pendaki tidak valid
                submitButton.style.display = 'none';
            }
        });
    });

</script>
@endsection
