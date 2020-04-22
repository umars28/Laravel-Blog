@extends('adminLayouts.admin')
@section('title')
    <title>Admin Homepage</title>
@endsection
@section('content')
    <section class="content-header">
        <h1> List Faq</h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <div class="row">
                    <div class="col-6">
                        <div class="col-md-3">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Add Faq
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
                        <th>Question</th>
                        <th>Answer</th>
                        <th>Subject</th>
                        <th>Action</th>
                    </tr>
                    @foreach($faqs as $faq)
                        <tr>
                            <td>{{ $loop->iteration  }}</td>
                            <td>{{ $faq->question }}</td>
                            <td>{{ $faq->answer }}</td>
                            <td>{{ $faq->subject->subject }}</td>
                            <td><a href="{{ route('admin.faq.edit', $faq->id) }}" class="btn btn-warning fa fa-edit"></a></td>
                        </tr>
                    @endforeach
                </table>
                <div class="pagination">
                    <li>Jumlah Data : {{ $faqs->total() }}</li>
                    <li>{{ $faqs->links() }}</li>
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
                <form action="{{ route('admin.faq.save') }}" method="post" name="form-faq">
                    @csrf
                    <div class="form-group">
                        <label for="question">Question</label>
                        <textarea id="question" name="question" class="form-control js-summernote">{{ 'Question' }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="answer">Answer</label>
                        <textarea id="answer" name="answer" class="form-control js-summernote">{{ 'Answer' }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <select class="form-control js-select" name="subject" id="subject"  placeholder="Select Subject">
                            @foreach($subjects as $subject)
                                <option value="{{ $subject->id }}">{{ $subject->subject }}</option>
                            @endforeach
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



