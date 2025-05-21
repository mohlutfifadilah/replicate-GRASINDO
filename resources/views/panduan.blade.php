@extends('template.main')
@section('title', 'GRASINDO')
@section('content')

<div class="container">
    <nav aria-label="breadcrumb" class="mt-4">
        <ol class="breadcrumb bg-white">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Panduan Booking</li>
        </ol>
    </nav>
</div>

<div class="container">
    <h2>
        Panduan Booking : Gunung Sindoro via Kledung
    </h2>
    {{-- <img src="{{ asset('alur-booking.png') }}" alt="" width="1350" height="640" style="margin-left: auto; margin-right: auto; display: block; margin-top: 20px;"> --}}
    <ol>
        <li>
            <h6>Registrasi Akun Pendaki</h6>
            <ol style="list-style-type: lower-alpha;">
                <li>Masuk ke website GRASINDO atau Gunung Sindoro via Kledung Klik "Login".</li>
                <li>Klik "Login" pada menu website paling kanan.</li>
                <li>Klik "Daftar" jika belum memiliki akun.</li>
                <li>Isi data form registrasi dengan valid.</li>
                <li>Pilih identitas (KTP/SIM/Kartu Pelajar/Passport/Kitas) yang mudah terbaca dan upload scan identitasnya.</li>
                <li>Pastikan Email Anda valid, Nomor HP yang Anda daftarkan mempunyai nomor Whatsapp.</li>
                <li>Buat Username dan password yang mudah diingat.</li>
                <li>Setelah klik "Daftar",Admin Basecamp Gunung Sindoro via Kledung akan melakukan verifikasi data
                    pendaftaran.</li>
                <li>Jika ada data tidak valid yang perlu diperbaiki, maka akan dikirimkan informasi perbaikan dan link form
                    perbaikan data via Whatsapp untuk selanjutnya bisa diperbaiki oleh calon pendaki.</li>
                <li>Setelah selesai perbaikan data, maka form isian bisa disubmit kembali.</li>
                <li>Akun dan kode pendaki akan aktif setelah dilakukan verifikasi oleh Admin Basecamp.</li>
                <li>Data Akun Pendaki bisa digunakan untuk login via Web.</li>
                <li>Kode Pendaki digunakan saat booking online untuk mendaftarkan pendaki menjadi anggota rombongan.</li>
            </ol>
        </li>
        <li style="margin-top: 20px;">
            <h6>Booking Online</h6><br>
            {{-- <img src="{{ asset('alur-booking.png') }}" alt="" width="1350" height="640" style="margin-left: auto; margin-right: auto; display: block; margin-top: 20px;"> --}}
            <ol style="list-style-type: lower-alpha;">
                <li>Buka halaman resmi Booking Online Pendakian Gunung Sindoro via Kledung.</li>
                <li>Login menggunakan akun pendaki anda.</li>
                <li>Klik "Booking", Anda akan masuk ke halaman Booking pendakian.</li>
                <li>Pastikan kuota masih ada pada Menu Cek Kuota.</li>
                <li>Pastikan anggota rombongan yang akan ikut dalam pendakian dalam kondisi sehat.</li>
                <li>Pilih tanggal naik dan turun pendakian, kemudian masukan jumlah anggota pada formulir pendakian dengan
                    data yang sesuai.</li>
                <li>Pastikan kembali data booking Anda!</li>
                <li>Setelah data sudah sesuai, klik tombol "Submit".</li>
                <li>Lalu pergi ke halaman riwayat booking pada profil sebelah pojok kanan untuk melihat biaya yang perlu di
                    bayarkan nantinya pada basecamp pendakian.</li>
                <li>Pembayaran dibayarkan dengan cara Transfer.</li>
                <li>Jika pembayaran melalui transfer, Silakan lanjutkan proses pembayaran melalui ATM, i-Banking, m-Banking,
                    atau teller BRI. Virtual Account juga dapat dibayarkan melalui bank lain selain Bank BRI dengan biaya
                    transfer bank sesuai dengan kebijakan masing-masing Bank.</li>
                <li>Harap mengirimkan bukti transfer melalui Whatsapp ketua rombongan terdaftar. Nomor Whatsapp basecamp
                    dapat dilihat di halaman paling bawah website atau hubungi WA : 0822-2162-4217 (Basecamp)</li>
            </ol>
        </li>
        <li style="margin-top: 20px;">
            <h6>Pembatalan Booking</h6>
            <ol style="list-style-type: lower-alpha;">
                <li>Buka halaman resmi Booking Online Pendakian Gunung Sindoro via Kledung.</li>
                <li>Login menggunakan akun pendaki anda.</li>
                <li>Lalu pergi ke halaman riwayat booking pada profil sebelah pojok kanan untuk melihat riwayat booking
                    pendakian.</li>
                <li>Pada riwayat booking, Klik "Batal" pada opsi sebelah kanan riwayat booking.</li>
                <li>Saat muncul notifikasi klik "Ok"</li>
                <li>Data booking anda berhasil dibatalkan.</li>
            </ol>
        </li>
        <li style="margin-top: 20px;">
            <h6>Mulai Pendakian</h6>
            <ol style="list-style-type: lower-alpha;">
                <li>Tunjukan kode pendaki ke petugas basecamp jalur pendakian untuk dilakukan pemeriksaan kode dan validasi
                    data.</li>
                <li>Cek barang bawaan oleh petugas basecamp.</li>
                <li>Pendaki dipersilakan memulai pendakian.</li>
            </ol>
        </li>
        <li style="margin-top: 20px;">
            <h6>Selesai Pendakian</h6>
            <ol style="list-style-type: lower-alpha;">
                <li>Pastikan barang bawaan dan sampah dibawa turun bersama.</li>
                <li>Cek barang bawaan oleh petugas jalur pendakian.</li>
                <li>Pendaki dipersilakan untuk pulang.</li>
            </ol>
        </li>
    </ol>
</div>


@endsection
@section('script')
<script>
</script>
@endsection
