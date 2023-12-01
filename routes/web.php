<?php

use App\Http\Controllers\GajiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\IndexController;
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
Route::get('Home',[IndexController::class,'index']);

Route::get('/Home,[IndexController]');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/karyawan/index',[KaryawanController::class, 'index']);
Route::get('/karyawan/create',[KaryawanController::class, 'create']);
Route::get('/karyawan/edit',[KaryawanController::class, 'edit']);

Route::post('/jabatan/store',[JabatanController::class,'store']);
Route::get('/jabatan/index',[JabatanController::class, 'index']);
Route::get('/jabatan/create',[JabatanController::class, 'create']);
Route::get('/jabatan/edit/{id}',[JabatanController::class, 'edit']);
Route::post('/jabatan/update/{id}',[JabatanController::class, 'update']);
Route::get('/jabatan/destroy/{id}',[JabatanController::class, 'destroy']);

Route::get('/gaji/index', [GajiController::class,'index']);
Route::get('/gaji/create', [GajiController::class,'create']);
Route::get('/gaji/edit', [GajiController::class,'edit']);
