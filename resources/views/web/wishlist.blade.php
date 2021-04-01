@extends('web.layout')
@section('content')














<div id="tt-pageContent">
	<div class="container-indent">
		<div class="container">
			<h1 class="tt-title-subpages noborder">WISHLIST</h1>

			<?php $i=0;?>
          @if(!empty($result['products']['product_data']) and count($result['products']['product_data'])>0)
          @foreach($result['products']['product_data'] as $key=>$products)
          <div class="product">
            @if($i>0)
            <hr class="border-line">
            @endif
            <?php $i++; ?>
			<div class="tt-wishlist-box" id="js-wishlist-removeitem">
				<div class="tt-wishlist-list">
					<div class="tt-item">
						<div class="tt-col-description">
							<div class="tt-img">
								<img src="{{asset('').$products->image_path}}" alt="{{$products->products_name}}">
							</div>
							<div class="tt-description">
								<h2 class="tt-title"><a                           href="{{ URL::to('/product-detail/'.$products->products_slug)}}">{{$products->products_name}}</a></h2>
								<div class="tt-price">
								<?php
												if(!empty($products->discount_price)){
													$discount_price = $products->discount_price * session('currency_value');
												}
												if(!empty($products->flash_price)){
													$flash_price = $products->flash_price * session('currency_value');
												}
													$orignal_price = $products->products_price * session('currency_value');


												if(!empty($products->discount_price)){

													if(($orignal_price+0)>0){
														$discounted_price = $orignal_price-$discount_price;
														$discount_percentage = $discounted_price/$orignal_price*100;
														$discounted_price = $products->discount_price;

												}else{
													$discount_percentage = 0;
													$discounted_price = 0;
												}
												}
												else{
													$discounted_price = $orignal_price;
												}
												?>
@if(!empty($products->flash_price))
<sub
                          class="total_price">{{Session::get('symbol_left')}}{{$flash_price+0}}{{Session::get('symbol_right')}}</sub>
                        <span style="color: #6c757d; text-decoration: line-through; margin-left: 10px; font-size: 1.075rem; line-height: 1.5; color: #6c757d !important;">{{Session::get('symbol_left')}}{{$orignal_price+0}}{{Session::get('symbol_right')}}
                        </span>
                        @elseif(!empty($products->discount_price))
                        <price class="total_price">
                          {{Session::get('symbol_left')}}{{$discount_price+0}}{{Session::get('symbol_right')}}</price>
                        <span style="color: #6c757d; text-decoration: line-through; margin-left: 10px; font-size: 1.075rem; line-height: 1.5; color: #6c757d !important;">{{Session::get('symbol_left')}}{{$orignal_price+0}}{{Session::get('symbol_right')}}
                        </span>
                        @else
                        <price class="total_price">
                          {{Session::get('symbol_left')}}{{$orignal_price+0}}{{Session::get('symbol_right')}}</price>
                        @endif
                      </div>

                      <div class="wishlist-discription">
                        <?=stripslashes($products->products_description)?>
                      </div>
								</div>
							</div>
						</div>
						<div class="tt-col-btn">

						@if($products->products_type==0)
                        @if(!in_array($products->products_id,$result['cartArray']))
                        @if($result['commonContent']['settings']['Inventory'])
                        @if($products->defaultStock < 0)
						<a href="#" class="tt-btn-addtocart" data-toggle="modal"   products_id="{{$products->products_id}}" data-target="#modalAddToCartProduct"><i class="icon-f-39"></i>Out of stock</a>
						@else
							<a href="#" class="tt-btn-addtocart" data-toggle="modal" data-target="#modalAddToCartProduct"  products_id="{{$products->products_id}}"><i class="icon-f-39"></i>ADD TO CART</a>
							@endif
                          @else
						  <a href="#" class="tt-btn-addtocart" data-toggle="modal" data-target="#modalAddToCartProduct"   products_id="{{$products->products_id}}"><i class="icon-f-39"></i>ADD TO CART</a>
						  @endif

@else
<a class="btn-link" href="#" data-toggle="modal" data-target="#ModalquickView"><i class="icon-f-73"></i>SEE PRODUCT</a>
@endif
                          @elseif($products->products_type==1)	

							<a class="btn-link"href="{{ URL::to('/product-detail/'.$products->products_slug)}}"data-toggle="modal" data-target="#ModalquickView"><i class="icon-f-73"></i>View Detail </a>
							@elseif($products->products_type==2)
							<a class="btn-link js-removeitem"href="{{$products->products_url}}"><i class="icon-h-02"></i>External link</a>
						@endif
						<a href="{{ URL::to('/UnlikeMyProduct')}}/{{$products->products_id}}">@lang('website.Remove')
                          &nbsp;<i class="fas fa-trash-alt"></i></a>
						</div>
						@endforeach

@else
<h5 style="text-align: center; line-height: 250px;">@lang('website.No Record Found!')</h5>
@endif
					</div>
				
				</div>
			</div>
		</div>
	</div>
</div>

@endsection