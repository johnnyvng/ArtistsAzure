@extends('layouts.layout-admin')

@section('content')
      <div ng-app="adminApp">
            <div class="container" ng-view></div>
            
      </div>

    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/angular.js') }}"></script>
    <script src="{{ URL::asset('js/angular-route.js') }}"></script>
    <script src="{{ URL::asset('js/admin/app.js') }}"></script>

    <script src="{{ URL::asset('js/admin/controllers/PageController.js') }}"></script>
    <script src="{{ URL::asset('js/admin/services/PageService.js') }}"></script>


    <script src="{{ URL::asset('js/admin/controllers/ServiceController.js') }}"></script>
    <script src="{{ URL::asset('js/admin/services/ServicePageService.js') }}"></script>

    <script src="{{ URL::asset('js/admin/services/GalleryService.js') }}"></script>        
    <script src="{{ URL::asset('js/admin/controllers/GalleryController.js') }}"></script>
    <script src="{{ URL::asset('js/admin/services/ImageService.js') }}"></script>

    <script src="{{ URL::asset('js/admin/controllers/SubmissionController.js') }}"></script>
    <script src="{{ URL::asset('js/admin/services/SubmissionService.js') }}"></script>

    <script src="js/vendor/jquery-1.11.2.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>  
        
@endsection