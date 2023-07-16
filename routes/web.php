<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/beranda',[PengunjungController::class,'Beranda']);
Route::get('/berita',[PengunjungController::class,'Berita']);
Route::get('/pengumuman',[PengunjungController::class,'Pengumuman']);
Route::get('/tentang-sekolah',[PengunjungController::class,'TentangSekolah']);
Route::get('/prestasi',[PengunjungController::class,'Prestasi']);
Route::get('/ekstrakurikuler',[PengunjungController::class,'Ekstrakurikuler']);


Route::get('/dosen-staf',[PengunjungController::class,'DosenStaf']);
Route::get('/home',[PengunjungController::class,'Home']);


Route::get('admin/index',[AdminController::class,'Index']);




Route::get('admin/ppdb',[AdminController::class,'Ppdb']);
// Route::get('admin/kritik-saran',[AdminController::class,'KritikSaran']);



//------------------------------ Pengajar ------------------------------/ 
Route::get('/admin/pengajar-staf',[AdminController::class,'PengajarStaf'])->name('PengajarStaf');

    // create
        Route::post('/admin/pengajar-staf',[AdminController::class,'TambahPengajar']); 

    // update
        Route::post('/admin/pengajar-staf/{id}',[AdminController::class,'TampilPengajar']);

    // hapus
        Route::get('/admin/pengajar-staf/delete/{id}',[AdminController::class,'HapusPengajar']);

//------------------------------Pengajar end ------------------------------/ 



//------------------------------ Berita ------------------------------/ 
Route::get('/admin/berita',[AdminController::class,'Berita'])->name('Berita');

    // create
    Route::post('/admin/berita',[AdminController::class,'TambahBerita']); 

    // update
    Route::post('/admin/berita/{id}',[AdminController::class,'UbahBerita']); 

    // hapus
    Route::get('/admin/berita/delete/{id}',[AdminController::class,'HapusBerita']);
//------------------------------ Berita end ------------------------------/ 



//------------------------------ Pengumuman ------------------------------/ 
Route::get('/admin/pengumuman',[AdminController::class,'Pengumuman'])->name('Pengumuman');

    // create
    Route::post('/admin/pengumuman',[AdminController::class,'TambahPengumuman']); 

    // update
    Route::post('/admin/pengumuman/{id}',[AdminController::class,'UbahPengumuman']);

    // hapus
    Route::get('/admin/pengumuman/delete/{id}',[AdminController::class,'HapusPengumuman']);
//------------------------------ Pengumuman end------------------------------/ 



//------------------------------ Prestasi------------------------------/ 
Route::get('/admin/prestasi',[AdminController::class,'Prestasi'])->name('Prestasi');

    // create
    Route::post('/admin/prestasi',[AdminController::class,'TambahPrestasi']); 

    // update
    Route::post('/admin/prestasi/{id}',[AdminController::class,'UbahPrestasi']);

    // hapus
    Route::get('/admin/prestasi/delete/{id}',[AdminController::class,'HapusPrestasi']);
//------------------------------ Prestasi end ------------------------------/



//------------------------------ Ekstrakurikuler ------------------------------/
Route::get('/admin/ekstrakurikuler',[AdminController::class,'Ekstrakurikuler'])->name('Ekstrakurikuler');

    // create
    Route::post('/admin/ekstrakurikuler',[AdminController::class,'TambahEkstrakurikuler']); 

    // update
    Route::post('/admin/ekstrakurikuler/{id}',[AdminController::class,'UbahEkstrakurikuler']);

    // hapus
    Route::get('/admin/ekstrakurikuler/delete/{id}',[AdminController::class,'HapusEkstrakurikuler']);
//------------------------------ Ekstrakurikuler end ------------------------------/



//------------------------------ Kritik Saran ------------------------------/
    // tampil pengunjung
    Route::get('/kritik-saran',[PengunjungController::class,'KritikPengunjung'])->name('KritikPengunjung');

    // tampil admin
    Route::get('/admin/kritik-saran',[AdminController::class,'KritikAdmin'])->name('KritikAdmin');

    // create
    Route::post('/kritik-saran',[PengunjungController::class,'TambahKritik']);

    // hapus
    Route::get('/admin/kritik-saran/delete/{id}',[AdminController::class,'HapusKritik']);
//------------------------------ Kritik Saran end ------------------------------/



//------------------------------ Formulir PPDB ------------------------------/

    // tampil pengunjung
    Route::get('/form-ppdb',[PengunjungController::class,'FormPengunjung'])->name('FormPengunjung');

    // tampil admin
    Route::get('/admin/form-ppdb',[AdminController::class,'FormAdmin'])->name('FormAdmin');

    // create
    Route::post('/form-ppdb',[PengunjungController::class,'TambahForm']);

    // update
    Route::post('/form-ppdb/{id}',[AdminController::class,'UbahForm']);

    // hapus
    Route::get('/admin/form-ppdb/delete/{id}',[AdminController::class,'HapusForm']);

   //------------------------------ Formulir PPDB end ------------------------------/




   //------------------------------ PPDB ------------------------------/
    // tampil admin
    Route::get('/admin/ppdb',[AdminController::class,'PpdbAdmin'])->name('PpdbAdmin');

    // tampil pengunjung
    Route::get('/ppdb',[PengunjungController::class,'Ppdb']);

    // create
    Route::post('/admin/ppdb',[AdminController::class,'TambahPpdb']);

    // update
    Route::post('/admin/ppdb/{id}',[AdminController::class,'UbahPpdb']);

    // hapus
    Route::get('/admin/ppdb/delete/{id}',[AdminController::class,'HapusPpdb']);


//------------------------------ PPDB end ------------------------------/









