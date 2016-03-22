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


/**
 * Normal Routes (Mixed)
 */
Route::get('/', array("uses" => "HomeController@index", "as" => "home"));
Route::get('mailtest/{id}', array("uses" => "HomeController@mailtest", "as" => "mailtest"));
Route::get('registerCollegeAjax', array("uses" => "HomeController@registerCollegeAjax", "as" => "register.collegeajax"));
Route::get('collegeTerms', array("uses" => "HomeController@collegeTerms", "as" => "register.college.terms"));
Route::get('registerCollege', array("uses" => "HomeController@registerCollege", "as" => "register.college"));

/**
 * Authentication Routes
 */
Route::post('login', array("uses" => "LoginController@login", "as" => "login"));
Route::get('logout', array("uses" => "LoginController@logout", "as" => "logout"));
//------------------------------------------------------------------------------------------------------------------------

/**
 * Student Routes
 * */
Route::get('student.dashboard', array("uses" => "StudentController@index", "as" => "student.dashboard"));
Route::get('student/verification/', array("uses" => "StudentController@index", "as" => "student/verification"));
Route::get('student.registration', array("uses" => "StudentController@index", "as" => "student.registration"));
Route::get('registerStudent', array("uses" => "HomeController@registerStudent", "as" => "register.student"));


//------------------------------------------------------------------------------------------------------------------------

/**
 * College Routes
 */
Route::group(array("before" => "auth"), function () {
    Route::get('college.dashboard', array("uses" => "CollegeController@dashboard", "as" => "college.dashboard"));
    Route::get('college.getfile', array("uses" => "CollegeController@getfile", "as" => "college.getfile"));
    Route::post('college.upload', array("uses" => "CollegeController@upload1", "as" => "college.upload"));
    Route::get('college.upload.student', array("uses" => "CollegeController@uploadStudents", "as" => "college.uploadstudent"));
    Route::post('college.student.doupload', array("uses" => "CollegeController@studentdoUpload", "as" => "college.student.doupload"));
    Route::get('college.studentlist', array("uses" => "CollegeController@studentlist", "as" => "college.studentlist"));
    Route::get('college/list', array('as' => 'college.list', 'uses' => 'CollegeController@getStudentData'));
    Route::get('college.student-info', array("uses" => "CollegeController@studentinfo", "as" => "college.studentinfo"));
    Route::get('college.validate', array("uses" => "CollegeController@validate", "as" => "college.validate"));
});


//------------------------------------------------------------------------------------------------------------------------

/**
 * Auto-Generated Routes
 */
Route::resource('collegeRegistrations', 'CollegeRegistrationsController', array('except' => array('show', 'edit', 'update')));

//------------------------------------------------------------------------------------------------------------------------