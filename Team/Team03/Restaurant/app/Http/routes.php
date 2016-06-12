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

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/contact-us', 'HomeController@contact');

Route::post('/seat', 'MenuController@chooseSeat');
Route::get('/menu', 'MenuController@getAllMenus');

Route::get('/login', 'LoginController@showLoginForm');
Route::post('/login', 'LoginController@login');

Route::get('/view-order/{num}', 'OrderController@showMyOrder');
Route::get('/order/{num}/{id}', 'OrderController@addOrder');
Route::get('/submit-order/{num}', 'OrderController@submitOrder');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function() {
    Route::get('/foodlist', 'MenuController@showAllMenusAdmin');
    Route::get('/edit-menu/{id}', 'MenuController@editMenuForm');
    Route::put('/edit-menu', 'MenuController@editMenu');
    Route::delete('/delete-menu/{id}', 'MenuController@deleteMenu');

    Route::get('/add-menu', 'MenuController@showAddForm');
    Route::post('/add-menu', 'MenuController@addMenu');
    
    Route::get('/view-order', 'OrderController@showAllOrder');
    
    Route::get('/logout', 'LoginController@logout');
});
