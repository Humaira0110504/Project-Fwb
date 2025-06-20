<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\PenyewaanController;
use App\Http\Controllers\BajuSewaController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/beranda', [Dashboard::class, 'index'])->name('beranda');
Route::get('/koleksi', [Dashboard::class, 'koleksi1'])->name('koleksi');

// Registrasi
Route::get('/register-penyewa', [AuthController::class, 'tampilRegistrasi'])->name('register.penyewa');
Route::post('/register/penyewa', [AuthController::class, 'submitRegisterPenyewa'])->name('submit.penyewa');
Route::get('/register-pemiliktoko', [AuthController::class, 'tampilRegistrasiPemiliktoko']);
Route::post('/register/pemiliktoko', [AuthController::class, 'submitRegisterPemiliktoko']);
Route::get('/profil', [Dashboard::class, 'Profil'])->name('profil');


// Login & Logout
Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login');
Route::post('/login', [AuthController::class, 'submitLogin'])->name('login.submit');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// admin
 Route::get('/dashboard-admin', [AdminController::class, 'dashboardAdmin'])->name('admin.dashboard');
 Route::get('/dashboard-toko', [TokoController::class, 'dashboardToko'])->name('toko.dashboard');
//  Route::middleware(['auth', 'pemilik'])->prefix('pemiliktoko')->group(function () 
// // }
Route::get('/admin/lihat-kategori', [AdminController::class, 'lihatKategori'])->name('lihat-kategori');
Route::get('/admin/tambah-kategori', [AdminController::class, 'TambahKategori'])->name('tambah-kategori');
Route::post('/simpan-kategori', [AdminController::class, 'simpanKategori'])->name('simpan-kategori');
Route::get('admin/edit-kategori/{id}', [AdminController::class, 'editKategori'])->name('edit-kategori');
Route::delete('/hapus-kategori/{id}', [AdminController::class, 'hapusKategori'])->name('hapus-kategori');
Route::put('/update-kategori/{id}', [AdminController::class, 'updateKategori'])->name('update-kategori');


Route::get('/baju/tambah', [TokoController::class, 'tambahBaju'])->name('pemiliktoko.tambah-baju');
Route::post('/baju/simpan', [TokoController::class, 'simpan'])->name('baju.simpan');
Route::get('/lihat-baju', [TokoController::class, 'lihatBaju'])->name('lihat-baju');
Route::get('/baju/detail/{id}', [TokoController::class, 'detailBaju'])->name('baju.detail');

