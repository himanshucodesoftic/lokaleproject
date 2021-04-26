



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
			<h1 class="tt-title-subpages noborder">SHOPPING CART</h1>

			@if(session()->has('message'))
           <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           </div>
       @endif
       @if($result['commonContent']['settings']['Inventory'])
       @if(session::get('out_of_stock') == 1)
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
          @lang('website.Cart out stock') 
               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
        @endif
        @endif
        
        @if(session::get('min_order') == 1)
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
          @lang('website.Cart min order') {{ session::get('min_order_value') }}
               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
        @endif

        @if(session::get('max_order') == 1)
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
          @lang('website.Cart max order')   {{ session::get('max_order_value') }}
               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
        @endif
        
        @if(session::get('min_order_price') == 1)
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
          @lang('website.Min order Price')   {{ session::get('min_order_price_value') }}
               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
        @endif
        @if(session::get('coupon_usage_per_user_limit') == 1)
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
          @lang('website.Coupon Removed')
               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
        @endif
			<div class="tt-shopcart-table-02">
			<form method='POST' id="update_cart_form" action='{{ URL::to('/updateCart')}}' >
				<table>
				<?php
                $price = 0;
               ?>
              @foreach( $result['cart'] as $products)
              <?php
              $price+= $products->final_price * $products->customers_basket_quantity;
              ?>
              @if($result['commonContent']['settings']['Inventory'])
              <tbody  @if(session::get('out_of_stock') == 1 and session::get('out_of_stock_product') == $products->products_id )style="	box-shadow: 0 20px 50px rgba(0,0,0,.5); border:2px solid #FF9999;"@elseif(session::get('min_order') == 1 and session::get('min_order_product') == $products->products_id)style="	box-shadow: 0 20px 50px rgba(0,0,0,.5); border:2px solid #FF9999;"@elseif(session::get('max_order') == 1 and session::get('max_order_product') == $products->products_id)style="	box-shadow: 0 20px 50px rgba(0,0,0,.5); border:2px solid #FF9999;"@endif>
              @else
               
              <tbody  @if(session::get('min_order') == 1 and session::get('min_order_product') == $products->products_id)style="	box-shadow: 0 20px 50px rgba(0,0,0,.5); border:2px solid #FF9999;"@elseif(session::get('max_order') == 1 and session::get('max_order_product') == $products->products_id)style="	box-shadow: 0 20px 50px rgba(0,0,0,.5); border:2px solid #FF9999;"@endif>
              @endif
              
                  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                  <input type="hidden" name="cart[]" value="{{$products->customers_basket_id}}">

					<tbody>
						<tr>
							<td>
								<div class="tt-product-img">
									<img src="{{asset('').$products->image_path}}" data-src="{{asset('').$products->image_path}}" alt="">
								</div>
							</td>
							<td>
								<h2 class="tt-title">
									<a href="{{ URL::to('/deleteCart?id='.$products->customers_basket_id)}}">
									<?php
                              $cates = '';  
                              ?>
                              @foreach($products->categories as $key=>$category)
                                  
                                <?php
                                  $cates =  "<a href=".url('shop?category='.$category->categories_name).">".$category->categories_name."</a>";
                                ?>  
                                
                              @endforeach
                              <?php 
                              echo $cates;
                              ?>

									
{{$products->products_name}}
@if(isset($products->attributes))
                              @foreach($products->attributes as $attributes)
                                <small><b>{{$attributes->attribute_name}}:</b> {{$attributes->attribute_value}}</small>
                              @endforeach
                              @endif

</a>
								</h2>
								<ul class="tt-list-description">
									<li></li>
									<li></li>
								</ul>
								<ul class="tt-list-parameters">
									<li>
										<div class="tt-price">
										<?php
                      if(!empty($products->discount_price)){
                          $discount_price = $products->discount_price * session('currency_value');
                      }
                      if(!empty($products->final_price)){
                        $flash_price = $products->final_price * session('currency_value');
                      }
                      $orignal_price = $products->price * session('currency_value');
                      
                       if(!empty($products->discount_price)){

                        if(($orignal_price+0)>0){
                          $discounted_price = $orignal_price-$discount_price;
                          $discount_percentage = $discounted_price/$orignal_price*100;
                       }else{
                         $discount_percentage = 0;
                         $discounted_price = 0;
                     }
                   }
                   ?>
      @if(!empty($products->final_price))
                    {{Session::get('symbol_left')}}{{$flash_price+0}}{{Session::get('symbol_right')}}
                    @elseif(!empty($products->discount_price))
                    {{Session::get('symbol_left')}}{{$discount_price+0}}{{Session::get('symbol_right')}}
                    <span> {{Session::get('symbol_left')}}{{$orignal_price+0}}{{Session::get('symbol_right')}}</span>
                    @else
                    {{Session::get('symbol_left')}}{{$orignal_price+0}}{{Session::get('symbol_right')}}
                    @endif
					{{Session::get('symbol_left')}}{{$products->final_price * $products->customers_basket_quantity * session('currency_value')}}{{Session::get('symbol_right')}}
             

										</div>
									</li>
									<li>
										<div class="detach-quantity-mobile"></div>
									</li>
									<li>
										<div class="tt-price subtotal">
										
										</div>
									</li>
								</ul>
							</td>
							<td>
								<div class="tt-price">
								
								</div>
							</td>
							<td>
								<div class="detach-quantity-desctope">
									<div class="tt-input-counter style-01">
										<span class="minus-btn"></span>
										<input name="quantity[]" type="text" size="5" readonly value="{{$products->customers_basket_quantity}}" class="form-control qty" min="{{$products->min_order}}" max="{{$products->max_order}}">
                            
										<!-- <input type="text" value="1" size="5"> -->
										<span class="plus-btn"></span>
									</div>
								</div>
							</td>
							<td>
								<div class="tt-price subtotal">
								@if(!empty($products->final_price))
                    {{Session::get('symbol_left')}}{{$flash_price+0}}{{Session::get('symbol_right')}}
                    @elseif(!empty($products->discount_price))
                    {{Session::get('symbol_left')}}{{$discount_price+0}}{{Session::get('symbol_right')}}
                    <span> {{Session::get('symbol_left')}}{{$orignal_price+0}}{{Session::get('symbol_right')}}</span>
                    @else
                    {{Session::get('symbol_left')}}{{$orignal_price+0}}{{Session::get('symbol_right')}}
                    @endif

								</div>
							</td>
							<td>
								<a href="{{ URL::to('/deleteCart?id='.$products->customers_basket_id)}}" class="tt-btn-close"></a>
							</td>
						</tr>
						
						
					</tbody>
					@endforeach
				</table>
				<div class="tt-shopcart-btn">
					<div class="col-left">
					</div>
					<div class="col-right">
						<a class="btn-link" href="#"><i class="icon-h-48"></i>UPDATE CART</a>
					</div>
				</div>
			</div>
			<div class="tt-shopcart-col">
				<div class="row">
					<div class="col-md-8 col-lg-8">
						<div class="tt-shopcart-box">
							<h4 class="tt-title">
								Avail Discount
							</h4>

							<form class="form-default">
							
							@if(!empty(session('coupon')))
								<div class="form-group">
								@foreach(session('coupon') as $coupons_show)
									<label for="address_zip">Coupon Code <sup>*</sup></label>
									<input type="text" name="Cuponcode" class="form-control" id="couponCode" placeholder="Coupon code">
								</div>
								<a href="{{ URL::to('/removeCoupon/'.$coupons_show->coupans_id)}}" class="btn btn-border">Apply Coupon</a>
	
								@endforeach
								
							</form>
						</div>
					</div>
			
					<div class="col-md-6 col-lg-4">
						<div class="tt-shopcart-box tt-boredr-large">
							<table class="tt-shopcart-table01">
								<tbody>
									<tr>
										<th>SUBTOTAL</th>
										<td>$ @php
                      if(!empty(session('coupon_discount'))){
                        $coupon_amount = session('currency_value') * session('coupon_discount');  
                      }else{
                        $coupon_amount = 0;
                      }
                      @endphp
                      {{Session::get('symbol_left')}}{{session('currency_value') * $price+0}}{{Session::get('symbol_right')}}
              
					  {{Session::get('symbol_left')}}{{number_format((float)$coupon_amount, 2, '.', '')+0}}{{Session::get('symbol_right')}}	</td>
					@endif		
					</tr>
								</tbody>
								<tfoot>
									<tr>
										<th>GRAND TOTAL</th>
										<td>                </td>
									</tr>
								</tfoot>
							</table>
							<a href="{{ url('/checkout')}}" class="btn btn-lg"><span class="icon icon-check_circle"></span>PROCEED TO CHECKOUT</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>













