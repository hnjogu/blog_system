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
                Edit New Content
                
            </div>
                @forelse ($content_id as $content_id)
                    @empty       
                @endforelse
            @include('sweet::alert')
            @include('sweetalert::alert')
            <div class="card-body">
            	        <form id="form_validation" action=""{{ route('/upd/ates/tcont/ent',['content_id' => $content_id->content_id]) }}" method="POST" enctype="multipart/form-data">
                        {{-- <form method="POST" action=""> --}}
                        	{{-- // 'content_id','user_id','category_id','content_title','description','photo','status', --}}
                            {{ csrf_field() }}
                            <div class="row">
		                        <div class="form-group col-md-4">
		                            <label class="control-label">Content Title</label>
		                            <input name="content_title" class="form-control @error('content_title') is-invalid @enderror" type="text" placeholder="Enter Content Title" value="{{ $content_id->content_title}}">
		                            @error('content_title')
		                            <span class="invalid-feedback" role="alert">
		                                    <strong>{{ $message }}</strong>
		                                </span>
		                            @enderror
		                        </div>

		                        <div class="form-group col-md-4">
		                            <label class="control-label">Category</label>
				                    <select class="bootstrap-select form-control show-tick input-lg dynamic @error('category_name') is-invalid @enderror" value="{{ old('category_name') }}" name="category_name" data-dependent="sub_category" id="category_name" type="text">
		                                <option value="{{ $content_id->category_name}}">{{ $content_id->category_name}}</option>
		                                @foreach($categorydata as $data)
	                                        @if (old('category_name') == $data->category_name)
	                                              <option value="{{ $data->category_name }}" selected>{{$data->category_name }}</option>
	                                        @else
	                                              <option value="{{ $data->category_name }}">{{$data->category_name }}</option>
	                                        @endif
		                                @endforeach
		                            </select>
		                            @error('category_name')
		                            <span class="invalid-feedback" role="alert">
		                                    <strong>{{ $message }}</strong>
		                                </span>
		                            @enderror
		                        </div>

		                        <div class="form-group col-md-4">
		                            <label class="control-label">Sub Category</label>
				                    <select class="bootstrap-select form-control show-tick input-lg dynamic @error('sub_category') is-invalid @enderror" value="{{ old('sub_category') }}" data-dependent="slug" name="sub_category" id="sub_category" type="text">
				                    	<option value="{{ $content_id->sub_category}}">{{ $content_id->sub_category}}</option>
		                                @if(old("sub_category")!='')
                                            <option value=" {{ (old("sub_category"))}}" selected>{{ (old("sub_category")) }}</option>
                                        @endif
		                            </select>
		                            @error('sub_category')
		                            <span class="invalid-feedback" role="alert">
		                                    <strong>{{ $message }}</strong>
		                                </span>
		                            @enderror
		                        </div>

		                        <div class="form-group col-md-4">
		                            <label class="control-label">Slug</label>
		                            <select class="bootstrap-select form-control show-tick input-lg dynamic @error('slug') is-invalid @enderror" value="{{ old('slug') }}" name="slug" id="slug" type="text">
		                            	<option value="{{ $content_id->slug}}">{{ $content_id->slug}}</option>
		                                @if(old("slug")!='')
                                            <option value=" {{ (old("slug"))}}" selected>{{ (old("slug")) }}</option>
                                        @endif
		                            </select>
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
		                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">              {{ old('description') }} {{ $content_id->description}}
		                            </textarea>
		                            @error('description')
			                            <span class="invalid-feedback" role="alert">
			                                    <strong>{{ $message }}</strong>
			                            </span>
		                            @enderror
		                        </div>
	                            <div class="form-group col-md-4">
		                            <label class="control-label">Summary</label>
		                            <textarea class="ckeditor form-control @error('summary') is-invalid @enderror" name="summary" value="{{ old('summary') }}">{{ old('summary') }} {{ $content_id->summary}}</textarea>
		                        </div>
	                        </div>
	                        <div class="row">
	                            <div class="form-group col-md-8">
		                            <label class="control-label">Code Content (Optional)</label>
		                            <textarea class="form-control @error('code_content') is-invalid @enderror" id="code_content" name="code_content" value="{{ old('code_content') }}">
		                            	{{ old('code_content') }} {{ $content_id->code_content}}
		                            </textarea>
		                        </div>
	                        </div>
                            <br>
                            <div class="form-group col-md-4 align-self-end">
                            	<button class="btn btn-primary" name="publish" type="submit"><i class="fa fa-fw fa-lg fa-pen-square"></i>Publish</button>
                                <button class="btn btn-primary" name="draft" type="submit"><i class="fa fa-fw fa-lg fa-pen-square"></i>Draft</button>

                                {{-- <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button> --}}
                                <a class="d-none d-sm-inline-block btn btn-primary btn-xs  shadow-sm btn-sm" href="{{ url('/cont/ent/li/st') }}"><i class="fas fa-backward"></i> Exit</a>
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
        shiftEnterMode: CKEDITOR.ENTER_P,
        filebrowserUploadUrl: "",
        filebrowserUploadMethod: 'form'
    });
});
</script>
<script type="text/javascript">
    CKEDITOR.replace('description', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
<script type="text/javascript">
    CKEDITOR.replace('code_content', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>

    <script>
      $(document).ready(function(){
       $('.dynamic').change(function(){
        if($(this).val() != '')
        {
         var select = $(this).attr("id");
         var value = $(this).val();
         var dependent = $(this).data('dependent');
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('cat.fetch') }}",
          method:"get",
          data:{select:select, value:value, _token:_token, dependent:dependent},
          success:function(result)
          {
           $('#'+dependent).html(result);
          }
         })
        }
       });
       $('#category_name').change(function(){
        $('#sub_category').val('');
        $('#slug').val('');
       });
	       // $('#national_id').change(function(){
	       //  $('#phoneNo').val('');
	       // }); 
      });
    </script>
{{-- <script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script> --}}
@endsection
