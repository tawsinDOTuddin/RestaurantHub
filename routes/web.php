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
Route::get('/profile/{username}', 'ProfileController@profile')->name('profile');
Route::get('/restaurantpage/{id}', 'RestaurantController@respage')->name('restaurantpage');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'SearchController@typeahead'));
Route::post('/search', 'SearchController@search');
Route::post('/reserve', 'BookingController@reserve');


Route::GET('admin/home','AdminController@index');

Route::GET('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin','Admin\LoginController@login');
Route::POST('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset','Admin\ResetPasswordController@reset');
Route::GET('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::POST('admin/register','Admin\RegisterController@register')->name('admin.register');
Route::GET('admin/register',  'Admin\RegisterController@showRegistrationForm');

/*Route::GET('admin/bookinglist/{res_id}',  'AdminController@list')->name('bookinglist');
Route::GET('admin/resdetails/{res_id}',  'AdminController@resdetails');
Route::GET('/admin/confirm/{id}', 'AdminController@destroy');*/


Route::GET('/profile/deletebooking/{id}', 'BookingController@destroy');


Route::resource('comments', 'CommentController');


Route::group(['middleware' => 'ad_acc'], function(){

Route::GET('admin/bookinglist/{res_id}',  'AdminController@list')->name('bookinglist');
Route::GET('admin/resdetails/{res_id}',  'AdminController@resdetails');
});
Route::GET('/admin/confirm/{id}', 'AdminController@destroy');

