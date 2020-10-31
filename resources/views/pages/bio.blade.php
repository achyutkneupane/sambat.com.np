@extends('layouts.app')
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
          <b>Sambat</b> is a musician, composer and music educator based out of
          Nepal. His foray into music started very early, inspired and taught by
          his father to play a range of different instruments and write songs.
          He explores the idea of human condition, personal inward journeys and
          spirituality through a range of lyrical and musical expressions.
          Having played wide range of styles from rock, metal, jazz, fusion,
          funk, latin and folk, he has found his sound in the experimental idiom
          while continuing to explore and work with many genres and instruments.
          He has appeared in prestigious music festivals, most notably Giants of
          Jazz, Delhi(2017 &amp; 2018), International Jazz Day @TPMJC 2018.<br />
          Sambat graduated from Global Music Institute in 2018, affiliated to
          the prestigious Berklee College of Music. He has since founded
          <b>Dharan School of Contemporary Music</b> with the goal of helping
          out people expand their musical consciousness. His educational content
          on
          <a
            href="https://www.youtube.com/sambatshree"
            target="_blank"
            ><b>YouTube</b></a
          >
          explores what music means, and what it means to be a musician.
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
