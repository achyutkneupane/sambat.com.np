@extends('layouts.app', $setting)
@section('title', 'Home')
@section('content')
<div class="bgImage"></div>
    <div class="transImage"></div>
    <div class="container titleBox">
        <div class="nameBox">
            <h1 class="titleName fadeInRight">
                sambat
            </h1>
        </div>
        <h3 class="titleSub fadeInRight">
            <span class="titles">{{ $setting->titles }}</span>
            <strong class="typedText"></strong>
        </h3>
        <div class="row titleButtons fadeInRight">
            <div class="col-lg-4 titleBtn">
                <button
                    type="button"
                    class="btn btn-outline-dark"
                    data-toggle="modal"
                    data-target="#contactModal"
                >
                    Contact
                </button>
            </div>
            <div class="col-lg-4 titleBtn">
                <a href="bio" type="button" class="btn btn-outline-dark">
                    Bio
                </a>
            </div>
            <div class="col-lg-4 titleBtn">
                <a
                    href="{{ $setting->ytLink }}"
                    type="button"
                    class="btn btn-outline-dark"
                    target="_blank"
                >
                    Channel
                </a>
            </div>
            @auth
            <div class="col-lg-12 titleBtn mt-1">
                <a href="{{ route('home') }}" type="button" class="btn btn-outline-dark">
                    Admin Panel
                </a>
            </div>
            @endauth
        </div>
    </div>
    <div
        class="modal fade"
        id="contactModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="contactModalTitle"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="contactModalLongTitle">
                        <b>Contact Sambat</b>
                    </h4>
                    <button
                        type="button"
                        class="btn btn-outline-light"
                        data-dismiss="modal"
                        aria-label="Close"
                    >
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <a href="{{ route('homepage') }}"><b>Sambat Adhikari<b></a><br>
                    <b>{{ $setting->address }}</b><br />
                    <i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:{{ $setting->contact1 }}">{{ $setting->contact1 }}</a><br>
                    <i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:{{ $setting->contact2 }}">{{ $setting->contact2 }}</a><br>
                    <i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a><br>
                </div>
            </div>
        </div>
    </div>
@endsection
