<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KontenProfilController;
use App\Http\Controllers\InformasiPublikController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EvenDanSaranController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\MasterUserController;
use App\Http\Controllers\AlbumDanGalleryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MasterBeritaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\WalikotaController;
use App\Http\Controllers\WakilWalikotaController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\PejabatController;


use Illuminate\Support\Facades\Auth;





Auth::routes();


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');




    Route::get('/profil_walikota', [KontenProfilController::class, 'profil_walikota'])->name('profil.walikota');
    Route::get('/profil_wakil_walikota', [KontenProfilController::class, 'profil_wakil_walikota'])->name('profil.wakil_walikota');
    Route::get('/lambang_daerah', [KontenProfilController::class, 'lambang_daerah'])->name('lambang.daerah');
    Route::get('/visi_misi', [KontenProfilController::class, 'visi_misi'])->name('visi.misi');
    Route::get('/sejarah_tangsel', [KontenProfilController::class, 'sejarah_tangsel'])->name('sejarah.tangsel');
    Route::get('/kontak', [KontenProfilController::class, 'kontak'])->name('kontak');



    Route::get('/berita', [BeritaController::class, 'berita'])->name('berita');
    Route::post('/berita', [BeritaController::class, 'berita'])->name('berita.store');



    Route::get('/SKPD', [InformasiPublikController::class, 'SKPD'])->name('SKPD');
    Route::get('/list_SKPD', [InformasiPublikController::class, 'list_SKPD'])->name('list_SKPD');
    Route::get('/wisata', [InformasiPublikController::class, 'wisata'])->name('wisata');
    Route::get('/kuliner', [InformasiPublikController::class, 'kuliner'])->name('kuliner');
    Route::get('/nama_pejabat', [InformasiPublikController::class, 'nama_pejabat'])->name('nama.pejabat');

    Route::get('/tambah_menu', [EvenDanSaranController::class, 'tambah_Menu'])->name('tambah_menu');
    Route::post('/menu/store', [EvenDanSaranController::class, 'storeMenu'])->name('menu.store');
    Route::get('/list_menu', [EvenDanSaranController::class, 'list_menu'])->name('list_menu');

    Route::get('/list_menu', [EvenDanSaranController::class, 'list_menu'])->name('list_menu');
    Route::get('/saran', [EvenDanSaranController::class, 'saran'])->name('saran');






    Route::get('/upload', [VideoController::class, 'index'])->name('video.upload');
    Route::post('/upload/video', [VideoController::class, 'store'])->name('video.store');



    Route::get('/master_user', [MasterUserController::class, 'master_user'])->name('master_user');

    Route::get('/album_dan_gallery', [AlbumDanGalleryController::class, 'album_dan_gallery'])->name('album_dan_gallery');

    Route::get('/master_berita', [AlbumDanGalleryController::class, 'master_berita'])->name('master_berita');

    Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

    Route::post('/upload-image', [ImageUploadController::class, 'store'])->name('uploadImage');

    Route::get('/visi-misi', function () {
        return view('visi-misi'); // Adjust to your view name
    })->name('visi.misi');
    
    Route::post('/visi-misi/store', [VisiMisiController::class, 'store'])->name('visi.misi.store');

    Route::get('/berita', function () {
        return view('berita'); // Adjust to your view name
    })->name('berita');
    Route::post('/berita/store', [BeritaController::class, 'store'])->name('berita.store');
    
    Route::get('/form-walikota', [WalikotaController::class, 'create'])->name('walikota.create');
    Route::post('/form-walikota', [WalikotaController::class, 'store'])->name('walikota.store');

    Route::post('/wakil_walikota/store', [WakilWalikotaController::class, 'store'])->name('wakil_walikota.store');
    
    Route::post('/sejarah/store', [SejarahController::class, 'store'])->name('sejarah.store');

    Route::get('/kuliner/create', function () {
        return view('informasi_kuliner'); // Sesuaikan dengan nama view Anda
    })->name('kuliner.create');
    Route::post('/kuliner/store', [KulinerController::class, 'store'])->name('kuliner.store');

    Route::get('/wisata/create', function () {
        return view('informasi_wisata'); // Sesuaikan dengan nama view Anda
    })->name('wisata.create');
    Route::post('/wisata/store', [WisataController::class, 'store'])->name('wisata.store');
    
    Route::post('/pejabat/store', [PejabatController::class, 'store'])->name('pejabat.store');


});


require __DIR__ . '/auth.php';
