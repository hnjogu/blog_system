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
        <div class="container position-relative px-4 px-lg-5">
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
                <!-- bluehost start here -->
                     <a href="https://bluehost.sjv.io/c/3499173/1214227/11352?u=http%3A%2F%2Fwww.bluehost.com%2F%3Fclickid%3D%7Bclickid%7D%26pb%3D%7Bmp_value2%7D%26irpid%3D%7Birpid%7D%26source%3DIR%26utm_medium%3Daffiliate%26utm_affiliate%3D%7Bmp_value3%7D%26utm_affiliate_sys%3DIR%26sharedid%3D%7Bsharedid%7D%26siteID%3D%7Bmp_value1%7D%26iradid%3D%7Biradid%7D%26trkID%3D%7Bmp_value1%7D%26input%3D%7BCUSTOM%7D%26irclickid%3D%7Bclickid%7D%26utm_source%3DIR" target="_top" id="1214227"><img src="//a.impactradius-go.com/display-ad/11352-1214227" border="0" alt="" width="468" height="60"/></a><img height="0" width="0" src="https://imp.pxf.io/i/3499173/1214227/11352" style="position:absolute;visibility:hidden;" border="0" />
                <!-- bluehost end here -->
                <!--bluehost start here for all ads-->
                    <a id="795082" href="https://bluehost.sjv.io/c/3499173/795082/11352" > Best hosting </a><img height="0" width="0" src="https://imp.pxf.io/i/3499173/795082/11352" style="position:absolute;visibility:hidden;" border="0" />
                <!--bluehost end here for all ads-->
        </div>
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
                <!-- Ezoic - incontent_9 - incontent_9 -->
                <div id="ezoic-pub-ad-placeholder-118"> </div>
                <!-- End Ezoic - incontent_9 - incontent_9 -->
            <!-- bluehost start here -->
                 <a href="https://bluehost.sjv.io/c/3499173/1214227/11352?u=http%3A%2F%2Fwww.bluehost.com%2F%3Fclickid%3D%7Bclickid%7D%26pb%3D%7Bmp_value2%7D%26irpid%3D%7Birpid%7D%26source%3DIR%26utm_medium%3Daffiliate%26utm_affiliate%3D%7Bmp_value3%7D%26utm_affiliate_sys%3DIR%26sharedid%3D%7Bsharedid%7D%26siteID%3D%7Bmp_value1%7D%26iradid%3D%7Biradid%7D%26trkID%3D%7Bmp_value1%7D%26input%3D%7BCUSTOM%7D%26irclickid%3D%7Bclickid%7D%26utm_source%3DIR" target="_top" id="1214227"><img src="//a.impactradius-go.com/display-ad/11352-1214227" border="0" alt="" width="468" height="60"/></a><img height="0" width="0" src="https://imp.pxf.io/i/3499173/1214227/11352" style="position:absolute;visibility:hidden;" border="0" />
            <!-- bluehost end here -->
            <!--bluehost start here for all ads-->
                <a id="795082" href="https://bluehost.sjv.io/c/3499173/795082/11352" > Best hosting </a><img height="0" width="0" src="https://imp.pxf.io/i/3499173/795082/11352" style="position:absolute;visibility:hidden;" border="0" />
            <!--bluehost end here for all ads-->

	    </div>
        <hr>

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