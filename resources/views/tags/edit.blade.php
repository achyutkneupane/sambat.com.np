@extends('layouts.foradmin')
@section('title','Category')
@section('sectionTitle','Edit Category')
@section('content')
<form action="{{ route('tags.update', $tags->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group row">
        <label for="tagTitle" class="col-sm-2 col-form-label">Tag Title</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="tagTitle" placeholder="Tag Title" name="title" value="{{ $tags->title }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="tagSlug" class="col-sm-2 col-form-label">Tag Slug</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="tagSlug" placeholder="Tag Slug" name="slug" value="{{ $tags->slug }}">
        </div>
    </div>

    <div class="form-group row">
        <div class="form-group col-md-4">
            <input type="submit" value="Add Tag" class="btn btn-dark">
        </div>
    </div>
</form>
@endsection
