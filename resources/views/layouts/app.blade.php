<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="{{ url('/css/app.css') }}" rel="stylesheet">
        <link href="{{ url('/css/imgSourcing.css') }}" rel="stylesheet">
        <link href="{{ url('/css/navbar.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('includes.navbar')
        @yield('content')

        <h4 id="author">Made by Eduard Wille! @2019</h4>

        <script type="text/javascript" src="{{ url('/js/navbar.js') }}"></script>
        <script type="text/javascript" src="{{ url('/js/app.js') }}"></script>
    </body>
</html>
