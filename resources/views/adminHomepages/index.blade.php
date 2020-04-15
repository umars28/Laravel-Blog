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
            <form method="post" action="" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="">
                <div class="box-body margin-bottom">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="email" class="form-control" id="title" placeholder="Enter title">
                            </div>
                            <div class="form-group">
                                <label for="desc">Description</label>
                                <input type="password" class="form-control" id="desc" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="img">Image</label>
                                <input type="file" id="img">
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
