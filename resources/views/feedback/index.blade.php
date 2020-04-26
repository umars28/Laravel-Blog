@extends('layouts.wrapper')
@section('title')
    <title>Contact Us</title>
@endsection
@section('content')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('image/contact-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Contact Me</h1>
                        <hr class="small">
                        <span class="subheading">Have questions? I have answers (maybe).</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Want to get in touch with me? Fill out the form below to send me a message and I will try to get back to you within 24 hours!</p>
                @if($message = Session::get('message'))
                    <div class="alert alert-success">{{ $message }}</div>
                @endif
                <form action="{{ route('feedback.save') }}" method="post" name="sentMessage" novalidate>
                    @csrf
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" placeholder="First Name" id="first_name" required data-validation-required-message="Please enter your first name.">
                            <p class="help-block text-danger">{{ $errors->first('first_name') }}</p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" id="last_name" required data-validation-required-message="Please enter your last name.">
                            <p class="help-block text-danger">{{ $errors->first('last_name') }}</p>
                        </div>
                    </div><br>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label for="category">Category</label> <br>
                            <select class="form-control" name="category" id="category" placeholder="Select Category">>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category }}</option>
                                @endforeach
                            </select>
                            <p class="text-danger">{{ $errors->first('category') }}</p>
                        </div>
                    </div><hr>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger">{{ $errors->first('email') }}</p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="phone">Phone Number</label>
                            <input type="tel" class="form-control" name="phone_number" value="{{ old('phone_number') }}" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger">{{ $errors->first('phone_number') }}</p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="message">Message</label>
                            <textarea rows="5" class="form-control" name="message"  placeholder="Message" id="message" required data-validation-required-message="Please enter a message.">{{ old('message') }}</textarea>
                            <p class="help-block text-danger">{{ $errors->first('message') }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_SITEKEY') }}"></div>
                            <p class="text-danger">{{ $errors->first('g-recaptcha-response') }}</p>
                        </div>
                    </div>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>
@endsection
