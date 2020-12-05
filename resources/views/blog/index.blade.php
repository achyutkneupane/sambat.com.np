@extends('layouts.blogHead')
@section('title','Home')
@section('content')<div class="sidenav">
    <div class="mainLogo ml-auto mr-auto">
        <img src="{{ asset('statics/sambatVector.png') }}" class="ml-auto mr-auto">
    </div>
    <div class="titleName text-center" style="font-size: 35px;">
        sambat blog
    </div>
    @livewire('category')
    <div class="row position-absolute fixed-bottom justify-content-center">
        <input type="submit" name="newsletter" class="btn btn-dark rounded-lg" value="Subscribe">
        Developed by Achyut
    </div>
</div>
<div class="main text-center">
	<div class="display-4 my-3 Maintitle">
		All Posts
	</div>
	@livewire('post')
	@livewire('blog-post')
	</div>
</div>
@endsection
