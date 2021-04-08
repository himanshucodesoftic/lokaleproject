<?php $qunatity=0; ?>
@foreach($result['commonContent']['cart'] as $cart_data)
<?php $qunatity += $cart_data->customers_basket_quantity; ?>
@endforeach


<div class="tt-cart tt-dropdown-obj" data-tooltip="Cart" data-tposition="bottom">
							<button class="tt-dropdown-toggle">
								<i class="icon-f-39"></i>
								<span class="tt-badge-cart">{{ $qunatity }}</span>
							</button>
              
              @if(count($result['commonContent']['cart'])>0)
							<div class="tt-dropdown-menu">
              <?php
        $total_amount=0;
        $qunatity=0;
      ?>
								<div class="tt-mobile-add">
									<h6 class="tt-title">SHOPPING CART</h6>
									<button class="tt-close">Close</button>
								</div>
								<div class="tt-dropdown-inner">
									<div class="tt-cart-layout">
										<!-- layout emty cart -->
										<!-- <a href="empty-cart.html" class="tt-cart-empty">
											<i class="icon-f-39"></i>
											<p>No Products in the Cart</p>
										</a> -->
										<div class="tt-cart-content">
											<div class="tt-cart-list">
												<div class="tt-item">
                        @foreach($result['commonContent']['cart'] as $cart_data)
        <?php
          $total_amount += $cart_data->final_price*$cart_data->customers_basket_quantity;
        ?>
													<a href="product.html">
														<div class="tt-item-img">
															<img src="{{asset('').$cart_data->image}}" alt="{{$cart_data->products_name}}" data-src="images/product/product-01.jpg" alt="">
														</div>
														<div class="tt-item-descriptions">
															<h2 class="tt-title">Flared Shift Dress</h2>
															<ul class="tt-add-info">
																<li>{{$cart_data->customers_basket_quantity}} x {{$cart_data->products_name}}</li>
																<li{{Session::get('symbol_left')}}{{$cart_data->final_price*session('currency_value')}}{{Session::get('symbol_right')}}</li>
															</ul>
															<div class="tt-quantity">1 X</div> <div class="tt-price">$12</div>
														</div>
													</a>
													<div class="tt-item-close">
														<a href="#" class="tt-btn-close"></a>
													</div>
                          @endforeach
												</div>
												
											</div>
											<div class="tt-cart-total-row">
												<div class="tt-cart-total-title">SUBTOTAL:</div>
												<div class="tt-cart-total-price"> {{Session::get('symbol_left')}}{{ $total_amount*session('currency_value') }}{{Session::get('symbol_right')}}</div>
											</div>
											<div class="tt-cart-btn">
												<div class="tt-item">
											
												</div>
												<div class="tt-item">
                        <a href="{{ URL::to('/viewcart')}}" class="btn_1 outline">@lang('website.View Cart')</a>
        <a href="{{ URL::to('/checkout')}}" class="btn_1">@lang('website.Checkout')</a>		</div>
											</div>
										</div>
									</div>
								</div>
							</div>
              @endif
						</div>











