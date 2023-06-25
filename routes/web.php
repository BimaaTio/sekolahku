<?php

use App\Models\User;
use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JurusanController;

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
    $berita = Berita::with(['user', 'kategori'])->where('status', 'publish')->latest()->paginate(3);
    return view('index', [
        'title' => 'Home',
        'berita' => $berita
    ]);
});

Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita/{berita:slug}', [BeritaController::class, 'show']);

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('berita/kategori/{kategori:slug}', [KategoriController::class, 'show']);
Route::get('/berita/post-by/{author:username}', function (User $author) {
    return view('home.berita', [
        'title' => "Berita dibuat oleh : $author->name",
        'data' => $author->berita->load('user', 'kategori')
    ]);
});

Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan');
Route::get('/jurusan/{jurusan:slug}', [JurusanController::class, 'show']);

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/dashboard/berita', 'App\Http\Controllers\Dashboard\BeritaController')->middleware('auth');
// Route::get('/dashboard/berita/edit-berita/{berita:slug}', 'App\Http\Controllers\Dashboard\BeritaController@edit');
Route::get('bAjax', 'App\Http\Controllers\Dashboard\BeritaController@ajax');