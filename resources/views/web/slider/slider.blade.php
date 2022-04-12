<style type="text/css">
		.slider{
	    width:100%;
	    overflow:hidden;
	    position:relative;
	    margin:0;
	}
	.edge{
	    left:0;
	    right:0;
	    top:0;
	    bottom:0;
	    position:absolute;
	    height:100%;
	    display:block;
	}
	.edge:before{
	    content:'';
	    position:absolute;
	    left:0;
	    background:-webkit-linear-gradient(left, white 10%, rgba(0,0,0,0) 100%);
	    width:25%;
	    height:100%;
	}
	.edge:after{
	    content:'';
	    position:absolute;
	    right:0;
	    background:-webkit-linear-gradient(right, white 10%, rgba(0,0,0,0) 100%);
	    width:25%;
	    height:100%;
	}
	.textslider{
	    background:#ddd;
	    overflow:hidden;
	    width:1000%;
	    margin:0;
	}
	.slideme{
	    list-style:none;
	    display:inline-block;
	    padding:0 50px;
	}
</style>
          {{--  @forelse ($currency_data as $currency_data) --}}
           @forelse ($currency_data['rates'] as $key => $currency)
                    @empty       
                @endforelse
                   
			<div class='slider'>
				    <div class="edge"></div>
					<ul class="slideContainer textslider" id="money_start">
				        <li class="slideItem list-group-item-primary slideme" >
				        	AED
							@if(array_key_exists('AED', $currency_data['rates'] ))
							    {{ $currency_data['rates']['AED']  }}
							@endif
				        </li>
				        <li class="slideItem list-group-item-secondary slideme" >
				           AFN
							@if(array_key_exists('AFN', $currency_data['rates'] ))
							    {{ $currency_data['rates']['AFN']  }}
							@endif
				        </li>
				        <li class="slideItem list-group-item-success slideme" >
				        	CAD
							@if(array_key_exists('CAD', $currency_data['rates'] ))
							    {{ $currency_data['rates']['CAD']  }}
							@endif
				        </li>
				        <li class="slideItem list-group-item-danger slideme" >
				           UYU
							@if(array_key_exists('UYU', $currency_data['rates'] ))
							    {{ $currency_data['rates']['UYU']  }}
							@endif
				        </li>
				        <li class="slideItem list-group-item-warning slideme" >
				           USD
							@if(array_key_exists('USD', $currency_data['rates'] ))
							    {{ $currency_data['rates']['USD']  }}
							@endif
				        </li>
				        <li class="slideItem list-group-item-info slideme">
				           AUD
							@if(array_key_exists('AUD', $currency_data['rates'] ))
							    {{ $currency_data['rates']['AUD']  }}
							@endif
				        </li>
						<li class="slideItem list-group-item-light slideme">
				           EUR
							@if(array_key_exists('EUR', $currency_data['rates'] ))
							    {{ $currency_data['rates']['EUR']  }}
							@endif
					    </li>
						<li class="slideItem list-group-item-dark slideme">
				           KES
							@if(array_key_exists('KES', $currency_data['rates'] ))
							    {{ $currency_data['rates']['KES']  }}
							@endif
					     </li>
					</ul>
			</div>
			<hr>

{{-- <div class='slider'>
	    <div class="edge"></div>
	@forelse($currency_data['rates'] as $key => $currency)
		<ul class="slideContainer" id="money_start">
		        <li class="slideItem" >
		              <p>{{$key ?? '-'}}</p>
		              <small>{{$currency ?? '-'}}</small>
		        </li>
		        <li class="slideItem" >
		        </li>
		</ul>
	@endforeach



</div> --}}



<script type="text/javascript">
	// polyfill
	window.requestAnimationFrame = (function(){
	  return  window.requestAnimationFrame       ||
	          window.webkitRequestAnimationFrame ||
	          window.mozRequestAnimationFrame    ||
	          function( callback ){
	            window.setTimeout(callback, 1000 / 60);
	          };
	})();

	var speed = 5000;
	(function currencySlide(){
	    var currencyPairWidth = $('.slideItem:first-child').outerWidth();
	    $(".slideContainer").animate({marginLeft:-currencyPairWidth},speed, 'linear', function(){
	                $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
	        });
	        requestAnimationFrame(currencySlide);
	})();
</script>