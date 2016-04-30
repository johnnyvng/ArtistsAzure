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
                            
                            <div class="row">
                               <div class="col-md-4">
                                  <div class="service-single">
                                     <img src="img/mowing.jpg" class="img-responsive" alt="">
                                     <h3>Mowing</h3>
                                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                  </div>
                               </div>
                               <div class="col-md-4">
                                  <div class="service-single">
                                     <img src="img/edging.jpg" class="img-responsive" alt="">
                                     <h3>Edging</h3>
                                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                  </div>
                               </div>
                               <div class="col-md-4">
                                  <div class="service-single">
                                     <img src="img/trimming.jpg" class="img-responsive" alt="">
                                     <h3>Trimming</h3>
                                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                  </div>
                               </div>
                                      @foreach ($services as $i) 
                                <div class="col-md-4">
                                  <div class="service-single">
                                     <img src="img/trimming.jpg" class="img-responsive" alt="">
                                     <h3>{{ $i->service_name }}</h3>
                                     <p>{!!$i->service_content!!}</p>
                                </div>
                               </div>
                               @endforeach
                            </div>
                        </div>
                        <div id="containingDiv">
                          <div id="allinone_carousel_charming">
                            <div class="myloader"></div>
                              <!-- CONTENT -->
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
                </div>
              </div>
        </div>
      </div><!--container-->
    </main>
@endsection