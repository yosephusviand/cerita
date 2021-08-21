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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/karya', [\App\Http\Controllers\KaryaController::class, 'index'])->name('karya');
Route::post('/karya', [\App\Http\Controllers\KaryaController::class, 'store'])->name('karya.store');

Route::get('/cernak', [App\Http\Controllers\CernakController::class, 'index'])->name('cernak');
Route::get('/cernak/pdf/{id}', [\App\Http\Controllers\CernakController::class, 'liatpdf'])->name('cernak.pdf');
Route::get('/cernak/downloadpdf/{id}', [\App\Http\Controllers\CernakController::class, 'pdfdownload'])->name('cernak.pdfdownload');
Route::get('/cernak/previewpdf/{id}', [\App\Http\Controllers\CernakController::class, 'previewpdf'])->name('cernak.previewpdf');

Route::get('/komik', [\App\Http\Controllers\KomikController::class, 'index'])->name('komik');
Route::get('/komik/pdf/{id}', [\App\Http\Controllers\KomikController::class, 'liatpdf'])->name('komik.pdf');
Route::get('/komik/downloadpdf/{id}', [\App\Http\Controllers\KomikController::class, 'pdfdownload'])->name('komik.pdfdownload');
Route::get('/komik/previewpdf/{id}', [\App\Http\Controllers\KomikController::class, 'previewpdf'])->name('komik.previewpdf');

Route::get('/pictbook', [\App\Http\Controllers\PitcbookController::class, 'index'])->name('pictbook');
Route::get('/puisi', [\App\Http\Controllers\PuisiController::class, 'index'])->name('puisi');

Route::get('/diskusi', [\App\Http\Controllers\DiskusiController::class, 'index'])->name('diskusi');
Route::post('/diskusi', [\App\Http\Controllers\DiskusiController::class, 'store'])->name('diskusi.store');

Route::get('/informasi', [\App\Http\Controllers\InformasiController::class, 'index'])->name('informasi');
Route::get('/informasi/image/{id}', [\App\Http\Controllers\InformasiController::class, 'liatfoto'])->name('image.informasi');

Route::get('/piagam', [App\Http\Controllers\PiagamController::class, 'index'])->name('piagam');
Route::post('/piagam', [App\Http\Controllers\PiagamController::class, 'store'])->name('piagam.store');
Route::get('/generate-pdf/{id}', [App\Http\Controllers\PDFController::class, 'index'])->name('pdf');
Route::get('/piagam/gambar{id}', [App\Http\Controllers\PDFController::class, 'liatfoto'])->name('pdf.liatfoto');

Route::get('/admin/home', [App\Http\Controllers\AdminController::class, 'index'])->name('home');
Route::get('/admin/diskusi', [\App\Http\Controllers\AdminController::class, 'diskusi'])->name('admin.diskusi');
Route::post('/admin/diskusi/store', [\App\Http\Controllers\AdminController::class, 'diskusistore'])->name('admin.diskusistore');
Route::post('/admin/diskusi/sembunyi', [\App\Http\Controllers\AdminController::class, 'diskusisembunyi'])->name('admin.sembunyi');
Route::post('/admin/diskusi/hapus', [\App\Http\Controllers\AdminController::class, 'diskusihaspus'])->name('admin.hapusdiskusi');

Route::get('/admin/akun', [\App\Http\Controllers\AdminController::class, 'akun'])->name('admin.akun');
Route::get('/admin/akun/destroy/{id}', [\App\Http\Controllers\AdminController::class, 'akundestroy'])->name('akun.destroy');
Route::post('/admin/akun/store', [\App\Http\Controllers\AdminController::class, 'akunstore'])->name('akun.store');
Route::post('/admin/akun/edit', [\App\Http\Controllers\AdminController::class, 'akunedit'])->name('akun.edit');

Route::get('/admin/karya/cernak', [\App\Http\Controllers\AdminKaryaController::class, 'cernak'])->name('admin.cernak');
Route::get('/admin/karya/tablecernak', [\App\Http\Controllers\AdminKaryaController::class, 'tablecernak'])->name('admin.tablecernak');
Route::get('/admin/karya/hapus/{id}', [\App\Http\Controllers\AdminKaryaController::class, 'karyadestroy'])->name('admin.karyadestroy');
Route::post('/admin/karya/edit', [\App\Http\Controllers\AdminKaryaController::class, 'edit'])->name('admin.karyaedit');
Route::post('/admin/karya/store', [\App\Http\Controllers\AdminKaryaController::class, 'karyastore'])->name('admin.karyastore');
Route::get('/admin/karya/tampilkan/{id}', [\App\Http\Controllers\AdminKaryaController::class, 'karyatampil'])->name('admin.karyatampil');
Route::get('/admin/karya/nottampil/{id}', [\App\Http\Controllers\AdminKaryaController::class, 'karyatidaktampil'])->name('admin.karyatidaktampil');

Route::get('/admin/karya/komik', [\App\Http\Controllers\AdminKaryaController::class, 'komik'])->name('admin.komik');
Route::get('/admin/karya/tablekomik', [\App\Http\Controllers\AdminKaryaController::class, 'tablekomik'])->name('admin.tablekomik');

Route::get('/admin/karya/pictbook', [\App\Http\Controllers\AdminKaryaController::class, 'pictbook'])->name('admin.pictbook');
Route::get('/admin/karya/tablepictbook', [\App\Http\Controllers\AdminKaryaController::class, 'tablepictbook'])->name('admin.tablepictbook');

Route::get('/admin/karya/puisi', [\App\Http\Controllers\AdminKaryaController::class, 'puisi'])->name('admin.puisi');
Route::get('/admin/karya/tablepuisi', [\App\Http\Controllers\AdminKaryaController::class, 'tablepuisi'])->name('admin.tablepuisi');

Route::get('/admin/informasi', [\App\Http\Controllers\AdminController::class, 'informasi'])->name('admin.informasi');
Route::post('/admin/informasi', [\App\Http\Controllers\AdminController::class, 'informasi_store'])->name('admin.informasistore');
Route::get('/admin/informasi/delete/{id}', [\App\Http\Controllers\AdminController::class, 'destroyinformasi'])->name('admin.informasidestroy');
Route::get('/admin/informasi/aktif/{id}', [\App\Http\Controllers\AdminController::class, 'informasi_aktif'])->name('admin.informasiaktif');
Route::get('/admin/informasi/nonaktif/{id}', [\App\Http\Controllers\AdminController::class, 'informasi_nonaktif'])->name('admin.informasinonaktif');
Route::post('/admin/informasi/edit', [\App\Http\Controllers\AdminController::class, 'informasiedit'])->name('admin.informasiedit');

Route::get('/admin/piagam', [\App\Http\Controllers\AdminController::class, 'piagam'])->name('admin.piagam');
Route::post('/admin/piagam', [\App\Http\Controllers\AdminController::class, 'piagam_store'])->name('admin.piagamstore');
Route::get('/admin/image/{id}', [\App\Http\Controllers\AdminController::class, 'liatfoto'])->name('image.displayImage');
Route::get('/admin/image/info/{id}', [\App\Http\Controllers\AdminController::class, 'liatinfo'])->name('image.liatinfo');
Route::get('/admin/piagam/delete/{id}', [\App\Http\Controllers\AdminController::class, 'destroypiagam'])->name('admin.piagamdelete');
Route::get('/admin/piagam/aktifkan/{id}', [\App\Http\Controllers\AdminController::class, 'piagam_aktif'])->name('admin.piagamaktif');
Route::get('/admin/piagam/nonaktifkan/{id}', [\App\Http\Controllers\AdminController::class, 'piagam_nonaktif'])->name('admin.piagamnonaktif');

Route::get('/admin/piagamanak', [\App\Http\Controllers\AdminController::class, 'piagamanak'])->name('admin.piagamanak');
Route::get('/admin/piagamanak/delete/{id}', [\App\Http\Controllers\AdminController::class, 'destroyanak'])->name('admin.piagamanakdelete');

Route::get('/admin/aduan', [\App\Http\Controllers\AdminController::class, 'aduan'])->name('admin.aduan');

Route::get('/aduan', [\App\Http\Controllers\AduanController::class, 'index'])->name('aduan');
Route::post('/aduan', [\App\Http\Controllers\AduanController::class, 'store'])->name('aduan.store');

