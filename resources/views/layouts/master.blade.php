<!doctype html>
<html class="no-js" lang="" ng-app="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/allinone_carousel.css') }}">   
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lightslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/dropzone/dist/basic.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/dropzone/dist/dropzone.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/angular-bootstrap/ui-bootstrap-csp.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/angular-bootstrap-lightbox/dist/angular-bootstrap-lightbox.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/lightbox2/dist/css/lightbox.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/angular-loading-bar/build/loading-bar.min.css')}}">

    <!-- Fonts -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'> -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'> -->
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>    

<header class="header-wrapper" role="banner">
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">          
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>        
      <a class="navbar-brand" href="{{url('/')}}"></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{url('/')}}" class="page-scroll">Home</a></li>
        <li><a href="{{url('/about')}}" class="page-scroll">About Us</a></li>
        <li class="dropdown">
                <a href="{{url('/service')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="page-scroll">Landscape Services<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{url('service')}}">Full Services</a></li>
                    <li><a href="{{url('service/Government Landscaping')}}">Government</a></li>
                    <li><a href="{{url('service/Estate Landscaping')}}">Estate</a></li>
                    <li><a href="{{url('service/Commercial Landscaping')}}">Commercial</a></li>
                  </ul>
              </li>
        <li><a href="{{url('/gallery')}}" class="page-scroll">Landscape Gallery</a></li>
        <!-- <li><a href="#testimonials-section" class="page-scroll">Testimonials</a></li> -->
        <li><a href="{{url('/contact')}}" class="page-scroll">Contact Us</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>     

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
          <<br>
          <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('img/logo.jpg')}}" class="img-responsive" alt="logo"></a>
        </div>
      </div>
      <br><br>
      <div class="col-md-8 pdl pdr">
        <div class="header-banner">
            <img src="{{url('img/home-slide.jpg') }}" class="img-responsive" alt="">
        </div>              
      </div>
    </div>
  </div>
</nav>

</header>
<!-- Main jumbotron for a primary marketing message or call to action -->
<body>
@yield('content')
</body>

@yield('footer')
    <div id="contact-section" class="text-center">
      <div class="container">
      <div class="col-md-8 col-md-offset-2 wow fadeInUp" data-wow-delay="200ms">
        <div class="col-md-4"> <i class="fa fa-map-marker fa-2x"></i>
          <p>George Mason University<br>
          4400 University Dr, Fairfax, VA 22030</p>
        </div>
        <div class="col-md-4"> <i class="fa fa-envelope-o fa-2x"></i>
          <p>Outdoor Artists<br>
          project491analytics@gmail.com</p>
        </div>
        <div class="col-md-4"> <i class="fa fa-phone fa-2x"></i>
          <p> +571-335-0988</p>
        </div>
      </div>       
      </div>
      <div class="social">
        <ul>
          <li><a href="{{url('/contact')}}"><i class="fa fa-facebook"></i></a></li>
          <li><a href="{{url('/contact')}}"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://github.com/gmu-mis-491/artists.git"><i class="fa fa-github"></i></a></li>
          <li><a href="{{url('/contact')}}"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>

      


<script type="text/javascript" src="{{ URL::asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('bower_components/angular/angular.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('bower_components/angular-route/angular-route.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('bower_components/lightbox2/dist/js/lightbox.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/admin/app.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>  
<script type="text/javascript" src="{{ URL::asset('js/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.ui.touch-punch.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/allinone_carousel.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/simple-lightbox.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/lightslider.js') }}"></script>
<!-- Google Analytics  -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76958104-1', 'auto');
  ga('send', 'pageview');
</script>

<script>
    // for Charming thumbnail
jQuery(function() {
  jQuery('#allinone_carousel_charming').allinone_carousel({
    skin: 'charming',
    width: 1100,
    height: 350,
    responsive:true,
    autoPlay: 5,
    resizeImages:true,
    autoHideBottomNav:true,
    showElementTitle:false,
    verticalAdjustment:50,
    showPreviewThumbs:false,
    //easing:'easeOutBounce',
    numberOfVisibleItems:8,
    nextPrevMarginTop:23,
    playMovieMarginTop:0,
    bottomNavMarginBottom:-10 
  });  
});
</script>


<script>    
$(function()
{
    var $gallery = $('.gallery a').simpleLightbox();
    
    $gallery.on('show.simplelightbox', function(){
      console.log('Requested for showing');
    })
    .on('shown.simplelightbox', function(){
      console.log('Shown');
    })
    .on('close.simplelightbox', function(){
      console.log('Requested for closing');
    })
    .on('closed.simplelightbox', function(){
      console.log('Closed');
    })
    .on('change.simplelightbox', function(){
      console.log('Requested for change');
    })
    .on('next.simplelightbox', function(){
      console.log('Requested for next');
    })
    .on('prev.simplelightbox', function(){
      console.log('Requested for prev');
    })
    .on('nextImageLoaded.simplelightbox', function(){
      console.log('Next image loaded');
    })
    .on('prevImageLoaded.simplelightbox', function(){
      console.log('Prev image loaded');
    })
    .on('changed.simplelightbox', function(){
      console.log('Image changed');
    })
    .on('nextDone.simplelightbox', function(){
      console.log('Image changed to next');
    })
    .on('prevDone.simplelightbox', function(){
      console.log('Image changed to prev');
    })
    .on('error.simplelightbox', function(e){
      console.log('No image found, go to the next/prev');
      console.log(e);
    });
});

</script>

<script type="text/javascript">
$(document).ready(function() {
    $("#lightSlider").lightSlider({
        item: 3,
        autoWidth: false,
        slideMove: 1, // slidemove will be 1 if loop is true
        slideMargin: 10,
 
        addClass: '',
        mode: "slide",
        useCSS: true,
        cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
        easing: 'linear', //'for jquery animation',////
 
        speed: 400, //ms'
        auto: false,
        loop: false,
        slideEndAnimation: true,
        pause: 2000,
 
        keyPress: false,
        controls: true,
        prevHtml: '',
        nextHtml: '',
 
        rtl:false,
        adaptiveHeight:false,
 
        vertical:false,
        verticalHeight:500,
        vThumbWidth:100,
 
        thumbItem:10,
        pager: true,
        gallery: false,
        galleryMargin: 5,
        thumbMargin: 5,
        currentPagerPosition: 'middle',
 
        enableTouch:true,
        enableDrag:true,
        freeMove:true,
        swipeThreshold: 40,
 
        responsive : [],
 
        onBeforeStart: function (el) {},
        onSliderLoad: function (el) {},
        onBeforeSlide: function (el) {},
        onAfterSlide: function (el) {},
        onBeforeNextSlide: function (el) {},
        onBeforePrevSlide: function (el) {}
    });
});
</script>


</html>