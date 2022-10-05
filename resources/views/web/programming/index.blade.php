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
        <!-- Post Content-->
        <div class="container">
	        <article class="mb-4">
	            <div class="container px-4 px-lg-5">
	                <div class="row gx-4 gx-lg-5 justify-content-center">
	                	<div class="col-lg-12">
	                               {{-- <div class="col-md-10 col-lg-8 col-xl-7"> --}}
                            <p>
                                {!! \Illuminate\Support\Str::words($content->description, 3000, '...') !!}
                            </p>
                                <blockquote>
                            {{-- <code> --}}
                                <p>
                                    {!! \Illuminate\Support\Str::words($content->code_content, 3000, '...') !!}
                                </p>
                           {{--  </code> --}}

                            <p>
	                        	{!! \Illuminate\Support\Str::words($content->summary, 3000, '...') !!}
                                <blockquote>
	                        </p>
	                        
	                    </div>
	                </div>
	            </div>
	        </article>

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

            <!--ads section start here for all ads-->
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6027569691193668"
                     crossorigin="anonymous"></script>
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-format="autorelaxed"
                     data-ad-client="ca-pub-6027569691193668"
                     data-ad-slot="1465510742">
                </ins>
                <script>
                     (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            <!--ads section end here for all ads-->

	    </div>

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