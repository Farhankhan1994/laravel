<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
        <script src="{{ URL::asset('js/jquery-3.5.1.slim.min.js') }}"></script>
        <script src="{{ URL::asset('js/popper.min.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 mt-5 mb-5">
	                    Student's Crud
	                </h1>
                </div>
                @yield('content')
            </div>
        </div>
    </body>
</html>
