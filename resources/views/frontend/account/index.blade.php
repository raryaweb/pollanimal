@extends('frontend.layouts.defaultcreate')

@section('title')Paskyros nustatymai - @stop

@section('content')
<section id="content">
    <div class="page page-profile">                  
        <div class="pagecontent">                      
            <div class="row">
                <div class="col-md-8">
                    <section class="tile tile-simple">
                        <div class="tile-body p-0">
                            <div role="tabpanel">
                                <div class="tab-content">                    
                                    <div role="tabpanel" class="tab-pane active" id="settingsTab">
                                        <div class="wrap-reset">
                                        	{{ Form::open( ['route' => ['account.update'], 'class' => 'profile-settings', 'files' => true] ) }}                                            
                                            <div class="page-header">
                                                <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                    Account Settings
                                                    </font></font>
                                                   
                                                </h1>
												@if(Session::has('success'))
												<p class="alert alert-success">{{ Session::get('success') }}</p>
												@endif
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-6">
                                                    <div class="form-group {{ $errors->first('email', 'has-error') }}" style="margin-bottom: 15px;">
                                                        {{ Form::label('email', 'Email', [ 'class' => 'col-sm-3']) }}       
                                                        <div class="col-sm-9">
                                                            {{ Form::email('email', auth()->user()->email, [ 'class' => 'form-control', 'disabled', 'placeholder' => '']) }}

															{!! $errors->first('email', '<label class="control-label">:message</label>') !!}
                                                        </div><br>
                                                    </div>
                                                    <div class="form-group {{ $errors->first('username', 'has-error') }}" style="margin-bottom: 15px;"><br>
                                                        {{ Form::label('username', 'Username', [ 'class' => 'col-sm-3']) }}       
                                                        <div class="col-sm-9">
                                                            {{ Form::text('username', auth()->user()->username, [ 'class' => 'form-control', 'placeholder' => '']) }}

															{!! $errors->first('username', '<label class="control-label">:message</label>') !!}
                                                        </div>
                                                    </div>
                                                    <br/><br/><br/><br/>
                                                    <h3 align="Left-side">New Password</h3><hr/>
                                                    <div class="form-group {{ $errors->first('password', 'has-error') }}" style="margin-bottom: 15px;"> 
                                                        {{ Form::label('password', 'New password', [ 'class' => 'col-sm-3']) }}       
                                                        <div class="col-sm-9">
                                                            {{ Form::password('password', [ 'class' => 'form-control', 'placeholder' => '']) }}

															{!! $errors->first('password', '<label class="control-label">:message</label>') !!}
                                                        </div><br>
                                                    </div>

                                                    <div class="form-group {{ $errors->first('password_confirmation', 'has-error') }}" style="margin-bottom: 15px;">  <br>
                                                        {{ Form::label('password_confirmation', 'Confirm Password', [ 'class' => 'col-sm-3']) }}      
                                                        <div class="col-sm-9">
                                                            {{ Form::password('password_confirmation', [ 'class' => 'form-control', 'placeholder' => '']) }}

															{!! $errors->first('password_confirmation', '<label class="control-label">:message</label>') !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <label for="upload a picture">Upload profile photo</label>
                                                        <div class="form-group  {{ $errors->first('photo', 'has-error') }}" style="margin-bottom: 15px;">
                                                        	<!-- @if (auth()->user()->photo)
															<div class="col-sm-3">
																<p>
																	<img src="{{ asset(auth()->user()->photo) }}" alt="Anketos paveikslėlis" class="img-thumbnail" style="width: 124px;">
																</p>
															</div>
															@endif -->
                                                            <div class="col-sm-9" style="display: inline;">
                                                                {{ Form::file('photo', [ 'class' => 'form-control ', 'placeholder' => '']) }}
							
																{!! $errors->first('photo', '<br><label class="control-label">:message</label>') !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>     
                                            </div>    
                                            <div class="pull-right hidden-sm hidden-xs">
                                                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Save</font></font></button>
                                            </div>
                                            {{ Form::close() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p style="margin-top: 100px;"></p>
                        <div class="well text-center">
                            <!-- <h1>Advertisement</h1> -->
                        </div>
                    </section>                             
                </div>
                <div class="col-md-4">

                    <div class="well col-sm-12" style="overflow-y: auto; height: 660px;min-width: 120px!important;">
                        <h4 style="color: grey; text-align: center;">Answer these surveys - get responses to your questions</h4>
                        

                        @php
                    $a = 0
                @endphp

                @foreach ($entries as $anketa)
                <div class="col-md-12">
                    <section class="tile tile-simple bg-dutch">
                        <div class="tile-header">
                            <span class="title-img"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAzMiAzMiIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PGRlZnMvPjxyZWN0IHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjE0LjMzNTkzNzUiIHk9IjE2IiBzdHlsZT0iZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEycHg7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+wqA8L3RleHQ+PC9nPjwvc3ZnPg==" class="survey-title-img "/></span>&nbsp;&nbsp;&nbsp;
                            <h1 class="custom-font" style="color: #337ab7;"><strong>{{ $anketa->title }}</strong></h1>                       
                        </div>                   
                        <div class="tile-body">
                            <p>{{ $anketa->title }}</p>
                        </div>
                        @if( $a > 0 )
                            <a style="color: white;" type="button" class="btn btn-info extc" href="{{ route('campaigns.answer', $anketa->id) }}"><i class="fa fa-book"> </i>  Fill out survey</a>
                            
                        @else
                            <a style="color: white;" type="button" class="btn btn-info extc" href="{{ route('campaigns.answer', $anketa->id) }}"><i class="fa fa-book"> </i>  Fill out survey</a>
                            
                        @endif
                        
                        @php 
                            $a++
                        @endphp
                        
                        
                        <!--<div class="tile-footer" >
                                <p><a href="{{ route('campaigns.answers', $anketa->id) }}" class="btn-rounded-10 btn btn-default  btn-ef-3 btn-ef-3a mb-10" style="color: #16a085  !important;"><i class="fa fa-bars"></i> {{ count($anketa->results) }}</a>
                                <a href="#" class="btn btn-default btn-rounded-10  btn-ef-3 btn-ef-3a mb-10" style="color: #16a085  !important;"><i class="fa fa-user"></i> {{ $anketa->user->username }}</a>
                                <a href="#" class="btn-rounded-10 btn btn-default btn-ef-3 btn-ef-3a mb-10" style="color: #16a085  !important;"><i class="glyphicon glyphicon-calendar"></i> {{ $anketa->created_at }}</a></p>
                        </div>-->
                    </section>
                </div>
                @endforeach
            </div>
                </div>  
            </div>
        </div>
    </div>
</section>
@stop