
<div class="tt-breadcrumb">
	<div class="container">
		<ul>
			<li><a href="{{url('/')}}">Home</a></li>
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
				<table>
					<tbody>
						<tr>
							<td>
								<div class="tt-product-img">
									<img src="images/loader.svg" data-src="images/product/product-01.jpg" alt="">
								</div>
							</td>
							<td>
								<h2 class="tt-title">
									<a href="#">Flared Shift Dress</a>
								</h2>
								<ul class="tt-list-description">
									<li>Size: 22</li>
									<li>Color: Green</li>
								</ul>
								<ul class="tt-list-parameters">
									<li>
										<div class="tt-price">
											$124
										</div>
									</li>
									<li>
										<div class="detach-quantity-mobile"></div>
									</li>
									<li>
										<div class="tt-price subtotal">
											$124
										</div>
									</li>
								</ul>
							</td>
							<td>
								<div class="tt-price">
									$124
								</div>
							</td>
							<td>
								<div class="detach-quantity-desctope">
									<div class="tt-input-counter style-01">
										<span class="minus-btn"></span>
										<input type="text" value="1" size="5">
										<span class="plus-btn"></span>
									</div>
								</div>
							</td>
							<td>
								<div class="tt-price subtotal">
									$124
								</div>
							</td>
							<td>
								<a href="#" class="tt-btn-close"></a>
							</td>
						</tr>
				
				
					</tbody>
				</table>
        <div class="col-12 col-lg-12">
            <form method='POST' id="update_cart_form" action='{{ URL::to('/updateCart')}}' >
            <table class="table top-table">
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

                  <tr class="d-flex">
                  <td class="col-12 col-md-1">
                  <a href="{{ URL::to('/deleteCart?id='.$products->customers_basket_id)}}"  class="btn" >
                                  <span class="fas fa-times"></span>
                              </a> 
                  </td>
                    <td class="col-12 col-md-2" >
                      <a href="{{ URL::to('/product-detail/'.$products->products_slug)}}" class="cart-thumb">
                        <img class="img-fluid" src="{{asset('').$products->image_path}}" alt="{{$products->products_name}}"/>
                        </a>
                    </td>
                      <td class="col-12 col-md-4 item-detail-left">
                        <div class="item-detail">
                            <span><small>

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

                              
                            </small></span>
                            <h4>{{$products->products_name}}
                            </h4>
                            <div class="item-attributes">
                              @if(isset($products->attributes))
                              @foreach($products->attributes as $attributes)
                                <small><b>{{$attributes->attribute_name}}:</b> {{$attributes->attribute_value}}</small>
                              @endforeach
                              @endif
                            </div>

                            <div class="item-controls">
                                <!-- <a href="{{ url('/editcart/'.$products->customers_basket_id.'/'.$products->products_slug)}}"  class="btn" >
                                  <span class="fas fa-pencil-alt"></span>
                                </a>

                                <a href="{{ URL::to('/deleteCart?id='.$products->customers_basket_id)}}"  class="btn" >
                                  <span class="fas fa-times"></span>
                              </a> -->
                            </div>

                           
                          </div>                          

                      </td>
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
                  <td class="item-price col-12 col-md-1">
                    @if(!empty($products->final_price))
                    {{Session::get('symbol_left')}}{{$flash_price+0}}{{Session::get('symbol_right')}}
                    @elseif(!empty($products->discount_price))
                    {{Session::get('symbol_left')}}{{$discount_price+0}}{{Session::get('symbol_right')}}
                    <span> {{Session::get('symbol_left')}}{{$orignal_price+0}}{{Session::get('symbol_right')}}</span>
                    @else
                    {{Session::get('symbol_left')}}{{$orignal_price+0}}{{Session::get('symbol_right')}}
                    @endif

                   </td>
                    <td class="col-12 col-md-2 Qty">                          
                        <div class="input-group item-quantity">                          
                            <input name="quantity[]" type="text" readonly value="{{$products->customers_basket_quantity}}" class="form-control qty" min="{{$products->min_order}}" max="{{$products->max_order}}">
                            <span class="input-group-btn ">
                                <button type="button" value="quantity" class="quantity-right-plus btn qtypluscart" data-type="plus" data-field="">                                  
                                    <span class="fas fa-plus"></span>
                                </button>
                                <button type="button" value="quantity" class="quantity-left-minus btn qtyminuscart" data-type="minus" data-field="">
                                    <span class="fas fa-minus"></span>
                                </button>            
                            </span> 
                        </div>
                    </td>
                    <td class="align-middle item-total col-12 col-md-2" align="center">
                      <span class="cart_price_{{$products->customers_basket_id}}">
                        {{Session::get('symbol_left')}}{{$products->final_price * $products->customers_basket_quantity * session('currency_value')}}{{Session::get('symbol_right')}}
                        </span>
                    </td>
                  </tr>
              </tbody>
              @endforeach
            </table>
          </form>
        </div>


				<div class="tt-shopcart-btn">
					<div class="col-left">
						<a class="btn-link" href="#"><i class="icon-e-19"></i>CONTINUE SHOPPING</a>
					</div>
					<div class="col-right">
						<a class="btn-link" href="#"><i class="icon-h-02"></i>CLEAR SHOPPING CART</a>
						<a class="btn-link" href="#"><i class="icon-h-48"></i>UPDATE CART</a>
					</div>
				</div>
			</div>
			<div class="tt-shopcart-col">
				<div class="row">
					<div class="col-md-6 col-lg-4">
						<div class="tt-shopcart-box">
							<h4 class="tt-title">
								ESTIMATE SHIPPING AND TAX
							</h4>
							<p>Enter your destination to get a shipping estimate.</p>
							<form class="form-default">
								<div class="form-group">
									<label for="address_country">COUNTRY <sup>*</sup></label>
									<select id="address_country" class="form-control">
										<option>Austria</option>
										<option>Belgium</option>
										<option>Cyprus</option>
										<option>Croatia</option>
										<option>Czech Republic</option>
										<option>Denmark</option>
										<option>Finland</option>
										<option>France</option>
										<option>Germany</option>
										<option>Greece</option>
										<option>Hungary</option>
										<option>Ireland</option>
										<option>France</option>
										<option>Italy</option>
										<option>Luxembourg</option>
										<option>Netherlands</option>
										<option>Poland</option>
										<option>Portugal</option>
										<option>Slovakia</option>
										<option>Slovenia</option>
										<option>Spain</option>
										<option>United Kingdom</option>
									</select>
								</div>
								<div class="form-group">
									<label for="address_province">STATE/PROVINCE <sup>*</sup></label>
									<select id="address_province" class="form-control">
										<option>State/Province</option>
									</select>
								</div>
								<div class="form-group">
									<label for="address_zip">ZIP/POSTAL CODE <sup>*</sup></label>
									<input type="text" name="name" class="form-control" id="address_zip" placeholder="Zip/Postal Code">
								</div>
								<a href="#" class="btn btn-border">CALCULATE SHIPPING</a>
								<p>
									There is one shipping rate available for Alabama, Tanzania, United Republic Of.
								</p>
								<ul class="tt-list-dot list-dot-large">
									<li><a href="#">International Shipping at $20.00</a></li>
								</ul>
							</form>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="tt-shopcart-box">
							<h4 class="tt-title">
								NOTE
							</h4>
							<p>Add special instructions for your order...</p>
							<form class="form-default">
								<textarea class="form-control" rows="7"></textarea>
							</form>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="tt-shopcart-box tt-boredr-large">
							<table class="tt-shopcart-table01">
								<tbody>
									<tr>
										<th>SUBTOTAL</th>
										<td>$324</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th>GRAND TOTAL</th>
										<td>$324</td>
									</tr>
								</tfoot>
							</table>
							<a href="#" class="btn btn-lg"><span class="icon icon-check_circle"></span>PROCEED TO CHECKOUT</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
jQuery(function($){
	var $window = $(window),
		$ttPageContent = $('#tt-pageContent'),
		ttwindowWidth = window.innerWidth || $window.width(),
		blocks = {
			ttShopCart: $ttPageContent.find('.tt-shopcart-table, .tt-shopcart-table-02')
		};
	if (blocks.ttShopCart.length) {
		ttShopCart(ttwindowWidth);
	};
	var ttCachedWidth = $window.width();
	$window.on('resize', function () {
		var newWidth = $window.width();
		if(newWidth !== ttCachedWidth){
			ttCachedWidth = newWidth;
			var ttwindowWidth = window.innerWidth || $window.width();

			// shopping_cart.html
			if (blocks.ttShopCart.length) {
					ttShopCart(ttwindowWidth);
			};
		}
	});
	function ttShopCart(ttwindowWidth){
		ttwindowWidth <= 789 ?  insertDesctopeObj() : insertMobileObj();

		function insertDesctopeObj(){
				blocks.ttShopCart.find('tr').each(function(){
					var objDesctope = $(this).find('.detach-quantity-desctope .tt-input-counter').detach().get(0);
					$(this).find('.detach-quantity-mobile').append(objDesctope);
				});
		};
		function insertMobileObj(){
				blocks.ttShopCart.find('tr').each(function(){
					var objMobile = $(this).find('.detach-quantity-mobile .tt-input-counter').detach().get(0);
					$(this).find('.detach-quantity-desctope').append(objMobile);
				});
		};
	};
});
</script>
>