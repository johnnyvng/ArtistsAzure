<!--  -->
@extends('layouts.master')

@section('title', 'Government Landscaping')

@section('content')
    <main class="main-wrapper" role="main">
      <div class="container">
        <div class="row">
         <div class="content-wrapper">
              <div id="containingDiv">
                  <div class="col-md-12">
                    <div class="content-wrapper">
                        <h2 class="page-title"><b><center>
                       {{$governmentCategory->category_name}}
                        </center></b></h2>
                        <div class="service-wrapper">
                            <h3 class="page-title"><b>Landscaping Services</b></h3>
                            <p> {!!$governmentCategory->category_content!!} </p>
                            <br />                         
                            <h3 class="page-title"><b>Customer Service Is Our Priority</b></h3>
                            <p> {!!$governmentCategory->category_description!!} </p>
                           
                            <div class="row">
                              @for($i = 0; $i <4; $i++) 
                               <div class="service_content_wrapper">                
                                  <div class="service-single">
                                    <a href="{{ url('/galleries/' . $all_governmentGalleries[0]->images[$i]->filename )}}" data-lightbox="GovernmentService">
                                    <img src="/galleries/{{ $all_governmentGalleries[0]->images[$i]->filename }}" class="img-responsive" alt="Government Service">
                                    </a>
                                    <h3><strong>{!!$all_governmentServices[$i+4]->service_name!!}</strong></h3>
                                    <p>{!!$all_governmentServices[$i+4]->service_content!!}</p>
                                  </div>
                                </div>
                              @endfor                 
                               <!-- <div class="col-md-4">                            
                                  <div class="service-single">
                                      
                                  </div>
                               </div>
                               <div class="col-md-4">
                                  <div class="service-single">
                                     <img src="img/trimming.jpg" class="img-responsive" alt="">
                                     <h3>Trimming</h3>
                                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                  </div>
                               </div>          -->                        
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
