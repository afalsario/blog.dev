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

// Route::get('/', 'HomeController@home' );
// Route::get('login', 'HomeController@login');
// Route::get('logout', 'HomeController@logout');
// Route::post('login', 'HomeController@doLogin');

// Route::resource('blog', 'PostsController');

// Route::get('profile', 'HomeController@profile');

// Route::get('/sayHello/{name}', 'HomeController@sayHello');

Route::get('whack', function(){
    return View::make('whack.whack-a-mole');
});

// _____________________________________________

Route::get('/', function(){
	return View::make('newBlog.index');
});

Route::get('portfolio', function(){
	return View::make('newBlog.portfolio');
});


Route::get('contact', 'ContactController@getContact');

Route::post('contact_request', 'ContactController@getContactForm');






