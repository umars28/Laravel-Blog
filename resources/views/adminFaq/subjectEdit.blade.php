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
            <form method="post" action="{{ route('admin.subject.update', $subjects->id) }}">
                @csrf
                <input type="hidden" name="id" value="{{ $subjects->id }}">
                <div class="box-body margin-bottom">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" name="subject" value="{{ $subjects->subject }}" id="subject" placeholder="Input subject">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" name="status" id="status" aria-describedby="status" placeholder="Select status">
                                    <option value="ACTIVE" {{ $subjects->status == 'ACTIVE' ? 'selected' : '' }}>Active</option>
                                    <option value="INACTIVE" {{ $subjects->status == 'INACTIVE' ? 'selected' : '' }}>Inactive</option>
                                </select>
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

