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
    <title>@yield('title') - Sambat Blogs</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="icon" type="image/png" href="{{ asset('statics/favicon.png') }}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">

<div class="sidenav">
    <div class="mainLogo ml-auto mr-auto">
        <img src="{{ asset('statics/sambatVector.png') }}" class="ml-auto mr-auto">
    </div>
    <div class="titleName text-center" style="font-size: 35px;">
        sambat blog
    </div>
    <div class="sidebar text-right">
        <div class="sideLinks">
            <div class="text">
                <a onclick="getPosts('all');">
                    Home
                </a>
            </div>
        </div>
        @foreach($cats as $cat)
<div class="sideLinks">
            <div class="text">
                <a onclick="getPosts('{{ $cat->slug }}');">
                    {{ $cat->title }}
                </a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row position-absolute fixed-bottom justify-content-center">
        <input type="submit" name="newsletter" class="btn btn-dark rounded-lg" value="Subscribe">
        Developed by Achyut
    </div>
</div>

</head>
@yield('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f9faf7c6bdd840019e027da&product=inline-share-buttons' async='async'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
<script src="{{ asset('js/ajax.js') }}" defer></script>
</html>
