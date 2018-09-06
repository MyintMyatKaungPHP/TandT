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
    return redirect(route('zone'));
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

//registration
Route::resource('user/registration','user_Controller');

//login
Route::get('user/login','login_Controller@login')->name('login');
Route::post('user/login','login_Controller@attemptLogin')->name('attepmtLogin');
//logout
Route::get('user/logout','login_Controller@logout')->name('user.logout');
//ban logout
Route::get('user/ban_logout','login_Controller@ban_logout')->name('user.ban_logout');

//profile
Route::get('user/profile','user_Controller@user_profile')->name('user.profile');

//blacklist
Route::resource('manage_user','blacklist_Controller');
Route::resource('mangge_user/blacklist','blacklist_user_Controller');
/*
 * For Ajax Script
 */

//For Route
Route::get('travel/type/{from_city}/{to_city}','zone_Controller@travelType');
Route::get('travel/price/{id}','zone_Controller@travelPrice');
Route::get('travel/hotel/{to_city}','zone_Controller@travelHotel');
Route::get('travel/hotelprice/{id}','zone_Controller@hotelPrice');

Route::get('password',function(){
    return bcrypt('123456').' | '.sha1('123456').' | '.md5('123456');
});
