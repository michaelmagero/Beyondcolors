<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>@yield('header')</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/app.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <script src="https://use.fontawesome.com/c9610b616b.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    
    <nav class="navbar navbar-default" role="navigation">
    	<div class="container-fluid">
    		<!-- Brand and toggle get grouped for better mobile display -->
    		<div class="navbar-header">
    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
    				<span class="sr-only">Toggle navigation</span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    			</button>
    			<a class="" href="{{ url('/') }}"><img src="http://beyondcolors.co.ke/images/logo.png" alt=""></a>
    		</div>
    
    		<!-- Collect the nav links, forms, and other content for toggling -->
    		<div class="collapse navbar-collapse navbar-ex1-collapse">
    			<ul class="nav navbar-nav navbar-right">
    				<li><a href="{{ url('/') }}">Home</a></li>
    				<li class="dropdown">
    					<a href="#" class="dropdown-toggle" data-toggle="dropdown">About  <b class="caret"></b></a>
    					<ul class="dropdown-menu">
    						<li><a href="{{ url('/about') }}">About us</a></li>
    						<li><a href="{{ url('/membership') }}">Membership</a></li>
    						<li><a href="{{ url('/services') }}">What we offer</a></li>
    						<li><a href="{{ url('/events') }}">Events</a></li>
    						<li><a href="{{ url('/partners') }}">Our partners</a></li>
    					</ul>
    				</li>
    				<li><a href="{{ url('/problem') }}">Problem</a></li>
    				<li><a href="{{ url('/solution') }}">Solution</a></li>
    				<li><a href="{{ url('/impact') }}">Impact</a></li>
    				<li><a href="{{ url('/contact') }}">Contact</a></li>
    				<li><a href="{{ url('/login') }}"><i class="fa fa-lock"></i> &nbsp;Login</a></li>
    				<a href="{{ url('/register') }}" class="btn btn-primary signup_btn">Sign up</a>
    			</ul>
    		</div><!-- /.navbar-collapse -->
    	</div>
    </nav>