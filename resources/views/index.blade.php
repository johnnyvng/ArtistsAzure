@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    <main class="main-wrapper" role="main">
      <div class="container">
        <div class="row">
          <section class="featured-wrapper">
             <img src="img/slide2.jpg" class="img-responsive" alt="">  
          </section>
        </div>
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
                <h1 class="page-title">The Outdoor Artist</h1>
                <h3>{{$headline}}</h3>
                <p>{!!$body!!}</p>
            </div><!--content wrapper-->
          </div>
        </div>
      </div><!--container-->  
    </main>

@endsection