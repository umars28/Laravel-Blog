@extends('layouts.wrapper')
@section('title')
    <title>Home</title>
@endsection
@section('content')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('image/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>{{ $homepage->title }}</h1>
                        <hr class="small">
                        <span class="subheading">{!! $homepage->description !!}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-9">
                <form action="{{ route('homepage.index') }}" class="form-inline">
                    <input type="text" name="cari" class="form-control" placeholder="Search Article ..." value="{{ old('cari') }}">
                    <input type="submit" value="CARI" class="btn btn-success btn-sm">
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @foreach($articles as $article)
                <div class="post-preview">
                    <a href="{{ route('article.detail', $article->id) }}">
                        <h2 class="post-title">
                            {{ $article->title }}
                        </h2>
                        <h3 class="post-subtitle">
                            {{ $article->sub_title }}
                        </h3>
                    </a>
                    <p class="post-meta">Posted on {{ date('d M yy', strtotime($article->created_at)) }}</p>
                </div>
                <hr>
                @endforeach
                <!-- Pager -->
                <ul class="pagination">
                    <li>
                        {{ $articles->links() }}
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>
@endsection
