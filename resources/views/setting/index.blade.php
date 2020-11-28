@extends('layouts.foradmin')
@section('title','Setting')
@section('sectionTitle','Site Setting')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2 ml-auto">
            <a href="{{ route('setting.edit', $setting->id) }}" class="btn btn-outline-dark">
                + Edit
            </a>
        </div>
    </div>
    <div class="row mt-1">
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
                <tr>
                    <th scope="row">
                        Title
                    </th>
                    <td>
                        {{ $setting->titles }}
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        E-mail
                    </th>
                    <td>
                        {{ $setting->email }}
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Address
                    </th>
                    <td>
                        {{ $setting->address }}
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Facebook Link
                    </th>
                    <td>
                        <a href="{{ $setting->fbLink }}">
                            {{ $setting->fbLink }}
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Instagram Link
                    </th>
                    <td>
                        <a href="{{ $setting->instaLink }}">
                            {{ $setting->instaLink }}
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Youtube Link
                    </th>
                    <td>
                        <a href="{{ $setting->ytLink }}">
                            {{ $setting->ytLink }}
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Contact Numbers
                    </th>
                    <td>
                        {{ $setting->contact1 }}
                        <br>
                        {{ $setting->contact2 }}
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Bio
                    </th>
                    <td>
                        {!! $setting->bio !!}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
