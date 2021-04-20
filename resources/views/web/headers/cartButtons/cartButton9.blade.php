

<?php $qunatity=0; ?>
@foreach($result['commonContent']['cart'] as $cart_data)
<?php $qunatity += $cart_data->customers_basket_quantity; ?>
@endforeach


<div class="tt-cart tt-dropdown-obj" data-tooltip="Cart" data-tposition="bottom" style="border:2px solid red;">
							<button class="tt-dropdown-toggle">
								<i class="icon-f-39"></i>
								<span class="tt-badge-cart cart_bt" >{{ $qunatity }}</span>
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

										@foreach($result['commonContent']['cart'] as $cart_data)
        <?php
          $total_amount += $cart_data->final_price*$cart_data->customers_basket_quantity;
        ?>
										<div class="tt-cart-content">
											<div class="tt-cart-list">
												<div class="tt-item">
													<a href="product.html">
														<div class="tt-item-img">
															<img src="{{asset('').$cart_data->image}}" data-src="images/product/product-01.jpg"  width="50" height="50" alt="{{$cart_data->products_name}}">
														</div>
														<div class="tt-item-descriptions">
															<h2 class="tt-title">Flared Shift Dress</h2>
															<ul class="tt-add-info">
																<li>Yellow, Material 2, Size 58,</li>
																<li>Vendor: Addidas</li>
															</ul>
															<div class="tt-quantity">1 X</div> <div class="tt-price">{{$cart_data->customers_basket_quantity}} x {{$cart_data->products_name}}</span>{{Session::get('symbol_left')}}{{$cart_data->final_price*session('currency_value')}}{{Session::get('symbol_right')}}</div>
														</div>
													</a>
													<div class="tt-item-close">
														<a href="{{ URL::to('/deleteCart?id='.$cart_data->customers_basket_id)}}" class="tt-btn-close"></a>
													</div>
												</div>
												
											</div>
											<div class="tt-cart-total-row">
												<div class="tt-cart-total-title">SUBTOTAL:</div>
												<div class="tt-cart-total-price">{{Session::get('symbol_left')}}{{ $total_amount*session('currency_value') }}{{Session::get('symbol_right')}}</div>
											</div>
											<div class="tt-cart-btn">
												<div class="tt-item">
													<a href="#" class="btn">PROCEED TO CHECKOUT</a>
												</div>
												<div class="tt-item">
													<a href="{{ URL::to('/viewcart')}}" class="btn-link-02 tt-hidden-mobile">View Cart</a>
													<a href="{{ URL::to('/checkout')}}" class="btn btn-border tt-hidden-desctope">VIEW CART</a>
												</div>
											</div>
										</div>
										@endforeach
									</div>
								</div>
							</div>
							@endif
						</div>

















