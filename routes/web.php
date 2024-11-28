<?php

use App\Http\Controllers\PageKeduaController;
use App\Http\Controllers\PageKetigaController;
use App\Http\Controllers\PagePertamaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', [PagePertamaController::class, 'index'])->name('profile');
Route::get('/portofolio', [PageKeduaController::class, 'index'])->name('portofolio');
Route::get('/gallery', [PageKetigaController::class, 'index'])->name('gallery');
