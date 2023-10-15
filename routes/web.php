<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
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
