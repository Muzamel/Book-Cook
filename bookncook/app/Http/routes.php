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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('login',function(){
    return response()->view('login');
});

Route::get('sign_in',function(){
    return response()->view('admin_panel.login1');

});

Route::resource('index','HomeController@home');

Route::resource('User','UserController@index');

Route::resource('restaurants','RestaurantsController');

Route::post('enter_date','RestaurantsController@reservation_ajax');

Route::get('calendar',function(){

    return response()->view('admin_panel.calendar');

});

Route::get('reservation',function(){

    return response()->view('admin_panel.reservation');

});

Route::resource('admin_panel','Admin_panelController');

Route::resource('restaurantAdmin','Restaurant_adminController');


