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
    return view('login');
});

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider')->name('redirectTo');

Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('callback');


// Route::get('login/twitter', 'Auth\LoginController@twitterRedirectToProvider')->name('twitterLogin');
// Route::get('login/twitter/callback', 'Auth\LoginController@twitterHandleProviderCallback')->name('twitterCallback');

// Route::any('home',function(){
// 	return view('home');
// })->name('home');

// // Google 
// Route::get('login/google', 'Auth\LoginController@googleRedirectToProvider')->name('googleLogin');
// Route::get('login/google/callback', 'Auth\LoginController@googleHandleProviderCallback')->name('googleCallback');