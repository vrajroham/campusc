<?php

class CollegeController extends BaseController {

	/**
	 * @return mixed
	 */
	public function index(){
		return View::make('college.dashboard');
	}
	public function dashboard(){
		return View::make('college.dashboard');
	}
	public function getfile(){
		return View::make('college.getfile');
	}
	public function upload1(){
		$file = Input::file('excelfile'); //filename
		$validator = Validator::make($data = Input::all(), College::$rules); //Validate file
		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		}
		$destinationPath = 'upload'; //Folder where we want to upload the file (inside public folder)
		$filename = $file->getClientOriginalName(); //filename original
		$upload_success = Input::file('excelfile')->move($destinationPath, $filename); //upload file to destination
		$fileloc=$destinationPath.DIRECTORY_SEPARATOR.$filename; //file loc (upload/filename.xls)
		if( $upload_success ) { //if upload success
			try {
				$result = Excel::selectSheetsByIndex(0)->load($fileloc,function($reader){ //open the file read data and save in $result
				})->get();
				return View::make("college.uploaded-students")->with("result",$result); //pass result object to view for confirmation.
				//because we need to verify before dumping in db
			} catch (Exception $e) {
				echo "<br>".$e->getMessage();
			}
		} else {
			echo Response::json('error', 400);
		}
	}
	public function uploadStudents(){
		return View::make("college.upload-student");
	}
	public function studentdoUpload(){
		$result=json_decode(Input::get("result")); //By default it returns json string. we need to convert it o array using json_decode()
		foreach($result as $row){ //again for each record
			$email=$row->email; //extract email
			$row->token="1234"; //generate random token. i took static
			//syntax to send mail
			Mail::queue('home.email.student-activation', array('row'=>$row), function($message) use($row){
				$message->to($row->email, $row->name)->subject('Campusc Signup Link from college'); //Actually its somewhat diffr to undstand
			});	 //explain it later. (It sends email to each record)
		}
		return View::make('college.dashboard'); //at last get back to dashboard
	}
	public function studentlist(){
		return View::make("college.student-list");
	}
	public function getStudentData(){
		return Datatable::collection(CollegeRegistration::all(array('id','college_name')))
			->showColumns('id', 'college_name')
			->searchColumns('college_name','id')
			->orderColumns('id','college_name')
			->make();
	}
	public function studentinfo(){
		return View::make('college.student-info');
	}
	public function validate(){
		return View::make('college.validate');
	}
}
