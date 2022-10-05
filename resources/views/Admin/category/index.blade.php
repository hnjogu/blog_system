@extends('layouts.ccl')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
{{--     <link rel="stylesheet" href="{{ URL::asset('js/bootstrap/css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ URL::asset('js/datatable/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('js/datatable/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('js/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('js/toastr/toastr.min.css') }}">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Parcel</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">{{ config('app.name', 'Oceanic Logistics') }}</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <a class="d-none d-sm-inline-block btn btn-primary btn-xs  shadow-sm btn-sm" href="{{ url('/a/dmin') }}"><i class="fas fa-backward"></i> Back</a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
            {{--     <i class="fas fa-table me-1"></i> --}}
{{--                 <div class="col-12">
                    <div class="card">
                        <div class="card-header">Add new category</div>
                        <div class="card-body"> --}}
                            <form action="{{ route('/add/cat') }}" method="post" id="add-category-form" autocomplete="off">
                                @csrf
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="category_name" placeholder="Enter Category Name">
                                            <span class="text-danger error-text category_name_error"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="sub_category" placeholder="Enter Sub category">
                                            <span class="text-danger error-text sub_category_error"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="slug" placeholder="Enter Slug">
                                            <span class="text-danger error-text slug_error"></span>
                                        </div>
                                    </div><br>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <button type="submit" class="d-none d-sm-inline-block btn btn-primary btn-xs  shadow-sm btn-sm">Add New<i class="fas fa-plus"></i></button>
                                            {{-- <a class="d-none d-sm-inline-block btn btn-primary btn-xs  shadow-sm btn-sm" type="submit"><i class="fas fa-plus"></i> Add New</a> --}}
                                           {{--  <input type="submit" name="next" class="d-none d-sm-inline-block btn btn-primary btn-xs  shadow-sm btn-sm" value="+ Add New"> --}}
                                        </div>
                                    </div>
                                </div>
                            </form>
{{--                         </div>
                    </div>
                </div> --}}
               
                
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-condensed" id="category-table">
                        <thead>
                            <th><input type="checkbox" name="main_checkbox"><label></label></th>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Sub Category</th>
                            <th>Slug</th>
                            <th>Actions <button class="btn btn-sm btn-danger d-none" id="deleteAllBtn">Delete All</button></th>
                        </thead>
                        <tbody></tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>


 @include('Admin.category.edit')


        <script src="{{ URL::asset('js/jquery/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ URL::asset('js/datatable/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ URL::asset('js/datatable/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ URL::asset('js/sweetalert2/sweetalert2.min.js') }}"></script>
        <script src="{{ URL::asset('js/toastr/toastr.min.js') }}"></script>

    <script>

         toastr.options.preventDuplicates = true;

         $.ajaxSetup({
             headers:{
                 'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
             }
         });


         $(function(){

                //ADD NEW category
                $('#add-category-form').on('submit', function(e){
                    e.preventDefault();
                    var form = this;
                    $.ajax({
                        url:$(form).attr('action'),
                        method:$(form).attr('method'),
                        data:new FormData(form),
                        processData:false,
                        dataType:'json',
                        contentType:false,
                        beforeSend:function(){
                             $(form).find('span.error-text').text('');
                        },
                        success:function(data){
                             if(data.code == 0){
                                   $.each(data.error, function(prefix, val){
                                       $(form).find('span.'+prefix+'_error').text(val[0]);
                                   });
                             }else{
                                 $(form)[0].reset();
                                //  alert(data.msg);
                                $('#category-table').DataTable().ajax.reload(null, false);
                                toastr.success(data.msg);
                             }
                        }
                    });
                });

                //GET ALL COUNTRIES
               var table =  $('#category-table').DataTable({
                     processing:true,
                     info:true,
                      ajax:"{{ route('get.category.List') }}",
                     "pageLength":5,
                     "aLengthMenu":[[5,10,25,50,-1],[5,10,25,50,"All"]],
                     columns:[
                        //  {data:'id', name:'id'},
                         {data:'checkbox', name:'checkbox', orderable:false, searchable:false},
                         {data:'DT_RowIndex', name:'DT_RowIndex'},
                         {data:'category_name', name:'category_name'},
                         {data:'sub_category', name:'sub_category'},
                         {data:'slug', name:'slug'},
                         {data:'actions', name:'actions', orderable:false, searchable:false},
                     ]
                }).on('draw', function(){
                    $('input[name="category_checkbox"]').each(function(){this.checked = false;});
                    $('input[name="main_checkbox"]').prop('checked', false);
                    $('button#deleteAllBtn').addClass('d-none');
                });

                $(document).on('click','#editcategoryBtn', function(){
                    var category_id = $(this).data('id');
                    $('.editcategory').find('form')[0].reset();
                    $('.editcategory').find('span.error-text').text('');
                    $.post('<?= route("get.category.Details") ?>',{category_id:category_id}, function(data){
                        //  alert(data.details.category_name);
                        $('.editcategory').find('input[name="cid"]').val(data.details.id);
                        $('.editcategory').find('input[name="category_name"]').val(data.details.category_name);
                        $('.editcategory').find('input[name="sub_category"]').val(data.details.sub_category);
                        $('.editcategory').find('input[name="slug"]').val(data.details.slug);
                        $('.editcategory').modal('show');
                    },'json');
                });


                //UPDATE category DETAILS
                $('#update-category-form').on('submit', function(e){
                    e.preventDefault();
                    var form = this;
                    $.ajax({
                        url:$(form).attr('action'),
                        method:$(form).attr('method'),
                        data:new FormData(form),
                        processData:false,
                        dataType:'json',
                        contentType:false,
                        beforeSend: function(){
                             $(form).find('span.error-text').text('');
                        },
                        success: function(data){
                              if(data.code == 0){
                                  $.each(data.error, function(prefix, val){
                                      $(form).find('span.'+prefix+'_error').text(val[0]);
                                  });
                              }else{
                                  $('#category-table').DataTable().ajax.reload(null, false);
                                  $('.editcategory').modal('hide');
                                  $('.editcategory').find('form')[0].reset();
                                  toastr.success(data.msg);
                              }
                        }
                    });
                });

                //DELETE category RECORD
                $(document).on('click','#deletecategoryBtn', function(){
                    var category_id = $(this).data('id');
                    var url = '<?= route("delete.category") ?>';

                    swal.fire({
                         title:'Are you sure?',
                         html:'You want to <b>delete</b> this category',
                         showCancelButton:true,
                         showCloseButton:true,
                         cancelButtonText:'Cancel',
                         confirmButtonText:'Yes, Delete',
                         cancelButtonColor:'#d33',
                         confirmButtonColor:'#556ee6',
                         width:300,
                         allowOutsideClick:false
                    }).then(function(result){
                          if(result.value){
                              $.post(url,{category_id:category_id}, function(data){
                                   if(data.code == 1){
                                       $('#category-table').DataTable().ajax.reload(null, false);
                                       toastr.success(data.msg);
                                   }else{
                                       toastr.error(data.msg);
                                   }
                              },'json');
                          }
                    });

                });




           $(document).on('click','input[name="main_checkbox"]', function(){
                  if(this.checked){
                    $('input[name="category_checkbox"]').each(function(){
                        this.checked = true;
                    });
                  }else{
                     $('input[name="category_checkbox"]').each(function(){
                         this.checked = false;
                     });
                  }
                  toggledeleteAllBtn();
           });

           $(document).on('change','input[name="category_checkbox"]', function(){

               if( $('input[name="category_checkbox"]').length == $('input[name="category_checkbox"]:checked').length ){
                   $('input[name="main_checkbox"]').prop('checked', true);
               }else{
                   $('input[name="main_checkbox"]').prop('checked', false);
               }
               toggledeleteAllBtn();
           });


           function toggledeleteAllBtn(){
               if( $('input[name="category_checkbox"]:checked').length > 0 ){
                   $('button#deleteAllBtn').text('Delete ('+$('input[name="category_checkbox"]:checked').length+')').removeClass('d-none');
               }else{
                   $('button#deleteAllBtn').addClass('d-none');
               }
           }


           $(document).on('click','button#deleteAllBtn', function(){
               var checkedcategory = [];
               $('input[name="category_checkbox"]:checked').each(function(){
                   checkedcategory.push($(this).data('id'));
               });

               var url = '{{ route("delete.Selected.category") }}';
               if(checkedcategory.length > 0){
                   swal.fire({
                       title:'Are you sure?',
                       html:'You want to delete <b>('+checkedcategory.length+')</b> category',
                       showCancelButton:true,
                       showCloseButton:true,
                       confirmButtonText:'Yes, Delete',
                       cancelButtonText:'Cancel',
                       confirmButtonColor:'#556ee6',
                       cancelButtonColor:'#d33',
                       width:300,
                       allowOutsideClick:false
                   }).then(function(result){
                       if(result.value){
                           $.post(url,{category_ids:checkedcategory},function(data){
                              if(data.code == 1){
                                  $('#category-table').DataTable().ajax.reload(null, true);
                                  toastr.success(data.msg);
                              }
                           },'json');
                       }
                   })
               }
           });
        



         });

    </script> 
@endsection
