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
                                Add Subject
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
                        <th>Subject</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach($subjects as $subject)
                        <tr>
                            <td>{{ $loop->iteration  }}</td>
                            <td>{{ $subject->subject }}</td>
                            <td>{{ $subject->status }}</td>
                            <td><a href="{{ route('admin.subject.edit', $subject->id) }}" class="btn btn-warning fa fa-edit"></a></td>
                        </tr>
                    @endforeach
                </table>
                <div class="pagination">
                    <li>Jumlah Data : {{ $subjects->total() }}</li>
                    <li>{{ $subjects->links() }}</li>
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
                <form action="{{ route('admin.subject.save') }}" method="post" name="form-subject">
                    @csrf
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Input subject">
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


