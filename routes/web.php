<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocaleController;
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

Route::resource('/', HomeController::class);
Route::resource('/booking', BookController::class);
Route::resource('/contact', ContactUsController::class);
Route::get('setLocale/{locale}', [LocaleController::class, 'setLocale'])->name('setLocale');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
