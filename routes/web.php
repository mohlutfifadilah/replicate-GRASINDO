<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BlacklistController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdentitasController;
use App\Http\Controllers\KewarganegaraanController;
use App\Http\Controllers\KuotaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\UsersController;
use App\Models\Identitas;
use App\Models\Kewarganegaraan;
use App\Models\Kuota;
use App\Models\User;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('app');

Route::get('/panduan', function () {
    return view('panduan');
});

Route::get('/sop', function () {
    $user = User::whereNotNull('kode_pendaki')->where('status', '=', 0)->get();
    return view('sop', compact('user'));
});

Route::get('/cek_kuota', function () {
    // Ambil tanggal sekarang
    $today = now();

    // Ambil tanggal akhir bulan
    $endOfMonth = $today->endOfMonth();
    // Ambil semua data kuota yang memiliki tanggal naik di antara tanggal sekarang dan akhir bulan
    $kuota = Kuota::whereBetween('tanggal', [now()->toDateString(), $endOfMonth->toDateString()])->get();

    return view('kuota', compact('kuota'));
});

// Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
Route::get('/booking', [BookingController::class, 'index'])->name('booking');
Route::get('/booking/{id}', [BookingController::class, 'booking'])->name('bookingg');
Route::delete('/hapus_booking/{id}', [BookingController::class, 'delete'])->name('hapus_booking');
Route::post('/registrasi/{id}', [BookingController::class, 'registrasi'])->name('registrasi');

# Login

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'post_login'])->name('post_login');
Route::get('/register', function () {
    $segment = Request::segment(1);
    if ($segment === null) {
        $segment = 'beranda';
    }
    $kw = Kewarganegaraan::all();
    $identitas = Identitas::all();
    return view('daftar', [
        'segment' => $segment,
        'kw' => $kw,
        'identitas' => $identitas
    ]);
})->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
Route::get('/booking', [BookingController::class, 'index'])->name('booking');
Route::get('/booking/{id}', [BookingController::class, 'booking'])->name('bookingg');
Route::post('/registrasi/{id}', [BookingController::class, 'registrasi'])->name('registrasi');
Route::post('/bayar/{id}', [BookingController::class, 'bayar'])->name('bayar');
Route::delete('/hapus_booking/{id}', [BookingController::class, 'delete'])->name('hapus_booking');

# Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


# Admin
Route::get('/dashboard',  [DashboardController::class, 'index']);
Route::resource('users', UsersController::class);
Route::resource('blacklist', BlacklistController::class);
Route::resource('kewarganegaraan', KewarganegaraanController::class);
Route::resource('identitas', IdentitasController::class);
Route::resource('berita', BeritaController::class);
Route::resource('kuota', KuotaController::class);
Route::resource('pendaftar', PendaftarController::class);
Route::resource('riwayat', RiwayatController::class);

// Tambahkan route untuk URI yang diinginkan
Route::get('/is_verified/{id}', [UsersController::class, 'verifyUser'])->name('is_verified');
Route::get('/is_blacklist/{id}', [UsersController::class, 'blacklistUser'])->name('is_blacklist');
Route::get('/is_success/{id}', [PendaftarController::class, 'success'])->name('is_success');
