<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        * {
    margin: 0;
    padding: 0;
    list-style: none;
    box-sizing: border-box;

}

html {
    font-family: 'Roboto', sans-serif;
    font-size: 62.5%;
}

.myContainer {
    display: grid;
    grid-template-columns: 1fr 2fr;
    grid-template-rows: auto 50px;
    max-width: 1280px;
    margin: 0 auto;
    min-height: 100vh;
}

.info {
    grid-column: 1/2;
    grid-row: 1/2;
    background-image: linear-gradient(to right, #034669, #0d4f71);
    color: #fff;
    padding-bottom: 5%;
}

.main {
    grid-column: 2/3;
    grid-row: 1/2;
    background-color: white;
    padding: 5%;
}

footer {
    color: #fff;
    grid-column: 1/3;
    grid-row: 2/3;
    background-color: #0d4f71;
    padding: 10px 5%;
}

body {
    background-color: #dedede;
}

.info h1 {
    text-transform: uppercase;
    background-color: #003658;
    padding: 5%;
    text-align: center;
    font-size: 3.5rem;
}

.info h4 {
    padding: 0 10%;
}

.info p {
    padding: 1% 10%;
    font-size: 1.8rem;
}

.info p a {
    color: white;
}

.info ul {
    padding: 5% 10%;
    font-size: 2.3rem;
}

#umiejentnosci {
    font-size: 2.4rem;
    text-transform: uppercase;
    background-color: #003658;
    padding: 5%;
}

img {
    width: 70%;
    border-radius: 50%;
}

.photo {
    text-align: center;
    padding: 5%;
}

.contact {
    text-align: center;
}

.contact h4 {
    padding-top: 2%;
    font-size: 2.3rem;
}

h2 {
    text-transform: uppercase;
    font-size: 2.4rem;
    padding-top: 5%;
}

.main > * > li {
    padding: 1%;
}

.main > p {
    font-size: 2.2rem;
}

.main > ul {
    font-size: 2.2rem;
}

span {
    font-weight: bold;
}

.przycisk {
    display: block;
    width: 60%;
    text-align: center;
    margin: 0 auto;
    text-decoration: none;
    color: white;
    background-color: #0d4f71;
    border: solid 1px white;
    padding: 5% 0;
    font-size: 1.2em;
    margin-top: 5%;

}

.skills h5 {
    padding-bottom: 3%;
}

.skills li {
    padding: 4% 0;
}

.bar {
    background-color: #0d4f71;
    display: block;
    height: 5px;
    border: 1px solid rgb(0, 0, 0, 0.3);
    border-radius: 3px;
    overflow: hidden;
    /*    box-shadow: 0 0 3px #fff;*/
}

.bar span {
    height: 2px;
    float: left;
    background-color: #fff;
}

.html {
    width: 60%;
    animation: html 2S;
}

.css {
    width: 50%;
    animation: css 2s;
}

.javascript {
    width: 40%;
    animation: js 2s;
}

.laravel {
    width: 35%;
    animation: larva 2s;
}

@keyframes html {
    0% {
        width: 0%;
    }

    100% {
        width: 60%;
    }
}

@keyframes css {
    0% {
        width: 0%;
    }

    100% {
        width: 50%;
    }
}

@keyframes js {
    0% {
        width: 0%;
    }

    100% {
        width: 40%;
    }
}

@keyframes larva {
    0% {
        width: 0%;
    }

    100% {
        width: 35%;
    }
}

@media only screen and (max-width: 600px) {
    .myContainer {
        display: grid;
        grid-template-columns: 1fr 2fr;
        grid-template-rows: auto auto 50px;
    }


    .info {
        grid-column: 1/3;
        grid-row: 1/2;
    }

    .main {
        grid-column: 1/3;
        grid-row: 2/3;
    }

    footer {
        grid-column: 1/3;
        grid-row: 3/4;
    }
}

@media only screen and (min-width: 600px) {}

@media only screen and (min-width: 768px) {}

@media only screen and (min-width: 992px) {}

@media only screen and (min-width: 1200px) {}

footer p {
    text-align: center;
}

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
    </div>
    @yield('script')
</body>
</html>
