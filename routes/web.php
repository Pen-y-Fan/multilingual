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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lang/change', [\App\Http\Controllers\LangController::class,'change'])->name('changeLang');
Route::get('/lang/home', [\App\Http\Controllers\LangController::class, 'index']);
