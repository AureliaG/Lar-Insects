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

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/formsent', [
  'uses' => 'ProfileController@PostInfoForm',
  'as' => 'form.info',
  'middleware' => 'auth'
]);

Route::get('/createUserInfo', [
  'uses' => 'ProfileController@createUserInfo',
  'as' => 'user.info',
  'middleware' => 'auth'
]);

Route::get('/home', [
  'uses' => 'HomeController@index',
  'as' => 'home.modif',
  'middleware' => 'auth'
]);

Route::get('/friends', function () {
    return view('friends');
});

Route::get('/friends', [
  'uses' : 'FriendsController@showAllUsers',
  'As' : 'friends.showAll',
  'middleware' : 'auth'
]);

