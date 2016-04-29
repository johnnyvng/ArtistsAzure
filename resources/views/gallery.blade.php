@extends('layouts.master')

@section('title', 'Our Services')

@section('content')
    <main class="main-wrapper" role="main">
      <div class="container">
         <div class="content-wrapper">
              <div id="containingDiv">
         <!--  <h3 class="gallery-title">Landscaping</h3>
         <div class="gallery" id="Landscaping-gallery">  
       
        <div class="gallery" id="Landscaping-gallery">  
          <a href="img/image9.jpg" class="big"><img src="img/thumbs/thumb9.jpg" alt="" title=""/></a>
          <a href="img/image10.jpg"><img src="img/thumbs/thumb10.jpg" alt="" title=""/></a>
          <a href="img/image11.jpg"><img src="img/thumbs/thumb11.jpg" alt="" title=""/></a>
          <a href="img/image12.jpg"><img src="img/thumbs/thumb12.jpg" alt="" title=""/></a>
          <div class="clearfix"></div>
          
          <a href="img/image5.jpg"><img src="img/thumbs/thumb5.jpg" alt="" title=""/></a>
          <a href="img/image6.jpg"><img src="img/thumbs/thumb6.jpg" alt="" title=""/></a>
          <a href="img/image7.jpg" class="big"><img src="img/thumbs/thumb7.jpg" alt="" title=""/></a>
          <a href="img/image8.jpg"><img src="img/thumbs/thumb8.jpg" alt="" title=""/></a>
          <div class="clearfix"></div> -->
          <br />
          <br />
          <div class="col-xs-3 gallery-image-single" class="thumbnail">
              <div class="container">
                <div class="content">
                    <div class="g_list">
                        <h1>All Galleries</h1><br>
                        @foreach( $all_galleries as $g)
                            <a href="/gallery/{{$g->id}}">{{ $g->name }}</a> &nbsp;&nbsp;&nbsp;
                        @endforeach
                    </div>
                    <div class="title">
                        <!-- {{$gallery->filename}} -->
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
        </div>
      </div>

      <!-- <div class="row">
        <div class="col-sm-12" ng-hide="showGallery">Loading...</div>
        <div class="col-sm-3 gallery-container" ng-repeat="gallery in galleries | orderBy:id:true" ng-show="showGallery" ng-click="viewGallery(gallery.id)">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">@{{gallery.name}}</h3>
                </div>
                <div class="panel-body">
                    Created by: <strong>@{{gallery.user.name}}</strong>
                    <br>
                    Created <strong>@{{gallery.created_at}}</strong>
                </div>
            </div>
        </div> -->
    </div>

      <div class="row">
        <div class="col-xs-3 gallery-image-single" ng-repeat="(key, value) in singleGallery.images">
          <a ng-click="openLightboxModal($index)" class="thumbnail">
            <div>
              <img ng-src="@{{value.thumbUrl}}" class="directive-image">
            </div>
          </a>
          <div style="text-align: center" class="delete-icon"><i class="fa fa-trash cursor" ng-click="deleteImage(value.file_id)"></i></div>
        </div>
        <br />
        <br />
      </div>

      </div><!--container-->
    </main>
@endsection