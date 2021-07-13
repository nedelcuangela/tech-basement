<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{'Tech Basement'}}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">
{{--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>--}}
{{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>--}}
{{--    <script src="https://kit.fontawesome.com/e05090259d.js" crossorigin="anonymous"></script>--}}


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="/">Tech Basement</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/users">User list</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>


        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-box">
                            <div class="footer-title">
                                <h5>Download Our Mobile App</h5>
                            </div>
                            <div class="footer-desc">
                                <p>Molestiae reiciendis neque arcu! Tempor reprehenderit accusantium quibusdam iste accusan.</p>
                            </div>
                            <div class="app-img">
                                <div class="app-store"><a href="#"><img src="images/play-store.png" alt="" /></a></div>
                                <div class="app-store"><a href="#"><img src="images/app-store.png" alt="" /></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-box">
                            <div class="footer-title">
                                <div class="footer-logo"><img src="images/logo02.png" alt="" /></div>
                            </div>
                            <div class="footer-desc">
                                <p style="text-align: center;">Molestiae reiciendis neque arcu! Tempor reprehenderit accusantium quibusdam iste accusan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="footer-box">
                            <div class="footer-title">
                                <h5>Quick Links</h5>
                            </div>
                            <div class="footer-desc">
                                <ul>
                                    <li><a href="#">Know More About Us</a></li>
                                    <li><a href="#">Visit Store</a></li>
                                    <li><a href="#">Let's Connect</a></li>
                                    <li><a href="#">Locate Store</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="footer-box">
                            <div class="footer-title">
                                <h5>Sites Links</h5>
                            </div>
                            <div class="footer-desc">
                                <ul>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Shipping Details</a></li>
                                    <li><a href="#">Offer Coupons</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    </div>
</body>
</html>
