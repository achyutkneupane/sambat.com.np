@extends('layouts.app', $setting)
@section('title', 'BIO')
@section('content')
<div class="bgImage"></div>
    <div class="transImage"></div>
    <div class="bioBox">
      <div class="bioRow">
        <div class="bioHead">
          <div class="bioBackBtn">
            <a href="/"
              ><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i
            ></a>
          </div>
          <div class="bioAbout">About sambat</div>
        </div>
        <div class="bioBg">
          <div class="bioImage"></div>
        </div>
        <div class="bioText">
          {!! $setting->bio !!}
        </div>
      </div>
    </div>
<style>
    @media screen and (max-width: 700px) {
      .bgImage {
        display: none;
      }
    }
</style>
@endsection
