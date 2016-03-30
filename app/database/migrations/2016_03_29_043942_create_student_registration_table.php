<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentRegistrationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students',function($table){
			$table->increments('id');
			$table->string("college_id");
			$table->string("studentname");
			$table->string("email")->unique();
			$table->integer("section1");
			$table->string("mobile")->unique();
			$table->string("address");
			$table->string("state");
			$table->string("district");
			$table->string("pincode");
			$table->string("gender");
			$table->integer("section2");
			$table->string("branch");
			$table->string("ssc_obtain");
			$table->string("ssc_total");
			$table->string("ssc_percentage");
			$table->integer("hsc");
			$table->string("hsc_obtain");
			$table->string("hsc_total");
			$table->string("hsc_percentage");
			$table->integer("diploma");
			$table->string("diploma_obtain");
			$table->string("diploma_total");
			$table->string("diploma_percentage");
			$table->integer("after_hsc");
			$table->string("fe_obtain");
			$table->string("fe_total");
			$table->string("fe_percentage");
			$table->string("se_obtain");
			$table->string("se_total");
			$table->string("se_percentage");
			$table->string("te_obtain");
			$table->string("te_total");
			$table->string("te_percentage");
			$table->string("be_obtain");
			$table->string("be_total");
			$table->string("be_percentage");
			$table->integer("section3");
			$table->string("skills");
			$table->integer("section4");
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('students');
	}

}
