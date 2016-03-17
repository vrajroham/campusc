@extends('college.layouts.default')

@section('content')
    <div role="main" class="main">

        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="college.dashboard">Home </a></li>
                            <li class="active">Details</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1><i class="fa fa-dashboard"></i> Student Details</h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4><i class="fa fa-tasks"></i> Approve Student Details</h4>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1One">
                                        <i class="fa fa-user-plus"></i> Primary Details
                                        <i class="fa fa-check text-success pull-right fa-2x"></i>
                                        <i class="fa fa-close text-danger pull-right fa-2x"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1One" class="accordion-body collapse in">
                                <div class="panel-body">

                                    <form action="php/contact-form.php" id="contactForm" type="post">
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label>name </label>
                                                    <input type="text" value="" data-msg-required="Please enter your name." maxlength="50" class="form-control" name="name" id="name">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>email address </label>
                                                    <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="50" class="form-control" name="email" id="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                     <label>phone</label>
                                                    <input type="text" value="" data-msg-required="Please enter the subject." maxlength="50" class="form-control" name="subject" id="subject">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="push-top">
                                                <div class="col-md-6">
                                                   <label>Address </label>
                                                    <input type="text" value="" data-msg-required="Please enter the subject." maxlength="50" class="form-control" name="subject" id="subject">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1Two">
                                        <i class="fa fa-user-plus"></i>   Academic Details
                                        <i class="fa fa-check text-success pull-right fa-2x"></i>
                                        <i class="fa fa-close text-danger pull-right fa-2x"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1Two" class="accordion-body collapse">
                                <div class="panel-body">
                                </div>
                                <div id="collapse1One" class="accordion-body collapse in">
                                    <div class="panel-body">

                                        <form action="php/contact-form.php" id="contactForm" type="post">
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-6">
                                                        <label>name </label>
                                                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="50" class="form-control" name="name" id="name">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>email address </label>
                                                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="50" class="form-control" name="email" id="email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-6">
                                                          <label>phone</label>
                                                            <input type="text" value="" data-msg-required="Please enter the subject." maxlength="50" class="form-control" name="subject" id="subject">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-6">
                                                         <label>Address </label>
                                                            <input type="text" value="" data-msg-required="Please enter the subject." maxlength="50" class="form-control" name="subject" id="subject">
                                                    </div>
                                                </div>
                                            </div>


                                        </form>



                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-12">
                            <input class="btn btn-primary btn-lg pull-right" type="submit" data-loading-text="Loading..." value="Approved"></input>
                        </div>
                </div>
            </div>
        </div>

    </div>

        <div class="alert alert-success hidden" id="submissionSuccess">
            <strong>Success!</strong> submission successful!
        </div>
    </div>

    </div>
                     </div>

    </div>

@stop