<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/beranda', [Dashboard::class, 'index'])->name('beranda');

// Registrasi
Route::get('/register-penyewa', [AuthController::class, 'tampilRegistrasi'])->name('register.penyewa');
Route::post('/register/penyewa', [AuthController::class, 'submitRegisterPenyewa'])->name('submit.penyewa');
Route::get('/register-pemiliktoko', [AuthController::class, 'tampilRegistrasiPemiliktoko']);
Route::post('/register/pemiliktoko', [AuthController::class, 'submitRegisterPemiliktoko']);


// Login & Logout
Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login');
Route::post('/login', [AuthController::class, 'submitLogin'])->name('login.submit');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// admin
 Route::get('/dashboard-admin', [AdminController::class, 'dashboardAdmin'])->name('admin.dashboard');