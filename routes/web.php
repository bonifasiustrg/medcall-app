<?php

use App\Http\Controllers\Auth\LoginController;
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
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
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
<<<<<<< HEAD
Route::get('/selesaidaftar', function () {
    return view('selesaidaftar');
=======
Route::get('/antrian', function () {
    return view('antrian');
>>>>>>> 706c10e40f48fb3298dda2a165b97ef06e9f7ac5
});
Route::get('/darurat', function () {
    return view('darurat');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');