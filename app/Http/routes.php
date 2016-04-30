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

/**
 * The Home Page
 */
Route::get('/', 'ClassifiedsController@index');


// Classifieds routes
Route::resource('classifieds', 'ClassifiedsController');

// Categories routes
Route::resource('categories', 'CategoriesController');



/*
* Authentication
*/
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);