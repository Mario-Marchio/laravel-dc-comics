<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
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

Route::get('/', [ComicController::class, 'index']);

Route::resource('comics', ComicController::class);
Route::delete('/comics/{comic}', [ComicController::class, 'destroy'])->name('comics.destroy');
Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');