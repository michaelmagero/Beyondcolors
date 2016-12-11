
    @include('includes.header')
    
    @yield('jumbotron')
	<div class="jumbotron text-center">
		<div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>...because every dream has its own color</h1><br>
                    <p>We help youth develop soft skills for success by providing opportunities for upskilling and preparing them for the workplace, independent living, community and national participation</p><br>
                    <p id="cta_buttons">
                        <a href="{{ url('/register') }}" class="btn btn-primary">Get started for free</a>
                        <a href="{{ url('services') }}" class="cta_link">See what we offer</a>
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="img/bc.svg" alt="">
                </div>
            </div>
			
		</div>
	</div>

    @yield('intro')
    <section id="intro">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-1 col-sm-12"></div>
    			<div class="col-md-5 col-sm-12">
    				<h3>who we are?</h3>
    				<p>Beyond Colors is a social enterprise in the education space established and registered in the year 2015. We aim to create a partnership with learning institutions, government, business, and civil society to address the issue of youth skills development and employment in Kenya.</p><br>

    				<h3>what is it that we do?</h3>
    				<p>We help youth develop soft skills for success by providing opportunities for upskilling and preparing them for the workplace, independent living, community and national participation</p>
    			</div>
    			<div class="col-md-1 col-sm-12"></div>
    			<div class="col-md-5 col-sm-12">
    				

    				<h3>how we do it</h3>
    				<ol>
    					<li>Organize workshops for soft skills, enterpreneurship skills & career development</li>
    					<li>We provide a digital platform for youth to showcase their skills & abilities</li>
    					<li>Expose students and youth to potential employers and opportunities</li>
    					<li>We provide links to resources & opportunities for personal development</li>
    					<li>We link orgnizations with talent from our own pool of professionls</li>
    					<li>Equip our trainees with 21st century work skills to make them more competitive in the job</li>
    				</ol>
    			</div>
    		</div>
    	</div>
    </section>

    @yield('how')
    <section id="how">
    	<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 text-center">
					<h2>The process</h2>
				</div>
			</div><br><br>

			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-3 text-center">
					<h4> <small>1.</small> &nbsp;Signup</h4>
					<p>This is the very first step to begin with. <a href="#">Signup</a> by completing the
					given form and then proceed to choose a membership of your choice</p>
				</div>
				<div class="col-md-1">
					<img src="img/signup.png" alt="">
				</div>
				<div class="col-md-1 arrow">
					<i class="fa fa-arrow-right text-success"></i>
				</div>
				<div class="col-md-1">
					<img src="img/profile.png" alt="">
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-3 text-center">
					<h4><small>2.</small> &nbsp;Complete profile</h4>
					<p>Once you have signed up, you will be ushered into your dashboard where you will be expected
					to complete your profile which will be visible to potential employers</p>
				</div>

			</div><br><br>

			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-3 text-center">
					<h4><small>4.</small> &nbsp;Get placed / Hired</h4>
					<p>Once you have completed our training you are now ready for a graduate placement, internship or job offer
					by interested organizations</p>
				</div>
				<div class="col-md-1">
					<img src="img/placement.png" alt="">
				</div>
				<div class="col-md-1 arrow-left">
					<i class="fa fa-arrow-left text-danger"></i>
				</div>
				<div class="col-md-1">
					<img src="img/engage.png" alt="">
				</div>
				
				<div class="col-md-1"></div>
				<div class="col-md-3 text-center">
					<h4><small>3.</small> &nbsp;Engage</h4>
					<p>Once you have a desirable profile, you can proceed to engage with our team by undertaking various skills 
					training to make you more hirable</p>
				</div>
			</div>
		</div>
    </section>

    @yield('cta')
    <section id="cta">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-1 col-sm-12"></div>
    			<div class="col-md-6 col-sm-12">
    				<h3>Wondering if you are in the right place? Try answering the following questions</h3>
    				<ol>
    					<li>Are you a recent graduate(less than 2 years ago) or a continuing student in college or university?</li>
    					<li>Have you been searching for a job, internship or placement without any success?</li>
    					<li>Do you believe you have the required skill set to secure the above but your personal branding is limiting you?</li>
    					<li>Do you believe with an investment of a little amount of money and some of your time can make you ready for the job market?</li>
    					<li>Are you willing to engage with professionals and get yourself on track towards securing your next job, internship or placement?</li>
    				</ol>
    				<h4>If your ansewer to the following question is YES you are in the right place! <a href="{{ url('/register') }}"> Get started</a>
    				if it is NO <a href="#">Share this </a> good news with someone you know</h4>
    			</div>

    			<div class="col-md-1 col-sm-12"></div>
    			<div class="col-md-4 col-sm-12">
    				<div class="panel panel-success">
    					<div class="panel-heading">
    						<h3 class="panel-title">Sign up with BC today</h3>
    					</div>
    					<div class="panel-body"><br>
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                                    <div class="col-md-12">
                                        <input id="name" type="text" placeholder="Firstname + lastname" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                    <div class="col-md-12">
                                        <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                   <div class="col-md-12">
                                       <input id="password" type="password" 
                                       placeholder="Password" class="form-control" name="password" required>

                                       @if ($errors->has('password'))
                                           <span class="help-block">
                                               <strong>{{ $errors->first('password') }}</strong>
                                           </span>
                                       @endif
                                   </div>
                                </div>

                                <div class="form-group">

                                    <div class="col-md-12">
                                        <input id="password-confirm" type="password" placeholder="Confirm password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div><br>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">
                                            Register
                                        </button>
                                        
                                    </div>
                                </div>
                            </form>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    @yield('partners')
    <section id="partners">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12 text-center">
    				<h3>we are trusted by</h3>
    			</div>
    		</div><br><br>

    		<div class="row">
    			<div class="col-md-2"></div>
    			<div class="col-md-2">
    				<img src="img/bic.jpg" alt="" width="120">
    			</div>
    			<div class="col-md-2">
    				<img src="img/zetech.jpg" alt="" width="120"> 
    			</div>
    			<div class="col-md-2">
    				<img src="img/slim.jpg" alt="" width="100" height="100" style="margin: -15px 0 0 0";>
    			</div>
    			<div class="col-md-2">
    				<img src="img/kimfay.gif" alt="" width="120">
    			</div>
    			<div class="col-md-2"></div>
    		</div>
    	</div>
    </section>

    
    @include('includes.footer')
