@extends('adminLayouts.admin')
@section('title')
    <title>Admin Homepage</title>
@endsection
@section('content')
    <section class="content-header">
        <h1>Main Content</h1>
    </section>
    <section class="content">
        <div class="box">
            @if($message = Session::get('message'))
                <div class="alert alert-success">{{ $message }}</div>
            @endif
            <form method="post" action="{{ route('admin.about.update', $about->id) }}">
                @csrf
                <input type="hidden" name="id" value="{{ $about->id }}">
                <div class="box-body margin-bottom">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" value="{{ $about->title }}" id="title" placeholder="Enter title">
                            </div>
                            <div class="form-group">
                                <label for="sub">Sub Title</label>
                                <input type="text" class="form-control" name="sub_title" value="{{ $about->sub_title }}" id="sub" placeholder="Enter sub title">
                            </div>
                            <div class="form-group">
                                <label for="summer">Description</label>
                                <textarea id="summer" name="description" class="form-control js-summernote">{{ $about->description }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-success" name="submit">Update</button>
                </div>
            </form>
        </div>
    </section>
@endsection

