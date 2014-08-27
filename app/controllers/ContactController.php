<?php

class ContactController extends BaseController {

	public function getContact(){

		return View::make('newBlog.contact');

	}

	public function getContactForm(){

		$data = Input::all();

		$rules = array (
			'name' => 'required',
			'email' => 'required',
			'message' =>'required'
			);

		$validator = Validator::make($data, $rules);

		if($validator->passes()){

			Mail::send('emails.hello', $data, function($message) use ($data)
			{
				$email = trim('a_falsario@yahoo.com');
				$message->from($data['email'], $data['name']);
				$message->to($email)->subject('MYSITE-Contact Form1!');
			});
			Session::flash('success', 'Your message was sent!');
			return Redirect::to('contact');
		} else {
			Session::flash('fail', 'Please enter in all required data!');
			return Redirect::back()->withErrors($validator);
		}
	}

}

