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
* Home
*/
Route::get('/', ['as' => 'dashboard.home', 'before' => 'sentry.auth', 'uses' => 'HomeController@index']);

/*
 * Auth
 */
Route::get('login', ['as' => 'dashboard.login', 'uses' => 'AuthController@getLogin']);
Route::get('register', ['as' => 'dashboard.register', 'uses' => 'AuthController@getRegister']);
Route::post('login', ['as' => 'dashboard.login', 'uses' => 'AuthController@postLogin']);
Route::post('register', ['as' => 'dashboard.register', 'uses' => 'AuthController@postRegister']);
Route::get('logout', ['as' => 'dashboard.logout', 'uses' => 'AuthController@getLogout']);