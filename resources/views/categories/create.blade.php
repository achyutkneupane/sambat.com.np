@extends('layouts.foradmin')
@section('title','Insert Category')
@section('sectionTitle','Insert New Category')
@section('content')
<form action="{{ route('categories.store') }}" method="post">
    @csrf
    <div class="form-group row">
        <label for="categoryTitle" class="col-sm-2 col-form-label">Category Title</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="categoryTitle" placeholder="Category Title" name="title">
        </div>
    </div>
    <div class="form-group row">
        <label for="categorySlug" class="col-sm-2 col-form-label">Category Slug</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="categorySlug" placeholder="Category Slug" name="slug">
        </div>
    </div>

    <div class="form-group row">
        <div class="form-group col-md-4">
            <input type="submit" value="Add Category" class="btn btn-dark">
        </div>
    </div>
</form>
@endsection
