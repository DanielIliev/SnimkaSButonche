<html>
    <head>
        <title>@yield('title')</title>
        {{asset('css/name.css')}}
        {{asset('js/jquery.min.js')}}
    </head>
    <body>
        @section('header')
            //header
        @show

        <div class="container">
            @yield('content')
        </div>

        @section('footer')
            //hfooter
        @show
    </body>
</html>
