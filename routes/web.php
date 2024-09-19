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
    $comics = config('comics');
    return view('home', compact('comics'));
})->name('home');

Route::get('/show/{id}', function ($id) {
    $comics = config('comics');

    if(!is_numeric($id) || $id < 0 || $id >= count($comics)){
        abort(404);
    }
    $comic = $comics[$id];
    return view('show', compact('comic'));
})->name('show');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');
