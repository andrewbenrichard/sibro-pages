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

// create home page route with controller
Route::get('/', 'PagesController@index');
Route::get('/pages/reseller-terms', 'PagesController@resellerTerms');
Route::get('/pages/reseller-privacy', 'PagesController@resellerPrivacy');
Route::get('/pages/reseller-guide', 'PagesController@resellerPrivacy');
