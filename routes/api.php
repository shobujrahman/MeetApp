<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::group([
    'prefix' => 'v2', 
    'namespace' => 'Api'
], function(){

    Route::resource('category', 'CategoryController');   //category routes

    Route::resource('country', 'CountryController');    //country routes

    Route::get('comment/countrybyid/{id}', 'CommentController@countrybyid');
    Route::resource('comment', 'CommentController');   //comment routes

    Route::get('gift/catbyid/{id}', 'GiftController@catbyid');
    Route::get('gift/emogibytag/{tags}', 'GiftController@emogibytag');
    Route::resource('gift', 'GiftController');  //gift routes

    Route::get('image/countrybyid/{id}', 'ImageController@countrybyid');
    Route::resource('image', 'ImageController');  //image routes

    Route::get('name/countrybyid/{id}', 'NameController@countrybyid');
    Route::resource('name', 'NameController');  //name routes

    Route::get('video/countrybyid/{id}', 'VideoController@countrybyid');
    Route::resource('video', 'VideoController');  //video routes

    Route::resource('advertisement', 'AdvertisementController');  //ads routes

    Route::resource('banner', 'BannerController');  //banner routes

    Route::resource('coin', 'CoinController');  //coin routes

    Route::resource('vip', 'VipController');  //vip routes

    Route::resource('settings', 'SettingsController');  //settings routes

    Route::resource('user', 'UserController');  //User routes

    Route::get('feedback', 'FeedbackController@index'); //feedback route
    Route::post('feedback/submit', 'FeedbackController@store'); //feedback route

    Route::get('userprofile','UserprofileController@index'); //userprofile route
    Route::post('userprofile/submit','UserprofileController@store'); //userprofile route
    Route::get('userprofile/userbyemail/{user_email}', 'UserprofileController@userbyemail');
    Route::post('userprofile/update/{id}','UserprofileController@update'); //userprofile route


    //notification 
    Route::get('/device','DeviceController@index'); // device controller

    Route::post('/device/update/{id}','DeviceController@update'); 

    Route::get('/device/devicebyname/{device_name}','DeviceController@devicebyname');

    Route::post('/store-token','DeviceController@StoreToken'); // device controller
    
});