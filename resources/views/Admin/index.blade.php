@extends('layouts.ccl')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Parcel</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">{{ config('app.name', 'Oceanic Logistics') }}</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <a class="d-none d-sm-inline-block btn btn-primary btn-xs  shadow-sm btn-sm" href="{{ url('/home') }}"><i class="fas fa-backward"></i> Back</a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                <a class="d-none d-sm-inline-block btn btn-primary btn-xs  shadow-sm btn-sm" href="{{ url('/a/dmin') }}"><i class="fas fa-sync-alt"></i>Admin Panel</a>
                
            </div>
            <div class="card-body">
                
                    <hr>
                   
                        <a class="btn btn-dblue btn-sm" href=""> <i class="fas fa-user-plus fa-3x"></i>
                            <div class="mt-2">Manage<br>Users</div>
                        </a>
                 
                        <a class="btn btn-dblue btn-sm" href=""><i class="fas fa-universal-access  fa-3x"></i>
                            <div class="mt-2">Manage<br>Role</div>
                        </a>

                        <a class="btn btn-dblue btn-sm" href=""><i class="fas fa-universal-access  fa-3x"></i>
                            <div class="mt-2">Manage<br>Permissions</div>
                        </a>

                        <a class="btn btn-dblue btn-sm" href="{{ url('/cat/gory') }}"><i class="fas fa-info-circle fa-3x"></i>
                            <div class="mt-2">Manage<br>Category</div>
                        </a>

                        <a class="btn btn-dblue btn-sm" href="{{ url('/ch/ats/em/a/il') }}"><i class="fa-brands fa-rocketchat fa-3x"></i>
                            <div class="mt-2">Manage<br>Messages</div>
                        </a>


            </div>
        </div>
    </div>
@endsection
