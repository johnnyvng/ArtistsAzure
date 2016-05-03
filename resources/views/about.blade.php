@extends('layouts.master')

@section('title', 'About us')

@section('content')
    <main class="main-wrapper" role="main">
      <div class="container">
        <div class="row">
         <div class="content-wrapper">
            <div id="containingDiv">
                <div class="col-md-8 pdl pdr">
                  <div class="content-wrapper">
                      <h1 class="page-title">About Us</h1>
                      <h3 class="sub-title">{{$headline}}</h3>
                      <div class="entry-text img-right">                          
                          <p>{!!$body!!}</p>
                      </div>
                  </div><!--content wrapper-->
                </div>

                 <div class="col-md-4 pdl">
                  <aside class="left-sidebar">
                     <div class="widget-single">
                         <img src="img/side-banner.png" class="img-responsive" alt=""> 
                         <!-- <img src="/galleries/$filename "> -->
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                         consequat.</p>
                     </div>
                  </aside>
                </div>
                
            </div>
          </div>
        </div>
     </div><!--container-->
    </main>

@endsection
