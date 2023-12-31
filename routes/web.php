<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\LaporanMasukController;
use App\Http\Controllers\LaporanKeluarController;
use App\Http\Controllers\TransaksiMasukController;
use App\Http\Controllers\TransaksiKeluarController;

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

// Login dan logout
Route::get('/', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

// Halaman utama
Route::get('/home', [HomeController::class, 'index'])->middleware('auth');

// Barang
Route::get('/listBarang', [BarangController::class, 'index'])->middleware('auth');
Route::get('/getOneBarang/{id}', [BarangController::class, 'getById'])->middleware('auth');
Route::put('/barang/update', [BarangController::class, 'update'])->middleware('auth');
Route::resource('/barang', BarangController::class)->middleware('auth');

// Supplier
Route::get('/listSupplier', [SupplierController::class, 'index'])->middleware('auth');
Route::put('/supplier/update', [SupplierController::class, 'update'])->middleware('auth');
Route::resource('/supplier', SupplierController::class)->middleware('auth');

// Kategori
Route::get('/listKategori', [KategoriController::class, 'index'])->middleware('auth');
Route::resource('/kategori', KategoriController::class)->middleware('auth');

// Satuan
Route::get('/listSatuan', [SatuanController::class, 'index'])->middleware('auth');
Route::resource('/satuan', SatuanController::class)->middleware('auth');

// barang masuk
Route::get('/inputMasuk', [TransaksiMasukController::class, 'index'])->middleware('auth');
Route::get('/reportMasuk', [TransaksiMasukController::class, 'transIn'])->middleware('auth');
Route::get('/download-pdf-in', [TransaksiMasukController::class, 'printTransIn'])->middleware('auth');
Route::resource('/barang/masuk', TransaksiMasukController::class)->middleware('auth');

// barang keluar
Route::get('/inputKeluar', [TransaksiKeluarController::class, 'index'])->middleware('auth');
Route::get('/reportKeluar', [TransaksiKeluarController::class, 'transOut'])->middleware('auth');
Route::get('/download-pdf-out', [TransaksiKeluarController::class, 'printTransOut'])->middleware('auth');
Route::resource('/barang/keluar', TransaksiKeluarController::class)->middleware('auth');

// User
Route::get('/listUser', [UserController::class, 'index'])->middleware('auth');
Route::resource('/user/tambah', UserController::class)->middleware('auth');

// Dokumentasi
Route::get('/about', function () {
    return view('welcome');
});
