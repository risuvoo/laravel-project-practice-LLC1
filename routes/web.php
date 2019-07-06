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


//homepage
Route::get('/','HomeController@index')->name('home');
Route::get('/category/{slug}','HomeController@showProductsByCategory')->name('category');
//authentication
Route::get('/register','AuthController@showRegistrationFrom')->name('register');
Route::post('/register','AuthController@processRegistrationFrom');

Route::get('/login','AuthController@showLoginFrom')->name('login');
Route::post('/login','AuthController@processLoginFrom');

Route::get('/logout','AuthController@logout')->name('logout');
//dashboard
Route::get('/dashboard','dashboardController@showDashboard')->name('dashboard');
Route::get('/orders','ordersController@showDashboard')->name('orders');
//dashboard authentication update
Route::get('/profile','AuthController@showProfile')->name('profile');
Route::post('/profile','AuthController@updateProfile');
Route::post('/password','AuthController@updatePassword')->name('password.update');
