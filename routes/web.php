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

Route::get('/comics', function () {
    $comics=config('comics');
    return view('guest.comics', ["comics" => $comics]);
})->name('comics');

Route::get('/comics/{key}', function ($key) {
    $comics=config('comics');
    if( is_numeric($key) && $key >= 0 && $key < count($comics)){
    return view('guest.singleComic', ["comic" => $comics[$key]]);
    }else
        abort(404);
})->name('singleComic');