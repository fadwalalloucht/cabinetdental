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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::post('/addService', 'Admin\ServicesController@addService')->name('addService');
    Route::get('/Service', 'Admin\ServicesController@showAddServiceForm');
    Route::get('/liste-Service', 'Admin\ServicesController@listService');
    Route::get('/service-edit/{id}', 'Admin\ServicesController@editService');
    Route::put('/updateService/{id}', 'Admin\ServicesController@updateService');
    Route::delete('/deleteservice/{id}', 'Admin\ServicesController@deleteservice');
    /** For Galerie */
    Route::get('/show', 'Admin\VideosController@showvideo');
    Route::post('/addfile', 'Admin\VideosController@addfile');
    Route::get('/liste-Galeries ', 'Admin\VideosController@listeGaleries');
    Route::delete('/delte-galerie/{id}', 'Admin\VideosController@deleteGalerie');
    Route::get('/galerie-edit/{id}', 'Admin\VideosController@editGalerie');
    Route::put('/updategalerie/{id}', 'Admin\VideosController@updateGalerie');

    /**For Shift */
    Route::get('/showHoraiare', 'Admin\ShiftController@showHoraiare');
    Route::post('/addshift', 'Admin\ShiftController@addShift');
    Route::get('/allshifts', 'Admin\ShiftController@allShift');
    Route::get('/shift-edit/{id}', 'Admin\ShiftController@editShift');
    Route::put('/update-shift/{id}', 'Admin\ShiftController@updateShift');
    Route::delete('/delete-shift/{id}', 'Admin\ShiftController@deleteShift');

});
