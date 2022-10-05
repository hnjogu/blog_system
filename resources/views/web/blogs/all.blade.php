@extends('layouts.app')

@section('content')


@forelse ($datacontect as $datacontect)
@empty 
@endforelse
<div class="container mt-4">
    <nav class="breadcrumb">
        <a class="breadcrumb-item" href="/">Home</a>
        @if(empty($datacontect->status ))
            <span class="badge badge-danger">No Content At the Moment </span>
        @else
            @if($datacontect->status == 'Available')
	            <span class="breadcrumb-item active">{{ $datacontect->category_name }}</span>
	        @endif
	        @if($datacontect->status == 'Not Available')
	            <span class="breadcrumb-item active"><span class="badge bg-warning">No Post</span></span>
	        @endif

        @endif
    </nav>
</div>

{{--     <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-posts-grid :posts="$posts" />

            {{ $posts->links() }}
        @else
            <p class="text-center">No posts yet. Please check back later.</p>
        @endif
    </main> --}}

    <main role="main" class="container"  style="margin-top: 5px">

        <div class="row">
        	<div id="ezoic-pub-ad-placeholder-104">
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
			</div>

            <div class="col-sm-8 blog-main">
                @foreach ($content as $post)
                    <div class="blog-post">
				        <header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
				            <div class="container position-relative px-4 px-lg-5">
				                <div class="row gx-4 gx-lg-5 justify-content-center">
				                    <div class="col-lg-12">
				                        <div class="post-heading">
				                        	<h2 class="blog-post-title">{{ $post->content_title }}</h2>
				                            {{-- <h1><b>{{ $post->content_title }}</b></h1> --}}
				                             <span class="text-gray-500">
								                By <span class="font-bold italic text-gray-800 meta">Created on</span>{{ date('jS M Y', strtotime($post->updated_at)) }}
								            </span>
				                        </div>
				                    </div>
				                </div>
				            </div>
				        </header>
				        <!-- Post Content-->
                        <p class="blog-post-meta"><small><i>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }} by <a href="#"></a></i></small></p>
                        <p>{!! \Illuminate\Support\Str::words($post->description, 3000, '...') !!}</p>
                        <blockquote>
                        	<!-- Ezoic - incontent_6 - incontent_6 -->
							<div id="ezoic-pub-ad-placeholder-117"> </div>
							<!-- End Ezoic - incontent_6 - incontent_6 -->
                            <p>
                                <a href="{{ url('/vie/b/lo/g/'.$post->slug)}}" class="btn btn-primary btn-sm">Learn more</a> 
                            </p>
                        </blockquote>
                    </div>
                    <hr class="my-4" />
                    <!-- adsterra- start here -->
				    @include('web.masterads.adsterra')
				    <!-- adsterra - end here -->
                @endforeach

	                {{-- <nav class="blog-pagination">
	                    
	                </nav> --}}

	            <div id="ezoic-pub-ad-placeholder-105">
					<!--ads hilltopads start here for all ads-->
					<script>
						(function(__htas){
						var d = document,
						    s = d.createElement('script'),
						    l = d.scripts[d.scripts.length - 1];
						s.settings = __htas || {};
						s.src = "\/\/phychashowi.com\/a-WJ5\/w.YFWmdKlhQS2P9WkXZbTU9I6sbv2_5ylySoWTQV9XNSD\/Qs1sM\/TQUd1SOqC\/0\/0uNnDRUXxmN\/TBU-5j";
						l.parentNode.insertBefore(s, l);
						})({})
					</script>
					<!--ads hilltopads end here for all ads-->
				</div>
            </div>


            <aside class="col-sm-3 ml-sm-auto blog-sidebar">
                <div class="sidebar-module">
                    <h4>Latest Posts</h4>
                    @foreach($datablog as $data)
                        <ol class="list-unstyled">
                            <li><a href="{{ url('/vie/b/lo/g/'.$data->slug)}}">{{ $data->sub_category }}</a></li>
                        </ol>
                    @endforeach
                    <div id="ezoic-pub-ad-placeholder-107">
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
					<!-- Ezoic - sidebar - sidebar -->
					<div id="ezoic-pub-ad-placeholder-116"> </div>
					<!-- End Ezoic - sidebar - sidebar -->
                </div>
            </aside>

        </div>
    </main>

{{--     <main role="main" class="container"  style="margin-top: 5px">
    	<div class="row">
    		<div class="col-sm-8 blog-main">
			    @foreach ($content as $post)
			        <header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
			            <div class="container position-relative px-4 px-lg-5">
			                <div class="row gx-4 gx-lg-5 justify-content-center">
			                    <div class="col-lg-12">
			                        <div class="post-heading">
			                            <h1><b>{{ $post->content_title }}</b></h1>
			                             <span class="text-gray-500">
							                By <span class="font-bold italic text-gray-800 meta">Created on</span>{{ date('jS M Y', strtotime($post->updated_at)) }}
							            </span>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </header>
			        
			        <div class="container">        	
				        <article class="mb-4">	        	
				            <div class="container px-4 px-lg-5">
				                <div class="row gx-4 gx-lg-5 justify-content-center">
				                	<div class="col-lg-12">
				                               
							            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
							            	{!! \Illuminate\Support\Str::words($post->description, 3000, '...') !!}
							                
							            </p>
			            	            <a href="{{ url('/vie/b/lo/g/'.$post->slug)}}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
							                Keep Reading
							            </a>
				                        
				                    </div>
				                </div>
				            </div>
				        </article>
				        <hr class="my-4" />
				    </div>   
				@endforeach
			</div>

            <aside class="col-sm-3 ml-sm-auto blog-sidebar">
                <div class="sidebar-module">
                    <h4>Latest Posts</h4>
                    
                        <ol class="list-unstyled">
                            <li><a href="">March 17</a></li>
                            <li><a href="">March 17</a></li>
                        </ol>
                    
                </div>
            </aside>


		</div>
	</main> --}}

@endsection