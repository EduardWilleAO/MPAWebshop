<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="{{ url('/css/app.css') }}" rel="stylesheet">
        <link href="{{ url('/css/navbar.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('includes.navbar')
        @yield('content')

        <script type="text/javascript" src="{{ url('/js/navbar.js') }}"></script>
        <script type="text/javascript" src="{{ url('/js/app.js') }}"></script>
    </body>
</html>
