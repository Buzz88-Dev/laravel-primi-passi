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
    return view('home');
})->name('home');

Route::get('/menu', function () {  // get mi restituisce un oggetto
    return view('menu');
})->name('menu');

Route::get('/about', function () {  // get mi restituisce un oggetto
    return view('about');
})->name('about');

Route::get('/contact', function () {  // get mi restituisce un oggetto
    return view('contact');
})->name('contact');

// dentro a questo file scriveremo le rotte che ci restuitiranno html
