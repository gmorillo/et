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
    return view('sections.home.main-home');
});
Auth::routes(['verify' => true]);

Route::get('/profile', 'ProfileController@index')->middleware('verified');

Route::prefix('profile')->group(function () {
    Route::get('/get-info-artist', 'ProfileController@getInfoArtist')->middleware('verified');
    Route::post('/create-artist', 'ProfileController@addArtist')->middleware('verified');
    Route::get('/get-edit-info-artist', 'ProfileController@getEditInfoArtist')->middleware('verified');
    Route::get('/get-edit-info-style', 'ProfileController@getEditInfoStyle')->middleware('verified');
    Route::get('/edit-artist/{id}', 'ProfileController@EditArtist')->middleware('verified');
    Route::get('/edit-style/{id}', 'ProfileController@EditStyle')->middleware('verified');
    Route::get('/delete-img/{id}', 'ProfileController@deleteImg')->middleware('verified');
    Route::get('/delete-img-style/{id}', 'ProfileController@deleteImgStyle')->middleware('verified');
    Route::get('/delete-artist/{id}', 'ProfileController@deleteArtist')->middleware('verified');
    Route::get('/delete-style/{id}', 'ProfileController@deleteStyle')->middleware('verified');
    Route::post('/edit-info-artist/{id}', 'ProfileController@editInfoArtist')->middleware('verified');
    Route::post('/edit-info-style/{id}', 'ProfileController@editInfoStyle')->middleware('verified');

    Route::get('/form-style', 'ProfileController@indexStyle')->middleware('verified');
    Route::post('/create-style', 'ProfileController@addStyle')->middleware('verified');

});



Route::get('/home', 'HomeController@index')->middleware('verified');
