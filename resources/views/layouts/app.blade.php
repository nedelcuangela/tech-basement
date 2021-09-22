<!doctype html>
<html lang="en">
<head>
@include('includes.front.head')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/front.css')}}">
    @stack('css')
</head>
<body class="auth-layout">
<div id="app">
    <main class="py-4">
        @yield('content')
    </main>
</div>
@stack('js')
</body>
</html>
