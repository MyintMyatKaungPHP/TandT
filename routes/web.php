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
//manage booking
Route::resource('manage_booking','admin_Booking_Controller');

//Between Given Date
Route::get('between/report','admin_Booking_Controller@showBetweenReport')->name('between.report');
Route::post('between/report','admin_Booking_Controller@betweenReport');
// Website //
//index page
Route::get('zone','zone_Controller@index')->name('zone');

//tour packages page
Route::get('/packages','zone_Controller@packages')->name('packages');

//package detail page
Route::get('/package_detail/{id}','zone_Controller@package_detail')->name('package_detail');

//about us page
Route::get('aboutus','zone_Controller@aboutus')->name('aboutus');

//contact us page
Route::get('contactus','zone_Controller@contact')->name('contact');

//registration
Route::resource('user/registration','user_Controller');

//gallery
Route::get('/gallery','zone_Controller@gallery')->name('gallery');

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

//search
Route::post('search/packages','search_Controller@city_packages')->name('search_city_package');
Route::get('search/packages_type/{type}','search_Controller@packages_type')->name('search_package_type');

//booking
Route::resource('user_booking','user_Booking_Controller');
Route::get('user_booking/list/{id}','user_Booking_Controller@goBookingList')->name('goBookingList');
Route::post('user_booking/form','user_Booking_Controller@bookingForm')->name('bookingForm');
Route::get('user_booking/success/{id}/{uid}','user_Booking_Controller@BookingSuccess')->name('BookingSuccess');



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
