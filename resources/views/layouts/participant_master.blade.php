<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spot The Bug -- Securify</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ mix('css/stb_bundle.css') }}">

</head>
<body>
<nav>
    <ul>
        <li class="home"><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Spot the Bug</a></li>
        <li><a href="#">How to Stb</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="{{ route('participant_logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                Logout
            </a></li>
    </ul>
</nav>

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
                @endauth
        </div>
    @endif

    <div class="content">
        @yield('content')
    </div>
</div>

<footer class="footer medium" >
<div class="container">
    <span>
        <a href="https://www.securify.nl/" target="_blank" id="footertext">Securify</a>

    </span>
</div>
</footer>

</body>
</html>
