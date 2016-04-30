@extends('layouts.master')

@section('title', 'Our GalleryS3')

@section('content')
      <div class="row">
        <div class="col-md-8">
          @if ($galleries->count() > 0)
              <table class="table table-striped table-bordered table-responsive">
                  <thread>
                      <tr>
                        <th>Name of the gallery</th>
                        
                      </tr>
                  </thread>

                  <tbody>
                    @foreach ($galleries as $gallery)
                    <tr>
                        <td>{{$gallery->name}}</td>
                        <td><a href="{{ url('gallery/view/' . $gallery->id)}}"> View </td>
                    </tr>
                    @endforeach
                  </tbody>
              </table>
          @endif
        </div>




      </div>    
  
@endsection