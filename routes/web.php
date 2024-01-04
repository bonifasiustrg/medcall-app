<?php

use App\Http\Controllers\AntrianController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
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
Route::middleware(['redirect.to.login'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('login');
    });
    Route::get('/login', function () {
        return view('login');
    });

    Route::get('/pengingatjanji', function () {
        return view('pengingatjanji');
    });
    Route::get('/skemaobat', function () {
        return view('skemapengobatan');
    });
    Route::get('/jadwaldokter', function () {
        return view('jadwaldokter');
    });
    Route::get('/selesaidaftar', function () {
        return view('selesaidaftar');
    });
    // Route::get('/antrian', function () {
    //     return view('antrian');
    // })->name('antrianpage');
    Route::get('/antrian', [AntrianController::class, 'create'])->name('antrianpage');

    Route::get('/darurat', function () {
        return view('darurat');
    });

    Route::get('/nomor', function () {
        return view('nomor');
    });
    

});

Auth::routes();
    
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// routes/web.php

Route::group(['middleware' => ['auth', 'cekrole:pasien']],function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
Route::group(['middleware' => ['auth', 'cekrole:pasien,admin']],function () {
    Route::post('/antrian-masuk', [AntrianController::class, 'store'])->name('antrian-masuk');
    
});
Route::group(['middleware' => ['auth', 'cekrole:admin']],function () {
    Route::get('/admin/home', [DashboardAdminController::class, 'index'])->name('dashboard');
    Route::get('/admin/antrian', [AntrianController::class, 'index'])->name('antrian');
    Route::get('/next-queue', [AntrianController::class, 'next_antrian'])->name('next-queue');
    

});

Route::post('/selesaidaftar', [FormController::class, 'selesaidaftar'])->name('selesaidaftar');