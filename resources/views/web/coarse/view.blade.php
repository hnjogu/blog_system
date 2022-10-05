@extends('layouts.app')

@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
@if(array_key_exists('results', $coarse_data))
{{-- @foreach ($coarse_data['results'] as $key => $result) --}}
  @foreach ($coarse_data['results'] as $result)
              @if(array_key_exists('image_240x135', $coarse_data['results'] ))
                  {{ $coarse_data['results']['image_240x135']  }}
                {{--   {{ $coarse_data['id']  }} --}}
              @endif

        <!--ads section start here for all ads-->
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6027569691193668"
             crossorigin="anonymous"></script>
        <!-- section one ads -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-6027569691193668"
             data-ad-slot="6491688281"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        <!--ads section end here for all ads-->
      <div class="container mt-4 cta-50 cart">
          <h1 class="title">Udemy  <span class="blue">Coarses</span></h1>
          <hr>
          <div class="row">

              <div class="col-md-3 mt-4">
                <div class="card">
                  <figure><img class="card-img-top" src="{{$result['image_240x135']}}"></figure> 
                  <div class="card-body text-center">
                    <div class="item-box-blog-data" style="padding: px 15px;">
                      <p><i class="fa fa-user-o"></i> Price: {{$result['price']}}, <a href="https://www.udemy.com{{$result['url']}}">Go Udemy</a>
                      </p>
                    </div>
                    <h5 class="card-title blue mb-3">{{$result['title']}}</h5>
                    <p class="card-text text-muted">{{$result['published_title']}}</p>
                    <p class="card-text text-muted">{{$result['id']}}</p>
                    {{-- <p class="card-text text-muted">{{$result['headline']}}</p> --}}
                    <a class="button" href=""> <span><i class="fa fa-shopping-cart"></i> Order Now</span> </a>
                  </div>
                </div>
              </div>
 
          </div>
          <hr class="my-4" />
      </div>
  @endforeach
@endif



      



 
    


<style type="text/css">
        

.cta-100 {
  margin-top: 100px;
  padding-left: 8%;
  padding-top: 7%;
}
.col-md-4{
    padding-bottom:20px;
}

.white {
  color: #fff !important;
}
.mt{float: left;margin-top: -20px;padding-top: 20px;}
.bg-blue-ui {
  background-color: #708198 !important;
}
figure img{width:300px;}

#blogCarousel {
  padding-bottom: 100px;
}

.blog .carousel-indicators {
  left: 0;
  top: -50px;
  height: 50%;
}


/* The colour of the indicators */

.blog .carousel-indicators li {
  background: #708198;
  border-radius: 50%;
  width: 8px;
  height: 8px;
}

.blog .carousel-indicators .active {
  background: #0fc9af;
}




.item-carousel-blog-block {
  outline: medium none;
  padding: 15px;
}

.item-box-blog {
  border: 1px solid #dadada;
  text-align: center;
  z-index: 4;
  padding: 20px;
}

.item-box-blog-image {
  position: relative;
}

.item-box-blog-image figure img {
  width: 100%;
  height: auto;
}

.item-box-blog-date {
  position: absolute;
  z-index: 5;
  padding: 4px 20px;
  top: -20px;
  right: 8px;
  background-color: #41cb52;
}

.item-box-blog-date span {
  color: #fff;
  display: block;
  text-align: center;
  line-height: 1.2;
}

.item-box-blog-date span.mon {
  font-size: 18px;
}

.item-box-blog-date span.day {
  font-size: 16px;
}

.item-box-blog-body {
  padding: 10px;
}

.item-heading-blog a h5 {
  margin: 0;
  line-height: 1;
  text-decoration:none;
  transition: color 0.3s;
}

.item-box-blog-heading a {
    text-decoration: none;
}

.item-box-blog-data p {
  font-size: 13px;
}

.item-box-blog-data p i {
  font-size: 12px;
}

.item-box-blog-text {
  max-height: 100px;
  overflow: hidden;
}

.mt-10 {
  float: left;
  margin-top: -10px;
  padding-top: 10px;
}

.btn.bg-blue-ui.white.read {
  cursor: pointer;
  padding: 4px 20px;
  float: left;
  margin-top: 10px;
}

.btn.bg-blue-ui.white.read:hover {
  box-shadow: 0px 5px 15px inset #4d5f77;
}
</style>
   

@endsection