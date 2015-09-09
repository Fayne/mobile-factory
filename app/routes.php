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

//Route::get('/', function () {
//    return View::make('hello');
//});

/*
* Home
*/
Route::get('/', ['as' => 'dashboard.home', 'uses' => 'HomeController@welcome']);

/*
 * Auth
 */
Route::get('login', ['as' => 'dashboard.login', 'uses' => 'AuthController@getLogin']);
Route::post('login', ['as' => 'dashboard.login', 'uses' => 'AuthController@postLogin']);
Route::get('logout', ['as' => 'dashboard.logout', 'uses' => 'AuthController@getLogout']);