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

Route::get('/','HomeController@index')->name('home');
Route::get('/category/{slug}','HomeController@showProductsByCategory')->name('category');



Route::get('/login','AuthController@showLoginFrom')->name('login');
Route::post('/login','AuthController@processLoginFrom');
Route::get('/profile','AuthController@showProfile')->name('profile');
Route::get('/logout','AuthController@logout')->name('logout');

Route::get('/register','AuthController@showRegistrationFrom')->name('register');
Route::post('/register','AuthController@processRegistrationFrom');


Route::get('/dashboard','dashboardController@showDashboard')->name('dashboard');


Route::get('/orders','ordersController@showDashboard')->name('orders');
