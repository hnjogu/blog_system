@extends('layouts.ccl')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <div class="container-fluid px-4">
        <h1 class="mt-4">Content</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">{{ config('app.name', 'Oceanic Logistics') }}</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <a class="d-none d-sm-inline-block btn btn-primary btn-xs  shadow-sm btn-sm" href="{{ url('/logi/stics/panel') }}"><i class="fas fa-backward"></i> Back</a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                <a class="d-none d-sm-inline-block btn btn-primary btn-xs  shadow-sm btn-sm" href="{{ url('/cont/ent/cr/ea/te') }}"><i class="fas fa-plus"></i> Add New</a>
                
            </div>
{{--             @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
            @endif --}}
{{--             @if(Session::has('flash_message'))
                <div class="alert alert-success">
                    {{ Session::get('flash_message') }}
                </div>
            @endif
            @if (Session::has('sweet_alert.alert'))
            <script>
              swal({!! Session::get('sweet_alert.alert') !!});
            </script>
            @endif --}}
            @include('sweet::alert')
            @include('sweetalert::alert')
            <div class="card-body">
                <div class="table-responsive">
                    <table id="dev-table" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Content Title</th>
                                <th>Content ID</th>
                                <th>Category ID</th>
                                <th>Status</th>
                                <th width="280px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($datacontect as $key => $data)
                            <tr>
                                <td>{{ $key +1 }}</td>
                                <td>{{ $data->content_title }}</td>
                                <td>CT{{ $data->content_id }}</td>
                                <td>{{ $data->category_name }}</td>
                                <td>
                                    @if($data->status == 'Available')
                                        <span class="badge bg-primary">Active</span>
                                    @endif
                                    @if($data->status == 'Not Available')
                                        <span class="badge bg-secondary">Pending</span>
                                    @endif
                                    @if($data->status == 'Review')
                                        <span class="badge bg-success">Review</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a class='btn btn-info btn-xs' href="{{ url('/edi/tcont/ent/'.$data->content_id)}}"><i class="fas fa-edit"></i> Edit</a>

                                    <a class='d-none d-sm-inline-block btn btn-warning btn-xs  shadow-sm btn-sm' href="{{ url('/web/tr/a/sh/'.$data->content_id)}}"><i class="fas fa-trash"></i> Delete</a> 
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script> --}}
@endsection
