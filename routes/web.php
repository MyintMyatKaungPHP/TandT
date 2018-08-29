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

// Admin Dashboard //
//Admin page
Route::resource('dashboard', 'admin_Controller');

// Website //
//index page
Route::get('zone','zone_Controller@index')->name('zone');

//tour packages page
Route::get('/packages','zone_Controller@packages')->name('packages');