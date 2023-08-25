<?php

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

Route::get('/', function () {
    return view('home');
})->name('home');


/* -----------------------------------------
* COMICS
-------------------------------------------*/

Route::get('/comics', function () {
    $comics = config('data.comics');
    $cta_cards = config('data.cta_cards');

    return view('comics.index', ['comics' => $comics, 'cta_cards' => $cta_cards]);
})->name('comics.index');



/* -----------------------------------------
* COMIC
-------------------------------------------*/
Route::get('/comics/{index}', function ($index) {

    $comics = config('data.comics');
    $comic_actions_dropmenu = config('data.dropmenu_links')['comic_availability'];
    $last_index = count($comics) - 1;

    $data['comic'] = $comics[$index];
    $data['comic_actions_dropmenu'] = $comic_actions_dropmenu;
    if ($index > 0) $data['prev'] = $index - 1;
    if ($index < $last_index) $data['next'] = $index + 1;

    return view('comics.show', $data);
})->name('comics.show');
