@extends('layouts.wrapper')
@section('title')
    <title>Article Detail</title>
@endsection
@section('content')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('image/post-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>{{ $article->title }}</h1>
                        <h2 class="subheading">{{ $article->sub_title }}</h2>
                        <span class="meta">Posted on {{ date('d M yy', strtotime($article->created_at)) }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p>{!! $article->description !!}</p>
                </div>
            </div>
        </div>
    </article>

    <hr>
@endsection
