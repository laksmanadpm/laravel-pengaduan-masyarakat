<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\AuthController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home',[pengaduanController::class,'index',]);
Route::get('/masyarakat',[MasyarakatController::class,'index',]);
Route::get('/petugas',[PetugasController::class,'index',]);
Route::get('/login',[AuthController::class,'login',]);
Route::get('/register',[AuthController::class,'register',]);

Route::get('/isi-pengaduan',[pengaduanController::class,'tampil_pengaduan',]);
Route::post('/isi-pengaduan',[pengaduanController::class,'proses_tambah_pengaduan',]);

Route::get('/isi-masyarakat',[MasyarakatController::class,'tampil_masyarakat',]);
Route::post('/isi-masyarakat',[MasyarakatController::class,'proses_tambah_masyarakat',]);

Route::get('/isi-petugas',[PetugasController::class,'tampil_petugas',]);
Route::post('/isi-petugas',[PetugasController::class,'proses_tambah_petugas',]);


Route::get('/hapus-pengaduan/{id}',[PengaduanController::class,'hapus',]);
Route::get('/detail-pengaduan/{id}',[PengaduanController::class,'detail_pengaduan',]);

Route::post('/update-pengaduan/{id}',[PengaduanController::class,'proses_update_pengaduan',]);
Route::get('/update-pengaduan/{id}',[pengaduanController::class,'update_pengaduan',]);

Route::post('/register/{id}',[AuthController::class,'proses_update_pengaduan',]);
Route::get('/register/{id}',[AuthController::class,'update_pengaduan',]);

?>