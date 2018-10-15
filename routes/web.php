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
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/event_list', function () {
    return view('event_list');
});
Route::get('/eventNew', function () {
    return view('eventNew');
});
Route::get('/eventEdit', function () {
    return view('eventEdit');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/profileEdit', function () {
    return view('profileEdit');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
