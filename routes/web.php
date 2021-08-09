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
    return view('layouts.landing');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cernak', [App\Http\Controllers\CernakController::class, 'index'])->name('cernak');
Route::get('/karya', [\App\Http\Controllers\KaryaController::class, 'index'])->name('karya');
Route::post('/karya', [\App\Http\Controllers\KaryaController::class, 'store'])->name('karya.store');
Route::get('/karya/pdf/{id}', [\App\Http\Controllers\CernakController::class, 'liatpdf'])->name('karya.pdf');
Route::get('/karya/downloadpdf/{id}', [\App\Http\Controllers\CernakController::class, 'pdfdownload'])->name('karya.pdfdownload');

Route::get('/komik', [\App\Http\Controllers\KomikController::class, 'index'])->name('komik');
Route::get('/komik/pdf/{id}', [\App\Http\Controllers\KomikController::class, 'liatpdf'])->name('komik.pdf');
Route::get('/komik/downloadpdf/{id}', [\App\Http\Controllers\KomikController::class, 'pdfdownload'])->name('komik.pdfdownload');
Route::get('/komik/previewpdf/{id}', [\App\Http\Controllers\KomikController::class, 'previewpdf'])->name('komik.previewpdf');
