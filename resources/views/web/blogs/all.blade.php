@extends('layouts.app')

@section('content')

{{--     <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-posts-grid :posts="$posts" />

            {{ $posts->links() }}
        @else
            <p class="text-center">No posts yet. Please check back later.</p>
        @endif
    </main> --}}
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
        <!-- Post Content-->
        <div class="container">
	        <article class="mb-4">
	            <div class="container px-4 px-lg-5">
	                <div class="row gx-4 gx-lg-5 justify-content-center">
	                	<div class="col-lg-12">
	                               {{-- <div class="col-md-10 col-lg-8 col-xl-7"> --}}
				            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
				                {!! strip_tags($post->description) !!}
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
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6027569691193668"
     crossorigin="anonymous"></script>

@endsection