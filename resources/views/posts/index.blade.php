@extends('layouts.foradmin')
@section('title','Posts')
@section('sectionTitle','View Posts')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2 ml-auto">
            <a href="{{ route('posts.create') }}" class="btn btn-outline-dark">
                + Add
            </a>
        </div>
    </div>
</div>
@endsection
