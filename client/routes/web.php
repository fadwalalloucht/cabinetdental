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
})->name('home');

/**about router */
Route::get('/about', function () {
    return view('about');
})->name('about');

/**service router */
Route::get('/service', function () {
    return view('service');
})->name('service');

/** contact router */
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
