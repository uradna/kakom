<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\ArsipSuratMasukController;
use App\Http\Controllers\ArsipSuratKeluarController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\AkunController;

// use App\Http\Controllers\BiodataController;
// use App\Http\Controllers\PernyataanController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth','verified'])->name('dashboard');

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/masuk', [SuratMasukController::class, 'index'])->name('suratMasuk');
Route::post('/masuk/insert', [SuratMasukController::class, 'create'])->name('suratMasukCreate');
Route::post('/masuk/update', [SuratMasukController::class, 'update'])->name('suratMasukUpdate');
Route::post('/masuk/disposisi', [SuratMasukController::class, 'update_dispo'])->name('suratMasukUpdateDispo');
Route::post('/masuk/filesurat', [SuratMasukController::class, 'update_fsurat'])->name('suratMasukUpdateFSurat');
Route::post('/masuk/filedispo', [SuratMasukController::class, 'update_fdispo'])->name('suratMasukUpdateFDispo');
Route::post('/masuk/penerima', [SuratMasukController::class, 'update_penerima'])->name('suratMasukUpdatePenerima');
Route::get('/masuk/detail/{id}', [SuratMasukController::class, 'read'])->name('suratMasukRead');
Route::get('/masuk/disposisi/{id}', [SuratMasukController::class, 'print'])->name('printDisposisi');
Route::get('/masuk/edit/{id}', [SuratMasukController::class, 'edit'])->name('suratMasukEdit');
Route::post('/masuk/delete', [SuratMasukController::class, 'delete'])->name('suratMasukDelete');
Route::post('/masuk/restore', [SuratMasukController::class, 'restore'])->name('suratMasukRestore');

Route::get('/keluar', [SuratKeluarController::class, 'index'])->name('suratKeluar');
Route::post('/keluar/post', [SuratKeluarController::class, 'create'])->name('suratKeluarCreate');
Route::post('/keluar/update', [SuratKeluarController::class, 'update'])->name('suratKeluarUpdate');
Route::get('/keluar/detail/{id}', [SuratKeluarController::class, 'read'])->name('suratKeluarRead');
Route::get('/keluar/edit/{id}', [SuratKeluarController::class, 'edit'])->name('suratKeluarEdit');
Route::post('/keluar/filesurat', [SuratKeluarController::class, 'update_fsurat'])->name('suratKeluarUpdateFSurat');
Route::post('/keluar/delete', [SuratKeluarController::class, 'delete'])->name('suratKeluarDelete');
Route::post('/keluar/restore', [SuratKeluarController::class, 'restore'])->name('suratKeluarRestore');

Route::get('/arsip', [ArsipController::class, 'index'])->name('arsip');

Route::get('/arsip/masuk', [ArsipController::class, 'arsipSMIndex'])->name('arsipSMIndex');
Route::get('/arsip/masuk/tahun/{tahun}', [ArsipController::class, 'arsipSMTahun'])->name('arsipSMTahun');

Route::get('/arsip/keluar', [ArsipController::class, 'arsipSKIndex'])->name('arsipSKIndex');
Route::get('/arsip/keluar/tahun/{tahun}', [ArsipController::class, 'arsipSKTahun'])->name('arsipSKTahun');

Route::get('/arsip/sampah', [ArsipController::class, 'sampahIndex'])->name('sampahIndex');
Route::get('/arsip/sampah/masuk', [ArsipController::class, 'sampahMasuk'])->name('sampahMasuk');
Route::get('/arsip/sampah/keluar', [ArsipController::class, 'sampahKeluar'])->name('sampahKeluar');


Route::get('/arsip/masuk/all', [ArsipSuratMasukController::class, 'index'])->name('arsipSMAll');
Route::get('/arsip/masuk/all/{tahun}', [ArsipSuratMasukController::class, 'tahun'])->name('arsipSMT');
Route::get('/arsip/masuk/tahun/{tahun}/bulan/{bulan}', [ArsipSuratMasukController::class, 'bulan'])->name('arsipSMB');

Route::get('/arsip/keluar/all', [ArsipSuratKeluarController::class, 'index'])->name('arsipSKAll');
Route::get('/arsip/keluar/all/{tahun}', [ArsipSuratKeluarController::class, 'tahun'])->name('arsipSKT');
Route::get('/arsip/keluar/tahun/{tahun}/bulan/{bulan}', [ArsipSuratKeluarController::class, 'bulan'])->name('arsipSKB');

Route::get('/pengguna', [PenggunaController::class, 'index'])->name('pengguna');
Route::get('/pengguna/new', [PenggunaController::class, 'new'])->name('newPengguna');
Route::post('/pengguna/store', [PenggunaController::class, 'store'])->name('storePengguna');
Route::post('/pengguna/delete', [PenggunaController::class, 'delete'])->name('deletePengguna');
Route::get('/pengguna/edit/{id}', [PenggunaController::class, 'edit'])->name('editPengguna');
Route::post('/pengguna/update', [PenggunaController::class, 'update'])->name('updatePengguna');

Route::get('/akun', [AkunController::class, 'index'])->name('akun');
Route::post('/update', [AkunController::class, 'update'])->name('updateAkun');

Route::get('/cal', [AkunController::class, 'cal'])->name('cal');


//	Route::get('/dashboard', function () {
//  	  return view('dashboard');
//	})->middleware(['auth'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth','verified'])->name('dashboard');


// Route::get('/suratmasuk', function () {
//     return view('masuk.index');
// })->middleware(['auth','verified'])->name('suratMasuk');

// Route::get('/daftarsuratmasuk', function () {
//     return view('masuk.list');
// })->middleware(['auth','verified'])->name('daftarSuratMasuk');

// Route::get('/list', function () {
//     return view('masuk.listx');
// })->middleware(['auth','verified'])->name('listSuratMasuk');

// Route::get('/detail', function () {
//     return view('masuk.detail');
// })->middleware(['auth','verified'])->name('detailSuratMasuk');

// Route::post('pernyataan/satu/ya', [PernyataanController::class, 'satu_ya'])->name('satu_ya');
// Route::post('pernyataan/satu/tidak', [PernyataanController::class, 'satu_tidak'])->name('satu_tidak');
// Route::post('pernyataan/dua/ya', [PernyataanController::class, 'dua_ya'])->name('dua_ya');
// Route::post('pernyataan/dua/tidak', [PernyataanController::class, 'dua_tidak'])->name('dua_tidak');
// Route::post('pernyataan/tiga/ya', [PernyataanController::class, 'tiga_ya'])->name('tiga_ya');
// Route::post('pernyataan/tiga/tidak', [PernyataanController::class, 'tiga_tidak'])->name('tiga_tidak');
// Route::get('pernyataan/satu/ya', [HomeController::class, 'index'])->name('xx');
// Route::get('pernyataan/satu/tidak', [HomeController::class, 'index'])->name('xx');
// Route::get('pernyataan/dua/ya', [HomeController::class, 'index'])->name('xx');
// Route::get('pernyataan/dua/tidak', [HomeController::class, 'index'])->name('xx');
// Route::get('pernyataan/tiga/ya', [HomeController::class, 'index'])->name('xx');
// Route::get('pernyataan/tiga/tidak', [HomeController::class, 'index'])->name('xx');
// Route::get('pernyataan/tiga/tidak', [HomeController::class, 'index'])->name('xx');

require __DIR__.'/auth.php';
