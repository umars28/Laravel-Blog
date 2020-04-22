@extends('adminLayouts.admin')
@section('title')
    <title>Admin Homepage</title>
@endsection
@section('content')
    <section class="content-header">
        <h1>Contact Us</h1>
    </section>
    <section class="content">
        <div class="box">
            @if($message = Session::get('message'))
                <div class="alert alert-success">{{ $message }}</div>
            @endif
            <form method="post" action="{{ route('admin.contact.update', $contacts->id) }}">
                @csrf
                <input type="hidden" name="id" value="{{ $contacts->id }}">
                <div class="box-body margin-bottom">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="first_name">First name</label>
                                <input type="text" class="form-control" name="first_name" value="{{ $contacts->first_name }}" id="first_name" placeholder="Enter first name">
                            </div>
                            <div class="form-group">
                                 <label for="last_name">Last name</label>
                                 <input type="text" class="form-control" name="last_name" value="{{ $contacts->last_name }}" id="last_name" placeholder="Enter last name">
                            </div>
                            <div class="form-group">
                                <label for="contact_number">Contact number</label>
                                <input type="text" class="form-control" name="contact_number" value="{{ $contacts->contact_number }}" id="contact_number" placeholder="Enter contact number">
                            </div>
                            <div class="form-group">
                                <label for="facebook">Facebook</label>
                                <input type="text" class="form-control" name="facebook" value="{{ $contacts->facebook }}" id="facebook" placeholder="Enter facebook account">
                            </div>
                            <div class="form-group">
                                <label for="twitter">Twitter</label>
                                <input type="text" class="form-control" name="twitter" value="{{ $contacts->twitter }}" id="twitter" placeholder="Enter twitter account">
                            </div>
                            <div class="form-group">
                                <label for="github">Github</label>
                                <input type="text" class="form-control" name="github" value="{{ $contacts->github }}" id="github" placeholder="Enter github account">
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

