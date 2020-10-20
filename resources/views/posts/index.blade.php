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
    <div class="row mt-1">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">S.No.</th>
                    <th scope="col">Title</th>
                    <th scope="col">Views</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $cat->id }}</th>
                        <td>{{ $cat->title }}</td>
                        <td>{{ $cat->views }}</td>
                        <td>
                            <a href="">Edit</a><br>
                            <a href="">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
