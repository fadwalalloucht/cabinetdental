<?php

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
});

/**about router */
Route::get('/apropos', function () {
    return view('propos');
})->name('about');


/**service router */
Route::get('/services', function () {
    return view('services');
})->name('services');


/**service router */
Route::get('/contact', function () {
    return view('contact');
})->name('contact');