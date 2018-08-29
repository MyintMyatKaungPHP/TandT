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

// Admin Dashboard
Route::resource('dashboard', 'admin_Controller');

//Website
Route::get('zone','zone_Controller@index')->name('zone');
Route::get('/packages','zone_Controller@packages')->name('packages');