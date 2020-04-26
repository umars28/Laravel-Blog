@extends('adminLayouts.admin')
@section('title')
    <title>Admin Homepage</title>
@endsection
@section('content')
    <section class="content-header">
        <h1> List Feedbacks</h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body table-responsive">
                @if($message = Session::get('message'))
                    <div class="alert alert-success">{{ $message }}</div>
                @endif
                <table class="table table-hover">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Category</th>
                        <th>Description</th>
                    </tr>
                    @foreach($feedbacks as $feedback)
                        <tr>
                            <td>{{ $loop->iteration  }}</td>
                            <td>{{ $feedback->first_name. ' ' .$feedback->last_name }}</td>
                            <td>{{ $feedback->email }}</td>
                            <td>{{ $feedback->phone_number }}</td>
                            <td>{{ $feedback->category->category }}</td>
                            <td>{{ $feedback->description }}</td>
                        </tr>
                    @endforeach
                </table>
                <div class="pagination">
                    <li>Jumlah Data : {{ $feedbacks->total() }}</li>
                    <li>{{ $feedbacks->links() }}</li>
                </div>
            </div>
        </div>
    </section>
@endsection

