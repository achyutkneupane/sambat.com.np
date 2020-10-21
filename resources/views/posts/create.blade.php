@extends('layouts.foradmin')
@section('title','Insert Post')
@section('sectionTitle','Insert New Post')
@section('content')
<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <label for="postTitle" class="col-sm-2 col-form-label">Post Title</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="title" id="postTitle" placeholder="Post Title">
        </div>
    </div>
    <div class="form-group row">
        <div class="form-group col-md-6">
          <label for="postSlug">Post Slug</label>
          <input type="text" class="form-control" name="slug" id="postSlug" placeholder="Post Slug">
        </div>
        <div class="form-group col-md-6">
            <label for="category">Category</label>
            <select name="category_id" class="form-control">
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->title }}</option>
            @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="postTags" class="col-sm-2 col-form-label">Post Tags</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="tag_id" id="postTags" placeholder="Post Tags">
        </div>
    </div>
    <div class="form-group row">
        <label for="featureUpload" class="col-sm-2 col-form-label">Feature Image</label>
        <div class="col-sm-10">
          <input type="file" class="form-control-file" name="featured_image" id="featureUpload">
        </div>
    </div>
    <div class="form-group row">
        <div class="form-group col-md-12">
            <label for="postContent">Post Content</label>
            <textarea name="post_content" id="postContent" row="10">
                {{ old('content') }}
            </textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="form-group col-md-4">
            <input type="submit" class="btn btn-dark">
        </div>
    </div>
</form>
@endsection
