<!doctype html>
<html ng-app="adminApp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
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
        {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

        <style>
            body 
            {
                font-family: 'Lato';
            }

            .fa-btn {
                margin-right: 6px;
            }
            .button1 {
               border-top: 1px solid #96d1f8;
               background: #65a9d7;
               background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#65a9d7));
               background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
               background: -moz-linear-gradient(top, #3e779d, #65a9d7);
               background: -ms-linear-gradient(top, #3e779d, #65a9d7);
               background: -o-linear-gradient(top, #3e779d, #65a9d7);
               padding: 5px 10px;
               -webkit-border-radius: 7px;
               -moz-border-radius: 7px;
               border-radius: 7px;
               -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
               -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
               box-shadow: rgba(0,0,0,1) 0 1px 0;
               text-shadow: rgba(0,0,0,.4) 0 1px 0;
               color: white;
               font-size: 24px;
               font-family: Georgia, serif;
               text-decoration: none;
               vertical-align: middle;
               }
            .button1:hover {
               border-top-color: #28597a;
               background: #28597a;
               color: #ccc;
               }
            .button1:active {
               border-top-color: #d1edff;
               background: #d1edff;
               }
            .title {
                font-size: 36px;
            }
            .link {
                font-weight: 400;
            }
            .link:hover {
                color: blue;
                text-decoration: underline;
                cursor: pointer;
            }
            .image {
                float: left;
            }
            .image img {
                height: 150px;
            }
            .gallery-container {
                cursor: pointer;
            }
            .gallery-image-single 
            {
            position: relative;
            padding: 10px; 
            }
            .gallery-image-single .delete-icon 
            {
              position: absolute;
              bottom: 10px;
              right: 50%;
              display: none; 
            }
            .gallery-image-single:hover .delete-icon 
            {
              display: block; 
            }
        </style>
    </head>

<body id="app-layout">
    <div class="content">   
        <div class="wrapper">
        <div class="admin-wrapper">
        <nav class="adminmenu-wrapper" role="navigation">
          <ul class="adminmenu">
            <!-- Branding Image -->
            <li><a class="" href="{{ url('/') }}">Home Page</a></li>
            <li><a href="{{ url('/admin') }}"<span class="glyphicon glyphicon-dashboard"><strong> Administration Dashboard</strong></span></a></li>

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-left">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <!-- <li><a href="{{ url('/register') }}">Register</a></li> -->
                    @else
                        <li><a href=""><span class="glyphicon glyphicon-pushpin"></span>Header</a></li>
                        <li><a href="{{ url('#/pages') }}">Pages</a></li>
                        <li><a href="{{ url('#/galleries') }}">Galleries</a></li>
                        <!-- <li><a href="{{ url('#/galleryS3/add') }}">Add Galleries_S3</a></li> -->
                        <!-- <li><a href="{{ url('#/galleryS3/view') }}">View Galleries_S3</a></li> -->
                        <li><a href="{{ url('#/services') }}">Services</a></li>

                        <li><a href=""><i class="fa fa-comments"></i>Comments</a></li>
                        <li><a href="{{ url('#/submissions') }}">Submissions</a></li>

                        <!-- <li><a data-toggle="collapse" href="#postcollapse" aria-expanded="false" aria-controls="collapseExample"><span class="glyphicon glyphicon-pushpin"></span>Post</a>
                          <div class="collapse in" id="page-collapse">
                            <ul class="submenu">
                              <li><a href="" ng-click="savePage()" >Edit</a></li>
                              <li><a href="" ng-click="clearPage()">Add New</a></li>
                            </ul>
                          </div>
                        </li> -->

                        <!-- Users Logout -->
                        <li><a href=""><i class="fa fa-user"></i>Users</a></li>                  
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>       

            <!-- <li><a data-toggle="collapse" href="#postcollapse" aria-expanded="false" aria-controls="collapseExample"><span class="glyphicon glyphicon-pushpin"></span>Post</a>
              <div class="collapse" id="postcollapse">
                <ul class="submenu">
                  <li><a href="">Edit</a></li>
                  <li><a href="">Add New</a></li>
                  <li><a href="">Post Tags</a></li>
                  <li><a href="">Categories</a></li>
                </ul>
              </div>   
            </li> -->
            <!-- <li>
              <a data-toggle="collapse" href="#monthly-collapse" aria-expanded="false" aria-controls="collapseExample"><span class="glyphicon glyphicon-calendar"></span>Monthly Special</a>
              <div class="collapse" id="monthly-collapse">
                <ul class="submenu">
                  <li><a href="">Edit</a></li>
                  <li><a href="">Media</a></li>
                  <li><a href="">Links</a></li>
                </ul>
              </div>
            </li> -->
            <!-- <li>
              <a data-toggle="collapse" href="#page-collapse" aria-expanded="true" aria-controls="collapseExample"><span class="glyphicon glyphicon-file"></span>Pages</a>
              <div class="collapse in" id="page-collapse">
                <ul class="submenu">
                  <li><a href=""  class="current" ng-click="savePage()" >Edit</a></li>
                  <li><a href="" ng-click="clearPage()">Add New</a></li>
                </ul>
              </div>
            </li> -->
            <!-- <li><a href=""><i class="fa fa-comments"></i>Comments</a></li>
            <li><a href=""><i class="fa fa-paint-brush"></i>Appearance</a></li>
            <li><a href=""><i class="fa fa-cogs"></i>Plugins</a></li>
            <li><a href=""><i class="fa fa-user"></i>Users</a></li>
            <li><a href=""><i class="fa fa-wrench"></i>Tools</a></li>
            <li><a href=""><i class="fa fa-sliders"></i>Settings</a></li>
            <li><a href=""><span class="glyphicon glyphicon-pushpin"></span>Header</a></li>
            <li><a href=""><span class="glyphicon glyphicon-pushpin"></span>Flutter</a></li>  -->
          </ul>  
        </nav>
      </div>  <!--admin wrapper-->

    @yield('content')
    
    <script type="text/javascript" src="{{ URL::asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bower_components/angular/angular.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bower_components/angular-route/angular-route.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/admin/app.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>  
    <script type="text/javascript" src="{{ URL::asset('js/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
    <!-- Adding page controller and service -->
    <script type="text/javascript" src="{{ URL::asset('js/admin/controllers/PageController.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/admin/services/PageService.js') }}"></script>
    <!-- Adding service controller and service -->
    <script type="text/javascript" src="{{ URL::asset('js/admin/controllers/ServiceController.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/admin/services/ServicePageService.js') }}"></script>
    <!-- Adding gallery controller and service -->
    <script type="text/javascript" src="{{ URL::asset('js/admin/services/GalleryService.js') }}"></script>        
    <script type="text/javascript" src="{{ URL::asset('js/admin/controllers/GalleryController.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/admin/services/ImageService.js') }}"></script>
    <!-- Adding galleryS3 controller and service -->
    <script type="text/javascript" src="{{ URL::asset('js/admin/services/GalleryS3Service.js') }}"></script>        
    <script type="text/javascript" src="{{ URL::asset('js/admin/controllers/GalleryS3Controller.js') }}"></script>
    <!-- Adding dropzone script to enhance gallery -->
    <script type="text/javascript" src="{{ URL::asset('js/admin/dropzone/dist/dropzone.js') }}"></script>
    <!-- Adding submission controller and service -->
    <script type="text/javascript" src="{{ URL::asset('js/admin/controllers/SubmissionController.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/admin/services/SubmissionService.js') }}"></script>
    <!-- Adding Dropzonejs with AWS-->
    <script type="text/javascript" src="{{ URL::asset('bower_components/dropzone/dist/dropzone.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bower_components/angular-bootstrap/ui-bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bower_components/angular-bootstrap-lightbox/dist/angular-bootstrap-lightbox.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bower_components/angular-loading-bar/build/loading-bar.min.js') }}"></script>

    </body>
 </html>