@extends('layouts.foradmin')
@section('title','Insert Post')
@section('sectionTitle','Insert New Post')
@section('content')
<form action="" method="post">
    <div class="form-group row">
        <label for="postTitle" class="col-sm-2 col-form-label">Post Title</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="postTitle" placeholder="Post Title">
        </div>
    </div>
    <div class="form-group row">
        <div class="form-group col-md-6">
          <label for="postSlug">Post Slug</label>
          <input type="text" class="form-control" id="postSlug" placeholder="Post Slug">
        </div>
        <div class="form-group col-md-6">
          <label for="category">Category</label>
          <input type="text" class="form-control" id="category" placeholder="Category">
        </div>
    </div>
    <div class="form-group row">
        <label for="postTags" class="col-sm-2 col-form-label">Post Tags</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="postTags" placeholder="Post Tags">
        </div>
    </div>
    <div class="form-group row">
        <label for="featureUpload" class="col-sm-2 col-form-label">Feature Image</label>
        <div class="col-sm-10">
          <input type="file" accept=".jpeg,.jpg" class="form-control-file" id="featureUpload" placeholder="Upload Featured Image">
        </div>
    </div>
    <div class="form-group row">
        <div class="form-group col-md-12">
            <label for="postContent">Post Content</label>
            <textarea name="content" id="postContent" row="10">
                {{ old('content') }}
            </textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="form-group col-md-4">
            <input type="submit" name="submit" class="btn btn-dark">
        </div>
    </div>
</form>
@endsection
