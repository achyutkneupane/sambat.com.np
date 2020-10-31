@extends('layouts.foradmin')
@section('title','Posts')
@section('sectionTitle','Trashed Posts')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2 ml-auto">
            <a href="{{ route('posts.create') }}" class="btn btn-outline-dark">
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
                    <th scope="col">Views</th>
                    <th scope="col">Restore</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>
            <tbody>
                @if (count($posts)>0)
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->views }}</td>
                        <td>
                        <a class="btn btn-dark" href="{{ route('posts.restore', $post->id) }}">Restore</a>
                        </td>
                        <td>
                            <a class="btn btn-dark" href="{{ route('posts.kill', $post->id) }}">Remove</a>
                        </td>
                    </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="5" class="text-center">No Posts</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
