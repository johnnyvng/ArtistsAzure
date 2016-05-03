@extends('layouts.master')

@section('title', 'Commercial Landscaping')

@section('content')
     <main class="main-wrapper" role="main">
      <div class="container">
        <div class="row">
         <div class="content-wrapper">
              <div id="containingDiv">
                  <div class="col-md-12">
                    <div class="content-wrapper">
                        <h2 class="page-title"><b><center>
                       {{$commercialCategory->category_name}}
                        </center></b></h4>
                        <div class="service-wrapper">
                            <h3 class="page-title"><b>Landscaping Services</b></h3>
                            <p> {!!$commercialCategory->category_content!!} </p>
                            <br />                         
                            <h3 class="page-title"><b>Customer Service Is Our Priority</b></h3>
                            <p> {!!$commercialCategory->category_description!!} </p>
                            
                            <div class="row">
                            @for($i = 0; $i< 4; $i++) 
                               <div class="service_content_wrapper">                                               
                                  <div class="service-single"> 
                                    <a href="{{ url('/galleries/' .  $all_commercialGalleries[1]->images[$i]->filename )}}" data-lightbox="commercialService">
                                    <img src="/galleries/{{ $all_commercialGalleries[1]->images[$i]->filename }}" class="img-responsive" alt="">       
                                    </a>           
                                    <h3><strong>{!!$all_commercialServices[$i+8]->service_name!!}</strong></h3>
                                    <p>{!!$all_commercialServices[$i+8]->service_content!!}</p>
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
        </div>
      </div><!--container-->
    </main>
@endsection