<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotorController;

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

Route::get('/pabrikan-yamaha', function () {
    return view('yamaha-team');
});

Route::get('/pabrikan-honda', function () {
    return view('honda-team');
});

Route::get('/pabrikan-suzuki', function () {
    return view('suzuki-team');
});

Route::get('/pabrikan-ducati', function () {
    return view('ducati-team');
});

Route::get('/pabrikan-ktm', function () {
    return view('ktm-team');
});

Route::get('/motogp', function () {
    return view('motogp');
});

// URL -> PageController ambil function
Route::get('/yamaha-team', [PageController::class, 'yamaha']);
Route::get('/honda-team', [PageController::class, 'honda']);
Route::get('/suzuki-team', [PageController::class, 'suzuki']);
Route::get('/ducati-team', [PageController::class, 'ducati']);
Route::get('/ktm-team', [PageController::class, 'ktm']);

Route::get('/beranda', [PageController::class, 'home']);
Route::get('/identitasdiv', [PageController::class, 'ktpdiv']);
Route::get('/identitas', [PageController::class, 'ktp']);
Route::get('/suratim', [PageController::class, 'sim']);
Route::get('/kuis', [PageController::class, 'sesi3']);

Route::get('/login', [PageController::class, 'menu_login']);
Route::get('/registrasi', [PageController::class, 'menu_regis']);

Route::resource('motor', (MotorController::class));
