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
                <a class="d-none d-sm-inline-block btn btn-primary btn-xs  shadow-sm btn-sm" href="{{ url('/a/dmin') }}"><i class="fas fa-backward"></i> Back</a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                
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
                        <!--new panel start here -->
                        <div class="w3-animate-opacity">
                          <div class="tab">
                            <button class="tablinks" onclick="openCity(event, 'contacts')">Contact Message:({{count($datacontact)}})</button>
                          </div>
                        <!-- All All post start here -->
                              <div id="contacts" class="tabcontent">
                               <!--  <table class="table table-bordered"> -->
                                <div class="table-responsive">
                                    <table id="dev-table0" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Names</th>
                                                <th>Email</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($datacontact as $key => $data)
                                            <tr>
                                                <td>{{ $key +1 }}</td>
                                                <td>{{ $data->names }}</td>
                                                <td>{{ $data->email }}</td>
                                                <td>{{ $data->subject }}</td>
                                                <td>{{ $data->message }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                </div>
                              </div>
                          <!-- All all post end here -->
                        </div>
                        <!--new panel end here --->
            </div>
        </div>
    </div>
                      <!-- tabs start here-->

          <style type="text/css">
            .tab {overflow: hidden; border: 1px solid #ccc;
            background-color: #f1f1f1;}

            .tabcontent {display: none; padding: 6px 12px; border: 1px solid #ccc;
                border-top: none;}

            .tab button {background-color: inherit; float: left; border: none;
                outline: none; cursor: pointer; padding: 14px 16px;
                transition: 0.3s;}

            .tab button:hover {background-color: #ddd;}

            .tab .active {background-color: #ccc;}

            .tabcontent {display: none; padding: 6px 12px;

            border: 1px solid #ccc; border-top: none;}

            table {font-family: arial, sans-serif; border-collapse: collapse;
                width: 100%;}

            td, th {border: 1px solid #dddddd; padding: 8px;
                text-align: center;}

            /*Change color to gray*/
            tr:nth-child(even) {
                background-color: #dddddd;}

            .actived a{color:green}
            .actived a:hover{ font-weight: bold}

            .deactivated a{color:red}
            .deactivated a:hover{ font-weight: bold}

            .available {color:green; }
            .disable{ color: red; font-weight: bold}
            .intraining{color: blue; font-weight: bold}
            .vacation{ font-weight: bold}
          </style>

          <script type="text/javascript">
            function openCity(evt, cityName) {
              var i, tabcontent, tablinks;
              tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
                  tabcontent[i].style.display = "none";}

              tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                  tablinks[i].className = tablinks[i].className.replace("active", "");}

            document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";}
          </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script> --}}
@endsection
