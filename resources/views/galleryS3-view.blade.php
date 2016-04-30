@extends('layouts.master')

@section('title', 'Our GalleryS3')

@section('content')
<div class="row">
  <div class="col-md-12">
        <h1>{{$gallery->name}}</h1>       
  </div>
</div>

<div class="col-xs-3 gallery-image-single" class="thumbnail" ng-app="adminApp">
<div class="row">
  <div class="col-md-12">
    <div id="gallery-images" class="image">
      <ul>
        @foreach ($files as $f)
          {{-- expr --}}
          <a href="{{ $f->file_path }}" data-lightbox="myGallery">
            <img src="{{ $f->file_path }}" alt="S3 image">
          </a>
        @endforeach
      </ul>
    </div>
  </div>
</div> 
</div>

<div class="row">
  <div class="col-md-12">
    <a href="{{ url('gallery/list')}}" class="btn btn-primary">Back</a>
  </div>
</div>

  
@endsection