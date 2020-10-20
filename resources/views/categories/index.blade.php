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
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $cat)
                    <tr>
                        <th scope="row">{{ $cat->id }}</th>
                        <td>{{ $cat->title }}</td>
                        <td>{{ $cat->slug }}</td>
                        <td>0</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
