@extends('layouts.layout-admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Administration Dashboard</div>

                <div class="panel-body">
                    You are logged in as {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
