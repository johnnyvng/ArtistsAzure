@extends('layouts.master')

@section('title', 'Our Services')

@section('content')
    <main class="main-wrapper">
      <div class="container">
        <div class="row"> 
          <div class="col-md-4 pdl">
          <aside class="left-sidebar">
             <div class="widget-single">
                 <img src="img/side-banner.png" class="img-responsive" alt="">  
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                 consequat.</p>
             </div>
          </aside>
          </div>
          <div class="col-md-8">
            <div class="content-wrapper">
                <h4 class="page-title"><b>Featured Service: {{$service_name}}</b></h4>
                   <p>{!!$description!!}</p>
            </div><!--content wrapper-->
          </div>
        </div>
      </div><!--container-->  
    </main>

@endsection
    
