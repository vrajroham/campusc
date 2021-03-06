
@extends('college.layouts.default')
@include('student.optionscheck')
@section('content')
    <div role="main" class="main">
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="#">Student</a></li>
                            <li class="active">Dashboard</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1><i class="fa fa-dashboard"></i> Student Validation</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-none">Welcome, <a href="#" class="active"> Student Name</a></h2>
                    <p>Something Effective Moto goes here</p>
                    <hr class="tall">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <hr class="visible-sm visible-xs tall" />
                    <h4>Validation</h4>

                    <div class="toggle toggle-primary" data-plugin-toggle data-plugin-options='{ "isAccordion": true }'>
                        <section class="toggle active">
                            <label>Basic Information</label>
                            <div class="toggle-content">
                                <div class="container">
                                    <form class="form-horizontal form-bordered" method="get">
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <label class="control-label text-dark" for="studentname">Name</label>
                                                    <p>Priyanka Harish Mantala</p>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="control-label text-dark" for="studentmail">Email</label>
                                                    <p>priyanka.mantala@gmail.com</p>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="control-label text-dark" for="institutename">Institute Name</label>
                                                    <p>Sanjivani College of Engineering,Kopargaon</p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                        <section class="toggle">
                            <label>Personal Details</label>
                            <div class="toggle-content">
                                <div class="container">
                                    <form class="form-horizontal form-bordered" method="get">
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <label class="control-label text-dark" for="studentmobile">Mobile No.</label>
                                                <div class="form-group input-group"
                                                    <p>+919876543210</p>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="control-label text-dark" for="studentaddress">Address</label>
                                                <p>ABC Street,XYZ Lane
                                                    ,PQR Road,Kopargaon </p>
                                            </div>

                                            <div class="col-md-4">
                                                <label>Sex</label>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="radios" id="inlineRadioMale" value="option1" checked> Male
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="radios" id="inlineRadioFemale" value="option2" checked="checked"> Female
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="radios" id="inlineRadioOther" value="option3"> Other
                                                    </label>

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                        <section class="toggle">
                            <label>Academic Details</label>
                            <div class="toggle-content">
                                <div class="col-md-12">
                                    <select class="form-control">
                                        <option value="..">Select a branch</option>
                                        <option value="mechanical">Mechanical</option>
                                        <option value="entc">E&TC</option>
                                        <option value="computer">Computer</option>
                                        <option value="it">IT</option>
                                        <option value="civil">Civil</option>
                                        <option value="chemical">Chemical</option>
                                    </select>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="tabs tabs-vertical">
                                                <ul class="nav nav-tabs col-sm-3">
                                                    <li class="active">
                                                        <a href="#sscmarks" data-toggle="tab">SSC Marks</a>
                                                    </li>
                                                    <li>
                                                        <a href="#hscmarks" data-toggle="tab">HSC Marks</a>
                                                    </li>
                                                    <li>
                                                        <a href="#diploma" data-toggle="tab">Diploma</a>
                                                    </li>
                                                    <li>
                                                        <a href="#engineering" data-toggle="tab">Engineering</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div id="sscmarks" class="tab-pane active">
                                                        <div class="form-group">
                                                            <div class="col-md-4">
                                                                <label class="control-label">Total Marks Obtained</label>
                                                                <p>423</p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="control-label">Total Maximum Marks</label>
                                                                <p>500</p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="control-label">Equivalent %</label>
                                                                <p>84.6</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="hscmarks" class="tab-pane">
                                                        <div class="col-md-12">
                                                            <label>Have you done XII?</label>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label class="radio-inline" for="chkYes">
                                                                    <input type="radio" name="chkhsc" id="chkYes" value="option1"> Yes
                                                                </label>
                                                                <label class="radio-inline" for="chkNo">
                                                                    <input type="radio" name="chkhsc" id="chkNo" value="option2" checked="checked"> No
                                                                </label>
                                                                <hr/>
                                                                <div id="details" style="display: none">
                                                                    <div class="form-group">
                                                                        <div class="col-md-4">
                                                                            <label class="control-label">Total Marks Obtained</label>
                                                                            <input type="text" min="3" maxlength="3">
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="control-label">Total Maximum Marks</label>
                                                                            <input type="text" min="3" maxlength="3">
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="control-label">Equivalent %</label>
                                                                            <input type="text">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="diploma" class="tab-pane">
                                                        <div class="col-md-12">
                                                            <label>Have you done Diploma?</label>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label class="radio-inline" for="chkY">
                                                                    <input type="radio" name="chkdiploma" id="chkY" value="option1" checked="checked"> Yes
                                                                </label>
                                                                <label class="radio-inline" for="chkN">
                                                                    <input type="radio" name="chkdiploma" id="chkN" value="option2"> No
                                                                </label>
                                                                <hr/>
                                                                <div id="diplomadetails" style="display: none">
                                                                    <div class="form-group">
                                                                        <div class="col-md-4">
                                                                            <label class="control-label">Total Marks Obtained</label>
                                                                            <p>550</p>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="control-label">Total Maximum Marks</label>
                                                                            <p>700</p>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="control-label">Equivalent %</label>
                                                                            <p>78.57</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="engineering" class="tab-pane">
                                                        <div class="col-md-12">
                                                            <label>Admission through Diploma or 12th?</label>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label class="radio-inline" for="chkdiploma1">
                                                                    <input type="radio" name="chkadmission" id="chkdiploma1" value="option1" checked="checked">Diploma
                                                                </label>
                                                                <label class="radio-inline" for="chkhsc1">
                                                                    <input type="radio" name="chkadmission" id="chkhsc1" value="option2">12th
                                                                </label>
                                                                <hr/>
                                                                <div id="admissiondetails1" style="display: none">
                                                                    <div class="form-group">
                                                                        <div class="col-md-3">
                                                                            <label>Second Year</label>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Total Marks Obtained</label>
                                                                            <p>523</p>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Total Maximum Marks</label>
                                                                            <p>750</p>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Equivalent %</label>
                                                                            <p>69.73</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="col-md-3">
                                                                            <label>Third Year</label>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Total Marks Obtained</label>
                                                                            <p>585</p>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Total Maximum Marks</label>
                                                                            <p>750</p>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Equivalent %</label>
                                                                            <p>78.00</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="col-md-3">
                                                                            <label>Final Year</label>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Total Marks Obtained</label>
                                                                            <p>580</p>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Total Maximum Marks</label>
                                                                            <p>750</p>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Equivalent %</label>
                                                                            <p>77.33</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="admissiondetails2" style="display: none">
                                                                    <div class="form-group">
                                                                        <div class="col-md-3">
                                                                            <label>First Year</label>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Total Marks Obtained</label>
                                                                            <input type="text" min="3" maxlength="3">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Total Maximum Marks</label>
                                                                            <input type="text" min="3" maxlength="3">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Equivalent %</label>
                                                                            <input type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="col-md-3">
                                                                            <label>Second Year</label>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Total Marks Obtained</label>
                                                                            <input type="text" min="3" maxlength="3">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Total Maximum Marks</label>
                                                                            <input type="text" min="3" maxlength="3">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Equivalent %</label>
                                                                            <input type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="col-md-3">
                                                                            <label>Third Year</label>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Total Marks Obtained</label>
                                                                            <input type="text" min="3" maxlength="3">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Total Maximum Marks</label>
                                                                            <input type="text" min="3" maxlength="3">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Equivalent %</label>
                                                                            <input type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="col-md-3">
                                                                            <label>Final Year</label>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Total Marks Obtained</label>
                                                                            <input type="text" min="3" maxlength="3">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Total Maximum Marks</label>
                                                                            <input type="text" min="3" maxlength="3">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Equivalent %</label>
                                                                            <input type="text">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="toggle">
                            <label>Other Detials</label>
                            <div class="toggle-content">

                            </div>
                        </section>
                    </div>
                </div>

            </div>
            <hr class="tall" />
        </div>
    </div>
@stop