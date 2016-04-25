@extends('layouts.master')

@section('title', 'Our Services')

@section('content')
    <main class="main-wrapper" role="main">
      <div class="container">
          <h3 class="gallery-title">Landscaping</h3>
         <div class="gallery" id="Landscaping-gallery">  
       
        <div class="gallery" id="Landscaping-gallery">  
          <!-- <a href="img/image9.jpg" class="big"><img src="img/thumbs/thumb9.jpg" alt="" title=""/></a>
          <a href="img/image10.jpg"><img src="img/thumbs/thumb10.jpg" alt="" title=""/></a>
          <a href="img/image11.jpg"><img src="img/thumbs/thumb11.jpg" alt="" title=""/></a>
          <a href="img/image12.jpg"><img src="img/thumbs/thumb12.jpg" alt="" title=""/></a>
          <div class="clearfix"></div>
          
          <a href="img/image5.jpg"><img src="img/thumbs/thumb5.jpg" alt="" title=""/></a>
          <a href="img/image6.jpg"><img src="img/thumbs/thumb6.jpg" alt="" title=""/></a>
          <a href="img/image7.jpg" class="big"><img src="img/thumbs/thumb7.jpg" alt="" title=""/></a>
          <a href="img/image8.jpg"><img src="img/thumbs/thumb8.jpg" alt="" title=""/></a> -->
          <div class="clearfix"></div>

          <div class="container">
            <div class="content">
                <div class="g_list">
                    All Galleries:<br>
                    @foreach( $all_galleries as $g)
                        <a href="/gallery/{{$g->id}}">{{ $g->name }}</a> &nbsp;&nbsp;&nbsp;
                    @endforeach
                </div>
                <div class="title">
                    {{$gallery->name}}
                </div>
                <div class="body">
                    @foreach( $gallery->images as $image)
                    <div class="image">
                        <img src="/galleries/{{ $image->filename }}">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
          
        </div>
      </div><!--container-->  
    </main>
@endsection