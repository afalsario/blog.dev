<?php

class HomeController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |   Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function home(){
        return View::make('home');
    }

    public function login()
    {
        return View::make('login');
    }

    public function doLogin()
    {
        $email = Input::get('email');
        $password = Input::get('password');

        if(Auth::attempt(array('email' => $email, 'password' => $password), true))
        {
            Session::flash('infoMessage', 'You have logged in successfully.');
            return Redirect::intended(action('PostsController@index'));
        }
        else
        {
            Session::flash('errorMessage', "Email or Password is incorrect");
            // return Redirect::action('HomeController@login');
            return Redirect::back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::action('PostsController@index');
    }

    public function profile()
    {
    return View::make('profile-settings');
    }

}





