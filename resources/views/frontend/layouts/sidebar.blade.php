
<div id="wrap" class="animsition">
    <section id="header">
        <header class="clearfix">                   
            <div class="branding" style='margin-top:10px;margin-bottom:10px;'>
               <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" width="80%">
                <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a>
            </div>
             <ul class="nav-left pull-left list-unstyled list-inline">
                <li class="sidebar-collapse divided-right">
                    <a href="#" class="collapse-sidebar">
                        <i class="fa fa-outdent"></i>
                    </a>
                </li>
            </ul>      
			@if(Auth::check())
            <ul class="nav-right pull-right list-inline">
                    <li class="dropdown nav-profile">
                    <a href class="dropdown-toggle" data-toggle="dropdown">
					@if(auth()->user()->photo=='')
						<img src="{{ asset('uploads/default_profile.png') }} " alt="" class="img-circle size-30x30">   
					@else
					<img src="{{ auth()->user()->photo }} " alt="" class="img-circle size-30x30"> 
					@endif
                        <span>{{ auth()->user()->username }}<i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul class="dropdown-menu animated littleFadeInRight" role="menu">
                        <li>
                            <a role="button" tabindex="0" href="{{ route('account.index') }}">
                                <span class="badge bg-greensea pull-right">86%</span>
                                <i class="fa fa-user"></i>Profile
                            </a>
                        </li>                                
                        <li>
                            <a role="button" tabindex="0" href="{{ route('login.logout') }}">
                                <i class="fa fa-sign-out"></i>Logout
                            </a>
                        </li>
                    </ul>
                </li>                       
            </ul>
			@endif
        </header>
    </section>           
    <div id="controls">
        <aside id="sidebar" style='top:65px'>
            <div id="sidebar-wrap">
                <div class="panel-group slim-scroll" role="tablist">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#sidebarNav">
                                    Navigation <i class="fa fa-angle-up"></i>
                                </a>
                            </h4>
                        </div>
                        <div id="sidebarNav" class="panel-collapse collapse in" role="tabpanel">
                            <div class="panel-body">
                                <ul id="navigation">
                                    <li class="{{ in_array(Route::getCurrentRoute()->getName(), ['campaigns.my']) ? "active" : NULL }}"><a class="cusmenu" href="{{ route('campaigns.my') }}"><i class="fa fa-dashboard cusmenuicon"> </i><span> Dashboard</span></a></li>
                                    <li class="{{ in_array(Route::getCurrentRoute()->getName(), ['campaigns.create']) ? "active" : NULL }}"><a class="cusmenu" href="{{ route('campaigns.create') }}"><i class="fa fa-user cusmenuicon"></i> <span>Create Survey</span></a></li>
                                    <li class="{{ in_array(Route::getCurrentRoute()->getName(), ['credits']) ? "active" : NULL }}"><a class="cusmenu" href="{{ route('credits') }}"><i class="fa fa-money cusmenuicon"></i> <span>Credit</span></a></li>
                                    <li class="{{ in_array(Route::getCurrentRoute()->getName(), ['account.index']) ? "active" : NULL }}"><a class="cusmenu" href="{{ route('account.index') }}"><i class="fa fa-pencil cusmenuicon"></i> <span>Account Settings</span></a></li>
                                    <li><a class="cusmenu" href="{{ route('login.logout') }}"><i class="fa fa-sign-out cusmenuicon"></i> <span>Logout</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>                            
                </div>
            </div>                
        </aside>               
    </div> 
</div>