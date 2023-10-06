<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('/buku')->group(function(){
    Route::get('/',[BukuController::class,'index']);
    Route::get('/{id}', [BukuController::class, 'show']);
    Route::post('/create',[BukuController::class,'create']);
    Route::put('{id}/update',[BukuController::class,'update']);
    Route::delete('{id}/delete',[BukuController::class,'destroy']);
});

Route::prefix('/anggota')->group(function(){
    Route::get('/',[BukuController::class,'index']);
    Route::get('/{id}', [BukuController::class, 'show']);
    Route::post('/create',[BukuController::class,'create']);
    Route::put('{id}/update',[BukuController::class,'update']);
    Route::delete('{id}/delete',[BukuController::class,'destroy']);
});

Route::prefix('/petugas')->group(function(){
    Route::get('/',[BukuController::class,'index']);
    Route::get('/{id}', [BukuController::class, 'show']);
    Route::post('/create',[BukuController::class,'create']);
    Route::put('{id}/update',[BukuController::class,'update']);
    Route::delete('{id}/delete',[BukuController::class,'destroy']);
});

Route::prefix('/rak')->group(function(){
    Route::get('/',[BukuController::class,'index']);
    Route::get('/{id}', [BukuController::class, 'show']);
    Route::post('/create',[BukuController::class,'create']);
    Route::put('{id}/update',[BukuController::class,'update']);
    Route::delete('{id}/delete',[BukuController::class,'destroy']);
});

Route::prefix('/peminjaman')->group(function(){
    Route::get('/',[BukuController::class,'index']);
    Route::get('/{id}', [BukuController::class, 'show']);
    Route::post('/create',[BukuController::class,'create']);
    Route::put('{id}/update',[BukuController::class,'update']);
    Route::delete('{id}/delete',[BukuController::class,'destroy']);
});

Route::prefix('/pengembalian')->group(function(){
    Route::get('/',[BukuController::class,'index']);
    Route::get('/{id}', [BukuController::class, 'show']);
    Route::post('/create',[BukuController::class,'create']);
    Route::put('{id}/update',[BukuController::class,'update']);
    Route::delete('{id}/delete',[BukuController::class,'destroy']);
});