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

Route::group(['prefix' => '/', 'namespace' => 'Pages'], function () {

    Route::get('/', [
        'uses' => 'SWFController@index',
        'as' => 'home'
    ]);

    Route::group(['prefix' => 'product'], function () {

        Route::get('overview/{category}', [
            'uses' => 'SWFController@showProductOverview',
            'as' => 'show.product.overview'
        ]);

        Route::get('visualizer', [
            'uses' => 'SWFController@showProductVisualizer',
            'as' => 'show.product.visualizer'
        ]);

    });

    Route::group(['prefix' => 'warranty'], function () {

        Route::get('/', [
            'uses' => 'SWFController@showWarranty',
            'as' => 'show.warranty'
        ]);

        Route::post('submit', [
            'uses' => 'SWFController@submitWarranty',
            'as' => 'submit.warranty'
        ]);

    });
    
    Route::group(['prefix' => 'gallery'], function () {

        Route::get('/', [
            'uses' => 'SWFController@showGallery',
            'as' => 'show.gallery'
        ]);

        Route::get('data', [
            'uses' => 'SWFController@getDataGallery',
            'as' => 'get.data.gallery'
        ]);

        Route::get('{title}', [
            'uses' => 'SWFController@getTitleGallery',
            'as' => 'get.title.gallery'
        ]);

    });

    Route::group(['prefix' => 'installers'], function () {

        Route::get('/', [
            'uses' => 'SWFController@showInstallers',
            'as' => 'show.installers'
        ]);

        Route::get('{city}', [
            'uses' => 'SWFController@getCityInstallers',
            'as' => 'get.city.installers'
        ]);

        Route::post('contact/submit', [
            'uses' => 'SWFController@submitContactInstallers',
            'as' => 'submit.contact.installers'
        ]);

        Route::post('certification/submit', [
            'uses' => 'SWFController@submitCertification',
            'as' => 'submit.certification'
        ]);

    });

    Route::group(['prefix' => 'contact'], function () {

        Route::get('/', [
            'uses' => 'SWFController@showContact',
            'as' => 'show.contact'
        ]);

        Route::post('submit', [
            'uses' => 'SWFController@submitContact',
            'as' => 'submit.contact'
        ]);

    });

    Route::group(['prefix' => 'blog'], function () {

        Route::get('/', [
            'uses' => 'BlogController@showBlog',
            'as' => 'show.blog'
        ]);

        Route::get('data', [
            'uses' => 'BlogController@getDataBlog',
            'as' => 'get.data.blog'
        ]);

        Route::get('title/{title}', [
            'uses' => 'BlogController@getTitleBlog',
            'as' => 'get.title.blog'
        ]);

        Route::get('{author}/{y?}/{m?}/{d?}/{title?}', [
            'uses' => 'BlogController@showDetailBlog',
            'as' => 'detail.blog'
        ]);

    });

});
