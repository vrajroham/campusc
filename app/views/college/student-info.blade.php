@extends('college.layouts.default')
@section('content')
    <div role="main" class="main">
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Portfolio</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1><i class="fa fa-user"></i> Student Information</h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
        <div class="body">
            <div role="main" class="main">


                    <div class="row">
                        <div class="col-md-4">

                            <div class="owl-carousel" data-plugin-options='{"items": 1, "autoHeight": true}'>
                                <div>
                                    <div class="thumbnail">
                                        <img alt="" class="img-responsive" src="{{url("assets/img/projects/project-1.jpg")}}">
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-8">

                            <div class="portfolio-info">
                                <div class="row">
                                    <div class="col-md-12 center">
                                        <ul>
                                            <li>
                                                <a href="#" rel="tooltip" data-original-title="Like"><i class="fa fa-heart"></i>1000</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-calendar"></i> 21 November 2013
                                            </li>
                                            <li>
                                                <i class="fa fa-tags"></i> <a href="#">Brand</a>, <a href="#">Design</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <h2>Student <strong>Name</strong></h2>
                            <p class="taller"> This page belongs to students information panel.
                                This will contain complete details of student uploded by college.</p>

                            <a href="college.validate" class="btn btn-primary btn-icon"><i class="icon icon-external-link"></i>Show Complete Details For Verification</a>

                            <ul class="portfolio-details">
                                <li>
                                    <p><strong>Skills:</strong></p>

                                    <ul class="list list-skills icons list-unstyled list-inline">
                                        <li><i class="icon icon-check-circle"></i> Design</li>
                                        <li><i class="icon icon-check-circle"></i> HTML/CSS</li>
                                        <li><i class="icon icon-check-circle"></i> Javascript</li>
                                        <li><i class="icon icon-check-circle"></i> Backend</li>
                                    </ul>
                                </li>
                                <li>
                                    <p><strong>Other:</strong></p>
                                    <p>Okler Themes</p>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <hr class="tall" />

                    <div class="row">

                        <div class="col-md-12">
                            <h3>Curricular / Extra-Curricular <strong>Work</strong></h3>
                        </div>

                        <ul class="portfolio-list">
                            <li class="col-md-3">
                                <div class="portfolio-item thumbnail">
                                    <a href="student-info.blade.php" class="thumb-info">
                                        <img alt="" class="img-responsive" src="{{url("assets/img/projects/project-1.jpg")}}">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">SEO</span>
											<span class="thumb-info-type">Website</span>
										</span>
										<span class="thumb-info-action">
											<span title="Universal" href="#" class="thumb-info-action-icon"><i class="icon icon-link"></i></span>
										</span>
                                    </a>
                                </div>
                            </li>
                            <li class="col-md-3">
                                <div class="portfolio-item thumbnail">
                                    <a href="student-info.blade.php" class="thumb-info">
                                        <img alt="" class="img-responsive" src="{{url("assets/img/projects/project-1.jpg")}}">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Okler</span>
											<span class="thumb-info-type">Brand</span>
										</span>
										<span class="thumb-info-action">
											<span title="Universal" href="#" class="thumb-info-action-icon"><i class="icon icon-link"></i></span>
										</span>
                                    </a>
                                </div>
                            </li>
                            <li class="col-md-3">
                                <div class="portfolio-item thumbnail">
                                    <a href="student-info.blade.php" class="thumb-info">
                                        <img alt="" class="img-responsive" src="{{url("assets/img/projects/project-1.jpg")}}">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">The Fly</span>
											<span class="thumb-info-type">Logo</span>
										</span>
										<span class="thumb-info-action">
											<span title="Universal" href="#" class="thumb-info-action-icon"><i class="icon icon-link"></i></span>
										</span>
                                    </a>
                                </div>
                            </li>
                            <li class="col-md-3">
                                <div class="portfolio-item thumbnail">
                                    <a href="student-info.blade.php" class="thumb-info">
                                        <img alt="" class="img-responsive" src="{{url("assets/img/projects/project-1.jpg")}}">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">The Code</span>
											<span class="thumb-info-type">Website</span>
										</span>
										<span class="thumb-info-action">
											<span title="Universal" href="#" class="thumb-info-action-icon"><i class="icon icon-link"></i></span>
										</span>
                                    </a>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
    </div>
    </div>
@stop