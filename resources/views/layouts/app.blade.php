<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('metas')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link href="{{ asset('css/styles.imageuploader.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    @yield('stylesheet')
</head>
<body>
    <div id="app">
        <header>
            @include('plantilla_base.nav')
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            @include('plantilla_base.footer')
        </footer>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="{{ asset('js/nav.js')}}" type="text/javascript" charset="utf-8" ></script>
    <script src="{{ asset('js/jquery.imageuploader.js') }}" charset="utf-8"></script>
    <script type="text/javascript">
        $(function(){
            var options = {};
            $('.js-uploader__box').uploader(options);
        });
    </script>
    @yield('scripts')
</body>
</html>
