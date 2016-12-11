@extends('layouts.pages')

@section('header')
	Membership - Beyond colors
@stop

@section('intro')
	<section id="about-intro">
        <div class="container">
        	<div class="row">
        		<div class="col-md-1 col-sm-12"></div>
        		<div class="col-md-11 col-sm-12 text-center">
        			<h2>Our membership plans</h2>
        			<p>become part of us by registering with a membership plan of your choice</p>
        		</div>
        	</div><br>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="panel panel-white">
                        <div class="panel-body">
                            <div class="header">
                                <h4 class="text-center">White</h4>
                                <div class="charges text-center">
                                    <span class="amount">FREE</span>
                                </div><br>
                                <div class="features">
                                    <ul>
                                        <li>
                                            <span class="fa-stack fa-sm text-primary">
                                              <i class="fa fa-check-circle-o fa-stack"></i>
                                            </span>
                                            <span>Register on our platform</span>
                                        </li>
                                        <li>
                                            <span class="fa-stack fa-sm text-primary">
                                              <i class="fa fa-check-circle-o fa-stack"></i>
                                            </span>
                                            <span>CV Upload (only viewable by you)</span>
                                        </li>
                                        <li>
                                            <span class="fa-stack fa-sm text-primary">
                                              <i class="fa fa-check-circle-o fa-stack"></i>
                                            </span>
                                            <span>Video Upload(short video to pitch yourself)</span>
                                        </li>

                                         <li class="inactive-feature">
                                            <span class="fa-stack fa-sm text-primary">
                                              <i class="fa fa-check-circle-o fa-stack"></i>
                                            </span>
                                            <span> CV review</span>
                                        </li>
                                        <li class="inactive-feature">
                                            <span class="fa-stack fa-sm text-primary">
                                              <i class="fa fa-check-circle-o fa-stack"></i>
                                            </span>
                                            <span>Job Search skills</span>
                                        </li>
                                        <li class="inactive-feature">
                                            <span class="fa-stack fa-sm text-primary">
                                              <i class="fa fa-check-circle-o fa-stack"></i>
                                            </span>
                                            <span> Personal branding</span>
                                        </li>
                                       
                                        <li class="inactive-feature">
                                            <span class="fa-stack fa-sm text-primary">
                                              <i class="fa fa-check-circle-o fa-stack"></i>
                                            </span>
                                            <span> 21century work skills (communication skills, presentation skills, developing your digital footprint)</span>
                                        </li>
                                    </ul>
                                </div><br>

                                <div class="signup_btn text-center">
                                    <a href="{{ url('/register') }}" class="btn btn-primary">Sign up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="panel panel-green">
                        <div class="panel-body">
                           <div class="header">
                                <h4 class="text-center">Green</h4>
                                <div class="charges text-center">
                                    <span>Ksh</span>
                                    <span class="amount">500</span>
                                </div>
                                <br>
                                <div class="features">
                                    <ul>
                                        <li>
                                            <span class="fa-stack fa-sm text-primary">
                                              <i class="fa fa-check-circle-o fa-stack"></i>
                                            </span>
                                            <span>Register on our platform</span>
                                        </li>
                                        <li>
                                            <span class="fa-stack fa-sm text-primary">
                                              <i class="fa fa-check-circle-o fa-stack"></i>
                                            </span>
                                            <span>CV Upload (only viewable by you)</span>
                                        </li>
                                        <li>
                                            <span class="fa-stack fa-sm text-primary">
                                              <i class="fa fa-check-circle-o fa-stack"></i>
                                            </span>
                                            <span>Video Upload(short video to pitch yourself)</span>
                                        </li>

                                         <li>
                                            <span class="fa-stack fa-sm text-primary">
                                              <i class="fa fa-check-circle-o fa-stack"></i>
                                            </span>
                                            <span> CV review</span>
                                        </li>
                                        <li>
                                            <span class="fa-stack fa-sm text-primary">
                                              <i class="fa fa-check-circle-o fa-stack"></i>
                                            </span>
                                            <span>Job Search skills</span>
                                        </li>
                                        <li>
                                            <span class="fa-stack fa-sm text-primary">
                                              <i class="fa fa-check-circle-o fa-stack"></i>
                                            </span>
                                            <span> Personal branding</span>
                                        </li>
                                       
                                        <li class="inactive-feature">
                                            <span class="fa-stack fa-sm text-primary">
                                              <i class="fa fa-check-circle-o fa-stack"></i>
                                            </span>
                                            <span> 21century work skills (communication skills, presentation skills, developing your digital footprint)</span>
                                        </li>
                                    </ul>
                                </div><br>

                                <div class="signup_btn text-center">
                                    <a href="{{ url('/register') }}" class="btn btn-primary">Sign up</a>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="panel panel-purple">
                        <div class="panel-body">
                           <div class="header">
                                <h4 class="text-center">Purple</h4>
                                <div class="charges text-center">
                                    <span>Ksh</span>
                                    <span class="amount">1000</span>
                                </div>
                                <br>
                                <div class="features">
                                    <ul>
                                        <li>
                                            <span class="fa-stack fa-sm text-primary">
                                              <i class="fa fa-check-circle-o fa-stack"></i>
                                            </span>
                                            <span>Register on our platform</span>
                                        </li>
                                        <li>
                                            <span class="fa-stack fa-sm text-primary">
                                              <i class="fa fa-check-circle-o fa-stack"></i>
                                            </span>
                                            <span>CV Upload (only viewable by you)</span>
                                        </li>
                                        <li>
                                            <span class="fa-stack fa-sm text-primary">
                                              <i class="fa fa-check-circle-o fa-stack"></i>
                                            </span>
                                            <span>Video Upload(short video to pitch yourself)</span>
                                        </li>

                                         <li>
                                            <span class="fa-stack fa-sm text-primary">
                                              <i class="fa fa-check-circle-o fa-stack"></i>
                                            </span>
                                            <span> CV review</span>
                                        </li>
                                        <li>
                                            <span class="fa-stack fa-sm text-primary">
                                              <i class="fa fa-check-circle-o fa-stack"></i>
                                            </span>
                                            <span>Job Search skills</span>
                                        </li>
                                        <li>
                                            <span class="fa-stack fa-sm text-primary">
                                              <i class="fa fa-check-circle-o fa-stack"></i>
                                            </span>
                                            <span> Personal branding</span>
                                        </li>
                                       
                                        <li>
                                            <span class="fa-stack fa-sm text-primary">
                                              <i class="fa fa-check-circle-o fa-stack"></i>
                                            </span>
                                            <span> 21century work skills (communication skills, presentation skills, developing your digital footprint)</span>
                                        </li>
                                    </ul>
                                </div><br>

                                <div class="signup_btn text-center">
                                    <a href="{{ url('/register') }}" class="btn btn-primary">Sign up</a>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

	