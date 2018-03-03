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

/*========================================================
                    REDIRECT
        This route is redirecting to login page
==========================================================*/

Route::get('/', function () {
    return redirect('login');
});

/*=========================================================
                    REGISTER
        Only admin can access this page
============================================================*/

Route::get('admin/register/user', 'Auth\RegisterController@showRegistrationForm')->name('registerUser');
Route::post('admin/register/user', 'Auth\RegisterController@registerUser');

/*=========================================================
                    LOGIN
                user login form
============================================================*/

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');


