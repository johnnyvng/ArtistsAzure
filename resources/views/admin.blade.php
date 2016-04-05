<!DOCTYPE html>
<html ng-app="adminApp">
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100,400" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                margin: 0 auto;
                width: 960px;
                padding: 20px;
            }

            .content {
                float: left;
            }

            .list_wrapper {
                width: 350px;
                margin-left: 40px;
                float: left;
            }

            .title {
                font-size: 36px;
            }
            .wrapper div {
                padding: 5px;
            }
            .link {
                font-weight: 400;
            }
            .link:hover {
                color: blue;
                text-decoration: underline;
                cursor: pointer;
            }
            label {
                display: block;
                float: left;
                width: 150px;
                font-weight: 400;
            }
            input[type="text"], textarea {
                width: 400px;
            }
            textarea {
                height: 300px;
            }
            button  {
                float: right;
            }

        </style>
    </head>
    <body>
        <div class="container" ng-view>

        </div>

        <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('js/angular.js') }}"></script>
        <script src="{{ URL::asset('js/angular-route.js') }}"></script>
        <script src="{{ URL::asset('js/admin/app.js') }}"></script>
        <script src="{{ URL::asset('js/admin/services/PageService.js') }}"></script>
        <script src="{{ URL::asset('js/admin/controllers/PageController.js') }}"></script>
        <script src="{{ URL::asset('js/admin/services/ServicePageService.js') }}"></script>
        <script src="{{ URL::asset('js/admin/controllers/ServiceController.js') }}"></script>
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
