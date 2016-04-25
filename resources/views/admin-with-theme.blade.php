@extends('layouts.layout-admin')

@section('content')
      <div ng-app="adminApp">
            <div class="container" ng-view>
            	
            </div>            
      </div>

    <script>
        var baseUrl = "{{ url('/') }}/";
        var csrfToken = "{{ csrf_token() }}";
    </script>
    
@endsection