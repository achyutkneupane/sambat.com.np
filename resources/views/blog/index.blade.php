@extends('layouts.blogHead')
@section('title','Home')
@section('content')
<!-- <div class="sharethis-inline-share-buttons"></div> -->
<div class="sidenav">
	<div class="mainLogo ml-auto mr-auto">
		<img src="{{ asset('statics/sambatVector.png') }}" class="ml-auto mr-auto">
	</div>
	<div class="titleName text-center" style="font-size: 35px;">
		sambat blog
	</div>
	<a href="#home">Home</a>
	@foreach($cats as $cat)
		<a href="#{{ $cat->slug }}">
			{{ $cat->title }}
		</a>
	@endforeach
	<div class="row position-absolute fixed-bottom justify-content-center">
		<input type="submit" name="newsletter" class="btn btn-dark rounded-lg" value="Subscribe">
	</div>
</div>
	<div class="main text-center">
		<ul>
	@foreach($cats->where('slug','lessons')->first()->posts as $post)
		<li>
			{{ $post->title }}
		</li>
	@endforeach
		</ul>
	</div>
@endsection
