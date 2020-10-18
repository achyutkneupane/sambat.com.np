@extends('layouts.foradmin')
@section('title','Categories')
@section('sectionTitle','View Categories')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2 ml-auto">
            <a href="{{ route('categories.create') }}" class="btn btn-outline-dark">
                + Add
            </a>
        </div>
    </div>
</div>
@endsection
