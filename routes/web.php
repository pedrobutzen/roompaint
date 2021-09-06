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

    Route::resource('cores', App\Http\Controllers\ColorController::class)
        ->except(['create', 'show', 'edit', 'update'])
        ->names([
            'index' => 'colors.index',
            'store' => 'colors.store',
            'destroy' => 'colors.destroy',
        ]);
    
    Route::resource('comodos', App\Http\Controllers\RoomController::class)
        ->except(['create', 'show', 'edit', 'update'])
        ->names([
            'index' => 'rooms.index',
            'store' => 'rooms.store',
            'destroy' => 'rooms.destroy',
        ]);

    Route::get('/resultado', [App\Http\Controllers\ResultController::class, 'index'])->name('result');
});
