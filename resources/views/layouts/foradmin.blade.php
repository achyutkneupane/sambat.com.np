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
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm ml-auto sticky-top">
        <div class="container">
            <h2 class="navbar-nav mr-auto">
                <a href='{{ url('/home') }}' class='text-white'>
                    Admin Panel
                </a>
            </h2>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="btn btn-light ml-1" href="{{ url('/')}}">View Site</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="btn btn-light ml-1" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                @endauth
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="row justify-content-center">
            @auth
            <div class="col-md-3 my-1">
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
                                Posts
                                <div class="list-group-flush">
                                    <div class="list-group-item">
                                        <a href="{{route('posts.index')}}">
                                            Active Posts
                                        </a>
                                    </div>
                                    <div class="list-group-item">
                                        <a href="{{route('posts.trashed')}}">
                                            Trashed Posts
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <a href="{{route('categories.index')}}">
                                    Categories
                                </a>
                            </div>

                            <div class="list-group-item">
                                <a href="{{route('tags.index')}}">
                                    Tags
                                </a>
                            </div>
                            <div class="list-group-item">
                                <a href="{{ route('setting.index') }}">
                                    Setting
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endauth
            <div class="col-md-9 my-1">
                <div class="card">
                    <div class="card-header">
                        @yield('sectionTitle')
                    </div>
                    <div class="card-body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyRight fadeIn">
        Developed by:
        <a href="https://fb.me/ThisIsAchyut" target="_blank"><b>Achyut</b></a>
    </div>
</body>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
@include('layouts.toastfile')
<script>
    ClassicEditor
    .create( document.querySelector( '#postContent' ) )
    .catch( error => {
        console.error( error );
    } );
</script>
</html>
