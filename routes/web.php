<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminControllers\HomeController;
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

Route::get('/', [IndexController::class,'home'] );
Route::get('/dichvu', [IndexController::class,'dich_vu'] )-> name('dich_vu');
Route::get('/dichvu/{slug}', [IndexController::class,'dich_vucon'] )-> name('dich_vucon');
Route::get('/danh-muc', [IndexController::class,'danhmuc'] )-> name('danhmuc');
Route::get('/danh-muc/{slug}', [IndexController::class,'danhmuccon'] )-> name('danhmuccon');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [ App\Http\Controllers\AdminControllers\HomeController::class , 'index'] );

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
// category
Route::resource('/category', CategoryController::class);