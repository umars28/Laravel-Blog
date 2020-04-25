@extends('layouts.wrapper')
@section('title')
    <title>About Me</title>
@endsection
@section('content')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('image/about-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>{{ $about->title }}</h1>
                        <hr class="small">
                        <span class="subheading">{{ $about->sub_title }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>{{ $about->description }}</p>
            </div>
        </div>
    </div>

    <hr>
@endsection
