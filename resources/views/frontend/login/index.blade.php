@extends('frontend.layouts.defaultlog')

@section('content')
	<div id="wrap" class="animsition">
	    <div class="page page-core page-login">
	       
	        <div class="container w-420 p-15 bg-white text-center">
	        	<div class="text-center brand">
					 <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}"></a>
		        </div>
	            <h2 class="text-light text-greensea mfran">Sign in</h2>
				
				@if (session('login_error'))
					<div class="alert alert-danger">
						<h4>Error!</h4>

						@if ((int)session('login_error') == 1)
							Login details are incorrect.
						@endif
					</div>
				@endif
				@if(Session::has('success'))
				<p class="alert alert-success"><i class='fa fa-check'></i> {{ Session::get('success') }}</p>
				@endif

				@if(Session::has('error'))
				<p class="alert alert-danger"><i class='fa fa-times'></i> {{ Session::get('error') }}</p>
				@endif
				
				{{ Form::open([ 'route' => 'login.session', 'class' => 'form-validation mt-20' ]) }}
				<div class="form-group">
					{{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}	
					<div class="clearfix"></div>
				</div>

				<div class="form-group">
					{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}		
					<div class="clearfix"></div>
				</div>

				<div class="form-group text-left mt-20">
					<div class="row">
					<div class="col-md-6">
                    <label class="checkbox checkbox-custom-alt checkbox-custom-sm inline-block">
                        <input type="checkbox"><i></i><font style="color: black;"> Remember me</font>
                    </label>
                	</div>
                    <div class="col-md-6">
                    	<a href="{{ route('password.remind') }}" class="pull-right mt-10">Forgot password ?</a>
                    </div>
                	</div>
                	<div class="row">
                		<div class="col-sm-12">
                    	<button class="btn btn-md btn-greensea">Sign in</button>
                		</div>
                	</div>
                </div>	

					{{ Form::close() }}

				<div class="or-seperator"><b>or</b></div>
				<!-- <hr/> -->
				<p class="hint-text">Sign in with your social media account</p>
				<div class="social-btn text-center btn-stacked"> 
					<!-- social-button -->
	            <a href="{{ url('auth/facebook') }}" class="btn btn-primary btn-lg" > 
	            	<i class="fa fa-facebook"></i>
	            	<!-- <span>Connect with Facebook</span> -->
	            </a>
	            <a href="{{ url('auth/google') }}" class="btn btn-danger btn-lg" > 
	            	<i class="fa fa-google"></i>
	            	<!-- <span>Connect with Facebook</span> -->
	            </a>
	            <a href="{{ url('auth/twitter') }}" class="btn btn-info btn-lg" > 
	            	<i class="fa fa-twitter"></i>
	            	<!-- <span>Connect with Facebook</span> -->
	            </a>
	            <div class="clearfix"></div>
	            <!-- <a href="{{ url('auth/google') }}" class="social-button mfran" id="google-connect"> <span>Connect with Google</span></a> -->
	            <!-- <a href="{{ url('auth/twitter') }}" class="social-button mfran" id="twitter-connect"> <span>Connect with Twitter</span></a> -->
		        </div>
	            <div class="bg-slategray lt wrap-reset mt-40 mfran">
	                <p class="m-0">
	                    <a href="{{ route('login.registration') }}" class="text-uppercase">Don't have an account ? Sign up now</a>
	                </p>
	            </div>	            
			</div>
		</div>
	</div>
@stop