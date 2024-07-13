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




  
});




