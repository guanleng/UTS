<?php

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
    return view('beranda.home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/mahasiswa',[App\Http\Controllers\MahasiswaController::class, 'index'])->name('mahasiswa');
Route::post('/mahasiswa/create',[App\Http\Controllers\MahasiswaController::class, 'create'])->name('submit');
Route::get('/mahasiswa/{id}/edit',[App\Http\Controllers\MahasiswaController::class,'edit'])->name('ubah');
Route::post('/mahasiswa/{id}/update',[App\Http\Controllers\MahasiswaController::class,'update'])->name('rubah');
Route::get('/mahasiswa/{id}/delete',[App\Http\Controllers\MahasiswaController::class,'delete'])->name('hapus');
Route::get('/datamhs',[App\Http\Controllers\MahasiswaController::class, 'output'])->name('datamahasiswa');