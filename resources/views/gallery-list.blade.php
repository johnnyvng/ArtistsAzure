@extends('layouts.master')

@section('title', 'Gallery List')

@section('content')

<main class="main-wrapper" role="main">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        @if ($galleries->count() > 0)
          <table class="table table-striped table-bordered table-responsive">
            <thread>
                <tr>
                  <th>Select Our Awesome Gallery</th>                
                </tr>
            </thread>
            <tbody>
              @foreach ($galleries as $gallery)
              <tr>
                  <td>{{$gallery->name}}</td>
                  <td><a href="{{ url('gallery/view/' . $gallery->id)}}"> View </a></td>          
              </tr>
              @endforeach
            </tbody>
           </table>
        @endif
      </div>
    </div>
  </div>
</main>    


@endsection