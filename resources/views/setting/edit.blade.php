@extends('layouts.foradmin')
@section('title','Setting')
@section('sectionTitle','Site Setting')
@section('content')
<div class="container">
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">
                        Setting
                    </th>
                    <th scope="col">
                        Value
                    </th>
                </tr>
            </thead>
            <tbody>
                <form action="{{ route('setting.update', $setting->id) }}" method="post">
                    @csrf
                    @method('PUT')
                <tr>
                    <th scope="row">
                        Title
                    </th>
                    <td>
                        <input type="text" class="form-control" name="titles" value="{{ $setting->titles }}" placeholder="Titles">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        E-mail
                    </th>
                    <td>
                        <input type="text" class="form-control" name="email" value="{{ $setting->email }}" placeholder="Email Address">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Address
                    </th>
                    <td>
                        <input type="text" class="form-control" name="address" value="{{ $setting->address }}" placeholder="Address">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Facebook Link
                    </th>
                    <td>
                        <input type="text" class="form-control" name="fbLink" value="{{ $setting->fbLink }}" placeholder="Facebook">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Instagram Link
                    </th>
                    <td>
                        <input type="text" class="form-control" name="instaLink" value="{{ $setting->instaLink }}" placeholder="Instagram">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Youtube Link
                    </th>
                    <td>
                        <input type="text" class="form-control" name="ytLink" value="{{ $setting->ytLink }}" placeholder="Youtube">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Contact Numbers
                    </th>
                    <td>
                        <input type="text" class="form-control" name="contact1" value="{{ $setting->contact1 }}" placeholder="Contact Number">
                        <br>
                        <input type="text" class="form-control" name="contact2" value="{{ $setting->contact2 }}" placeholder="Contact Number">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Bio
                    </th>
                    <td>
                        <textarea name="bio" id="postContent" row="10">
                            {{ $setting->bio }}
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center">
                        <input type="submit" name="submit" value="Edit" class="btn btn-dark">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
