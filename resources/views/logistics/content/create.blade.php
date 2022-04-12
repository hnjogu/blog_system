@extends('layouts.ccl')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Content</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">{{ config('app.name', 'Oceanic Logistics') }}</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <a class="d-none d-sm-inline-block btn btn-primary btn-xs  shadow-sm btn-sm" href="{{ url('/cont/ent/li/st') }}"><i class="fas fa-backward"></i> Back</a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Create New Content
                
            </div>
            <div class="card-body">
            	        <form id="form_validation" action="{{ route('/cont/ent/sto/re') }}" method="POST" enctype="multipart/form-data">
                        {{-- <form method="POST" action=""> --}}
                        	{{-- // 'content_id','user_id','category_id','content_title','description','photo','status', --}}
                            {{ csrf_field() }}
                            <div class="row">
		                        <div class="form-group col-md-4">
		                            <label class="control-label">Content Title</label>
		                            <input name="content_title" class="form-control @error('content_title') is-invalid @enderror" value="{{ old('content_title') }}" type="text" placeholder="Enter Content Title">
		                            @error('content_title')
		                            <span class="invalid-feedback" role="alert">
		                                    <strong>{{ $message }}</strong>
		                                </span>
		                            @enderror
		                        </div>
		                        <div class="form-group col-md-4">
		                            <label class="control-label">Category</label>
				                    <select class="bootstrap-select form-control show-tick input-lg dynamic @error('category_id') is-invalid @enderror" value="{{ old('category_name') }}" name="category_name" data-dependent="kilometre" id="category_name" type="text">
		                                <option value="">-- Select Category --</option>
		                                @foreach($categorydata as $data)
		                                <option value="{{ $data->category_name}}">{{ $data->category_name }}</option>
		                                @endforeach
		                            </select>
		                            @error('category_id')
		                            <span class="invalid-feedback" role="alert">
		                                    <strong>{{ $message }}</strong>
		                                </span>
		                            @enderror
		                        </div>
		                        <div class="form-group col-md-4">
		                            <label class="control-label">Slug</label>
		                            <input name="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug') }}" type="text" placeholder="Enter Slug">
		                            @error('slug')
		                            <span class="invalid-feedback" role="alert">
		                                    <strong>{{ $message }}</strong>
		                                </span>
		                            @enderror
		                        </div>
	                        </div>
	                        <div class="row">
	                            <div class="form-group col-md-8">
		                            <label class="control-label">Description</label>
		                            <textarea class="ckeditor form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}"></textarea>
		                            @error('description')
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
$(function() {
    $('#ckeditor').ckeditor({
        toolbar: 'Full',
        enterMode : CKEDITOR.ENTER_BR,
        shiftEnterMode: CKEDITOR.ENTER_P
    });
});
</script>
{{-- <script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
 --}}@endsection

