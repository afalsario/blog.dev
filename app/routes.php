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

Route::get('/', 'HomeController@showWelcome' );
Route::get('home', 'HomeController@home');
Route::get('porfolio', 'HomeController@portfolio');
Route::get('resume', 'HomeController@resume');
Route::resource('posts', 'PostsController');

Route::get('/sayHello/{name}', 'HomeController@sayHello');

Route::get('/rolldice/{guess}', function($guess){
    $rand_num = rand(1,6);

    $data = array(
        'rand_num' => $rand_num,
        'guess' => $guess
    );

    return View::make('temp.roll-dice')->with($data);

});




