@extends('layouts.wrapper')
@section('title')
    <title>Home</title>
@endsection
@section('content')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('image/post-sample-image.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>FAQ</h1>
                        <hr class="small">
                        <span class="subheading">What are you looking for?</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @foreach($faqs as $faq)
                    <div class="post-preview">
                        <ul>
                            <li><b>{{ $faq->question }}</b></li>
                            <p>{{ $faq->answer }}</p>
                        </ul>
                    </div>
                    <hr>
            @endforeach
            </div>
        </div>
    </div>

    <hr>
@endsection
