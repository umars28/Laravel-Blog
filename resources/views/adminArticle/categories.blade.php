@extends('adminLayouts.admin')
@section('title')
    <title>Admin Homepage</title>
@endsection
@section('content')
    <section class="content-header">
        <h1> Category</h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Add Category
                </button>
            </div>
            <div class="box-body table-responsive">
            @if($message = Session::get('message'))
                <div class="alert alert-success">{{ $message }}</div>
            @endif
           <table class="table table-hover">
                <tr>
                    <th>No</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
               @foreach($categories as $categori)
               <tr>
                   <td>{{ $loop->iteration  }}</td>
                   <td>{{ $categori->category }}</td>
                   <td>{{ $categori->status }}</td>
                   <td><a href="{{ route('admin.categories.edit', $categori->id) }}" class="btn btn-warning fa fa-edit"></a></td>
               </tr>
               @endforeach
           </table>
            <div class="pagination">
                <li>{{ $categories->links() }}</li>
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
                <form action="{{ route('admin.categories.save') }}" method="post">
                @csrf
                    <div class="form-group">
                        <label for="cat">Category</label>
                        <input type="text" class="form-control" name="category" id="cat" placeholder="Input category">
                        <p class="text-danger">{{ $errors->first('category') }}</p>
                    </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" name="status" id="status" aria-describedby="status" placeholder="Select status">
                       <option value="ACTIVE">Active</option>
                        <option value="INACTIVE">Inactive</option>
                    </select>
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


