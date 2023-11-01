<?php

use App\Http\Controllers\Admin\DcComicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guests\PageController;

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

// http://127.0.0.1:8888/
Route::get('/', [PageController::class, 'index'])->name('home');
// http://127.0.0.1:8888/about
Route::get('/about', [PageController::class, 'about'])->name('about');
// http://127.0.0.1:8888/comics
Route::get('/comics', [PageController::class, 'comics'])->name('guests.comics');
// http://127.0.0.1:8888/comics/show/1
// // http://127.0.0.1:8888/comics/create
Route::resource('admin/comics', DcComicController::class);