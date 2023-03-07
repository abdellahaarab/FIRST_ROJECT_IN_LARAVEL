<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MeController;

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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/notes', [HomeController::class,'lesNotes'])->name('all');
Route::get('/notes/statistiques', [HomeController::class,'statistiques'])->name('statistiques');
Route::get('/notes/show', [HomeController::class,'show'])->name('show');
Route::get('/notes/decorate', [HomeController::class,'decorate'])->name('decorate');

Route::get('/me/', [MeController::class,'profile'])->name('profile');
