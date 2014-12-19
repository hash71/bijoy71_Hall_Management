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

// Route::get('/', function(){
// 	return View::make('layouts.default.index');
// });
Route::get('/', 'SessionsController@login');

Route::get('login', 'SessionsController@login');

Route::get('logout', 'SessionsController@destroy');

Route::post('login_check', 'SessionsController@login_check');

Route::get('index', function(){	
	
	return View::make('layouts.default.index');
	
})->before('auth');

Route::get('signup', function()
{	
	if (Auth::check()){			
			return Redirect::to('/index');
	}
	return View::make('signup');
});

Route::post('signup_check', 'SessionsController@signup_check');

Route::resource('users','UsersController');

Route::resource('students','StudentsController');