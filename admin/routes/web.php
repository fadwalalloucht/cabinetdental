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
    return view('login');
});
Route::resource('services', 'ServiceController');

// Route::get('/listService', function () {
//     return view('listService');
// })->name('listService');

// Route::get('/addService', function () {
//     return view('addService');
// })->name('addService');

// Route::get('/updateService', function () {
//     return view('updateService');
// })->name('updateService');

// Route::get('/addImage', function () {
//     return view('addImage');
// })->name('addImage');

// Route::get('/listImages', function () {
//     return view('listImages');
// })->name('listImages');

// Route::get('/addShift', function () {
//     return view('addShift');
// })->name('addShift');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');




