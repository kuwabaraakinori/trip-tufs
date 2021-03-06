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

Route::get('/' , 'ContentController@index')->name('index');
Auth::routes(['verify' => true]);

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
Route::get('login' , 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login' , 'Auth\LoginController@login')->name('login.post');
Route::get('logout' , 'Auth\LoginController@logout')->name('logout.get');
Route::get('search' , 'SearchController@index')->name('search');


Route::get('/contact' , 'ContactController@index')->name('contact.index');
Route::post('/contact/confirm' , 'ContactController@confirm')->name('contact.confirm');
Route::post('/contact/send' , 'ContactController@send')->name('contact.send');
Route::get('/email', 'ContactController@email');



Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::group(['middleware' => ['auth']], function(){
Route::resource('/content' , 'ContentController' , ['except'=>['index']]);
Route::resource('users', 'UsersController', ['only' => ['index' , 'show' ]]);  
});


