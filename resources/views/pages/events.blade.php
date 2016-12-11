@extends('layouts.pages')

@section('header')
	Events - Beyond colors
@stop

@section('intro')
	<section id="about-intro">
        <div class="container">
        	<div class="row">
        		<div class="col-md-12 col-sm-12 text-center">
        			<h1>Events board &nbsp; <i class="fa fa-calendar-check-o text-primary"></i></h1>
        			<p class="cont-info">At BC's events is where some of the awesomeness happen. We hold regular events where we offer various skills training and mentorship programmes and other fun filled activites. </p>
        		</div>
        	</div><br><br>
            <div class="row">
                <div class="col-md-2 col-sm-12"></div>
                <div class="col-md-3 col-sm-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                            <h3 class="panel-title month">December</h3>
                        </div>
                        <div class="panel-body">
                            <div class="date text-center">
                                5 <sup>th</sup>
                            </div>

                            <div class="event">
                                <span><strong>Event :</strong> &nbsp; Girl Confidence</span><br>
                                <span><strong>Theme :</strong> &nbsp; Womens day</span><br>
                                <span><strong>Venue :</strong> &nbsp; KICC</span><br>
                                <span><strong>Time :</strong>&nbsp; 10:00 AM - 3:00 PM</span><br>
                                <span><strong>Charges :</strong>&nbsp; FREE</span><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="panel panel-primary">
                        <p class="past">PAST</p>
                        <div class="panel-heading text-center">
                            <h3 class="panel-title month">November</h3>
                        </div>
                        <div class="panel-body">
                            <div class="date text-center">
                                13 <sup>th</sup>
                            </div>

                            <div class="event">
                                <span><strong>Event :</strong> &nbsp; Girl Confidence</span><br>
                                <span><strong>Theme :</strong> &nbsp; Womens day</span><br>
                                <span><strong>Venue :</strong> &nbsp; KICC</span><br>
                                <span><strong>Time :</strong>&nbsp; 10:00 AM - 3:00 PM</span><br>
                                <span><strong>Charges :</strong>&nbsp; FREE</span><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="panel panel-primary">
                        <p class="past">PAST</p>
                        <div class="panel-heading text-center">
                            <h3 class="panel-title month">August</h3>
                        </div>
                        <div class="panel-body">
                            <div class="date text-center">
                                3 <sup>rd</sup>
                            </div>

                            <div class="event">
                                <span><strong>Event :</strong> &nbsp; Girl Confidence</span><br>
                                <span><strong>Theme :</strong> &nbsp; Womens day</span><br>
                                <span><strong>Venue :</strong> &nbsp; KICC</span><br>
                                <span><strong>Time :</strong>&nbsp; 10:00 AM - 3:00 PM</span><br>
                                <span><strong>Charges :</strong>&nbsp; FREE</span><br>
                            </div>
                        </div>
                    </div>
                </div>
                <fiv class="col-md-1 col-sm-12"></fiv>
            </div><br><br>

            <div class="row text-center">
                <div class="col-md-12">
                    <a href="{{ url('/contact') }}" class="btn btn-primary"> RSVP upcoming event</a>
                </div>
            </div>
        </div>
    </section>
@stop

	