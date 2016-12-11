@extends('layouts.pages')

@section('header')
	Partners - Beyond colors
@stop

@section('intro')
	<section id="about-intro">
        <div class="container">
        	<div class="row">
        		<div class="col-md-12 col-sm-12 text-center">
        			<h1>Partnerships &nbsp; <i class="fa fa-handshake-o text-primary"></i></h1>
        			<p class="cont-info">To be able to achieve some of our programmes e.g <a href="#">girl confidence</a>, we partner with very supportive corporates and organizations which help us raise resources to undertake various programmes. Here are our partners:</p>
        		</div>
        	</div><br><br>
            <div class="row partners">
                <div class="col-md-2 col-sm-12"></div>
                <div class="col-md-2 col-sm-12">
                   <img src="img/bic.jpg" alt="" width="120"> 
                </div>
                <div class="col-md-2 col-sm-12">
                   <img src="img/zetech.jpg" alt="" width="120"> 
                </div>
                <div class="col-md-2 col-sm-12">
                   <img src="img/slim.jpg" alt="" width="120" height="100" style="margin: -15px 0 0 0"> 
                </div>
                <div class="col-md-2 col-sm-12">
                   <img src="img/kimfay.gif" alt="" width="120" > 
                </div>
                <div class="col-md-2 col-sm-12"></div>
            </div><br><br>

            <div class="row text-center">
                <div class="col-md-12">
                    <a href="{{ url('/register') }}" class="btn btn-primary"> Become our partner</a>
                </div>
            </div>
        </div>
    </section>
@stop

	