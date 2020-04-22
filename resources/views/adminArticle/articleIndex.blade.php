@extends('adminLayouts.admin')
@section('title')
    <title>Admin Homepage</title>
@endsection
@section('content')
    <section class="content-header">
        <h1> List Article</h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <div class="row">
                    <div class="col-6">
                        <div class="col-md-3">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Add Article
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body table-responsive">
                @if($message = Session::get('message'))
                    <div class="alert alert-success">{{ $message }}</div>
                @endif
                <table class="table table-hover">
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Sub Title</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{ $loop->iteration  }}</td>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->sub_title }}</td>
                            <td>{{ $article->category->category }}</td>
                            <td><a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-warning fa fa-edit"></a></td>
                        </tr>
                    @endforeach
                </table>
                <div class="pagination">
                    <li>Jumlah Data : {{ $articles->total() }}</li>
                    <li>{{ $articles->links() }}</li>
                </div>
            </div>
        </div>
    </section>
@endsection
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Add Category</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.articles.save') }}" method="post" name="form-article" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Input title">
                    </div>
                    <div class="form-group">
                        <label for="sub_title">Sub Title</label>
                        <input type="text" class="form-control" name="sub_title" id="sub_title" placeholder="Input sub title">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" class="form-control js-summernote">{{ 'Add Description' }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                       <select class="form-control js-select" name="category" id="category" aria-describedby="category" placeholder="Select Category">
                           @foreach($categories as $category)
                           <option value="{{ $category->id }}">{{ $category->category }}</option>
                           @endforeach
                       </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <img src="">
                    </div>
                    <div class="form-group">
                        <input type="file" name="image" class="form-control">
                        <br />
                        <span class="text-warning"><i>*Optional !</i></span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


