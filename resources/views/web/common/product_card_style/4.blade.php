
			
						<div class="tt-product thumbprod-center">
						<?php
        $currency = \App\Models\Core\Currency::where('id',session('currency_id'))->pluck('decimal_places');
        $decimal_places = count($currency) > 0 ? $currency[0] : 2;
        $current_date = date("Y-m-d", strtotime("now"));

        $string = substr($products->products_date_added, 0, strpos($products->products_date_added, ' '));
        $date = date_create($string);
        date_add($date, date_interval_create_from_date_string($result['commonContent']['settings']['new_product_duration'] . " days"));
        $after_date = date_format($date, "Y-m-d");
        if ($after_date >= $current_date) {
          print '<span class="badge badge-info">';
          print __('website.New');
          print '</span>';
        }
        ?> <?php
        if (!empty($products->discount_price)) {
          $discount_price = $products->discount_price * session('currency_value');
        }
        $orignal_price = $products->products_price * session('currency_value');

        if (!empty($products->discount_price)) {

          if (($orignal_price + 0) > 0) {
            $discounted_price = $orignal_price - $discount_price;
            $discount_percentage = $discounted_price / $orignal_price * 100;
          } else {
            $discount_percentage = 0;
            $discounted_price = 0;
          }
        ?>
        <span class="badge badge-danger" data-toggle="tooltip" data-placement="bottom" title="<?php echo (int) $discount_percentage; ?>% @lang('website.off')"><?php echo (int) $discount_percentage; ?>%</span>
        <?php } ?>

	
        @if($products->is_feature == 1)
     
        @endif

						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a  class="tt-btn-wishlist" products_id="<?= $products->products_id ?>" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<!-- <a products_id="{{$products->products_id}}"class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a> -->
							<a href="{{ URL::to('/product-detail/'.$products->products_slug)}}">
								<span class="tt-img"><img src="{{asset('').$products->image_path}}"  alt=""></span>
								<span class="tt-img-roll-over"><img src="{{asset('').$products->image_path}}" alt=""></span>
								<span class="tt-label-location">
									<!--<span class="tt-label-our-fatured">Fatured</span>-->
								</span>
							</a>
						</div>
						<div class="tt-description" >
							<div class="tt-row">
								<ul class="tt-add-info">
									<li><a href="{{ URL::to('/product-detail/'.$products->products_slug)}}">{{$products->products_name}}</a></li>
									<?php

$cat_name = '';
foreach ($products->categories as $key => $category) {
  $cat_name = $category->categories_name;
}

echo $cat_name;
?>
								
								</ul>
								
								<div class="tt-rating">
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
								</div>
							</div>
							<h2 class="tt-title">
							<div class="tt-price">
							@if(!empty($products->discount_price))
                  {{Session::get('symbol_left')}}&nbsp;{{$discount_price+0}}&nbsp;{{Session::get('symbol_right')}}
                  <span> {{Session::get('symbol_left')}}{{number_format($orignal_price+0 , $decimal_places )}}{{Session::get('symbol_right')}}</span>
                  @else
                  {{Session::get('symbol_left')}}&nbsp;{{number_format($orignal_price+0 , $decimal_places )}}&nbsp;{{Session::get('symbol_right')}}
                  @endif
							</div>
							<div class="tt-option-block">
								<!--<ul class="tt-options-swatch">
									<li class="active"><a class="options-color tt-color-bg-01" href="#"></a></li>
									<li><a class="options-color tt-color-bg-02" href="#"></a></li>
								</ul>-->
							</div>
							<div class="tt-product-inside-hover">
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct" style="background-color:#2b5a80!important;">ADD TO CART</a>
								</div>
								<div class="tt-row-btn modal_show">
									<a href="#"    products_id="{{$products->products_id}}" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
									<a href="#" class="tt-btn-wishlist"></a>
			
								</div>
							</div>
						</div>
					</div>
			
			
			
			
			
			
			
			
			
			
			
		