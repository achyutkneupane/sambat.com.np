<!doctype html>
<!--
Made for Sambat Adhikari
https://sambat.com.np
By Achyut Neupane
https://www.facebook.com/ThisIsAchyut
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8" />
    <meta name="description" content="Sambat is a musician, composer and music educator based out of Nepal." />
    <meta name="keywords" content="Sambat,Adhikari,Dharan,Nepal,Contemporary,Marfa,Achyut,Neupane,Dharan School of Contemporary Music" />
    <meta property="og:title" content="SAMBAT" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://sambat.com.np" />
    <meta property="og:description" content="Sambat is a musician, composer and music educator based out of Nepal." />
    <meta property="og:image" content="{{ asset('statics/ogimage.jpg') }}" />
    <meta name="author" content="Achyut Neupane" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') - Sambat</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="icon" type="image/png" href="{{ asset('statics/favicon.png') }}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm ml-auto">
        <div class="container">
            <h2 class="navbar-nav mr-auto">
                <a href='{{ url('/home') }}'>
                    Admin Panel
                </a>
            </h2>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="btn btn-dark ml-1" href="{{ url('/')}}">View Site</a>
                </li>
                @auth
                <li class="nav-item">
                    <a href="{{ url('/profile') }}" class="btn btn-dark ml-1">
                        Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-dark ml-1" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                @endauth
            </ul>
        </div>
    </nav>
    @auth
    <div class="container mt-4">
        <div class="row justify-content-left">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">{{ __('Admin Menu') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="list-group-flush">
                            <div class="list-group-item">
                                <a href="{{route('posts.create')}}">Create Post</a>
                            </div>
                            <div class="list-group-item">
                                Item 2
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header justify-content-between">@yield('sectionTitle')</div>
                    <div class="card-body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endauth
    <div class="copyRight fadeIn">
        Developed by:
        <a href="https://fb.me/ThisIsAchyut" target="_blank"><b>Achyut</b></a>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
</html>
