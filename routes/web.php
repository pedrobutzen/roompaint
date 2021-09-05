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

Auth::routes([
    'register' => false, 
    'reset' => false,
    'confirm' => false,
    'verify' => false
]);

Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/cores', [App\Http\Controllers\HomeController::class, 'index'])->name('cores');
    Route::get('/comodos', [App\Http\Controllers\HomeController::class, 'index'])->name('comodos');
    Route::get('/estimativa', [App\Http\Controllers\HomeController::class, 'index'])->name('estimativa');
});
