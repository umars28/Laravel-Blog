@extends('adminLayouts.admin')
@section('title')
    <title>Admin Homepage</title>
@endsection
@section('content')
    <section class="content-header">
        <h1>Edit Article</h1>
    </section>
    <section class="content">
        <div class="box">
            @if($message = Session::get('message'))
                <div class="alert alert-success">{{ $message }}</div>
            @endif
            <form method="post" action="{{ route('admin.articles.update', $articles->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $articles->id }}">
                <div class="box-body margin-bottom">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" value="{{ $articles->title }}" id="title" placeholder="Input title">
                            </div>
                            <div class="form-group">
                                <label for="sub_title">Sub Title</label>
                                <input type="text" class="form-control" name="sub_title" value="{{ $articles->sub_title }}" id="sub_title" placeholder="Input sub title">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" class="form-control js-summernote">{{ $articles->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control js-select" name="category" id="category" aria-describedby="category" placeholder="Select Category">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ $articles->category->id == $category->id ? 'selected' : '' }}>{{ $category->category }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <img src="{{ $articles->media ? asset('admin/image/' . $articles->media->file_name) : '' }}">
                            </div>
                            <div class="form-group">
                                <input type="file" name="image" class="form-control">
                                <br />
                                <span class="text-warning"><i>*Optional !</i></span>
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

