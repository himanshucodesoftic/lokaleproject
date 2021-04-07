
<div class="tt-breadcrumb">
	<div class="container">
		<ul>
			<li><a href="{{url('/')}}">Home</a></li>
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
			<!-- <li><a href="listing-left-column.html">Shop</a></li>
			<li>T-Shirt</li> -->
		</ul>
	</div>
</div>
<div id="tt-pageContent">
	<div class="container-indent">
		<!-- mobile product slider  -->
		<div class="tt-mobile-product-layout visible-xs">
			<div class="tt-mobile-product-slider arrow-location-center" id="zoom-mobile__slider">
      <a href="{{asset('').$result['detail']['product_data'][0]->default_images }}" title="Photo title" data-effect="mfp-zoom-in"><img
                src="{{asset('').$result['detail']['product_data'][0]->default_images }}" alt="" style="width: 100%;margin-bottom: 10px;"></a>
      
				<div>
					<div class="tt-video-block">
						<a href="#" class="link-video"></a>
						<!-- <video class="movie" src="video/video.mp4" poster="video/video_img.jpg"></video> -->
					</div>
				</div>
				<!-- <div>
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="http://www.youtube.com/embed/GhyKqj_P2E4" allowfullscreen></iframe>
					</div>
				</div> -->
			</div>
			<div id="zoom-mobile__layout">
				<a class="zoom-mobile__close btn" href="#">Back</a>
				<div id="tt-fotorama" data-nav="thumbs" data-auto="false" data-allowfullscreen="false" dataa-fit="cover" ></div>
			</div>
		</div>
		<!-- /mobile product slider  -->
		<div class="container container-fluid-mobile">
			<div class="row">
				<div class="col-6 hidden-xs">
					<div class="product-images-col" data-scrollzoom="false">
						<div class="item">
            <a href="{{asset('').$result['detail']['product_data'][0]->default_images }}" title="Photo title" data-effect="mfp-zoom-in"><img
                src="{{asset('').$result['detail']['product_data'][0]->default_images }}" alt="" style="width: 100%;margin-bottom: 10px;"></a>
         
						</div>
						<!-- <div class="item">
							<img class="zoom-product" src="images/product/product-03-02.jpg" alt="">
						</div>
						<div class="item">
							<img class="zoom-product" src="images/product/product-03-03.jpg" alt="">
						</div>
						<div class="item">
							<img class="zoom-product" src="images/product/product-03-04.jpg" alt="">
						</div> -->
						<div class="item">
							<div class="video-link-product" data-toggle="modal" data-type="video" data-target="#modalVideoProduct" data-value="video/video.mp4" data-poster="video/video_img.jpg">
								<!-- <i class="icon-f-32"></i> -->
							</div>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="tt-product-single-info">
						<div class="tt-add-info">
							<ul>
								<li><span>Product ID:</span>{{$result['detail']['product_data'][0]->products_id}}</li>
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
              <p>
              @if($result['detail']['product_data'][0]->products_min_order>0)
                <div class="pro-single-info" id="min_max_setting3"><b>Min Order Limit :
                  </b>{{$result['detail']['product_data'][0]->products_min_order}}</div>
              @endif

              <div class="pro-single-info" @if($result['detail']['product_data'][0]->products_max_stock==9999) style="display:none;" @endif id="min_max_setting2"><b>@lang('website.Max Order Limit') :</b>{{$result['detail']['product_data'][0]->products_max_stock}}</div>
            </p>
                </li>
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
                ?>
                </li> 
                <li><span>Quantity</span> 

</li>
							</ul>
						</div>
						<h1 class="tt-title">{{$result['detail']['product_data'][0]->products_name}}</h1>
						<div class="tt-price">
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
							<span class="new-price">    @if($discounted_price > 0)
                    <span class="new_price">{{Session::get('symbol_left')}}{{$discount_price}}{{Session::get('symbol_right')}}</span>
                    <span class="percentage">-{{(int)$discount_percentage}}% </span>&nbsp;
                    <span class="old_price">{{Session::get('symbol_left')}}{{$orignal_price}}{{Session::get('symbol_right')}}</span>
                    @else
                    <span class="new_price">{{Session::get('symbol_left')}}{{$orignal_price}}{{Session::get('symbol_right')}}</span>
                    @endif</span>
							<span class="old-price"></span>
						</div>
						<div class="tt-review">
							<div class="tt-rating">

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
                        <button class="btn btn-secondary btn-lg swipe-to-top add-to-Cart" type="button" products_id="{{$result['detail']['product_data'][0]->products_id}}">@lang('website.Add to Cart')</button>
                         @endif

                      @else

                        @if($result['commonContent']['settings']['Inventory'])
						<button class="btn btn-secondary btn-lg swipe-to-top  add-to-Cart stock-cart" hidden type="button" products_id="{{$result['detail']['product_data'][0]->products_id}}">@lang('website.Add to Cart')</button>
                        <button class="btn btn-danger btn btn-lg swipe-to-top  stock-out-cart" hidden type="button">@lang('website.Out of Stock')</button>
                        @else
						<button class="btn btn-secondary btn-lg swipe-to-top  add-to-Cart" type="button"
                          products_id="{{$result['detail']['product_data'][0]->products_id}}">@lang('website.Add to Cart')</button>
                        @endif
                      @endif

                    @endif

                    @if($result['detail']['product_data'][0]->products_type == 2)
                    <a href="{{$result['detail']['product_data'][0]->products_url}}" target="_blank"
                      class="btn btn-secondary btn-lg swipe-to-top">@lang('website.External Link')</a>
                    @endif



















							</div>
							<span>{{$result['detail']['product_data'][0]->total_user_rated}} </span>
						</div>
						<div class="tt-wrapper">
							<!-- Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. -->
						</div>
						<div class="tt-wrapper">
							<div class="tt-row-custom-01">
								<div class="col-item">
									<div class="tt-input-counter style-01">
										<span class="minus-btn"></span>
										<input type="text" value="1" size="5"/>
										<span class="plus-btn"></span>
									</div>
								</div>
								<div class="col-item">










                
									<!-- <a href="#" class="btn btn-lg"><i class="icon-f-39"></i>ADD TO CART</a> -->
								</div>
							</div>
						</div>
						<div class="tt-wrapper">
							<ul class="tt-list-btn">
								<li><a class="btn-link" href="#"><i class="icon-n-072"></i>ADD TO WISH LIST</a></li>
								<li><a class="btn-link" href="#"><i class="icon-n-08"></i>ADD TO COMPARE</a></li>
							</ul>
						</div>
						<div class="tt-wrapper">
							<div class="tt-add-info">
								<ul>
									<!-- <li><span>Vendor:</span> Polo</li>
									<li><span>Product Type:</span> T-Shirt</li>
									<li><span>Tag:</span> <a href="#">T-Shirt</a>, <a href="#">Women</a>, <a href="#">Top</a></li> -->
								</ul>
							</div>
						</div>
						<div class="tt-collapse-block">
							<div class="tt-item">
								<div class="tt-collapse-title">DESCRIPTION</div>
								<div class="tt-collapse-content">
                <?=stripslashes($result['detail']['product_data'][0]->products_description)?>
									<!-- Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. -->
								</div>
							</div>
							<div class="tt-item">
								<div class="tt-collapse-title">ADDITIONAL INFORMATION</div>
                <p>
								<div class="tt-collapse-content">
									<table class="tt-table-03">
										<tbody>
											<tr>
												<td>Color:</td>
												<td>Blue, Purple, White</td>
											</tr>
											<tr>
												<td>Size:</td>
												<td>20, 24</td>
											</tr>
											<tr>
												<td>Material:</td>
												<td>100% Polyester</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tt-item">
								<div class="tt-collapse-title">REVIEWS (3)</div>
								<div class="tt-collapse-content">
									<div class="tt-review-block">
										<div class="tt-row-custom-02">
											<div class="col-item">
												<h2 class="tt-title">
													1 REVIEW FOR VARIABLE PRODUCT
												</h2>
											</div>
											<div class="col-item">
												<a href="#">Write a review</a>
											</div>
										</div>
										<div class="tt-review-comments">
											<div class="tt-item">
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
											</div>
										</div>
										<div class="tt-review-form">
											<div class="tt-message-info">
												BE THE FIRST TO REVIEW <span>“BLOUSE WITH SHEER &AMP; SOLID PANELS”</span>
											</div>
											<p>Your email address will not be published. Required fields are marked *</p>
											<div class="tt-rating-indicator">
												<div class="tt-title">
													YOUR RATING *
												</div>
												<div class="tt-rating">
													<i class="icon-star"></i>
													<i class="icon-star"></i>
													<i class="icon-star"></i>
													<i class="icon-star-half"></i>
													<i class="icon-star-empty"></i>
												</div>
											</div>
											<!-- <form class="form-default">
												<div class="form-group">
													<label for="inputName" class="control-label">YOUR NAME *</label>
													<input type="email" class="form-control" id="inputName" placeholder="Enter your name">
												</div>
												<div class="form-group">
													<label for="inputEmail" class="control-label">COUPONE E-MAIL *</label>
													<input type="password" class="form-control" id="inputEmail" placeholder="Enter your e-mail">
												</div>
												<div class="form-group">
													<label for="textarea" class="control-label">YOUR REVIEW *</label>
													<textarea class="form-control"  id="textarea" placeholder="Enter your review" rows="8"></textarea>
												</div>
												<div class="form-group">
													<button type="submit" class="btn">SUBMIT</button>
												</div>
											</form> -->
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
				<div class="col-2 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img data-lazy="images/product/product-16.jpg" alt=""></span>
								<span class="tt-img-roll-over"><img data-lazy="images/product/product-16-02.jpg" alt=""></span>
							</a>
						</div>
						<div class="tt-description">
							<div class="tt-row">
								<ul class="tt-add-info">
									<li><a href="#">T-SHIRTS</a></li>
								</ul>
							</div>
							<h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
							<div class="tt-price">
								$24
							</div>
							<div class="tt-product-inside-hover">
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
								</div>
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
									<a href="#" class="tt-btn-wishlist"></a>
									<a href="#" class="tt-btn-compare"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-2 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img data-lazy="images/product/product-17.jpg" alt=""></span>
								<span class="tt-img-roll-over"><img data-lazy="images/product/product-17-01.jpg" alt=""></span>
							</a>
						</div>
						<div class="tt-description">
							<div class="tt-row">
								<ul class="tt-add-info">
									<li><a href="#">T-SHIRTS</a></li>
								</ul>
								<div class="tt-rating">
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star-half"></i>
									<i class="icon-star-empty"></i>
								</div>
							</div>
							<h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
							<div class="tt-price">
								$8
							</div>


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
                  // date_add($date,date_interval_create_from_date_string($web_setting[20]->value." days"));

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

              <div class="pro-counter" style='margin-top: 35px;' @if(!empty($result['detail']['product_data'][0]->flash_start_date) and $result['detail']['product_data'][0]->server_time < $result['detail']['product_data'][0]->flash_start_date ) style="display: none" @endif>              

                <div class="row">
                  <label class="col-xl-7 col-lg-5  col-md-6 col-6" style='font-size: 21px;'><strong>@lang('website.Quantity')</strong></label>
                  <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                    <div class="numbers-row">
                      <input type="text" readonly name="quantity" class="qty2"
                      value="@if(!empty($result['cart'])) {{$result['cart'][0]->customers_basket_quantity}} @else @if($result['detail']['product_data'][0]->products_min_order>0 and $result['detail']['product_data'][0]->defaultStock > $result['detail']['product_data'][0]->products_min_order) {{$result['detail']['product_data'][0]->products_min_order}} @else 1 @endif @endif"
                      min="{{$result['detail']['product_data'][0]->products_min_order}}"
                      max="{{$result['detail']['product_data'][0]->products_max_stock}}">

                      <div class="inc button_inc">+</div>
											<div class="dec button_inc">-</div>
                      
                    </div>
                  </div>
                </div>                

              </div>

              
              <div class="row mt-3">
                <div class="col-lg-7 col-md-6">
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

                  <div class="price_main">
                    @if($discounted_price > 0)
                    <span class="new_price">{{Session::get('symbol_left')}}{{$discount_price}}{{Session::get('symbol_right')}}</span>
                    <span class="percentage">-{{(int)$discount_percentage}}% </span>&nbsp;
                    <span class="old_price">{{Session::get('symbol_left')}}{{$orignal_price}}{{Session::get('symbol_right')}}</span>
                    @else
                    <span class="new_price">{{Session::get('symbol_left')}}{{$orignal_price}}{{Session::get('symbol_right')}}</span>
                    @endif
                  </div>
                </div>
                <div class="col-lg-5 col-md-6">
                  <div class="btn_add_to_cart">
                    @if(!empty($result['detail']['product_data'][0]->flash_start_date) and $result['detail']['product_data'][0]->server_time < $result['detail']['product_data'][0]->flash_start_date )

                    @else

                      @if($result['detail']['product_data'][0]->products_type == 0)

                        @if($result['commonContent']['settings']['Inventory'])
                          @if($result['detail']['product_data'][0]->defaultStock <= 0)
                          <button class="btn btn-lg swipe-to-top  btn-danger " type="button">@lang('website.Out of Stock')</button>
                          @else
                          <button class="btn btn-secondary btn-lg swipe-to-top add-to-Cart" type="button" products_id="{{$result['detail']['product_data'][0]->products_id}}">Add to Cart</button>
                          @endif
                        @else
                        <button class="btn btn-secondary btn-lg swipe-to-top add-to-Cart" type="button" products_id="{{$result['detail']['product_data'][0]->products_id}}">Add to Cart</button>
                        @endif

                      @else

                        @if($result['commonContent']['settings']['Inventory'])
                        <button class="btn btn-secondary btn-lg swipe-to-top  add-to-Cart stock-cart" hidden type="button" products_id="{{$result['detail']['product_data'][0]->products_id}}">Add to Cart</button>
                        <button class="btn btn-danger btn btn-lg swipe-to-top  stock-out-cart" hidden type="button">@lang('website.Out of Stock')</button>
                        @else
                        <button class="btn btn-secondary btn-lg swipe-to-top  add-to-Cart" type="button"
                          products_id="{{$result['detail']['product_data'][0]->products_id}}">Add to Cart</button>
                        @endif
                      @endif

                    @endif

                    @if($result['detail']['product_data'][0]->products_type == 2)
                    <a href="{{$result['detail']['product_data'][0]->products_url}}" target="_blank"
                      class="btn btn-secondary btn-lg swipe-to-top">@lang('website.External Link')</a>
                    @endif
                  </div>
                </div>
              </div>

            </form>









							<div class="tt-product-inside-hover">
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
								</div>
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
									<a href="#" class="tt-btn-wishlist"></a>
									<a href="#" class="tt-btn-compare"></a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

































































