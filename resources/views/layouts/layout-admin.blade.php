<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
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
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        

        <!-- Fonts -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

        <!-- Styles -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

        <style>
            body {
                font-family: 'Lato';
            }

            .fa-btn {
                margin-right: 6px;
            }
        </style>
    </head>

    <title>@yield('content')</title>

<body id="app-layout">
    <div class="content">   
        <div class="wrapper">
        <div class="admin-wrapper">
        <nav class="adminmenu-wrapper" role="navigation">
          <ul class="adminmenu">
            <!-- Branding Image -->
            <li><a class="" href="{{ url('/') }}">Home Page</a></li>
            <li><a href="{{ url('/home') }}"<span class="glyphicon glyphicon-dashboard"><strong> Administration Dashboard</strong></span></a></li>

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
   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  


    </body>
 </html>