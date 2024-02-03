<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\TransPBBController;
use App\Http\Controllers\DetailController;


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

Route::get('/', [DashController::class, 'main']);

// Route::get('gudangbaut', [DashController::class, 'gudangbaut']);

// Gudang
Route::get('gudang', [GudangController::class, 'gudang'])->name('gudang');
//bisa begini, bisa juga seperti yang di bawah pada route barang
Route::get('creategudang', [GudangController::class, 'create']);
Route::post('addgudang', [GudangController::class, 'tambahgudang']);


// Barang
Route::get('barang', [BarangController::class, 'index']);
Route::get('addbarang', [BarangController::class, 'tambahbarang']);
Route::post('create', [BarangController::class, 'createbarang']);

// Transaksi PBB
Route::get('transpbb', [TransPBBController::class, 'index']);
Route::get('addtranspbb', [TransPBBController::class, 'tambahtrans']);
Route::post('create', [TransPBBController::class, 'createtrans']);

// Detail Transaksi
Route::get('detail', [DetailController::class, 'tambahdetail']);
Route::post('cratedetail', [DetailController::class, 'createdetail']);