@extends('adminLayouts.admin')
@section('title')
    <title>Admin Homepage</title>
@endsection
@section('content')
    <section class="content-header">
        <h1>Edit Faq</h1>
    </section>
    <section class="content">
        <div class="box">
            @if($message = Session::get('message'))
                <div class="alert alert-success">{{ $message }}</div>
            @endif
            <form method="post" action="{{ route('admin.faq.update', $faq->id) }}">
                @csrf
                <input type="hidden" name="id" value="{{ $faq->id }}">
                <div class="box-body margin-bottom">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="question">Question</label>
                                <textarea id="question" name="question" class="form-control js-summernote">{{ $faq->question }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="answer">Answer</label>
                                <textarea id="answer" name="answer" class="form-control js-summernote">{{ $faq->answer }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <select class="form-control js-select" name="subject" id="subject"  placeholder="Select Subject">
                                    @foreach($subjects as $subject)
                                        <option value="{{ $subject->id }}" {{ $faq->subject->id == $subject->id ? 'selected' : '' }}>{{ $subject->subject }}</option>
                                    @endforeach
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

