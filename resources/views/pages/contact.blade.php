@extends('layouts.pages')

@section('header')
	About - Beyond colors
@stop

@section('intro')
	<section id="about-intro">
        <div class="container">
        	<div class="row">
        		<div class="col-md-12 col-sm-12 text-center">
        			<h1>Get in touch, We'd love to hear from you <i class="fa fa-smile-o"></i></h1>
        			<p class="cont-info">Our team is on stand-by to respond to your enquiries and questions. You can reach us Monday through Friday from 7:00 am to 5:00pm. LET'S TALK!</p cla>
        		</div>
        	</div><br><br>
            <div class="row">
                <div class="col-md-1 col-sm-12"></div>
                <div class="col-md-5 col-sm-12">
                    <h3>You can leave us a message</h3><br>
                    <form action="" method="POST" role="form">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Firstname</label>
                                    <input type="text" class="form-control" id="" placeholder="enter first name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Lastname</label>
                                    <input type="text" class="form-control" id="" placeholder="enter last name">
                                </div>
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" id="" placeholder="enter email">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Phone number</label>
                                    <input type="text" class="form-control" id="" placeholder="enter phone number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">location</label>
                                    <input type="text" class="form-control" id="" placeholder="enter current location">
                                </div>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <input type="text" class="form-control" id="" placeholder="how much is 4+5?">
                        </div><br>

                        <div class="form-group">
                            <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="what would you like BC to do for you"></textarea>
                        </div>
                    
                        
                    
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-md-1 col-sm-12"></div>
                <div class="col-md-5 col-sm-12">
                    
					<h3>we are social! lets interact on the socials</h3><br>

                    <ul>
                        <li>
                            <span class="fa-stack fa-lg">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
                            <span class="small"><a href="#">@beyondcolors1</a></span>
                        </li>

                        <li>
                            <span class="fa-stack fa-lg">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                            </span>
                            <span class="small"><a href="#">beyondcolors</a></span>
                        </li>

                        <li>
                            <span class="fa-stack fa-lg">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                            </span>
                            <span class="small"><a href="#">beyondcolors</a></span>
                        </li>

                        <li>
                            <span class="fa-stack fa-lg">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                            </span>
                            <span class="small"><a href="#">beyondcolors</a></span>
                        </li>
                    </ul><br>

                    <h3>You can also shoot us an email or give us a call</h3>
                    <ul>
                        <li>
                            <span class="fa-stack fa-lg">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                            </span>
                            <span class="small"><a href="#">info@beyondcolors.co.ke</a></span>
                        </li>

                        <li>
                            <span class="fa-stack fa-lg">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                            </span>

                            <span class="small">+254 721-569-223</span>
                        </li>
                    </ul>
    
                </div>
            </div>
        </div><br><br>
    </section>
@stop

	