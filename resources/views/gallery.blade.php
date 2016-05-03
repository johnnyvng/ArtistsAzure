@extends('layouts.master')

@section('title', 'Our Galleries')

@section('content')
<main class="main-wrapper" role="main">
  <div class="container">
        <h2>Our Full Gallery</h2>         
            <div class="col-sm-2 container">
              <div class="panel panel-primary">
                  @foreach( $all_galleries as $g)
                  <div class="panel-heading">
                      <h3 class="panel-title">
                      <a href="/gallery/view/{{$g->id}}">{{ $g->name }} </a> &nbsp;&nbsp;&nbsp;        
                      </h3>
                  </div>
                  @endforeach
              </div> 
            </div>
<!--     <h3 class="gallery-title">Landscaping</h3>   
    <div class="gallery" id="Landscaping-gallery">  
      <a href="img/image9.jpg" class="big"><img src="img/thumbs/thumb9.jpg" alt="" title=""/></a>
      <a href="img/image10.jpg"><img src="img/thumbs/thumb10.jpg" alt="" title=""/></a>
      <a href="img/image11.jpg"><img src="img/thumbs/thumb11.jpg" alt="" title=""/></a>
      <a href="img/image12.jpg"><img src="img/thumbs/thumb12.jpg" alt="" title=""/></a>
      <div class="clearfix"></div>
      
      <a href="img/image5.jpg"><img src="img/thumbs/thumb5.jpg" alt="" title=""/></a>
      <a href="img/image6.jpg"><img src="img/thumbs/thumb6.jpg" alt="" title=""/></a>
      <a href="img/image7.jpg" class="big"><img src="img/thumbs/thumb7.jpg" alt="" title=""/></a>
      <a href="img/image8.jpg"><img src="img/thumbs/thumb8.jpg" alt="" title=""/></a>
      <div class="clearfix"></div> -->
      <br>
      <div class="col-sm-12 container">                        
          <div class="col-med-12 gallery-image-single" class="thumbnail">
            <div id="gallery-images" class="image">
              <ul>              
              <div class="body">
                 @foreach( $gallery->images as $image)
                  {{-- expr --}}
                  <a href="{{ url('/galleries/' . $image->filename)}}" data-lightbox="myGallery">
                    <img src="{{ url('/galleries/' .$image->filename) }}">
                  </a>
                @endforeach
                </div>
              </ul>
            </div>
          </div>
      </div>
  </div> <!-- container -->
</main>

     
@endsection