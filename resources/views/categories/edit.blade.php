@extends('layouts.foradmin')
@section('title','Category')
@section('sectionTitle','Edit Category')
@section('content')
<form action="{{ route('categories.update', $category->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group row">
        <label for="categoryTitle" class="col-sm-2 col-form-label">Category Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="categoryTitle" placeholder="Category Title" name="title" value="{{ $category->title }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="categorySlug" class="col-sm-2 col-form-label">Category Slug</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="categorySlug" placeholder="Category Slug" name="slug" value="{{ $category->slug }}">
        </div>
    </div>

    <div class="form-group row">
        <div class="form-group col-md-4">
            <input type="submit" value="Edit Category" class="btn btn-dark">
        </div>
    </div>
</form>
@endsection
