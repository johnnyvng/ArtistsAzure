@extends('layouts.layout-upload')

@section('title', 'Upload Gallery')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1>My Gallery Upload</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8">Listing</div>
	</div>

	<div class="col-md-4">
		<form class="form" method="POST" action="{{url('gallery/save')}}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="form-group">
				<input type="text" name="gallery_name" id="gallery_name" placeholder="Name of the gallery" class="form-control"></input>
			</div>

			<button class="btn btn-primary">SAVE</button>

		</form>
	</div>

@endsection