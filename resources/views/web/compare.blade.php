@extends('web.layout')
@section('content')
<div class="tt-breadcrumb">
	<div class="container">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li>Shopping Cart</li>
		</ul>
	</div>
</div>
<div id="tt-pageContent">
	<div class="container-indent">
		<div class="container">
        @if(empty($result['products']) and count($result['products'])==0)
    <h5>@lang('website.No Record Found!')</h5>        
    @else		
      @foreach($result['products'] as $key=>$products)
			<h1 class="tt-title-subpages noborder">COMPARING <span id="tt-compare-countitem">3</span> PRODUCTS</h1>
			<div class="tt-compare-table" id="tt-compare-table">
				<div class="tt-item">
					<div class="tt-image-box">
						<div class="tt-row-custom">
							<div class="tt-col">
								<div class="tt-label-location">
									<div class="tt-label-in-stock">In Stock</div>
								</div>
							</div>
							<div class="tt-col">
								<a href="#" class="tt-remove-item js-remove-item"></a>
							</div>
						</div>
						<div class="tt-img">
							<a href="product.html"><img src="images/product/product-01.jpg" alt=""></a>
						</div>
						<h2 class="tt-title"><a href="product.html">>{{$products['product_data'][0]->products_name}}</a></h2>
						<div class="tt-price">
                        <?php

if(!empty($products['product_data'][0]->discount_price)){
  $discount_price = $products['product_data'][0]->discount_price * session('currency_value');
}
if(!empty($products['product_data'][0]->flash_price)){
  $flash_price = $products['product_data'][0]->flash_price * session('currency_value');
}
  $orignal_price = $products['product_data'][0]->products_price * session('currency_value');


 if(!empty($products['product_data'][0]->discount_price)){

  if(($orignal_price+0)>0){
    $discounted_price = $orignal_price-$discount_price;
    $discount_percentage = $discounted_price/$orignal_price*100;
    $discounted_price = $products['product_data'][0]->discount_price;

 }else{
   $discount_percentage = 0;
   $discounted_price = 0;
 }
}
else{
  $discounted_price = $orignal_price;
}
?>
@if(!empty($products['product_data'][0]->flash_price))
<sub class="total_price">{{Session::get('symbol_left')}}{{$flash_price+0}}{{Session::get('symbol_right')}}</sub>
<span>{{Session::get('symbol_left')}}{{$orignal_price+0}}{{Session::get('symbol_right')}} </span> 
@elseif(!empty($products['product_data'][0]->discount_price))
<price class="total_price">{{Session::get('symbol_left')}}{{$discount_price+0}}{{Session::get('symbol_right')}}</price>
<span>{{Session::get('symbol_left')}}{{$orignal_price+0}}{{Session::get('symbol_right')}} </span> 
@else
<price class="total_price">{{Session::get('symbol_left')}}{{$orignal_price+0}}{{Session::get('symbol_right')}}</price>
@endif
                      
                  </span>
 






                  <span>@lang('website.Discount')&nbsp;:&nbsp;</span>
                    <?php
                                                $current_date = date("Y-m-d", strtotime("now"));

                                                $string = substr($products['product_data'][0]->products_date_added, 0, strpos($products['product_data'][0]->products_date_added, ' '));
                                                $date=date_create($string);
                                                date_add($date,date_interval_create_from_date_string($web_setting[20]->value." days"));


                                                $after_date = date_format($date,"Y-m-d");

                                                if($after_date>=$current_date){
                                                }
                                                $discount_percentage = 0;
                                                if(!empty($products['product_data'][0]->discount_price)){
                                                    $discount_price = $products['product_data'][0]->discount_price;
                                                    $orignal_price = $products['product_data'][0]->products_price;

                                                    if(($orignal_price+0)>0){
                                                      $discounted_price = $orignal_price-$discount_price;
                                                      $discount_percentage = $discounted_price/$orignal_price*100;
                                                    }else{
                                                      $discount_percentage = 0;
                                                    }
                                                                      
                                                }
                                                echo "<span style='margin-left:15px' class='discount-tag'>".(int)$discount_percentage."%</span>";
                    ?>
                
                    <span>@lang('website.Categories')&nbsp;:&nbsp;</span>
                    <?php
                            $cates = '';  
                    ?>
                            @foreach($products['product_data'][0]->categories as $key=>$category)
                                
                              <?php
                                if ($cates != '') $cates .= ' / '; 
                                $cates .=  "<a href=".url('shop?category='.$category->categories_name).">".$category->categories_name."</a>";
                              ?>  
                              
                            @endforeach
                    <?php 
                            echo $cates;
                    ?>

@php  foreach($products['product_data'][0]->attributes as $f) { @endphp
              

    <span>{{$f['option']['name']}}&nbsp;:&nbsp;</span>
                    @php  foreach($f['values'] as $d) { @endphp
                    <span style="margin-left:4px;"><small>{{$d['value']}}</small></span>
                    @php   } @endphp

                    @php   } @endphp

                    <div class="detail-buttons">
                        <a href="{{ URL::to('/product-detail/'.$products['product_data'][0]->products_slug)}}" class="btn btn-secondary">View Details</a>
                        <div class="share"><a href="{{ URL::to("/deletecompare")}}/{{$products['product_data'][0]->products_id}}">Remove &nbsp;<i class="fas fa-trash-alt"></i></a> </div>

                    </div>






						</div>
					</div>
					<div class="tt-col tt-table-title">DESCRIPTIONS</div>
					<div class="tt-col js-description">
						We are proud to present our best premium Shopify theme - Wokiee.
					</div>
					<div class="tt-col tt-table-title">VENDOR</div>
					<div class="tt-col">
						GAP
					</div>
					<div class="tt-col tt-table-title">COLOR</div>
					<div class="tt-col">
						Blue, Purple, White
					</div>
					<div class="tt-col tt-table-title">SIZE</div>
					<div class="tt-col">
						20, 24
					</div>
					<div class="tt-col tt-table-title">MATERIAL</div>
					<div class="tt-col">
						100% Polyester
					</div>
					<div class="tt-col">
						<a href="#" class="tt-btn-addtocart" data-toggle="modal" data-target="#modalAddToCartProduct"><i class="icon-f-39"></i>ADD TO CART</a>
					</div>
				</div>
				
			
			</div>
            @endforeach
      @endif
		</div>
	</div>
</div>
<script>
	jQuery(function($){
		var ttCompareTable = $('#tt-compare-table');
		if (ttCompareTable.length){
			//product quantity
			var ttCompareItemCount = ttCompareTable.find('.tt-item').size();
			if(ttCompareItemCount > 0){
				$('#tt-compare-countitem').html(ttCompareItemCount);
			};
			//slider init
			ttCompareTable.slick({
				dots: false,
				arrows: true,
				infinite: true,
				speed: 300,
				slidesToShow: 3,
				slidesToScroll: 1,
				adaptiveHeight: true,
				responsive: [
					{
						breakpoint: 1025,
						settings: {
							slidesToShow: 2,
						}
					},
					{
						breakpoint: 410,
						settings: {
							slidesToShow: 1
						}
					}
				]
			});
			//the need for an indent
			var ttCompareSlickBtn = ttCompareTable.find('.slick-arrow').size();
			if(ttCompareSlickBtn > 0){
				ttCompareTable.addClass('slick-init');
			};
			//remove item after click
			ttCompareTable.on('click', '.js-remove-item', function() {
				$(this).closest('.tt-item').remove();
			});
			//
			alignmentColHeight();
			$(window).on('load', function(){
				alignmentColHeight();
			});

			$(window).resize(debouncer(function(e){
				alignmentColHeight();
			}));
		};
		function alignmentColHeight(){
				var ttwindowWidth = window.innerWidth || $(window).width();
				if(ttwindowWidth > 409){
					calculatingMaxHeight(ttCompareTable.find('.tt-item .js-description'));
					calculatingMaxHeight(ttCompareTable.find('.tt-item .tt-image-box'));
					calculatingMaxHeight(ttCompareTable.find('.tt-item'));
				} else{
					ttCompareTable.find('.tt-item .js-description').css("height", "auto");
					ttCompareTable.find('.tt-item .tt-image-box').css("height", "auto");
				};

		};
		function calculatingMaxHeight($obj){
			var maxHeight = 0;
			$obj.css("height", "auto").each(function(){
					$(this).css("height", "auto");
					var colHeight = $(this).height();
					if($(this).height() > maxHeight){
							maxHeight = $(this).height();
					};
			});
			$obj.height(maxHeight);
		};
		function debouncer(func, timeout) {
			var timeoutID, timeout = timeout || 500;
			return function() {
					var scope = this,
							args = arguments;
					clearTimeout(timeoutID);
					timeoutID = setTimeout(function() {
							func.apply(scope, Array.prototype.slice.call(args));
					}, timeout);
			}
		};
	});
</script>
@endsection