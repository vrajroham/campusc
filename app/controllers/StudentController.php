<?php

class StudentController extends BaseController {

	/**
	 * @return mixed
	 */
	public function index(){
		//die(Hash::make("admin123"));
		return View::make('student.registration');
	}
	public function create(){
		return View::make('student.create');
	}
}
