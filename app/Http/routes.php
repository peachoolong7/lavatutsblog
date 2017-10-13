<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// authentification Routes
Route::get('auth/login', ['as'=>'login','uses'=>'Auth\AuthController@getLogin']);
 Route::post('auth/login', 'Auth\AuthController@postLogin');
 Route::get('auth/logout', ['as'=>'logout','uses'=>'Auth\AuthController@getLogout']);

// registration Routes
Route::get('auth/register',['as'=>'register', 'uses'=>'Auth\AuthController@getRegister']);
Route::post('auth/register','Auth\AuthController@postRegister');

// password reset routes

Route::get('password/reset', 'Auth\PasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\PasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\PasswordController@reset');



Route::get('blog/{slug}', ['as' =>'blog.single','uses'=>'BlogController@getSingle' ])
->where('slug','[\w\d\-\_]+');

Route::get('contact', 'PagesController@getContact');

Route::get('about', 'PagesController@getAbout');
Route::get('', 'PagesController@getIndex');

Route::resource('posts', 'PostsController');


/*
Route::get('/about', function () {
    return view('about');
});*/

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');



// categories
Route::resource('categories','CategoryController',['except'=>['create']]);


