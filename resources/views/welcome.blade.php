@extends('layouts.app')

@section('content')

    <!-- Showcase -->
    <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start" style="background-image: url('{{ asset('img/it.gif')}}');">
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
          <div>
            <h1>Become a <span class="text-warning"> Web Developer ,Software Developer,Linux Administrator,System Administrator</span></h1>
            <p class="lead my-4">
              We focus on teaching our students the fundamentals of the latest
              and greatest technologies to prepare them for their first Tech role,keep checking on latest Post and Courses
            </p>
            <a class='btn btn-info btn-sm' href="{{ url('/su/p/p/o/r/t')}}">
                Request for Support Here
           </a>
            {{-- <button
              class="btn btn-primary btn-lg"
              data-bs-toggle="modal"
              data-bs-target="#enroll"
            >
                Request for Support Here.
            </button> --}}
          </div>
        </div>
      </div>
    </section>

    <!-- Ezoic - top_of_page - top_of_page -->
    <div id="ezoic-pub-ad-placeholder-106">
          <!-- adsterra- start here -->
                @include('web.masterads.adsterra')
          <!-- adsterra - end here -->
    </div>
    <!-- End Ezoic - top_of_page - top_of_page -->
    <!-- Newsletter -->
    <div class="section-block-light">
      <div class="container">
         <div class="row g-12 mt-12">
            <div class="col-lg-12">
                <div class="card border-0 shadow-lg">
                    <div class="card-body"> <i class="fa fa-check-circle text-success"></i>
                      ITCourses provide a collection of tutorials about PHP, Laravel Framework, Django Framework, Mysql Database,Sql ,Database,Postgresql,Reactjs,React Typescript, Bootstrap Front-end Framework, Jquery, Node JS, Ajax Example, APIs, CURL Example, Composer Packages Example, AngularJS etc. You will find the Best Blogs about tech,Linux Administration,Server Configuration and tutorials about coding.
                     </div>
                </div>
            </div>
          </div>
      </div>
    </div>

<div class="section-block-grey">
    <div class="container">
        <div class="section-heading center-holder">
            <h3>Our Tutorials</h3>
            {{--<div class="section-heading-line"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                <br>incididunt ut labore et dolore magna aliqua.</p>--}}
        </div>
        <div class="row mt-60">
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2">
                    <div class="serv-section-2-icon"> <i class="fa-solid fa-code"></i> </div>
                    <div class="serv-section-desc">
                        <h4>Crud</h4>
                        <h5>Tutorials</h5> </div>
                    <div class="section-heading-line-left"></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2 serv-section-2-act">
                    <div class="serv-section-2-icon serv-section-2-icon-act"> <i class="fa-brands fa-laravel"></i> </div>
                    <div class="serv-section-desc">
                        <h4>Laravel</h4>
                        <h5>Tutorials</h5> </div>
                    <div class="section-heading-line-left"></div>
                   
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2">
                    <div class="serv-section-2-icon"><i class="fa-solid fa-desktop"></i> </div>
                    <div class="serv-section-desc">
                        <h4>Virtualization</h4>
                        <h5>Use Vmware,Virtual Box, Microsoft Azure</h5> </div>
                    <div class="section-heading-line-left"></div>
                    
                </div>
            </div>
        </div>
        <div class="row mt-60">
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2">
                    <div class="serv-section-2-icon"> <i class="fa-solid fa-shield"></i></div>
                    <div class="serv-section-desc">
                        <h4>Cyber Security </h4>
                        <h5>Tutorial</h5> </div>
                    <div class="section-heading-line-left"></div>
                    
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2 serv-section-2-act">
                    <div class="serv-section-2-icon serv-section-2-icon-act"> <i class="fa-solid fa-computer"></i> </div>
                    <div class="serv-section-desc">
                        <h4>Server Configuration </h4>
                        <h5>This Widely covers linux servers and little of windows severs </h5> </div>
                    <div class="section-heading-line-left"></div>
                   
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2">
                    <div class="serv-section-2-icon"> <i class="fa-brands fa-linux"></i> </div>
                    <div class="serv-section-desc">
                        <h4>Linux Administration</h4>
                        <h5>This covers Database Management and linux administration and Others</h5> </div>
                    <div class="section-heading-line-left"></div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Boxes -->
{{--     <section class="p-5">
      <div class="container">
        <div class="row text-center g-4">
          <div class="col-md">
            <div class="card bg-dark text-light">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-laptop"></i>
                </div>
                <h3 class="card-title mb-3">Virtualization</h3>
                <p class="card-text">
                  Use VMWARE,Virtual Box, Microsoft AZURE
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card bg-secondary text-light">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-server"></i>
                </div>
                <h3 class="card-title mb-3">Server Configuration</h3>
                <p class="card-text">
                  This Widely covers linux servers and little of windows severs 
                </p>
                <a href="#" class="btn btn-dark">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card bg-dark text-light">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="fa-brands fa-linux"></i>
                </div>
                <h3 class="card-title mb-3">Linux Administration and Database Management</h3>
                <p class="card-text">
                  This covers database and linux administration and Others               
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

    <div id="ezoic-pub-ad-placeholder-104">
      <!--ads section start here for all ads-->
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6027569691193668"
             crossorigin="anonymous"></script>
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-format="fluid"
             data-ad-layout-key="-bc-9l-12+he+xv"
             data-ad-client="ca-pub-6027569691193668"
             data-ad-slot="5327351244"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      <!--ads section end here for all ads-->
    </div>


    <!-- Learn Sections -->
    @foreach ($dataheadline as $data)
{{--     <section id="learn" class="p-5">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md">
            <img src="{{ asset('img/fundamentals.png') }}" class="img-fluid" alt="" />
          </div>
          
          <div class="col-md p-5">
            <h2>{{ $data->content_title }}</h2>
            <p>
              {!! \Illuminate\Support\Str::words($data->summary, 3000, '...') !!}
            </p>
            <a href="{{ url('/vie/b/lo/g/'.$data->slug)}}" class="btn btn-light mt-3">
              <i class="bi bi-chevron-right"></i> Read More
            </a>
          </div>
        </div>
      </div>
    </section> --}}
{{--     @endforeach
    @foreach ($dataheadline_two as $data) --}}
    <section id="learn" class="p-5 bg-dark text-light">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md p-5">
            <h2>{{ $data->content_title }}</h2>
{{--             <p class="lead">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Similique deleniti possimus magnam corporis ratione facere!
            </p> --}}
            <p>
              {!! \Illuminate\Support\Str::words($data->summary, 3000, '...') !!}  
              <!-- shopify start here -->
              <h3 id="1295408"><a href="https://shopify.pxf.io/c/3499173/1295408/13624?u=http%3A%2F%2Fwww.shopify.com%2Fgoogle">Sell on Shopify using Google</a></h3>
              <img height="0" width="0" src="https://imp.pxf.io/i/3499173/1295408/13624" style="position:absolute;visibility:hidden;" border="0" />
              <!-- shopify end here -->
            </p>
            <a href="{{ url('/vie/b/lo/g/'.$data->slug)}}" class="btn btn-light mt-3">
              <i class="bi bi-chevron-right"></i> Read More
            </a>
          </div>
          <div class="col-md">
            <img src="{{ asset('img/react.png') }}" class="img-fluid" alt="" />
          </div>
          
        </div>
      </div>
    </section>
    @endforeach
<div class="container">
    <div id="ezoic-pub-ad-placeholder-105">
      <!--ads section start here for all ads-->
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6027569691193668"
                 crossorigin="anonymous"></script>
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-format="fluid"
                 data-ad-layout-key="-cn-5v+bp+bp-vf"
                 data-ad-client="ca-pub-6027569691193668"
                 data-ad-slot="7785993620"></ins>
            <script>
                 (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
      <!--ads section end here for all ads-->
    </div>

</div>
 <!-- Highlights -->
        <div class="content">
          <div class="container">
            <div class="row">
              <h2 class="fw-bold"><i class="fa fa-check-circle text-success"></i>Popular Posts</h2>
                {{-- <p>Latest Posts Highlights</p> --}}
              <div class="col-md-4">
                <div class="control-box p-3">
                    @foreach ($datablog as $data)
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button"data-bs-toggle="collapse"data-bs-target="#question-one">
                            {{ $data->content_title }}
                          </button>
                        </h2>
                        <div id="question-one" class="accordion-collapse collapse" data-bs-parent="#questions" >
                          <div class="accordion-body">
                            <ul>
                                  <li><a href="{{ url('/vie/b/lo/g/'.$data->slug)}}">Read More</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    @endforeach
                </div>
              </div>
              <div class="col-md-8">
                <div class="control-box p-2 breadcrumb">
                  <h2 class="fw-bold"><i class="fa fa-check-circle text-success"></i>Categories</h2>
                </div>
                <div class="control-box p-3 main-content">
                  <div class="row g-4 mt-4">
                      <div class="col-md-3">
                          <div class="card border-0 shadow-lg">
                              <div class="card-body"> <i class="fa-brands fa-fedora"></i>Fedora </div>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="card border-0 shadow-lg">
                              <div class="card-body"> <i class="fa-brands fa-centos"></i> Centos </div>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="card border-0 shadow-lg">
                              <div class="card-body"> <i class="fa-brands fa-ubuntu"></i> Ubuntu </div>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="card border-0 shadow-lg">
                              <div class="card-body"> <i class="fa-brands fa-linux"></i> Kali Linux </div>
                          </div>
                      </div>
                  </div>
                              {{-- Second row --}}
                  <div class="row g-4 mt-4">
                      <div class="col-md-3">
                          <div class="card border-0 shadow-lg">
                              <div class="card-body"> <i class="fa-brands fa-ubuntu"></i> Reactjs </div>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="card border-0 shadow-lg">
                              <div class="card-body"> <i class="fa-brands fa-laravel"></i> laravel </div>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="card border-0 shadow-lg">
                              <div class="card-body"> <i class="fa-solid fa-server"></i>mysql,sql </div>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="card border-0 shadow-lg">
                              <div class="card-body"> <i class="fa-solid fa-database"></i> Server </div>
                          </div>
                      </div>
                  </div>

                </div>
              </div>
            </div>
              <div id="ezoic-pub-ad-placeholder-106">
                <!--ads section six start here for all ads-->
                  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6027569691193668"
                       crossorigin="anonymous"></script>
                  <ins class="adsbygoogle"
                       style="display:block; text-align:center;"
                       data-ad-layout="in-article"
                       data-ad-format="fluid"
                       data-ad-client="ca-pub-6027569691193668"
                       data-ad-slot="6406460167"></ins>
                  <script>
                       (adsbygoogle = window.adsbygoogle || []).push({});
                  </script>
              <!--ads section six end here for all ads-->
              </div>
          </div>
        </div>

   

{{--     <section id="instructors" class="p-5 bg-primary">
      <div class="container">
        <h2 class="text-center text-white">Our Instructors</h2>
        <p class="lead text-center text-white mb-5">
          Our instructors all have 5+ years working as a web developer in the
          industry
        </p>
        <div class="row g-4">
          <div class="col-md-6 col-lg-3">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img
                  src="https://randomuser.me/api/portraits/men/11.jpg"
                  class="rounded-circle mb-3"
                  alt=""
                />
                <h3 class="card-title mb-3">John Doe</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                </p>
                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img
                  src="https://randomuser.me/api/portraits/women/11.jpg"
                  class="rounded-circle mb-3"
                  alt=""
                />
                <h3 class="card-title mb-3">Jane Doe</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                </p>
                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img
                  src="https://randomuser.me/api/portraits/men/12.jpg"
                  class="rounded-circle mb-3"
                  alt=""
                />
                <h3 class="card-title mb-3">Steve Smith</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                </p>
                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
              </div>
            </div>
          </div>

          <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6027569691193668"
     crossorigin="anonymous"></script>

          <div class="col-md-6 col-lg-3">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img
                  src="https://randomuser.me/api/portraits/women/12.jpg"
                  class="rounded-circle mb-3"
                  alt=""
                />
                <h3 class="card-title mb-3">Sara Smith</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                </p>
                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

    <!-- Contact & Map -->
    <style type="text/css">
      .blog .carousel-indicators {
          left: 0;
          top: auto;
            bottom: -40px;

      }

        /* The colour of the indicators */
        .blog .carousel-indicators li {
            background: #a3a3a3;
            border-radius: 50%;
            width: 8px;
            height: 8px;
      }

        .blog .carousel-indicators .active {
        background: #707070;
      }
    </style>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



    <section class="p-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-12">
            <h2 class="text-center mb-4">Exchange Rates</h2>
               @include ('web/slider/slider')
          </div>
        </div>
      </div>
    </section>
    <!--ads section start here for all ads-->
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6027569691193668"
             crossorigin="anonymous"></script>
        <ins class="adsbygoogle"
             style="display:block; text-align:center;"
             data-ad-layout="in-article"
             data-ad-format="fluid"
             data-ad-client="ca-pub-6027569691193668"
             data-ad-slot="2998084260">
        </ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    <!--ads section end here for all ads-->



@endsection