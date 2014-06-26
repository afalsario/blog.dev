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

Route::get('/', function(){
	return View::make('temp.my-first-view');
});

Route::get('/resume', function(){
	return "This is my resume.";
});

Route::get('/portfolio', function(){
	return "This is my portfolio.";
});

Route::get('/sayhello/{name}', function($name)
{
    if ($name == "Ashley")
    {
        return Redirect::to('/');
    }
    else
    {
        $data = array(
        	'name' => $name
        );
        return View::make('temp.my-first-view')->with($data);
    }
});

Route::get('/rolldice/{guess}', function(){
    $rand_num = rand(1,6);

    return View::make('temp.roll-dice')->with('rand_num', $rand_num);

});




