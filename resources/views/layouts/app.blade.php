<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="_token" content="{{csrf_token()}}" />
    <meta name="keywords" content="server,programming,virtualization,server configuration,computer events,udemy courses,it courses">
    <meta name="keywords" content="laravel,php,html,reactjs,typecsript,react typescript, ERP, Web ERP, ERP System">
    <meta name="keywords" content="web develop, web design, database,mysql,postgresql,sql,linux administration,fedora,ubuntu,centos 7,centos 8,centos 9,centos stream,redhat,kali linux">
      <!-- Google adsense start here links -->
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6027569691193668"
     crossorigin="anonymous"></script>
     <!-- Google adsense end here links -->
     <!-- Global site tag (gtag.js) - Google Analytics start here -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-YLLY6HL213"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-YLLY6HL213');
      </script>
    <!-- Global site tag (gtag.js) - Google Analytics end here -->
    <!-- onesignal start here -->
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
      window.OneSignal = window.OneSignal || [];
      OneSignal.push(function() {
        OneSignal.init({
          appId: "fbeb71c8-42c9-4580-9d0f-24b76336d091",
        });
      });
    </script>
    <!-- onesignal end here -->
    <strong><meta name="hilltopads-site-verification" content="699dd38a4b7b47efe03d52923f9b7af1eaac002e" /></strong>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{ config('app.name', 'ItCourses') }}</title>
            <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!--------- favico---------->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/logo/favicon/favicon/android-chrome-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/logo/favicon/favicon/android-chrome-512x512.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/logo/favicon/favicon.ico') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/logo/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/logo/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/logo/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('img/logo/favicon/site.webmanifest') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/homestyle.css') }}" />
        <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/web.css') }}" rel="stylesheet">
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css"rel="stylesheet"/>
    <!-- bootstrap 5 cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"crossorigin="anonymous"/>
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>.

        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script> --}}

  </head>
  <body>
    <!-- Navbar -->
<header class="">
    <div class="container p-2">
        <div class="row">
            <div class="col-md">
                <div class="contact-section text-end">
                    <i class="fa-brands fa-fedora"></i> Fedora <span class="ms-4"></span>
                    <i class="fa-brands fa-centos"></i> Centos 7,8,9,stream<span class="ms-4"></span>
                    <i class="fa-brands fa-ubuntu"></i> Ubuntu <span class="ms-4"></span>
                    <i class="fa-brands fa-redhat"></i> Redhat <span class="ms-4"></i></span>
                    <i class="fa-brands fa-linux"></i> Kali <span class="ms-4"></i></span>
                    <i class="fa-brands fa-linux"></i> Parot <span class="ms-4"></i></span>
                    {{-- <i class="bi bi-envelope-fill"></i> info@codingcoarses.co.ke <span class="ms-4"><i class="bi bi-telephone-fill"></i> </span> --}}
                </div>
            </div>
        </div>
    </div>
</header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top" id="navbar_top">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img class="main-logo" src="{{ asset('img/logo/itcourse.png') }}" alt="..." height="36">{{-- {{ config('app.name', 'Laravel') }} --}}
      </a>
      {{-- <a class="navbar-brand" href="#"> <img src="{{ asset('images/logo/ebms-logo.png') }}" class="main-logo"> </a> --}}
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{  Request::is('/') ? 'active' : ''  }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{  Request::is('Server-security', 'Server-application-security', 'Server-Configuration') ? 'active' : ''  }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Server 
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item {{  Request::is('network-security') ? 'active' : ''  }}" href="{{ route('/al/l/b/lo/g') }}"> Server Configuration </a>
              </li>
              {{-- <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item {{  Request::is('application-security') ? 'active' : ''  }}" href="/application-security"> IT Firms </a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item {{  Request::is('penetration-testing') ? 'active' : ''  }}" href="/penetration-testing"> Law Firms </a></li> --}}
              {{-- <li class="nav-item">
                  <a href="{{ url('/') }}#learn" class="nav-link">Latest Courses</a>
              </li> --}}
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('/a/l/l/pro/mm/ing') }}" class="nav-link {{  Request::is('Programming') ? 'active' : ''  }}">Programming</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{  Request::is('Hosting-Domain', 'cloud-computing', 'cloud-infrastructure', 'cloud-services') ? 'active' : ''  }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Hosting 
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                  <a class="dropdown-item {{  Request::is('Hosting-Domain') ? 'active' : ''  }}" href="{{ route('/hos/t/ing') }}"> Hosting Configuration </a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item {{  Request::is('Hosting-Domain') ? 'active' : ''  }}" href="{{ route('/hos/t/wi/th') }}"> Host with Us </a></li> 
            </ul>
          </li>
          {{-- <li class="nav-item">
            <a href="{{ route('/co/ar/se/tab/ude') }}" class="nav-link {{  Request::is('Virtualization') ? 'active' : ''  }}">Courses</a>
          </li> --}}
          <li class="nav-item">
            <a href="{{ route('/a/l/l/vir/tu/al') }}" class="nav-link {{  Request::is('Virtualization') ? 'active' : ''  }}">Virtualization</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('/a/l/l/cy/ber/sec/ur/ity') }}" class="nav-link {{  Request::is('Cyber-Security') ? 'active' : ''  }}">Cyber Security</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('/a/l/l/lin/xa/dm/in') }}" class="nav-link {{  Request::is('Linux-Administration') ? 'active' : ''  }}">Linux Administration</a>
          </li>
        </ul>
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                          <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Access
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('login') }}"><i class="fas fa-arrow-right"></i>
                                    {{ __('Login') }}
                                </a>
                            </div>
                          </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Sign In</a>
                    </li> --}}
                @endif

                {{-- @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link btn btn-success ms-2" href="{{ route('register') }}">Create an account</a>
                    </li>
                @endif --}}
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
      </div>
    </div>
  </nav>
    <div id="wrap">
        <main class="py-5">
            @yield('content')
        </main>
    </div>


 <!-- Footer -->
        <!-- Bootstrap core JS-->
    <footer class="p-1 bg-dark text-white text-center fixed-bottom">
      <div class="container">
        <p class="lead">Copyright &copy;                
          <?php
              $today = date("Y");
              echo $today;
          ?> <title>{{ config('app.name', 'Laravel') }}</title>
          </p>
          <a class="btn btn-primary" href="https://www.patreon.com/ITCourses" role="button">
            Join Our Membership
          </a>
          

        <a href="#" class="position-absolute bottom-0 end-0 p-5">
          <i class="bi bi-arrow-up-circle h1"></i>
        </a>
      </div>
    </footer>

    <!-- Modal -->
    <div
      class="modal fade"
      id="enroll"
      tabindex="-1"
      aria-labelledby="enrollLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="enrollLabel">Support Form.</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <p class="lead">Fill out this form and we will get back to you</p>
            <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data" id="form">
              @csrf
              <div class="mb-3">
                <label for="first-name" class="col-form-label">
                  Full Names:
                </label>
                <input type="text" class="form-control" id="names" name="names" />
              </div>
              <div class="mb-3">
                <label for="email" class="col-form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" />
              </div>
              <div class="mb-3">
                <label for="last-name" class="col-form-label">Subject:</label>
                <input type="text" class="form-control" id="subject" name="subject" />
              </div>
              <div class="mb-3">
                <label for="text" class="col-form-label">Description of Your Question:</label>
                <textarea name="message" id="message" class="form-control" cols="30" rows="10" required> </textarea>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                  Close
                </button>
                <button  class="btn btn-success" id="ajaxSubmit">Submit</button>
                {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
