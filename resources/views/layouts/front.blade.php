<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.front.head')
    <meta charset="utf-8">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    @stack('css')
</head>
<body class="front-area">
<div class="layer"></div>
<div id="app">
    <div id="page-container">
        <div id="content-wrap">
            @include('includes.front.navbar')
            @yield('content')
        </div>
        @include('includes.front.footer')
    </div>
</div>
<script>
    const app = {
        base: @json(asset('/'))
    };
</script>
</body>
</html>
