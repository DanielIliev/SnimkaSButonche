<!DOCTYPE html>
<html lang="bg">
    <head>
        <!-- Meta tags -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1" />
        <meta name="description" content="Basic Template" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Title -->
        <title>@yield('title')</title>
        <!-- Links -->
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
        <link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}" />
        <!-- Scripts -->
        <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    </head>
    <body>
        @include('layouts.Header')
        @yield('content')
        @include('layouts.Footer')
    </body>
</html>
