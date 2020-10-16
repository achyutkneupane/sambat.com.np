@extends('layouts.app')
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
            <span class="titles">Musician,Music Educator,Composer</span>
            <strong class="typedText"></strong>
        </h3>
        <div class="row titleButtons fadeInRight">
            <div class="col-lg-3 titleBtn">
                <button
                    type="button"
                    class="btn btn-outline-dark"
                    data-toggle="modal"
                    data-target="#contactModal"
                >
                    Contact
                </button>
            </div>
            <div class="col-lg-3 titleBtn">
                <a href="bio" type="button" class="btn btn-outline-dark">
                    Bio
                </a>
            </div>
            <div class="col-lg-3 titleBtn">
                <a href="blog" type="button" class="btn btn-outline-dark">
                    Blog
                </a>
            </div>
            <div class="col-lg-3 titleBtn">
                <a
                    href="https://www.youtube.com/channel/UCgUwxQUMKg9afeRpFtCKL0A"
                    type="button"
                    class="btn btn-outline-dark"
                    target="_blank"
                >
                    Channel
                </a>
            </div>
            @auth
            <div class="col-lg-12 titleBtn mt-1">
                <a href="{{ url('/home') }}" type="button" class="btn btn-outline-dark">
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
                        <b>Contact Sambat </b>
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
                    <a href="https://sambat.com.np"><b>Sambat Adhikari<b></a><br>
                        <b>Dharan, Nepal 56700</b><br />
                        <i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:977 9812354594">+977 9812354594</a><br>
                        <i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:9779842141959">+977 9842141959</a><br>
                        <i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:to.sambat@gmail.com">to.sambat@gmail.com</a><br>
                </div>
            </div>
        </div>
    </div>
    <div class="social-menu">
      <ul>
        <li class="fadeInUp">
          <a href="https://www.facebook.com/5AMBAT/" target="_blank"
            ><i class="fa fa-facebook"></i
          ></a>
        </li>
        <li class="fadeInUp">
          <a href="https://www.instagram.com/adhikarisambat/" target="_blank"
            ><i class="fa fa-instagram"></i
          ></a>
        </li>
        <li class="fadeInUp">
          <a href="mailto:to.sambat@gmail.com"
            ><i class="fa fa-envelope"></i
          ></a>
        </li>
      </ul>
    </div>
@endsection
