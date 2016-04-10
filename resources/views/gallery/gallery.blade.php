@extends('layouts.app')

@section('title', 'Upload Gallery')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1>My Gallery Upload</h1>
		</div>
	</div>

<div class="row">
		<div class="col-md-8">
			@if ($galleries->count() > 0)
				<table class="table table-striped table-bordered table-reponsive">
					<thread>
						<tr>
							<th colspan="" rowspan="" headers="" scope="">Name of the gallery</th>
							<th colspan="" rowspan="" headers="" scope=""></th>
						</tr>
					</thread>

					<tbody>
						@foreach ($galleries as $gallery)
						<tr>
							<td colspan="" rowspan="" headers="">{{$gallery->name}}</td>
							<td><a href="{{url('gallery/view/' . $gallery->id)}}">View</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			@endif
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
</div>

@endsection