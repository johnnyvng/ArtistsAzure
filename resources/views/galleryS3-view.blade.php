@extends('layouts.master')

@section('title', 'Our GalleryS3')

@section('content')
      <div class="row">
        <div class="col-md-12">
              <h1>{{$gallery->name}}</h1>         
        </div>

        <div class="row">
          <div class="col-md-12">
            <a href="{{ url('galleryS3/list') }}" class="btn btn-primary"> Back </a>
          </div>
        </div>

        
      </div>    
  
@endsection