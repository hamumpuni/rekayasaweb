<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\BeritaController;

// --- ROUTES HALAMAN DEPAN ---
Route::get('/', [HomeController::class, 'index']);
Route::get('/kontak', function () { return view('pages.kontak'); });

Route::get('/tentang', function () {
    $layanan = \App\Models\Layanan::all();
    $berita = \App\Models\Berita::all();
    return view('pages.tentang', compact('layanan', 'berita'));
});

Route::get('/layanan', function () {
    $layanan = \App\Models\Layanan::all(); 
    return view('pages.layanan', compact('layanan'));
});

// Route Berita Depan
Route::get('/berita', function () {
    $semua_berita = \App\Models\Berita::orderBy('tanggal', 'desc')->get(); 
    return view('pages.berita', compact('semua_berita'));
});
Route::get('/berita/{id}', [HomeController::class, 'showBerita']);


// --- ROUTES UNTUK AUTENTIKASI ---
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate']);


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// --- ROUTES UNTUK ADMINISTRATOR ---
Route::middleware('auth')->prefix('admin')->group(function () {
    
    // Dashboard Admin
    Route::get('/dashboard', function () {
        return view('admin.dashboard'); 
    })->name('admin.dashboard');
    // Tambahkan di dalam route group admin
Route::resource('profil', \App\Http\Controllers\Admin\ProfilController::class);
Route::resource('layanan', \App\Http\Controllers\Admin\LayananController::class);
Route::resource('galeri', \App\Http\Controllers\Admin\GaleriController::class);

    // CRUD Berita
    Route::resource('berita', BeritaController::class);
    
    // Tambahkan Rute Export PDF di sini (Penting!)
    Route::get('/berita/export/pdf', [BeritaController::class, 'exportPdf'])->name('berita.exportPdf');
});
