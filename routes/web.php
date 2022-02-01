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

// Home
Route::redirect('/', '/beranda');
Route::get('/beranda', function() {
    return view('page.home');
});

// Surat
Route::get('/quran', [App\Http\Controllers\DaftarSurat::class, 'list']);
Route::get('/quran/surat/{id}', [App\Http\Controllers\DaftarSurat::class, 'bacaSurat']);
Route::get('/quran/juz/{id}', [App\Http\Controllers\DaftarSurat::class, 'bacaJuz']);

// Tafsir
Route::get('/tafsir', [App\Http\Controllers\DaftarTafsir::class, 'list']);
Route::get('/tafsir/{id}', [App\Http\Controllers\DaftarTafsir::class, 'detail']);

// Tentang
Route::get('/tentang', function() {
    return view('page.tentang');
});