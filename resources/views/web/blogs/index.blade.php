@extends('layouts.app')

@section('content')
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-12">
                        <div class="post-heading">
                            <h1>{{ $content->content_title }}</h1>
                            <span class="meta">
                                <a href="#!"></a>
                                Created on {{ date('jS M Y', strtotime($content->updated_at)) }}
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
	                        <p>
	                        	{!! strip_tags($content->description) !!}
	                        </p>
	                        
	                    </div>
	                </div>
	            </div>
	        </article>
	    </div>

        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6027569691193668"
     crossorigin="anonymous"></script>

{{--     <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">{{ $content->title }}</h2>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#!">Start Bootstrap</a>
                        on September 24, 2021
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Post preview-->
            </div>
        </div>
    </div> --}}




{{-- <div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $content->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $content->user->name }}</span>, Created on {{ date('jS M Y', strtotime($content->updated_at)) }}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $content->description }}
    </p>
</div> --}}


@endsection