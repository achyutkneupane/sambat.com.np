@extends('layouts.blogHead')
@section('title','Home')
@section('content')
<!-- <div class="sharethis-inline-share-buttons"></div> -->
	<div class="main text-center">
		<div class="display-4 my-3 Maintitle">
			All Posts
		</div>
		<div class="blogSection">
			<div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
				<span class="sr-only">Loading...</span>
			</div>
		</div>
	</div>
@endsection
