@extends('layouts.master')

@section('title', 'Our Full Services')

@section('content')
    <main class="main-wrapper" role="main">
      <div class="container">
        <div class="row">
            <div class="content-wrapper">
              <div id="containingDiv">
              	<div class="col-md-12">
                    <div class="content-wrapper">
                       <h2 class="page-title"><b><center>We Bring Outstanding Services</center></b></h2>
                         	<div class="service-wrapper">
                      		<div class="row">
                          @for($i = 0; $i < 10; $i++)                       
                             <div class="service_content_wrapper"> 
                             	  <div class="service-single">
                                <a href="{{ url('/galleries/' . $all_galleries[$i]->filename)}}" data-lightbox="myFullService">                                                           
                                <img src="/galleries/{{$all_galleries[$i]->filename }}" class="img-responsive" alt="">
                                </a>
                                <h5><strong>{!!$all_services[$i]->service_name!!}</strong></h5>
                                    <p>{!!$all_services[$i]->service_content!!}</p> 
                                </div>                                       
                              </div> 
                          @endfor
                      	</div>             
                      </div>
                  </div>
                </div><!--content wrapper-->
            </div>
          </div>
        </div>
    </div><!--container-->  
  </main>

@endsection
