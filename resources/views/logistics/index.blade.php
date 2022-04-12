@extends('layouts.ccl')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Manage Content</h1>
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
                <a class="d-none d-sm-inline-block btn btn-primary btn-xs  shadow-sm btn-sm" href="{{ url('/logi/stics/panel') }}"><i class="fas fa-blog"></i>Manage Content Panel</a>
                
            </div>
            <div class="card-body">
                
                    <hr>
                   
                        <a class="btn btn-dblue btn-sm" href="{{ url('/cont/ent/li/st') }}"> <i class="fab fa-blogger fa-3x"></i>
                            <div class="mt-2">Manage<br>Content</div>
                        </a>
                 
                        <a class="btn btn-dblue btn-sm" href="{{ url('/coa/rs/e') }}"><i class="fas fa-school  fa-3x"></i>
                            <div class="mt-2">Manage<br>Coarses</div>
                        </a>

                        <a class="btn btn-dblue btn-sm" href="{{ url('/coa/rs/e') }}"><i class="fas fa-circle fa-3x"></i>
                            <div class="mt-2">Manage<br>About US Content</div>
                        </a>


            </div>
        </div>
    </div>
@endsection