@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <main class="main-wrapper">
      <div class="container">
        <div class="row"> 
          <div class="col-md-8">
            <div class="content-wrapper">
                <div id="containingDiv">
                  <div id="allinone_carousel_charming">
                    <div class="myloader"></div>
                      <!-- CONTENT -->
                      <ul class="allinone_carousel_list">
                          @foreach( $gallery->images as $image)
                            <li class="image"><img src="/galleries/{{ $image->filename }}" alt="{{ $image->name }}" /></li>
                          @endforeach                          
                      </ul>

                      <ul class="allinone_carousel_list">
                        <li><img src="img/charming/01_charming.jpg" alt="" /></li>
                          <li data-link="http://codecanyon.net/user/LambertGroup" data-target="_blank"><img src="img/charming/02_charming.jpg" alt="" /></li>
                          <li><img src="img/charming/03_charming.jpg" alt="" /></li>
                          <li><img src="img/charming/04_charming.jpg" alt="" /></li>
                          <li><img src="img/charming/05_charming.jpg" alt="" /></li>                    
                      </ul>                           
                    </div>
                  </div>  
                </div>
            </div><!--content wrapper-->
          </div>

          <div class="row"> 
            <div class="col-md-4 pdl">
            <aside class="left-sidebar">
               <div class="widget-single">
                   <img src="galleries/{{$gallery->images[0]->filename}}" class="img-responsive" alt="{{ $image->name }}">  
                   <p>{!!$index->body!!}</p>
               </div>
            </aside>
            </div>
            <div class="col-md-8">
              <div class="content-wrapper">
                  <h1 class="page-title">The Outdoor Artist</h1>
                  <img src="/galleries/{{ $image->filename }}"class="img-responsive" alt="{{ $image->name }}">
                  <h3>{{$index->headline}}</h3>
                  <p>{!!$index->body!!}</p>
              </div><!--content wrapper-->
            </div>
          </div>

      </div><!--container-->  
    </main>
@endsection