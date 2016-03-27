<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link href="css/allinone_carousel.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
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
                <a class="navbar-brand" href="{{url('home')}}"><img src="{{asset('img/logo.jpg')}}" class="img-responsive" alt="logo"></a>
              </div>
            </div>
            <div class="col-md-8 pdl pdr">
              <div class="header-banner">
                  <img src="img/home-slide.jpg" class="img-responsive" alt="">
              </div>
              <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li><a href="{{url('home')}}">Home</a></li>
                  <li><a href="{{url('about')}}">About Us</a></li>
                  <li><a href="{{url('service')}}">Featured Service</a></li>
                  <li><a href="{{url('contact')}}">Contact Us</a></li>
                </ul>
              </div><!--/.navbar-collapse -->
            </div>
          </div><!--row-->
        </div>
      </nav>
    </header>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    </body>
</html>
@yield('content')
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

<script src="js/vendor/jquery-1.11.2.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<script src="js/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
<script src="js/allinone_carousel.js" type="text/javascript"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script>
jQuery(function() {
  jQuery('#allinone_carousel_charming').allinone_carousel({
    skin: 'charming',
    width: 600,
    height: 300,
    responsive:true,
    autoPlay: 5,
    resizeImages:true,
    autoHideBottomNav:true,
    showElementTitle:false,
    verticalAdjustment:50,
    showPreviewThumbs:false,
    //easing:'easeOutBounce',
    numberOfVisibleItems:5,
    nextPrevMarginTop:23,
    playMovieMarginTop:0,
    bottomNavMarginBottom:-10 
  });  
});
</script>
<script src="js/main.js"></script>