<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('/admin')->namespace('Admin')->group(function(){
    //All the admin route will be define here:-

    Route::match(['get','post'],'/','AdminController@login' );

    Route::group(['middleware'=>['admin']],function(){

        Route::get('profile','AdminController@profile');
        Route::get('dashboard','AdminController@dashboard');
        Route::get('logout','AdminController@logout');

        //category route
        Route::get('category','CategoryController@index');
        Route::get('category/create','CategoryController@create');
        Route::post('category/submit', 'CategoryController@store');
        Route::get('category/edit/{id}', 'CategoryController@edit');
        Route::post('category/update/{id}', 'CategoryController@update');
        Route::get('category/delete/{id}', 'CategoryController@destroy');

        //country route
        Route::get('country','CountryController@index');
        Route::get('country/create','CountryController@create');
        Route::post('country/submit','CountryController@store');
        Route::get('country/edit/{id}','CountryController@edit');
        Route::post('country/update/{id}','CountryController@update');
        Route::get('country/delete/{id}','CountryController@destroy');

        //comment route
        Route::get('comment','CommentController@index');
        Route::get('comment/create','CommentController@create');
        Route::post('comment/submit','CommentController@store');
        Route::get('comment/edit/{id}','CommentController@edit');
        Route::get('comment/show/{id}','CommentController@show');
        Route::post('comment/update/{id}','CommentController@update');
        Route::get('comment/delete/{id}','CommentController@destroy');

        //gift routes
        Route::get('gift','GiftController@index');
        Route::get('gift/create','GiftController@create');
        Route::post('gift/submit','GiftController@store');
        Route::get('gift/edit/{id}','GiftController@edit');
        Route::post('gift/update/{id}','GiftController@update');
        Route::get('gift/delete/{id}','GiftController@destroy');

        //image routes
        Route::get('image', 'ImageController@index');
        Route::get('image/create', 'ImageController@create');
        Route::post('image/submit', 'ImageController@store');
        Route::get('image/edit/{id}', 'ImageController@edit');
        Route::post('image/update/{id}', 'ImageController@update');
        Route::get('image/delete/{id}', 'ImageController@destroy');

        //name routes
        Route::get('name', 'NameController@index');
        Route::get('name/create', 'NameController@create');
        Route::post('name/submit', 'NameController@store');
        Route::get('name/edit/{id}', 'NameController@edit');
        Route::post('name/update/{id}', 'NameController@update');
        Route::get('name/delete/{id}', 'NameController@destroy');

        //video routes
        Route::get('video', 'VideoController@index');
        Route::get('video/create', 'VideoController@create');
        Route::post('video/submit', 'VideoController@store');
        Route::get('video/edit/{id}', 'VideoController@edit');
        Route::post('video/update/{id}', 'VideoController@update');
        Route::get('video/delete/{id}', 'VideoController@destroy');

        //Advertisement routes
        Route::get('advertisement','AdvertisementController@index');
        Route::post('advertisement/update','AdvertisementController@update');

        //BannerPhotos routes
        Route::get('banner', 'BannerController@index');
        Route::get('banner/create', 'BannerController@create');
        Route::post('banner/submit', 'BannerController@store');
        Route::get('banner/edit/{id}', 'BannerController@edit');
        Route::post('banner/update/{id}', 'BannerController@update');
        Route::get('banner/delete/{id}', 'BannerController@destroy');

         //coin purchase routes
        Route::get('coin','CoinController@index');
        Route::get('coin/create', 'CoinController@create');
        Route::post('coin/submit', 'CoinController@store');
        Route::get('coin/edit/{id}', 'CoinController@edit');
        Route::post('coin/update/{id}', 'CoinController@update');
        Route::get('coin/delete/{id}', 'CoinController@destroy');

        //Vip routes
         Route::get('vip', 'VipController@index');
        Route::get('vip/create', 'VipController@create');
        Route::post('vip/submit', 'VipController@store');
        Route::get('vip/edit/{id}', 'VipController@edit');
        Route::post('vip/update/{id}', 'VipController@update');
        Route::get('vip/delete/{id}', 'VipController@destroy');

         //Administrator Route
        Route::get('administrator', 'AdministratorController@index');
        Route::get('administrator/create', 'AdministratorController@create');
        Route::post('administrator/submit', 'AdministratorController@store');
        Route::get('administrator/edit/{id}', 'AdministratorController@edit');
        Route::post('administrator/update/{id}', 'AdministratorController@update');
        Route::get('administrator/delete/{id}', 'AdministratorController@destroy');
        
        //User routes
        Route::get('user', 'UserController@index');
        Route::get('user/create', 'UserController@create');
        Route::post('user/submit', 'UserController@store');
        Route::get('user/edit/{id}', 'UserController@edit');
        Route::post('user/update/{id}', 'UserController@update');
        Route::get('user/delete/{id}', 'UserController@destroy');
        Route::get('user/update-status/{id}', 'UserController@updateStatus');

        // Settings Routes
        Route::get('settings','SettingsController@index');
        Route::post('settings/update','SettingsController@update');

        // //Notification Route
        Route::get('notifications','NotificationController@index');
        Route::post('notifications/send','NotificationController@send');
    });
});