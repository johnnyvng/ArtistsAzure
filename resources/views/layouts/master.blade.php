<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">   
        <link rel="stylesheet" type="text/css" href="{{ asset('css/allinone_carousel.css') }}">   
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/dropzone/dist/basic.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/dropzone/dist/dropzone.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/angular-bootstrap/ui-bootstrap-csp.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/angular-bootstrap-lightbox/dist/angular-bootstrap-lightbox.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/angular-loading-bar/build/loading-bar.min.css')}}">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <!-- Styles -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    </head>
    
    <body>
    <header class="header-wrapper" role="banner">
      <nav class="navbar" role="navigation">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('img/logo.jpg')}}" class="img-responsive" alt="logo"></a>
              </div>
            </div>
            <div class="col-md-8 pdl pdr">
              <div class="header-banner">
                  <img src="{{url('img/home-slide.jpg') }}" class="img-responsive" alt="">
              </div>
              <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li><a href="{{url('/')}}">Home</a></li>
                  <li><a href="{{url('/about')}}">About</a></li>
                  <li class="dropdown">
                    <a href="{{url('/service')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="{{url('/services')}}">Full Services</a></li>
                        <li><a href="{{url('/government')}}">Government</a></li>
                        <li><a href="{{url('/largeestate')}}">Large Estate</a></li>
                        <li><a href="{{url('/commercial')}}">Commercial</a></li>
                      </ul>
                  </li>
                  <li><a href="{{url('/gallery')}}">Gallery</a></li>
                  <li><a href="{{url('/contact')}}">Contact</a></li>
                </ul>
              </div><!--/.navbar-collapse -->
            </div>
          </div><!--row-->
        </div>
      </nav>
    </header>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    @yield('content')
  </body>

@yield('footer')
    <footer class="footer-wrapper" role="siteinfo">
          <div class="container">
             <div class="row">
                <div class="col-md-3">
                   <div class="footer-widget">
                       <h3 class="title">Location</h3>
                   </div><!--footer widget-->
                </div>
                <div class="col-md-3">
                   <div class="footer-widget">
                       <h3 class="title">Faq</h3>
                   </div><!--footer widget-->
                </div>
                <div class="col-md-3">
                   <div class="footer-widget">
                       <h3 class="title">Career</h3>
                   </div><!--footer widget-->
                </div>
                <div class="col-md-3">
                  <div class="footer-widget">
                       <h3 class="title">Social Media</h3>
                   </div><!--footer widget-->
                </div>
             </div>
          </div><!--container-->
    </footer>


<script type="text/javascript" src="{{ URL::asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('bower_components/angular/angular.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('bower_components/angular-route/angular-route.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/admin/app.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>  
<script type="text/javascript" src="{{ URL::asset('js/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.ui.touch-punch.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/allinone_carousel.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/simple-lightbox.min.js') }}"></script>
<!-- Google Analytics  -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76958104-1', 'auto');
  ga('send', 'pageview');

</script>

</html>