@extends('layouts.layout')

@section('title', 'Contact us')

@section('content')
    <main class="main-wrapper" role="main">
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
              <div class="widget-single">
                 <img src="img/side-banner2.png" class="img-responsive" alt="">  
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                 consequat.</p>
             </div>
          </aside>
          </div>
          <div class="col-md-8 pdr">
            <div class="content-wrapper">
                <h1 class="page-title">Contact</h1>
                <div class="row contact-wrapper">
                   <div class="col-md-8 pdl pdr">
                      <div class="contact-form">
                         <p><b>Tell us your need, we can help!</b></p></br>
                         <form class="form-horizontal" method = "post" action = "/contact">
                          <div class="form-group">
                            <label for="firstname" class="col-sm-4 control-label">First Name:</label>
                            <div class="col-sm-7">
                              <input type="text" name ="name" class="form-control" id="firstname" placeholder="First Name">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="lastname" class="col-sm-4 control-label">Last Name:</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" id="lastname" placeholder="Last Name">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="phonenumber" class="col-sm-4 control-label">Phone Number:</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" id="phonenumber" placeholder="phone number">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">Email:</label>
                            <div class="col-sm-7">
                              <input type="email" name = "email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">Comments:</label>
                            <div class="col-sm-8">
                              <textarea class="form-control" rows="5"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-8">
                              <input type="file" name="comment" size="40">
                            </div>
                          </div>
                         
                          <div class="form-group">
                            <div class="col-sm-offset-7 col-sm-5">
                              <button type="submit" class="btn btn-primary">Submit</button>
                              <button type="submit" class="btn btn-success pull-right">Reset</button>
                            </div>
                          </div>
                        </form>
                      </div>
                   </div>

                   <div class="col-md-4 pdr pdl">
                      <div class="advert-wrapper">
                         <img src="img/background2.jpg" class="img-responsive" alt="">
                      </div>
                   </div>  
                </div>
            </div><!--content wrapper-->
          </div>
        </div>
      </div><!--container-->  
    </main>

@endsection
    