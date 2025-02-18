<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\IsAdmin;
use App\Models\Artikel;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/l',[LoginController::class,'index']);
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/PostLogin',[LoginController::class,'login']);
Route::get('/logout',[LoginController::class,'logout']);
Route::get('/', function () {
    $artikel = Artikel::all();
    return view('home.frontendUser.blog', compact(['artikel']));
});
// route admin (backend)
Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('home.dashboard');
    });


    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/tambah', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/simpan', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::get('/user/{id}/hapus', [UserController::class, 'destroy'])->name('user.destroy');
    Route::post('/user/{id}/update', [UserController::class, 'update'])->name('user.update');

    Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
    Route::get('/artikel/tambah', [ArtikelController::class, 'create'])->name('artikel.create');
    Route::post('/artikel/simpan', [ArtikelController::class, 'store'])->name('artikel.store');
    Route::get('/artikel/{id}/edit', [ArtikelController::class, 'edit'])->name('artikel.edit');
    Route::get('/artikel/{id}/hapus', [ArtikelController::class, 'destroy'])->name('artikel.destroy');
    Route::post('/artikel/{id}/update', [ArtikelController::class, 'update'])->name('artikel.update');


    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
    Route::get('/kategori/tambah', [KategoriController::class, 'create'])->name('kategori.create');
    Route::post('/kategori/simpan', [KategoriController::class, 'store'])->name('kategori.store');
    Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
    Route::get('/kategori/{id}/hapus', [KategoriController::class, 'destroy'])->name('kategori.destroy');
    Route::post('/kategori/{id}/update', [KategoriController::class, 'update'])->name('kategori.update');


    Route::get('/kursus', [KursusController::class, 'index'])->name('kursus.index');
    Route::get('/kursus/tambah', [KursusController::class, 'create'])->name('kursus.create');
    Route::post('/kursus/simpan', [KursusController::class, 'store'])->name('kursus.store');
    Route::get('/kursus/{id}/edit', [KursusController::class, 'edit'])->name('kursus.edit');
    Route::get('/kursus/{id}/hapus', [KursusController::class, 'destroy'])->name('kursus.destroy');
    Route::post('/kursus/{id}/update', [KursusController::class, 'update'])->name('kursus.update');

    Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran.index');
    Route::get('/pendaftaran/tambah', [PendaftaranController::class, 'create'])->name('pendaftaran.create');
    Route::post('/pendaftaran/simpan', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
    Route::get('/pendaftaran/{id}/edit', [PendaftaranController::class, 'edit'])->name('pendaftaran.edit');
    Route::get('/pendaftaran/{id}/hapus', [PendaftaranController::class, 'destroy'])->name('pendaftaran.destroy');
    Route::post('/pendaftaran/{id}/update', [PendaftaranController::class, 'update'])->name('pendaftaran.update');

    Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni.index');
    Route::get('/testimoni/tambah', [TestimoniController::class, 'create'])->name('testimoni.create');
    Route::post('/testimoni/simpan', [TestimoniController::class, 'store'])->name('testimoni.store');
    Route::get('/testimoni/{id}/edit', [TestimoniController::class, 'edit'])->name('testimoni.edit');
    Route::get('/testimoni/{id}/hapus', [TestimoniController::class, 'destroy'])->name('testimoni.destroy');
    Route::post('/testimoni/{id}/update', [TestimoniController::class, 'update'])->name('testimoni.update');

    // untuk route admin lainnya

});


