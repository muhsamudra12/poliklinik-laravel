<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ================= ADMIN =================
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/polis', function () { return 'Halaman Poli (belum dibuat)'; })->name('polis.index');
    Route::get('/dokter', function () { return 'Halaman Dokter (belum dibuat)'; })->name('dokter.index');
    Route::get('/pasien', function () { return 'Halaman Pasien (belum dibuat)'; })->name('pasien.index');
    Route::get('/obat', function () { return 'Halaman Obat (belum dibuat)'; })->name('obat.index');
});

// ================= DOKTER =================
Route::middleware(['auth', 'role:dokter'])->prefix('dokter')->group(function () {
    Route::get('/dashboard', function () {
        return view('dokter.dashboard');
    })->name('dokter.dashboard');

    Route::get('/jadwal-periksa', function () { return 'Halaman Jadwal Periksa (belum dibuat)'; })->name('jadwal-periksa.index');
    Route::get('/periksa-pasien', function () { return 'Halaman Periksa Pasien (belum dibuat)'; })->name('periksa-pasien.index');
    Route::get('/riwayat-pasien', function () { return 'Halaman Riwayat Pasien (belum dibuat)'; })->name('riwayat-pasien.index');
});

// ================= PASIEN =================
Route::middleware(['auth', 'role:pasien'])->prefix('pasien')->group(function () {
    Route::get('/dashboard', function () {
        return view('pasien.dashboard');
    })->name('pasien.dashboard');

    Route::get('/daftar', function () { return 'Halaman Daftar Poli (belum dibuat)'; })->name('pasien.daftar');
});