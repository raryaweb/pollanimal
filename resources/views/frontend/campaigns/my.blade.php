@extends('frontend.layouts.defaultprofile')

@section('title')Mano anketos - @stop


@section('content')
<section id="content">
    <div class="page page-dashboard">
        <div class="row" style="clear: both;"></div>
        @if (session('created'))
        <div class="row">
            <div class="col-md-12 alert login-success">
                Survey added successfully.
            </div>                        
        </div>
        @endif

        @if (session('copied'))
        <div class="row">
            <div class="col-md-12 alert login-success">
                Copy of survey has been successfully created.
            </div>                        
        </div>
        @endif

        @if (session('deleted'))
        <div class="row">
            <div class="col-md-12 alert login-success">
                Survey has been successfully deleted.
            </div>                        
        </div>
        @endif

		 
        <!-- OK 4 -->                 
        <div class="row">                        
            <div class="col-md-8">                         
                <section class="tile">
                    <div class="tile-header dvd dvd-btm">
                        <h1 class="custom-font">My Surveys</h1>
                    </div>                               
                    <div class="tile-body table-custom">
                        <div class="table-responsive">
                        	@if (count($entries) > 0)
                            <table class="table table-bordered table-striped" id="project-progress" style="color: black">
                                <thead>
                                    <tr>
                                        <th>Survey title</th>
                                        <th>Date</th>
                                        <th>Actions</th>                    
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($entries as $entry)
                                <tr>
                                    <td><a title="{{ $entry->title }}" href="{{ route('campaigns.edit', $entry->id) }}">{{ $entry->title }}</a></td>
                                    <td>{{ $entry->created_at }}</td>
                                    <td class="social-btn btn-stacked">
                                        <!-- <a title="Survey management" href="{{ route('campaigns.edit', $entry->id) }}" class="btn btn-primary btn-lg"><i class="fa fa-asterisk"></i></a> -->
                                        <a title="Results" href="{{ route('campaigns.results', $entry->id) }}" class="btn btn-success btn-lg"><i class="fa fa-eye"></i></a>
                                        @if($entry->active)
                                       
                                        <button title="Promote" data-toggle="modal" data-target="#publicmodal{{$entry->id}}" class="btn btn-info btn-lg"><i class="glyphicon glyphicon-share"></i></button>
                                                        <div class="modal fade" id="publicmodal{{$entry->id}}" tabindex="-1" role="dialog" aria-labelledby="public" aria-hidden="true">
                                                          <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h5 class="modal-title" style="color: black;" id="publicmodalTitle">Promote survey</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                              </div>
                                                              <div class="modal-body" style="color: black;">
                                                                 {{ Form::open( ['route' => ['campaigns.update', $entry->id], 'class' => 'profile-settings', 'files' => true] ) }}
                                                                <p>
                                                                    You have <strong>{{$entry->advertise_credits}}</strong> unused credits left and they can be used to promote your survey.
                                                                    You can minimum spend <strong>{{ config('settings.featured_credits') }}</strong> credits.
                                                                    Enter total number of responses you want to receive.
                                                                </p>                
                                                                <div class="form-inline">
                                                                    {{ Form::text('advertise_results', 0, [ 'class' => 'form-control', 'placeholder' => 'Atsakymų kiekis']) }}
                                                                     {{ Form::hidden('title', $entry->title, []) }}
                                                                      {{ Form::hidden('description', $entry->description, []) }}

                                                                    
                                                                </div>

                                                                {!! $errors->first('advertise_results', '<label class="label label-danger">:message</label>') !!}
                                                                 <div class="button-stacked pull-right" style="margin-top: -15px">
                                                                     <button type="button" class="btn sq-buttons btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" name="btn_public" value="1" class="btn btn-primary">Promote</button>
                                                                 </div>
                                                                {{ Form::close() }}
                                                              </div>
                                                              <!-- <div class="modal-footer">
                                                               
                                                              </div> -->
                                                            </div>
                                                          </div>
                                                        </div>
                                            <a style="line-height: ;vertical-align: middle;padding: 5px 1px!important;" class="bg-success pull-right" title="Active Survey">&nbsp;</a>
                                        @else
                                            <a style="line-height: ;vertical-align: middle;padding: 5px 1px!important;" class="bg-danger pull-right" title="Inactive Survey">&nbsp;</a>
                                        @endif
                                        <a title="Delete" href="{{ route('campaigns.destroy', $entry->id) }}" class="btn btn-danger btn-lg"><i class="glyphicon glyphicon-trash"></i></a>
                                        <span class="badge bg-success pull-right ml-2 mr-5" title="Total Respondents">Total {{$entry->totalrespondents}}</span>
                                        <span class="badge bg-primary pull-right ml-2 mr-5" title="New Respondents since last login">New {{$entry->newrespondents}}</span>
                                        
                                        <!-- <span class="bg-success"><i class=""></i></span> -->

                                        <!-- btn-border btn-rounded-20 btn-ef btn-ef-4 btn-ef-4d mb-10 -->
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            @else
							<!-- <div class="alert alert-warning">
								<h4>Empty!</h4>
								<a href="{{ route('campaigns.create') }}">Add</a> now.

							</div> -->
                            <ul>
                                <li>Create survey.</li>
                                <li>Share your survey link with respondents.</li>
                                <li>You can answer other users survey and other users will answer your surveys in reward to you.</li>
                                <li>You can simply pay us and we will rank your survey on the right side for other users - they will answer your questions.</li>
                                <li>So you can either answer other user surverys or pay and get your answers.</li>
                            </ul>

                            @endif
                            <div class="btn-block-create-new-survey"><a href="{{ route('campaigns.create') }}" class="btn btn-primary mb-10 btn-cns"><i class="fa fa-plus">&nbsp;</i>Create new survey</a></div>

                        </div>
                       

                    </div>                    
                </section>               
            </div>            
            
              <div class="col-md-4">

                    <div class="well col-sm-12" style="overflow-y: auto; height: 660px;min-width: 120px!important;">
                        <h4 style="color: grey; text-align: center;">Answer these surveys - get responses to your questions</h4>
                        

                        @php
                    $a = 0
                @endphp

                @foreach ($anketos as $anketa)
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
                        
                        
                        
                    </section>
                </div>
                @endforeach
            </div>
                </div>           
        </div><!-- OK 4 -->      
<!--         <section class="tile">
            <div class="tile-header dvd dvd-btm advertise">
                @include('frontend.campaigns.advertisements')
            </div>
        </section> -->
    </div>
</section>
@sto
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
        jQuery(document).ready(function(){
             jQuery('.modal').on('shown.bs.modal', function (e) {
              jQuery('body').removeClass('aside-fixed');
            })
            jQuery('.modal').on('hidden.bs.modal', function (e) {
              jQuery('body').addClass('aside-fixed');
            })
        });
    </script>