<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Rayhan | Fullstack web developer</title>
    
    <link rel="stylesheet" href="{{ asset('owl-carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owl-carousel/assets/owl.theme.default.min.css') }}">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- Facebook OpenGraph Metas -->
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="King Rahan" />
    <meta property="og:description"        content="Fullstack web developer" />
    <meta property="og:image"              content="og.png" />


</head>
<body>
    <div id="app">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/js-plugin.js') }}"></script>
</body>
</html>
