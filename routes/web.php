<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PemasanganController;
use App\Http\Controllers\PemutusanController;
use App\Http\Controllers\Admin\PelangganController;
use App\Http\Controllers\Admin\PenggunaanController;
use App\Http\Controllers\Admin\TagihanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/login', [LoginController::class, "index"])->name("login");
Route::post('/login-process', [LoginController::class, "login"])->name("dologin");

Route::get('/register', [RegisterController::class, "index"])->name("register");
Route::post('/register-process', [RegisterController::class, "register"])->name("doregister");

Route::get('/logout', [LoginController::class, "logout"])->name("logout");

Route::group(['middleware' => ['auth', 'user']], function(){
    Route::get('/', [HomeController::class, "index"])->name("home");
    Route::get('/about-us', [HomeController::class, "aboutUs"])->name("aboutus");
    Route::get('/request-pemasangan', [HomeController::class, "pemasangan"])->name("request_pasang");
    Route::get('/request-pemutusan', [HomeController::class, "pemutusan"])->name("request_pemutusan");
    Route::get('/history-pembayaran', [HomeController::class, "pembayaran"])->name("pembayaran");
    Route::resource('/pemasangan', PemasanganController::class);
    Route::resource('/pemutusan', PemutusanController::class);
    Route::get('invoice/{id}', [HomeController::class, 'invoice']);
});

Route::group(['middleware' => ['auth', 'admin']], function(){
    Route::get('/admin', [DashboardController::class, "index"])->name("admin");
    Route::get('/admin/pemasangan', [PemasanganController::class, "index"])->name("admin_pemasangan");
    Route::get('/admin/pemutusan', [PemutusanController::class, "index"])->name("admin_pemutusan");
    Route::post('/admin/pemutusanpelanggan', [PemutusanController::class, "pemutusanPelanggan"])->name("dopemutusan");
    Route::post('/admin/pemasangan/createpelanggan', [PemasanganController::class, "pelanggan"])->name('create_pelanggan');
    Route::get('/admin/pemasangan/hapus/{id}', [PemasanganController::class, "hapuspemasangan"])->name('reject_pemasangan');
    Route::get('/admin/pemutusan/hapus/{id}', [PemutusanController::class, "tolakpemutusan"])->name('reject_pemutusan');
    Route::get('/admin/pelanggan', [PelangganController::class, "index"])->name("pelanggan");
    Route::get('admin/pelanggan/delete-pelanggan/{id}', [PelangganController::class, 'delete'])->name('delete_pelanggan');
    Route::get('admin/penggunaan/delete-penggunaan/{id}', [PenggunaanController::class, 'delete'])->name('delete_penggunaan');
    Route::get('admin/penggunaan/edit-penggunaan/{id}', [PenggunaanController::class, 'edit'])->name('edit_penggunaan');
    Route::post('admin/penggunaan/post-edit-penggunaan', [PenggunaanController::class, 'update'])->name('update_penggunaan');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    Route::resource('admin/penggunaan', PenggunaanController::class);
    Route::resource('admin/tagihan', TagihanController::class);
    Route::get('/admin/laporan', [LaporanController::class, "index"])->name("laporan");
    Route::post('/admin/cetaklaporan', [LaporanController::class, "printPaymentReports"])->name('cetak_laporan');
});
