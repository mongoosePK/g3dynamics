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

Route::get('/', ['uses' => 'PagesController@index']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::post('admin/gallery/store', ['uses' => 'GalleryController@store']);
Route::get('admin/gallery/delete/{id}', ['uses' => 'GalleryController@destroy']);
Route::get('admin/account', ['uses' => 'AccountController@index', 'as' => 'voyager.account.home']);
Route::put('admin/account/update/{id}', ['uses' => 'AccountController@update', 'as' => 'voyager.account.update']);
Route::post('admin/account/store', ['uses' => 'AccountController@store', 'as' => 'voyager.account.store']);
Route::get('login', ['uses' => 'AccountController@index']);
Route::get('register', ['uses' => 'Auth\RegisterController@showRegistrationForm', 'as' => 'auth.register']);
Route::post('admin/logout', ['uses' => 'AccountController@logout', 'as' => 'voyager.logout']);
Route::post('accounts/create', ['uses' => 'AccountController@create']);
Route::post('event/signup/{amount}/{pre?}', ['uses' => 'EventSignupController@processSignUp', 'as' => 'event.registration']);
Route::get('admin/mammoth', ['uses' => 'MammothRegistrationController@index']);
Route::get('import/prereg', ['uses' => 'importPreRegController@get_data']);
Route::get('import/createaccounts', ['uses' => 'importPreRegController@createUserAccounts']);


//last resort
Route::get('{slug}', ['uses' => 'PagesController@getPage'])->where('slug','([A-Za-z0-9\-\/]+)');
