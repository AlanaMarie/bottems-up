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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/drinks', [
    'as' => 'drinks.list',
    'uses' => 'DrinkController@listDrinks'
]);

Route::get('/drinks/categories', [
    'as' => 'drinks.categories',
    'uses' => 'DrinkController@listCategories'
]);

Route::get('/drinks/random', [
    'as' => 'drinks.random',
    'uses' => 'DrinkController@randomDrinks'
]);