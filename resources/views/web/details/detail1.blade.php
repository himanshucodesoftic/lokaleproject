
<div id="tt-pageContent">
	
<div class="tt-breadcrumb">
	<div class="container">
		<ul>
			<li><a href="index.html">Home</a></li>

			@if(!empty($result['category_name']) and !empty($result['sub_category_name']))
        <li class="breadcrumb-item active"><a
            href="{{ URL::to('/shop?category='.$result['category_slug'])}}">{{$result['category_name']}}</a></li>
        <li class="breadcrumb-item active"><a
            href="{{ URL::to('/shop?category='.$result['sub_category_slug'])}}">{{$result['sub_category_name']}}</a>
        </li>
        @elseif(!empty($result['category_name']) and empty($result['sub_category_name']))
        <li class="breadcrumb-item active"><a
            href="{{ URL::to('/shop?category='.$result['category_slug'])}}">{{$result['category_name']}}</a></li>
        @endif
        @if($result['detail']['product_data'])
        <li class="breadcrumb-item active">{{$result['detail']['product_data'][0]->products_name}}</li>
        @endif


		</ul>
	</div>
</div>
<div id="tt-pageContent">
	<div class="container-indent">
		<!-- mobile product slider  -->
		<div class="tt-mobile-product-layout visible-xs">
			<div class="tt-mobile-product-slider arrow-location-center" id="zoom-mobile__slider" >
				<div><img data-lazy="images/product/product-01.jpg" alt=""></div>
				<div><img data-lazy="images/product/product-01-02.jpg" alt=""></div>
				<div><img data-lazy="images/product/product-01-03.jpg" alt=""></div>
				<div><img data-lazy="images/product/product-01-04.jpg" alt=""></div>
				<div>
					<div class="tt-video-block">
						<a href="#" class="link-video"></a>
						<video class="movie" src="video/video.mp4" poster="video/video_img.jpg"></video>
					</div>
				</div>
				<!-- <div>
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="" data-src="http://www.youtube.com/embed/GhyKqj_P2E4" allowfullscreen></iframe>
					</div>
				</div> -->
			</div>
			<div id="zoom-mobile__layout">
				<a class="zoom-mobile__close btn" href="#">Back</a>
				<div id="tt-fotorama" data-nav="thumbs" data-auto="false" data-allowfullscreen="false" dataa-fit="cover" ></div>
			</div>
		</div>
		<!-- /mobile product slider  -->
		<div class="container container-fluid-mobile" >
			<div class="row">
				<div class="col-6 hidden-xs" >
					<div class="tt-product-vertical-layout" >
						<div class="tt-product-single-img">
							<div>
							@foreach( $result['detail']['product_data'][0]->images as $key=>$images )
            @if($images->image_type == 'ACTUAL')
								<button class="tt-btn-zomm tt-top-right"><i class="icon-f-86"></i></button>
							
								<img class="{{asset('').$images->image_path }}"   src="{{asset('').$images->image_path }}" data-zoom-image="{{asset('').$images->image_path }}" alt="">
								@endif
          @endforeach
								<div id="custom-product-item">
										<button type="button" class="slick-arrow slick-prev">Previous</button>
										<button type="button" class="slick-arrow slick-next">Next</button>
									</div>
							</div>
						</div>
						<div class="tt-product-single-carousel-vertical" style="height:30px;"> 
							<ul id="smallGallery" class="tt-slick-button-vertical  slick-animated-show-js" style="border:2px solid red;height:50px;">
								<li><a class="zoomGalleryActive" href="#" data-image="images/product/product-01.jpg" data-zoom-image="images/product/product-01.jpg"><img src="images/product/product-01.jpg" alt=""></a></li>
								<li><a href="#" data-image="images/product/product-01-02.jpg" data-zoom-image="images/product/product-01-02.jpg"><img src="images/product/product-01-02.jpg" alt=""></a></li>
								<li><a href="#" data-image="images/product/product-01-03.jpg" data-zoom-image="images/product/product-01-03.jpg"><img src="images/product/product-01-03.jpg" alt=""></a></li>
								<li><a href="#" data-image="images/product/product-01-04.jpg" data-zoom-image="images/product/product-01-04.jpg"><img src="images/product/product-01-04.jpg" alt=""></a></li>
								<li><a class="zoomGalleryActive" href="#" data-image="images/product/product-01.jpg" data-zoom-image="images/product/product-01.jpg"><img src="images/product/product-01.jpg" alt=""></a></li>
								<li><a href="#" data-image="images/product/product-01-02.jpg" data-zoom-image="images/product/product-01-02.jpg"><img src="images/product/product-01-02.jpg" alt=""></a></li>
								<li><a href="#" data-image="images/product/product-01-03.jpg" data-zoom-image="images/product/product-01-03.jpg"><img src="images/product/product-01-03.jpg" alt=""></a></li>
								<li><a href="#" data-image="images/product/product-01-04.jpg" data-zoom-image="images/product/product-01-04.jpg"><img src="images/product/product-01-04.jpg" alt=""></a></li>
								<li>
									<div class="video-link-product"  data-toggle="modal" data-type="youtube" data-target="#modalVideoProduct" data-value="http://www.youtube.com/embed/GhyKqj_P2E4">
										<img src="images/product/product-small-empty.png" alt="">
										<div>
											<i class="icon-f-32"></i>
										</div>
									</div>
								</li>
								<li>
									<div class="video-link-product" data-toggle="modal" data-type="video" data-target="#modalVideoProduct" data-value="video/video.mp4" data-poster="video/video_img.jpg">
										<img src="images/product/product-small-empty.png" alt="" >
										<div>
											<i class="icon-f-32"></i>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="tt-product-single-info">
						<div class="tt-add-info">
							<ul>
								<li><span>ProductID:</span> {{$result['detail']['product_data'][0]->products_id}}</li>
								<li><span>Category:</span> 
								
								<?php
                  $cates = '';  
                ?>
                @foreach($result['detail']['product_data'][0]->categories as $key=>$category)
                <?php
                  $cates =  "<a href=".url('shop?category='.$category->categories_name).">".$category->categories_name."</a>";
                ?>
                @endforeach
                <?php 
                  echo $cates;
                ?></li>
								<li><span>Availability:</span> 
								
								
								@if($result['detail']['product_data'][0]->products_type == 0)
                @if($result['commonContent']['settings']['Inventory'])
                  @if($result['detail']['product_data'][0]->defaultStock < 0) <span class="text-secondary">
                    @lang('website.Out of Stock')</span>
                  @else
                    <span class="text-secondary">@lang('website.In stock')</span>
                  @endif
                @else
                  <span class="text-secondary">@lang('website.In stock')</span>
                @endif
              @endif

              @if($result['detail']['product_data'][0]->products_type == 1)
                <span class="text-secondary variable-stock"></span>
              @endif

              @if($result['detail']['product_data'][0]->products_type == 2)
                <span class="text-secondary">@lang('website.External')</span>
              @endif
            </div>

            <p>
              @if($result['detail']['product_data'][0]->products_min_order>0)
                <div class="pro-single-info" id="min_max_setting3"><b>Min Order Limit :
                  </b>{{$result['detail']['product_data'][0]->products_min_order}}</div>
              @endif
</li>
							</ul>
						</div>
						<h1 class="tt-title">{{$result['detail']['product_data'][0]->products_name}}</h1>
						<div class="tt-price">
							<span class="new-price">
							<?php
                    $discount_price = 0;
                    if(!empty($result['detail']['product_data'][0]->discount_price)){
                      $discount_price = $result['detail']['product_data'][0]->discount_price * session('currency_value');
                    }
                    if(!empty($result['detail']['product_data'][0]->flash_price)){
                      $discount_price = $result['detail']['product_data'][0]->flash_price * session('currency_value');
                    }
                    $orignal_price = $result['detail']['product_data'][0]->products_price * session('currency_value');

                    if($discount_price > 0){
                      if(($orignal_price+0)>0){
                        $discounted_price = $orignal_price - $discount_price;
                        $discount_percentage = $discounted_price / $orignal_price * 100;                        
                      }else{
                        $discount_percentage = 0;
                        $discounted_price = 0;
                      }
                    }
                    else{
                      $discount_percentage = 0;
                      $discounted_price = 0;
                    }
                  ?>
				   @if($discounted_price > 0)
                    <span class="new_price">{{Session::get('symbol_left')}}{{$discount_price}}{{Session::get('symbol_right')}}</span>
                    <span class="percentage">-{{(int)$discount_percentage}}% </span>&nbsp;
                    <span class="old_price">{{Session::get('symbol_left')}}{{$orignal_price}}{{Session::get('symbol_right')}}</span>
                    @else
                    <span class="new_price">{{Session::get('symbol_left')}}{{$orignal_price}}{{Session::get('symbol_right')}}</span>
                    @endif












					
							</span>
						</div>
						<div class="tt-review">
							<div class="tt-rating">
							@if($result['detail']['product_data'][0]->avarage_rate == 1)
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star-half"></i>
								<i class="icon-star-empty"></i>
								@elseif($result['detail']['product_data'][0]->avarage_rate == 2)
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star-half"></i>
								<i class="icon-star-empty"></i>
								@elseif($result['detail']['product_data'][0]->avarage_rate == 3)
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star-half"></i>
								<i class="icon-star-empty"></i>
								@elseif($result['detail']['product_data'][0]->avarage_rate == 4)
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star-half"></i>
								<i class="icon-star-empty"></i>
								@elseif($result['detail']['product_data'][0]->avarage_rate == 5)
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star-half"></i>
								<i class="icon-star-empty"></i>
								@else
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star-half"></i>
								<i class="icon-star-empty"></i>
								@endif
							</div>
							<a class="product-page-gotocomments-js" href="#">({{$result['detail']['product_data'][0]->total_user_rated}} Customer Review)</a>
							<div class="product-page-gotocomments-js" @if($result['detail']['product_data'][0]->products_max_stock==9999) style="display:none;" @endif id="min_max_setting2"><b>@lang('website.Max Order Limit') :</b>{{$result['detail']['product_data'][0]->products_max_stock}}</div>
          

		  
						</div>


						<div class="tt-wrapper">
							Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
						</div>



























						
						<div class="tt-wrapper">

						<form name="attributes" id="add-Product-form" method="post">
						<input type="hidden" name="products_id" value="{{$result['detail']['product_data'][0]->products_id}}">
              
              <input type="hidden" name="products_price" id="products_price"
                  value="@if(!empty($result['detail']['product_data'][0]->flash_price)) {{$result['detail']['product_data'][0]->flash_price+0}} @elseif(!empty($result['detail']['product_data'][0]->discount_price)){{$result['detail']['product_data'][0]->discount_price+0}}@else{{$result['detail']['product_data'][0]->products_price+0}}@endif">

              <input type="hidden" name="checkout" id="checkout_url"
                value="@if(!empty(app('request')->input('checkout'))) {{ app('request')->input('checkout') }} @else false @endif">

              <input type="hidden" id="max_order"
                value="@if(!empty($result['detail']['product_data'][0]->products_max_stock)){{ $result['detail']['product_data'][0]->products_max_stock }}@else 0 @endif">
              
              @if(!empty($result['cart']))
              <input type="hidden" name="customers_basket_id" value="{{$result['cart'][0]->customers_basket_id}}">
              @endif

              <div class="badges" style="margin-bottom: 16px;">

                <?php
                  $current_date = date("Y-m-d", strtotime("now"));

                  $string = substr($result['detail']['product_data'][0]->products_date_added, 0, strpos($result['detail']['product_data'][0]->products_date_added, ' '));
                  $date=date_create($string);
         

                  $after_date = date_format($date,"Y-m-d");

                  if($after_date>=$current_date){
                    print '<span class="ribbon new" style="top: 0px;">';
                    print __('website.New');
                    print '</span>';
                  }
                ?>

                <?php
                $discount_percentage = 0;
                if(!empty($result['detail']['product_data'][0]->discount_price)){
                  $discount_price = $result['detail']['product_data'][0]->discount_price * session('currency_value');
                }
                $orignal_price = $result['detail']['product_data'][0]->products_price * session('currency_value');

                if(!empty($result['detail']['product_data'][0]->discount_price)){

                  if(($orignal_price+0)>0){
                    $discounted_price = $orignal_price-$discount_price;
                    $discount_percentage = $discounted_price/$orignal_price*100;
                  }else{
                    $discount_percentage = 0;
                    $discounted_price = 0;
                  }
                }
                ?>                
                @if($discount_percentage>0)
                  <span class="ribbon off" style="left: 85px;top: 0px;" data-toggle="tooltip" title="<?php echo (int)$discount_percentage; ?>% @lang('website.off')"><?php echo (int)$discount_percentage; ?>%</span>    
                @endif
                
                @if($result['detail']['product_data'][0]->is_feature == 1)
                  <span class="ribbon hot" style="left: 85px;top: 0px;">@lang('website.Featured')</span>
                @endif
                <br>
              </div>


              @if(!empty($result['detail']['product_data'][0]->flash_start_date))
              <div class="countdown pro-timer" style="position: relative; bottom: 1px;" data-toggle="tooltip" data-placement="bottom"
                title="@lang('website.Countdown Timer')"
                id="counter_{{$result['detail']['product_data'][0]->products_id}}">
                <div class='custom_countdown'>0D 00:00:00</div>
              </div>
              @endif
							<div class="tt-row-custom-01">
								<div class="col-item">
									<div class="tt-input-counter style-01">
		
									<span class="minus-btn"></span>
										<input type="text" value="1" size="5">
										<span class="plus-btn"></span>
									</div>
								</div>
								<div class="col-item">


								@if(!empty($result['detail']['product_data'][0]->flash_start_date) and $result['detail']['product_data'][0]->server_time < $result['detail']['product_data'][0]->flash_start_date )

@else

  @if($result['detail']['product_data'][0]->products_type == 0)

	@if($result['commonContent']['settings']['Inventory'])
	  @if($result['detail']['product_data'][0]->defaultStock <= 0)
	  <button class="btn btn-lg swipe-to-top  btn-danger " type="button">@lang('website.Out of Stock')</button>
	  @else
	  <button class="btn btn-secondary btn-lg swipe-to-top add-to-Cart" type="button" products_id="{{$result['detail']['product_data'][0]->products_id}}">@lang('website.Add to Cart')</button>
	  @endif
	@else
	<button class="btn btn-secondary btn-lg swipe-to-top add-to-Cart" type="button" products_id="{{$result['detail']['product_data'][0]->products_id}}"   style="border:2px solid red;">@lang('website.Add to Cart')</button>
	@endif

  @else

	@if($result['commonContent']['settings']['Inventory'])
	<button class="btn btn-secondary btn-lg swipe-to-top  add-to-Cart stock-cart" hidden type="button" products_id="{{$result['detail']['product_data'][0]->products_id}}">@lang('website.Add to Cart')</button>
	<button class="btn btn-danger btn btn-lg swipe-to-top  stock-out-cart" hidden type="button">@lang('website.Out of Stock')</button>
	@else
	<button class="btn btn-secondary btn-lg swipe-to-top  add-to-Cart" type="button"
	  products_id="{{$result['detail']['product_data'][0]->products_id}}" > <i class="icon-f-39"></i>@lang('website.Add to Cart')</button>
	@endif
  @endif

@endif
@if($result['detail']['product_data'][0]->products_type == 2)
                    <a href="{{$result['detail']['product_data'][0]->products_url}}" target="_blank"
                      class="btn btn-secondary btn-lg swipe-to-top">@lang('website.External Link')</a>
                    @endif
									<!-- <a href="#" class="btn btn-lg"><i class="icon-f-39"></i>ADD TO CART</a> -->
								</div>
				
							</div>
			
						</div>
						</form>
						<div class="tt-collapse-block">
							<div class="tt-item">
								<div class="tt-collapse-title">DESCRIPTION</div>
								<div class="tt-collapse-content">
								<?=stripslashes($result['detail']['product_data'][0]->products_description)?>
							 Weight:	{{$result['detail']['product_data'][0]->products_weight}}{{$result['detail']['product_data'][0]->products_weight_unit}}</td>
                             Manufacture:{{$result['detail']['product_data'][0]->manufacturer_name}}
								</div>
							</div>
						
							<div class="tt-item">
								<div class="tt-collapse-title tt-poin-comments">REVIEWS (3)</div>
								<div class="tt-collapse-content">
									<div class="tt-review-block">
										<div class="tt-row-custom-02">
											<div class="col-item">
											@if(isset($result['detail']['product_data'][0]->reviewed_customers))
                  @foreach($result['detail']['product_data'][0]->reviewed_customers as $key=>$rev)
                  
												<h2 class="tt-title">
												@if($rev->reviews_rating == 1)
												<i class="icon-star voted"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
						  @elseif($rev->reviews_rating == 2)
						  <i class="icon-star voted"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
						  @elseif($rev->reviews_rating == 3)
						  <i class="icon-star voted"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
						  @elseif($rev->reviews_rating == 4)
						  <i class="icon-star voted"></i>
                          <i class="icon-star voted"></i>
                          <i class="icon-star voted"></i>
                          <i class="icon-star voted"></i>
                          <i class="icon-star"></i>
						  @elseif($rev->reviews_rating == 5)
						  <i class="icon-star voted"></i>
                          <i class="icon-star voted"></i>
                          <i class="icon-star voted"></i>
                          <i class="icon-star voted"></i>
                          <i class="icon-star"></i>
						  @else
						         <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
													@endif
												</h2>
												@endforeach
                @endif

											</div>
											<div class="col-item">
												<a href="#">Write a review</a>
											</div>
										</div>
										<div class="tt-review-comments">
											<!-- <div class="tt-item">
												<div class="tt-avatar">
													<a href="#"><img data-src="images/product/single/review-comments-img-01.jpg" alt=""></a>
												</div>
												<div class="tt-content">
													<div class="tt-rating">
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star-half"></i>
														<i class="icon-star-empty"></i>
													</div>
													<div class="tt-comments-info">
														<span class="username">by <span>ADRIAN</span></span>
														<span class="time">on January 14, 2017</span>
													</div>
													<div class="tt-comments-title">Very Good!</div>
													<p>
														Ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
													</p>
												</div>
											</div>
											<div class="tt-item">
												<div class="tt-avatar">
													<a href="#"><img data-src="images/product/single/review-comments-img-02.jpg" alt=""></a>
												</div>
												<div class="tt-content">
													<div class="tt-rating">
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star-half"></i>
														<i class="icon-star-empty"></i>
													</div>
													<div class="tt-comments-info">
														<span class="username">by <span>JESICA</span></span>
														<span class="time">on January 14, 2017</span>
													</div>
													<div class="tt-comments-title">Bad!</div>
													<p>
														Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
													</p>
												</div>
											</div>
											<div class="tt-item">
												<div class="tt-avatar">
													<a href="#"></a>
												</div>
												<div class="tt-content">
													<div class="tt-rating">
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star-half"></i>
														<i class="icon-star-empty"></i>
													</div>
													<div class="tt-comments-info">
														<span class="username">by <span>ADAM</span></span>
														<span class="time">on January 14, 2017</span>
													</div>
													<div class="tt-comments-title">Very Good!</div>
													<p>
														Diusmod tempor incididunt ut labore et dolore magna aliqua.
													</p>
												</div>
											</div> -->
										</div>
									
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-indent wrapper-social-icon">
		<div class="container">
			<ul class="tt-social-icon justify-content-center">
				<li><a class="icon-g-64" href="http://www.facebook.com/"></a></li>
				<li><a class="icon-h-58" href="http://www.facebook.com/"></a></li>
				<li><a class="icon-g-66" href="http://www.twitter.com/"></a></li>
				<li><a class="icon-g-67" href="http://www.google.com/"></a></li>
				<li><a class="icon-g-70" href="https://instagram.com/"></a></li>
			</ul>
		</div>
	</div>
	<div class="container-indent">
		<div class="container container-fluid-custom-mobile-padding">
			<div class="tt-block-title text-left">
				<h3 class="tt-title-small">RELATED PRODUCT</h3>
			</div>
			<div class="tt-carousel-products row arrow-location-right-top tt-alignment-img tt-layout-product-item slick-animated-show-js">
			@foreach($result['simliar_products']['product_data'] as $key=>$products)
        @if($result['detail']['product_data'][0]->products_id != $products->products_id)
        <div class="item">
          @include('web.common.product')
        </div>
        @endif
        @endforeach
			</div>
		</div>
	</div>
</div>
</div>







<script>

  jQuery(document).ready(function(e) {
  
    @if(!empty($result['detail']['product_data'][0]->flash_start_date))
        @if( date("Y-m-d",$result['detail']['product_data'][0]->server_time) >= date("Y-m-d",$result['detail']['product_data'][0]->flash_start_date))
        var product_div_{{$result['detail']['product_data'][0]->products_id}} = 'product_div_{{$result['detail']['product_data'][0]->products_id}}';
      var  counter_id_{{$result['detail']['product_data'][0]->products_id}} = 'counter_{{$result['detail']['product_data'][0]->products_id}}';
      var inputTime_{{$result['detail']['product_data'][0]->products_id}} = "{{date('M d, Y H:i:s' ,$result['detail']['product_data'][0]->flash_expires_date)}}";
  
      // Set the date we're counting down to
      var countDownDate_{{$result['detail']['product_data'][0]->products_id}} = new Date(inputTime_{{$result['detail']['product_data'][0]->products_id}}).getTime();
  
      // Update the count down every 1 second
      var x_{{$result['detail']['product_data'][0]->products_id}} = setInterval(function() {
  
        // Get todays date and time
        var now = new Date().getTime();
  
        // Find the distance between now and the count down date
        var distance_{{$result['detail']['product_data'][0]->products_id}} = countDownDate_{{$result['detail']['product_data'][0]->products_id}} - now;
  
        // Time calculations for days, hours, minutes and seconds
        var days_{{$result['detail']['product_data'][0]->products_id}} = Math.floor(distance_{{$result['detail']['product_data'][0]->products_id}} / (1000 * 60 * 60 * 24));    

        var hours_{{$result['detail']['product_data'][0]->products_id}} = Math.floor((distance_{{$result['detail']['product_data'][0]->products_id}} % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        if (hours_{{$result['detail']['product_data'][0]->products_id}} < 10) hours_{{$result['detail']['product_data'][0]->products_id}} = '0' + hours_{{$result['detail']['product_data'][0]->products_id}};

        var minutes_{{$result['detail']['product_data'][0]->products_id}} = Math.floor((distance_{{$result['detail']['product_data'][0]->products_id}} % (1000 * 60 * 60)) / (1000 * 60));
        if (minutes_{{$result['detail']['product_data'][0]->products_id}} < 10) minutes_{{$result['detail']['product_data'][0]->products_id}} = '0' + minutes_{{$result['detail']['product_data'][0]->products_id}};

        var seconds_{{$result['detail']['product_data'][0]->products_id}} = Math.floor((distance_{{$result['detail']['product_data'][0]->products_id}} % (1000 * 60)) / 1000);
        if (seconds_{{$result['detail']['product_data'][0]->products_id}} < 10) seconds_{{$result['detail']['product_data'][0]->products_id}} = '0' + seconds_{{$result['detail']['product_data'][0]->products_id}};

        var days_text = "@lang('website.Days')";
        // Display the result in the element with id="demo"

        // document.getElementById(counter_id_{{$result['detail']['product_data'][0]->products_id}}).innerHTML = "<span class='days'>"+days_{{$result['detail']['product_data'][0]->products_id}} + "<small>@lang('website.Days')</small></span> <span class='hours'>" + hours_{{$result['detail']['product_data'][0]->products_id}} + "<small>@lang('website.Hours')</small></span> <span class='mintues'> "
        // + minutes_{{$result['detail']['product_data'][0]->products_id}} + "<small>@lang('website.Minutes')</small></span> <span class='seconds'>" + seconds_{{$result['detail']['product_data'][0]->products_id}} + "<small>@lang('website.Seconds')</small></span> ";

        document.getElementById(counter_id_{{$result['detail']['product_data'][0]->products_id}}).innerHTML = "<div class='custom_countdown'>"+days_{{$result['detail']['product_data'][0]->products_id}} + "D " + hours_{{$result['detail']['product_data'][0]->products_id}} + ":" + minutes_{{$result['detail']['product_data'][0]->products_id}} + ":" + seconds_{{$result['detail']['product_data'][0]->products_id}} + "</div>";
  
        // If the count down is finished, write some text
        if (distance_{{$result['detail']['product_data'][0]->products_id}} < 0) {
        clearInterval(x_{{$result['detail']['product_data'][0]->products_id}});
        //document.getElementById(counter_id_{{$result['detail']['product_data'][0]->products_id}}).innerHTML = "EXPIRED";
        document.getElementById('product_div_{{$result['detail']['product_data'][0]->products_id}}').remove();
        }
      }, 1000);
          @endif
      @endif

  });
</script>