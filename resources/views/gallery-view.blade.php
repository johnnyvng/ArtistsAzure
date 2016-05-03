@extends('layouts.master')

@section('title', 'Our GalleryS3')

@section('content')
    <main class="main-wrapper" role="main">
        <div class="container">
            <h1>{{$gallery->name}}</h1>
            <br />
            <a href="{{url('gallery/list')}}" class="btn btn-primary">BACK</a>       
            <br />
            <br />

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

            @foreach ($files as $f)
              {{-- expr --}}
              <a href="{{ $f->file_path }}" data-lightbox="myGallery">
                <img src="{{ $f->file_path }}" alt="S3 image">
              </a>
            @endforeach
        </div>
    </main>

@endsection