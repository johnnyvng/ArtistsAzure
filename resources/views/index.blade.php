@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <main class="main-wrapper">
      <div class="container">
        <div class="row"> 
          <div class="col-md-12">
            <div class="content-wrapper">
                <div id="containingDiv">
                  <div id="allinone_carousel_charming">
                    <div class="myloader"></div>
                      <!-- CONTENT -->
                      <ul class="allinone_carousel_list">
                          @foreach( $gallery->images as $image)
                            <li class="image">
                            <a href="{{ url('/galleries/' . $image->filename) }}" alt="{{ $image->name }}" data-lightbox="Thumbnail">
                            <img src="{{ url('/galleries/' . $image->filename) }}" alt="{{ $image->name }}" />
                            </a>
                            </li>
                          @endforeach                          
                      </ul>               
                    </div>
                  </div> 
                </div><!--content wrapper-->
            </div>
          </div>

         
  <main class="main-wrapper" role="main">
      <div class="container">
        <div class="row">
            <div class="content-wrapper">
              <div id="containingDiv">
                <div class="col-md-12">
                    <div class="content-wrapper">
                       <h2 class="page-title"><b><center>The Outdoor Artists Group</center></b></h2>
                          <div class="service-wrapper">
                          <div class="row">
                               <h3>{{$index->headline}}</h3>
                                <p>{!!$index->body!!}</p>
                                <br />

                                @foreach ( $all_categories as $c)
                                <div class="service_content_wrapper">
                                  <div class="service-single">
                                    <h4><strong>
                                    <a href="{{ url('/service/' . $c->category_name )}}">
                                    {{ $c->category_name }}</strong></h4></a>
                                    <p>{{ $c->category_content}}</p> 
                                    <a href="{{ url('/galleries/' . $c->category_filename )}}" data-lightbox="categoryFilename">
                                    <img src="{{ url('/galleries/' . $c->category_filename )}}">
                                    </a>
                                  </div>                                       
                                </div> 
                                @endforeach
                        </div>             
                      </div>
                  </div>
                </div><!--content wrapper-->
            </div>
          </div>
        </div>
    </div><!--container-->  
  </main>

               
                 
      </div><!--container-->  
    </main>
@endsection