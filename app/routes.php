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
	return View::make('hello');
});

Route::get('/resume', function(){
	return View::make('resume');
});

Route::get('/portfolio', function(){
	return View::make('portfolio');
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

Route::get('/rolldice/{guess}', function($guess){
    $rand_num = rand(1,6);

    $data = array(
        'rand_num' => $rand_num,
        'guess' => $guess
    );

    return View::make('temp.roll-dice')->with($data);

});




