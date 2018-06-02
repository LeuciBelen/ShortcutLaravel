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

Route::get('/home' , 'HomeController@index');

Route::get('/companieslogin', 'Auth\CompaniesLoginController@index')->name('companieslogin');

Route::post('/companieslogin', 'Auth\CompaniesLoginController@create');

Route::post('/freelancerslogin', 'Auth\FreelancersLoginController@create');

Route::get('/freelancerlogin', 'Auth\FreelancersLoginController@index')->name('freelancerslogin');