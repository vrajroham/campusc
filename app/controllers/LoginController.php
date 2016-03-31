<?php

class LoginController extends BaseController {

	public function login(){
		$data=Input::all();
		$validator=Validator::make($data,User::$auth_rules);
		if($validator->fails()){
			return Redirect::back()->withErrors($validator)->withInput();
		}
		if(Auth::attempt(array('email'=>Input::get('email'),'password'=>Input::get('password')))){
				return Redirect::intended("college.dashboard");
		}
		Request::session()->flash('error', 'Access Restricted.  Error : Login Required');
		return Redirect::route('home'); //redirect to home
	}

	public function logout(){
		Auth::logout();
		Request::session()->flash('status', 'Successfully Logged out!');
		return Redirect::route('home'); //redirect to home
	}
}
