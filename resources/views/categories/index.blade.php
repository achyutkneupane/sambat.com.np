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
    <div class="row mt-1">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">S.No.</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Count</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if(count($categories) > 0)
                @foreach ($categories as $cat)
                    <tr>
                        <th scope="row">{{ $cat->id }}</th>
                        <td>{{ $cat->title }}</td>
                        <td>{{ $cat->slug }}</td>
                        <td>{{ $cat->posts->count() }}</td>
                        <td><a href="{{ route('categories.edit', $cat->id) }}">Edit</a></td>
                    </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="5" class="text-center">No Categories</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
