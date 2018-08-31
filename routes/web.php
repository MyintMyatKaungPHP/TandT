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
Route::get('dashboard', 'admin_Controller@dashboard')->name('dashboard');
//manage cities
Route::resource('manage_city','city_Controller');
//manage tour packages
Route::resource('manage_package','package_Controller');
//manage hotels
Route::resource('manage_hotel','hotel_Controller');
//manage routes
Route::resource('manage_route','route_Controller');

// Website //
//index page
Route::get('zone','zone_Controller@index')->name('zone');

//tour packages page
Route::get('/packages','zone_Controller@packages')->name('packages');

//package detail page
Route::get('/package_detail/{id}','zone_Controller@package_detail')->name('package_detail');


/*
 * For Ajax Script
 */

//For Route
Route::get('travel/type/{from_city}/{to_city}','zone_Controller@travelType');
Route::get('travel/price/{id}','zone_Controller@travelPrice');
Route::get('travel/hotel/{to_city}','zone_Controller@travelHotel');
Route::get('travel/hotelprice/{id}','zone_Controller@hotelPrice');
