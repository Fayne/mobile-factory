<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
 * Landing
 */
Route::get('/', ['as' => 'web.landing', 'uses' => 'LandingController@index']);

/*
* Home
*/
Route::get('/home', ['as' => 'dashboard.home', 'before' => 'sentry.auth', 'uses' => 'HomeController@index']);

/*
 * Auth
 */
Route::get('login', ['as' => 'dashboard.login', 'uses' => 'AuthController@getLogin']);
Route::get('register', ['as' => 'dashboard.register', 'uses' => 'AuthController@getRegister']);
Route::post('login', ['as' => 'dashboard.login', 'uses' => 'AuthController@postLogin']);
Route::post('register', ['as' => 'dashboard.register', 'uses' => 'AuthController@postRegister']);
Route::get('logout', ['as' => 'dashboard.logout', 'uses' => 'AuthController@getLogout']);

/*
 * Dashboard
 */
Route::group(['prefix' => 'dashboard', 'before' => 'sentry.auth'], function () {


});

/*
 * Orders
 */
Route::group(['prefix' => 'orders', 'before' => 'sentry.auth'], function () {
    /*
     * Signature
     */
    Route::get('create/signature', ['as' => 'orders.create.signature', 'uses' => 'OrdersController@enterSignature']);
    Route::post('create', ['as' => 'orders.create', 'uses' => 'OrdersController@store']);

    Route::get('created', ['as' => 'orders.created', 'uses' => 'OrdersController@created']);
    Route::get('/', ['as' => 'orders.my_orders', 'uses' => 'OrdersController@myOrders']);

});

/*
 * Schedule
 */
Route::group(['prefix' => 'schedules', 'before' => 'sentry.auth'], function () {

    /*
     * Track
     */
    Route::get('track', ['as' => 'schedules.track', 'uses' => 'SchedulesController@track']);
});