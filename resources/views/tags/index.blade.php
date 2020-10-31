@extends('layouts.foradmin')
@section('title','Tags')
@section('sectionTitle','View Tags')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2 ml-auto">
            <a href="{{ route('tags.create') }}" class="btn btn-outline-dark">
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
                @if(count($tags) > 0)
                @foreach ($tags as $tag)
                    <tr>
                        <th scope="row">{{ $tag->id }}</th>
                        <td>{{ $tag->title }}</td>
                        <td>{{ $tag->slug }}</td>
                        <td>{{ $tag->posts->count() }}</td>
                        <td><a href="{{ route('tags.edit', $tag->id) }}">Edit</a></td>
                    </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="5" class="text-center">No Tags</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
