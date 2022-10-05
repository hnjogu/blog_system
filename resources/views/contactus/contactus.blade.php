@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
{!! RecaptchaV3::initJs() !!}
<meta name="csrf-token" content="{{ csrf_token() }}">    
<!------ Include the above in your HEAD tag ---------->

    <div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            @include('sweetalert::alert')
        <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-white">Drop Us a Message</h3>
                    </div>
            <div class="card-body">
	            <form name="g-v3-recaptcha-contact-us" id="g-v3-recaptcha-contact-us" action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
	              @csrf
	               <div class="row">
	                    <div class="col-md-6">
	                        <div class="form-group">
	                        	<label class="control-label">Full Name:</label>
	                            <input type="text" name="names" class="form-control @error('names') is-invalid @enderror" placeholder="Your Name *" value="{{ old('names') }}" />
	                                @error('names')
			                            <span class="invalid-feedback" role="alert">
			                                <strong>{{ $message }}</strong>
			                            </span>
			                        @enderror
	                        </div>
	                        <div class="form-group">
	                        	<label class="control-label">Email:</label>
	                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Your Email *" value="{{ old('email') }}" />
	                            	@error('email')
			                            <span class="invalid-feedback" role="alert">
			                                <strong>{{ $message }}</strong>
			                            </span>
			                        @enderror
	                        </div>
	                        <div class="form-group">
	                        	<label class="control-label">Subject:</label>
	                            <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror" placeholder="Your Subject *" value="{{ old('subject') }}" />
	                            @error('subject')
			                        <span class="invalid-feedback" role="alert">
			                             <strong>{{ $message }}</strong>
			                        </span>
			                    @enderror
	                        </div>
	                    </div>
	                    <div class="col-md-6">
	                        <div class="form-group">
	                        	<label class="control-label">Description of Your Question:</label>
	                            <textarea name="message" class="form-control @error('message') is-invalid @enderror" placeholder="Description of Your Question *" style="width: 100%; height: 150px;">
	                            	{{ old('message') }}
	                            </textarea>
	                            @error('message')
			                        <span class="invalid-feedback" role="alert">
			                            <strong>{{ $message }}</strong>
			                        </span>
			                    @enderror
			                    
			                    {{-- @if ($errors->has('token'))
	                                <span class="text-danger">{{ $errors->first('token') }}</span>
	                            @endif --}}
	                        </div>
							<div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                <div class="col-md-6">
                                    {!! RecaptchaV3::field('contactus') !!}
                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
	                        {{-- <div class="form-group">
								{!! RecaptchaV3::initJs() !!}
								{!! RecaptchaV3::field('contact-us') !!}
								@error('g-recaptcha-response')
								    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
								@enderror
							</div> --}}
	                        <div class="form-group">
	                        	{{-- <button class="btn btn-success btn-submit">Submit</button> --}}
	                            <input type="submit" class="btn btn-success" value="Send" />
	                        </div>
	                    </div>
	                </div>
	            </form>
	        </div>
	    </div>

     <hr>
	</div>

<style type="text/css">

	.contact-image{
	    text-align: center;
	}
	.contact-image img{
	    border-radius: 6rem;
	    width: 11%;
	    margin-top: -3%;
	    transform: rotate(29deg);
	}

</style>
@endsection
