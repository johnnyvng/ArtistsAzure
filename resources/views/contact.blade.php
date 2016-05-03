@extends('layouts.master')

@section('title', 'Contact us')

@section('content')
    <main class="main-wrapper" role="main">
      <div class="container">
        <div class="row">
           <div class="content-wrapper">
              <div id="containingDiv">
                  <div class="col-md-12 pdr">
                    <div class="content-wrapper">
                        <h1 class="page-title">Contact Us</h1>
                        <div class="row contact-wrapper">
                           <div class="col-md-8 pdl pdr">
                              <div class="contact-form">                                 
                                 <form class="form-horizontal" method = "post" action = "/contact">
                                  <div class="form-group">
                                    <label for="fullname" class="col-sm-4 control-label">Name:</label>
                                    <div class="col-sm-7">
                                      <input type="text" name ="name" class="form-control" id="name" placeholder="Full Name">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="phonenumber" class="col-sm-4 control-label">Phone Numbers:</label>
                                    <div class="col-sm-7">
                                      <textarea type ="text" name = "phone" class="form-control" id="phone" placeholder="Contact Numbers" rows="1"></textarea>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Email:</label>
                                    <div class="col-sm-7">
                                      <input type="email" name = "email" class="form-control" id="inputEmail3" placeholder="Email">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="comment" class="col-sm-4 control-label">Comments:</label>
                                    <div class="col-sm-8">
                                      <textarea type = "string" name = "comment" class="form-control" placeholder="Please comment your thought" rows="5"></textarea>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <button type="submit" class="btn btn-primary pull-right">Submit </button>
                                    </div>
                                    <div class="col-sm-6">
                                      <button type="submit" class="btn btn-success pull-left">Reset </button>
                                    </div>
                                    </div>
                                  </div>
                                </form>
                              </div>
                           </div>

                           <div class="col-md-4 pdl pdr">
                             <div class="widget-single">
                                <h1 class="page-title">Outdoor Artists Group</h1>
                                <h3 class="sub-title">{{$headline}}</h3>
                                <div class="entry-text img-right">                                   
                                    <p>{!!$body!!}</p>
                                </div>
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
    