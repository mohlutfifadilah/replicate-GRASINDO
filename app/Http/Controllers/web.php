<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UsersController;
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


# Login

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'post_login'])->name('post_login');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

# Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


# Admin
Route::get('/dashboard',  [DashboardController::class, 'index']);
Route::resource('users', UsersController::class);
// Route::resource('blacklist', BlacklistController::class);
// Route::resource('kewarganegaraan', KewarganegaraanController::class);
// Route::resource('identitas', IdentitasController::class);
// Route::resource('berita', BeritaController::class);
// Route::resource('kuota', KuotaController::class);
// Route::resource('pendaftar', PendaftarController::class);
// Route::resource('riwayat', RiwayatController::class);
