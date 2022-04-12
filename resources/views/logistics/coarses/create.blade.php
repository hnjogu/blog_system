@extends('layouts.ccl')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Coarses</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">{{ config('app.name', 'Oceanic Logistics') }}</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <a class="d-none d-sm-inline-block btn btn-primary btn-xs  shadow-sm btn-sm" href="{{ url('/coa/rs/e') }}"><i class="fas fa-backward"></i> Back</a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Create New Coarses
                
            </div>
            <div class="card-body">
            	        <form id="form_validation" action="{{ route('/co/ar/ses/sto/re') }}" method="POST" enctype="multipart/form-data">
                        {{-- <form method="POST" action=""> --}}
                        	{{-- // 'coarse_id','category_name','user_id','coarses_title','coarse_link','status' --}}
                            {{ csrf_field() }}
                            <div class="row">
		                        <div class="form-group col-md-4">
		                            <label class="control-label">Coarses Title</label>
		                            <input name="coarses_title" class="form-control @error('coarses_title') is-invalid @enderror" value="{{ old('coarses_title') }}" type="text" placeholder="Enter Content Title">
		                            @error('coarses_title')
		                            <span class="invalid-feedback" role="alert">
		                                    <strong>{{ $message }}</strong>
		                                </span>
		                            @enderror
		                        </div>
		                        <div class="form-group col-md-4">
		                            <label class="control-label">Category</label>
				                    <select class="bootstrap-select form-control show-tick input-lg dynamic @error('category_name') is-invalid @enderror" value="{{ old('category_name') }}" name="category_name" data-dependent="kilometre" id="category_name" type="text">
		                                <option value="">-- Select Category --</option>
		                                @foreach($categorydata as $data)
		                                <option value="{{ $data->category_name}}">{{ $data->category_name }}</option>
		                                @endforeach
		                            </select>
		                            @error('category_name')
		                            <span class="invalid-feedback" role="alert">
		                                    <strong>{{ $message }}</strong>
		                                </span>
		                            @enderror
		                        </div>
	                        </div>
	                        <div class="row">
	                            <div class="form-group col-md-8">
		                            <label class="control-label">Coarse Link</label>
		                            <input name="coarse_link" class="form-control @error('coarse_link') is-invalid @enderror" value="{{ old('coarse_link') }}" type="text" placeholder="http://example.com">
		                            @error('coarse_link')
			                            <span class="invalid-feedback" role="alert">
			                                    <strong>{{ $message }}</strong>
			                            </span>
		                            @enderror
		                        </div>
	                        </div>
                            <br>

                            <div class="form-group col-md-4 align-self-end">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Create</button>
                            </div>
                        </form>
            </div>
        </div>
    </div>
       <!---Editor --->
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
@endsection
