@extends('frontend.layouts.defaultlog')

@section('content')

	<div id="wrap" class="animsition">
        <div class="page page-core page-login">
            <!-- <div class="text-center"><a href="{{ route('home') }}"> <img src="{{ asset('images/logo.png') }}"></a></div> -->
                <div class="container w-420 p-15 bg-white text-center">
                	<div class="text-center brand">
						 <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}"></a>
			        </div>
                    <h2 class="text-light text-greensea mfran">Sign up</h2>
					{{ Form::open([ 'route' => 'login.register', 'class' => 'form-validation mt-20' ]) }}
						<p class="help-block text-left">
                            Enter your personal details below:
                        </p>
                        <div class="form-group {{ $errors->first('username', 'has-error') }}">
							{{ Form::text('username', '', ['class' => 'form-control', 'placeholder' => 'Username']) }}
							{!! $errors->first('username', '<br><label class="control-label">:message</label>') !!}
						</div>
						<div class="form-group {{ $errors->first('email', 'has-error') }}">	
							{{ Form::email('email', '', ['class' => 'form-control ', 'placeholder' => 'Email']) }}
							{!! $errors->first('email', '<br><label class="control-label">:message</label>') !!}							
						</div>
						<div class="form-group {{ ( $errors->first('password') || $errors->first('password_confirmation') ? 'has-error' : NULL) }}">
							{{ Form::password('password', ['class' => 'form-control ', 'placeholder' => 'Create a password']) }}
							{!! $errors->first('password', '<label class="control-label">:message</label>') !!}
						</div>
						<div class="form-group {{ ( $errors->first('password') || $errors->first('password_confirmation') ? 'has-error' : NULL) }}">	
							{{ Form::password('password_confirmation', ['class' => 'form-control ', 'placeholder' => 'Confirm your password']) }}

							{!! $errors->first('password_confirmation', '<label class="control-label">:message</label>') !!}
						</div>	
						<div class="form-group text-left">
                            <label class="checkbox checkbox-custom-alt checkbox-custom-sm inline-block">
                                <input required type="checkbox"><i></i> <a href="javascript:void();" class="terms-condition">I agree to the terms and conditions</a> &amp;<!-- <a href="javascript:;">Privacy Policy</a>-->
                            </label>
                            <div id="tocinfo" style="display:none;">
                            		<p>This document explains the Terms of Use under which you may use pollanimal.com. By using pollanimal.com you agree to these terms and you are legally bound by these terms.
Pollanimal.com may modify the terms at any time, at its sole discretion, by updating this page. You should periodically check this page for updates. Do not use pollanimal.com if you do not agree to these Terms of Use.</p>
			<h3>About the Terms of Use</h3>
			<p>Pollanimal.com is not responsible for any damages, claims, or injuries that may result from unlawful or inappropriate access to the materials. Once again, you access the site at your own risk.
Any legal issues and claims related to the use of pollanimal.com shall be exclusively governed and litigated by the laws and courts of Lithuania and European Union. By using pollanimal.com, its products or services, you agree to irrevocably waive any objection that you may have to this venue and consent to personal jurisdiction in this venue.
If any provision within the Terms of Use is found to be invalid, the invalidity of that provision shall not affect the validity of the rest, which shall remain in full force and effect. Pollanimal.com’s choice not to enforce any provision of the Terms of Use does not preclude or waive our right to future enforcement. Just because we don’t act immediately doesn’t mean we won’t act.
These Terms of Use and our Privacy Policy form the entire legal agreement between you and pollanimal.com.</p>
            <h3>Using pollanimal.com</h3>
		    <p>As part of your use of pollanimal.com, you may be required to provide information about yourself, such as identification or contact details. You agree to update us as needed so that any registration information you provide will always be correct and current.
In addition to complying with all of the terms on this page, you must also comply with all of the terms of pollanimal.com’s Privacy Policy, and all applicable laws and regulations. Failure to do so or suspected failure to do so may, at minimum, result in suspension or denial of access for you. Pollanimal.com retains the right to deny access to anyone at its sole and complete discretion for any reason, including but not limited to violation of our policies.
You may only access pollanimal.com through the instructions and interface we provide, so please do not attempt to access pollanimal.com, its products or services through automated means, such as scripts and web crawlers.
Pollanimal.com and its content are protected by intellectual property laws. Do not remove any copyright or other proprietary notices contained in pollanimal.com content on any copy you make. Using pollanimal.com, its products or services does not give you any ownership of any intellectual property rights. The sale, modification, reproduction, and distribution of pollanimal.com’s content belong solely to pollanimal.com. Please contact us at info@pollanimal.com if you would like authorization to use our content.</p>
            <h3>Created documents</h3>
			<p>Created surveys (documents) are stored on our servers. The user does have full rights to delete documents from our servers. 
When you create documents, you provide content that is not owned by pollanimal.com. This content is the sole responsibility of the entity that makes it available. Respectively, you are responsible for your own content and you must ensure that you have all the rights and permissions needed to use that content in connection with pollanimal.com services. Pollanimal.com is not responsible for any actions you take with respect to your content, including sharing it publicly. Pollanimal.com is not responsible for the content that respondents provide in the surveys. Please do not use content from the pollanimal.com unless you have first obtained the permission of its owner, or are otherwise authorized by law to do so.</p>
            <h3>Liability and Indemnity</h3>
			<p>We do our best, but mistakes happen so use this site at your own risk. We make no guarantees about the accuracy or reliability of the products and services offered by pollanimal.com, or about the results obtained from using our site. If you find an error, please let us know.
We may make changes to pollanimal.com at any time and without notice.
We are not responsible for any loss, change, or corruption to submitted content. We do not guarantee that pollanimal.com will operate problem-free or our server will be free of computer viruses or other bugs. If your use of pollanimal.com results in a need to repair or replace equipment or data, you are solely responsible for those costs.
Pollanimal.com may display third-party content including links to third-party web sites. This content is the sole responsibility of the entity making it available. We may review it, we may remove it, we may refuse to display it at all, but we have no obligation to do so. Pollanimal.com does not endorse nor is it responsible for content on third-party sites, so access it at your own risk.</p>
            <h3>Purchase and delivery</h3>
			<p>Payments for our service can be made by card and Paypal. Your payments are transfer into system's credits which can be used for our services.</p>
            <h3>Privacy</h3>
			<p>Our Privacy Policy explains how we treat your personal information. By using pollanimal.com, you agree to its terms.</p>
			
			<h2>Privacy Policy</h2>
			<h3>Registration</h3>
			<p>When signing up, you indicate your e-mail, user name, and photo. We may ask or save your location information and any other information. The information we collect is used for statistical or analytical purposes as well as contacting you.</p>
			<h3>Paper Submission</h3>
			<p>When signed up, you may create documents and share it with third parties. When you want, documents may be freely deleted form the system by clicking appropriate button.
Created documents are stored in the system for at least 3 years.
All created documents are strictly protected from any third party access.
We may track all your activity data (such as IP address, amount of created documents, connection details, check results and similar data) for statistical and analytical purposes.</p>
            <h3>Partners</h3>
			<p>The system may use partners’ software:
1. payment systems (such as paypal, paysera, braintree and other);
2. information spread by social network (facebook, twitter and other).
Third party software operate on its regulations and pollanimal.com system must obey to these regulations.</p>
            <h3>Personal Data</h3>
			<p>You may at any time change your personal information by clicking “account settings” button. User may change any of the provided personal information. The e-mail address may not be changed.</p>
			<h3>Security</h3>
			<p>You choose your connection password when signing up. You can change your password or use password reminder to generate a new password. There may also be a log-in link in any e-mail letter sent by the system. You may refuse of receiving any letters (except password reminder) from the system.</p>
			<h3>Refund Policy</h3>
			<p>If You are not satisfied with our service, You can ask to refund your payment. You must ask this refund in 3 days by email info@pollanimal.com.</p>
                            </div>
                        </div>
					<div class="or-seperator"><b>or</b></div>                      
                    <!-- <a href="{{ url('auth/facebook') }}" class="social-button" id="facebook-connect"> <span>Connect with Facebook</span></a> -->
                    <!-- <a href="{{ url('auth/google') }}" class="social-button" id="google-connect"> <span>Connect with Google</span></a> -->
                    <!-- <a href="{{ url('auth/twitter') }}" class="social-button" id="twitter-connect"> <span>Connect with Twitter</span></a> -->
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
                    <div class="bg-slategray lt wrap-reset mt-20 text-left">
                        <p class="m-0">
                            <button type="submit" class="btn btn-greensea text-white b-0 text-uppercase pull-right">Submit</button>
                            <a href="{{ route('home') }}" class="btn btn-greensea text-white b-0 text-uppercase">Back</a>
                        </p>
                    </div>
                    {{ Form::close() }}
				</div>				
		</div>
	</div>
@stop