<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

/* -----------------------------------------
* HOME
-------------------------------------------*/

Route::get('/', [HomeController::class, 'index'])->name('home');


/* -----------------------------------------
* COMICS
-------------------------------------------*/
Route::prefix('/comics')
    ->controller(ComicController::class)
    ->name('comics.')
    ->group(function () {

        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/{comic}', 'show')->name('show');
        Route::get('/{comic}/edit', 'edit')->name('edit');
        Route::post('/', 'store')->name('store');
        Route::put('/{comic}', 'update')->name('update');
        Route::delete('/{comic}', 'destroy')->name('destroy');
    });
