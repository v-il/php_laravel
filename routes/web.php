<?php

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

Route::get('/', [\App\Http\Controllers\PostController::class, 'get'])->name('index');

Route::get('/create', [\App\Http\Controllers\PostController::class, 'create'])->name('create');
Route::post('/create', [\App\Http\Controllers\PostController::class, 'store'])->name('store');

Route::get('/edit/{post}', [\App\Http\Controllers\PostController::class, 'edit'])->name('edit');
Route::patch('/update/{post}', [\App\Http\Controllers\PostController::class, 'update'])->name('update');
