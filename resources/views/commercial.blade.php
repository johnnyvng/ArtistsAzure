@extends('layouts.master')

@section('title', 'Our Services')

@section('content')
     <main class="main-wrapper" role="main">
      <div class="container">
        <div class="row">
         <div class="content-wrapper">
              <div id="containingDiv">
                  <div class="col-md-12">
                    <div class="content-wrapper">
                        <h4 class="page-title"><b>Featured Service: MOWING, TRIMMING AND EDGING</b></h4>
                        <div class="service-wrapper">
                            <img src="/galleries/{{ $image->filename }}" class="img-responsive" alt="{{ $image->name }}">
                            <div class="row">
                                @for($i = 0; $i <5; $i++)
                                  <div class="col-md-4">
                                    <div class="service-single">
                                       <img src="/galleries/{{ $all_galleries[0] -> images[$i] -> filename }}" class="img-responsive" alt="">
                                      <h3>{{ $services[$i]->service_name }}</h3>
                                      <p>{!!$services[$i]->service_content!!}</p>
                                       
                                    </div>
                                  </div>

                               @endfor
                            </div>
                        </div>
                        <div id="containingDiv">
                          <div id="allinone_carousel_charming">
                            <div class="myloader"></div>
                              <!-- CONTENT -->
                              <ul class="allinone_carousel_list">
                                @foreach( $gallery->images as $image)
                                  <li class="image"><img src="/galleries/{{ $image->filename }}" alt="{{ $image->name }}" /></li>
                                @endforeach  
                              </ul>                                                           
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