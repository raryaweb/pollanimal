<!doctype html>
<html class="no-js" lang="{{ config('app.locale') }}">
<head>
        <title>Poll Animal - Your First Fast & Reliable Survey Creator Tool</title>
        <meta name="title" content ="Free online survey creator with promoted answers">
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="canonical" href="https://pollanimal.com" />
        <meta name="description" content="Free online survey creator. Create your survey and receive answers. Get promoted answers to your questionnaires, sponsor respondents to answer your survey."/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}" />
        <link media="none" type="text/css" onload="if(media!='all')media='all'" href="{{ asset('css/frontend/fonts.css') }}" rel="stylesheet">
        <link media="none" type="text/css" onload="if(media!='all')media='all'" rel="stylesheet" href="{{ asset('css/frontend/bootstrap.min.css') }}" />
		<link media="none" type="text/css" onload="if(media!='all')media='all'" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link media="none" type="text/css" onload="if(media!='all')media='all'" rel="stylesheet" href="{{ asset('css/frontend/et-line-fonts.css') }}">
        <link media="none" type="text/css" onload="if(media!='all')media='all'" rel="stylesheet" href="{{ asset('css/frontend/isotope.css') }}">
        <link media="none" type="text/css" onload="if(media!='all')media='all'" rel="stylesheet" href="{{ asset('css/frontend/magnific-popup.css') }}">
        <link media="none" type="text/css" onload="if(media!='all')media='all'" rel="stylesheet" href="{{ asset('css/frontend/layers.css') }}">
        <link media="none" type="text/css" onload="if(media!='all')media='all'" rel="stylesheet" href="{{ asset('css/frontend/navigation.css') }}">
        <link media="none" type="text/css" onload="if(media!='all')media='all'" rel="stylesheet" href="{{ asset('css/frontend/settings.css') }}">
		<link media="none" type="text/css" onload="if(media!='all')media='all'" rel="stylesheet" href="{{ asset('css/frontend/owl.carousel.min.css') }}">
        <link media="none" type="text/css" onload="if(media!='all')media='all'" rel="stylesheet" href="{{ asset('css/frontend/owl.theme.default.min.css') }}">

        <link type="text/css" rel="stylesheet" media='screen and (max-width: 991px)' href="{{ asset('css/frontend//component.css') }}"/>

        <link media="none" type="text/css" onload="if(media!='all')media='all'" rel="stylesheet" href="{{ asset('css/frontend/parsley.css') }}">
		
        <link media="none" type="text/css" onload="if(media!='all')media='all'" rel="stylesheet" href="{{ asset('css/frontend/style.css') }}">

        <link media="none" type="text/css" onload="if(media!='all')media='all'" rel="stylesheet" href="{{ asset('css/frontend/responsive.css') }}">
		
    </head>
    <body>
        @include('frontend.layouts.navigation')
        @yield('content')
        
        @include('frontend.layouts.footer')        
                <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107521779-2"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-107521779-2');
        </script>
            
    </body>
	
</html>