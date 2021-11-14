<?php

use Illuminate\Support\Facades\Route;



Auth::routes();
Route::get('/', function () {
    return view('landingpage');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['user'])->group(function () {
Route::group(['prefix' => 'user'], function(){
Route::get('/npsn', [App\Http\Controllers\NpsnController::class, 'index'])->name('npsn');
Route::get('/npsn/add', [App\Http\Controllers\NpsnController::class, 'addindex'])->name('addnpsnindex');
Route::post('/npsn', [App\Http\Controllers\NpsnController::class, 'add'])->name('addnpsn');
Route::get('/npsn/ditolak', [App\Http\Controllers\NpsnController::class, 'npsnsekolahditolak'])->name('npsnsekolahditolak');
Route::get('/npsn/disetujui', [App\Http\Controllers\NpsnController::class, 'npsnsekolahdisetujui'])->name('npsnsekolahdisetujui');
Route::get('/npsn/destroy/{id}', [App\Http\Controllers\NpsnController::class, 'destroy'])->name('destroynpsn');

Route::get('/nomenklatur', [App\Http\Controllers\NomenklaturController::class, 'index'])->name('nomenklatur');
Route::get('/nomenklatur/add', [App\Http\Controllers\NomenklaturController::class, 'addindex'])->name('addnomenklaturindex');
Route::post('/nomenklatur', [App\Http\Controllers\NomenklaturController::class, 'add'])->name('addnomenklatur');
Route::get('/nomenklatur/ditolak', [App\Http\Controllers\NomenklaturController::class, 'nomenklatursekolahditolak'])->name('nomenklatursekolahditolak');
Route::get('/nomenklatur/disetujui', [App\Http\Controllers\NomenklaturController::class, 'nomenklatursekolahdisetujui'])->name('nomenklatursekolahdisetujui');
Route::get('/nomenklatur/destroy/{id}', [App\Http\Controllers\NomenklaturController::class, 'destroy'])->name('destroynomenklatur');

Route::get('/username-dapodik', [App\Http\Controllers\UsernamedapodikController::class, 'index'])->name('usernamedapodik');
Route::get('/username-dapodik/add', [App\Http\Controllers\UsernamedapodikController::class, 'addindex'])->name('addusernamedapodikindex');
Route::post('/username-dapodik', [App\Http\Controllers\UsernamedapodikController::class, 'add'])->name('addusernamedapodik');
Route::get('/username-dapodik/ditolak', [App\Http\Controllers\UsernamedapodikController::class, 'usernamesekolahditolak'])->name('usernamesekolahditolak');
Route::get('/username-dapodik/disetujui', [App\Http\Controllers\UsernamedapodikController::class, 'usernamesekolahdisetujui'])->name('usernamesekolahdisetujui');
Route::get('/username-dapodik/destroy/{id}', [App\Http\Controllers\UsernamedapodikController::class, 'destroy'])->name('destroyusername');
});
});

Route::middleware(['admin'])->group(function () {
    Route::group(['prefix' => 'admin'], function(){
    Route::get('/npsn/pending', [App\Http\Controllers\NpsnController::class, 'npsnpending'])->name('npsnpending');
    Route::get('/npsn/diteruskan', [App\Http\Controllers\NpsnController::class, 'npsnditeruskan'])->name('npsnditeruskan');
    Route::get('/npsn/ditolak', [App\Http\Controllers\NpsnController::class, 'npsnditolak'])->name('npsnditolak');
    Route::get('/npsn/disetujui', [App\Http\Controllers\NpsnController::class, 'npsndisetujui'])->name('npsndisetujui');

    Route::get('/npsn/proses/teruskan/{id}', [App\Http\Controllers\NpsnController::class, 'teruskan'])->name('teruskannpsn');
    Route::post('/npsn/proses/tolak/', [App\Http\Controllers\NpsnController::class, 'tolak'])->name('tolaknpsn');

    Route::get('/nomenklatur/pending', [App\Http\Controllers\NomenklaturController::class, 'nomenklaturpending'])->name('nomenklaturpending');
    Route::get('/nomenklatur/diteruskan', [App\Http\Controllers\NomenklaturController::class, 'nomenklaturditeruskan'])->name('nomenklaturditeruskan');
    Route::get('/nomenklatur/ditolak', [App\Http\Controllers\NomenklaturController::class, 'nomenklaturditolak'])->name('nomenklaturditolak');
    Route::get('/nomenklatur/disetujui', [App\Http\Controllers\NomenklaturController::class, 'nomenklaturdisetujui'])->name('nomenklaturdisetujui');

    Route::get('/nomenklatur/proses/teruskan/{id}', [App\Http\Controllers\NomenklaturController::class, 'teruskan'])->name('teruskannomenklatur');
    Route::post('/nomenklatur/proses/tolak/', [App\Http\Controllers\NomenklaturController::class, 'tolak'])->name('tolaknomenklatur');

    Route::get('/username-dapodik/pending', [App\Http\Controllers\UsernamedapodikController::class, 'usernamepending'])->name('usernamepending');
    Route::get('/username-dapodik/diteruskan', [App\Http\Controllers\UsernamedapodikController::class, 'usernamediteruskan'])->name('usernamediteruskan');
    Route::get('/username-dapodik/ditolak', [App\Http\Controllers\UsernamedapodikController::class, 'usernameditolak'])->name('usernameditolak');
    Route::get('/username-dapodik/disetujui', [App\Http\Controllers\UsernamedapodikController::class, 'usernamedisetujui'])->name('usernamedisetujui');

    Route::get('/username-dapodik/proses/teruskan/{id}', [App\Http\Controllers\UsernamedapodikController::class, 'teruskan'])->name('teruskanusername');
    Route::post('/username-dapodik/proses/tolak/', [App\Http\Controllers\UsernamedapodikController::class, 'tolak'])->name('tolakusername');
});
});


Route::middleware(['provinsi'])->group(function () {
    Route::group(['prefix' => 'provinsi'], function(){
    Route::get('/npsn', [App\Http\Controllers\NpsnController::class, 'npsnprovinsi'])->name('npsnprovinsi');
    Route::get('/npsn/input-npsn', [App\Http\Controllers\NpsnController::class, 'inputnpsn'])->name('inputnpsn');
    Route::post('/npsn/input-npsn', [App\Http\Controllers\NpsnController::class, 'prosesinputnpsn'])->name('prosesinputnpsn');
    Route::get('/npsn/selesai', [App\Http\Controllers\NpsnController::class, 'npsnselesai'])->name('npsnselesai');
    
    Route::get('/npsn/berita-acara/download/{id}', [App\Http\Controllers\NpsnController::class, 'download'])->name('download');
    Route::get('/npsn/proses/setujui/{id}', [App\Http\Controllers\NpsnController::class, 'setujui'])->name('setujuinpsn');

    Route::get('/nomenklatur', [App\Http\Controllers\NomenklaturController::class, 'nomenklaturprovinsi'])->name('nomenklaturprovinsi'); 
    Route::get('/nomenklatur/berita-acara/download/{id}', [App\Http\Controllers\NomenklaturController::class, 'download'])->name('downloadnomenklatur'); 
    Route::get('/nomenklatur/proses/setujui/{id}', [App\Http\Controllers\NomenklaturController::class, 'setujui'])->name('setujuinomenklatur');  

    Route::get('/nomenklatur/aktivasi', [App\Http\Controllers\NomenklaturController::class, 'aktivasi'])->name('aktivasi');
    Route::get('/nomenklatur/aktivasi/{id}', [App\Http\Controllers\NomenklaturController::class, 'prosesaktivasi'])->name('prosesaktivasi');
    Route::get('/nomenklatur/selesai', [App\Http\Controllers\NomenklaturController::class, 'nomenklaturselesai'])->name('nomenklaturselesai');

    Route::get('/username-dapodik', [App\Http\Controllers\UsernamedapodikController::class, 'usernameprovinsi'])->name('usernameprovinsi'); 
    Route::get('/username-dapodik/berita-acara/download/{id}', [App\Http\Controllers\UsernamedapodikController::class, 'download'])->name('downloadusername'); 
    Route::get('/username-dapodik/proses/setujui/{id}', [App\Http\Controllers\UsernamedapodikController::class, 'setujui'])->name('setujuiusername');  

    Route::get('/username-dapodik/input', [App\Http\Controllers\UsernamedapodikController::class, 'inputusername'])->name('inputusername');
    Route::post('/username-dapodik/input/', [App\Http\Controllers\UsernamedapodikController::class, 'prosesinputusername'])->name('prosesinputusername');
    Route::get('/username-dapodik/selesai', [App\Http\Controllers\UsernamedapodikController::class, 'usernameselesai'])->name('usernameselesai');
    
});
});

Route::get('/pengaturan-user', [App\Http\Controllers\PengaturanController::class, 'index'])->name('pengaturan');
Route::post('/pengaturan-user/edit/', [App\Http\Controllers\PengaturanController::class, 'editpersonaluser'])->name('editpersonaluser');

