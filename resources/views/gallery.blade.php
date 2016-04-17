@extends('layouts.layout')

@section('title', 'Gallery')

@section('content')
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

@endsection