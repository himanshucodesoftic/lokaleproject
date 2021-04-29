@extends('newlayout')
@section('content')


<div class="tt-breadcrumb">
	<div class="container">
		<ul>
			<li><a href="{{url('/')}}">Home</a></li>
			<li>vendor List</li>
		</ul>
	</div>
</div>

<div class="container">
<div class="row mt-5">



@foreach($productlist as $noti)



<div class="col-6 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							{{-- <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a> --}}
							{{-- <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a> --}}
							{{-- <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a> --}}
							<a href="{{url('vendor_product')}}/{{$noti['id']}}">
								<span class="tt-img"><img src="{{asset($noti['image'])}}" alt=""></span>
								<span class="tt-img-roll-over"><img src="{{asset($noti['image'])}}" alt=""></span>
								<span class="tt-label-location">
									<!--<span class="tt-label-our-stock">Out Of Stock</span>-->
								</span>
							</a>
						</div>
						<div class="tt-description">
							<div class="tt-row">
								<ul class="tt-add-info">
									<li><a href="#"></a></li>
								</ul>
							</div>

							<h2 class="tt-title"><a href="{{url('vendor_product')}}/{{$noti['id']}}"> {{ $noti['vendor_name'] }}
							
							<br>
							{{ $noti['vendor_name_arabic'] }}
							
							</a></h2>
							<div class="tt-price">
							
							</div>
							<div class="tt-option-block">
								<!--<ul class="tt-options-swatch">
									<li><a class="options-color tt-color-bg-01" href="#"></a></li>
									<li><a class="options-color tt-color-bg-02" href="#"></a></li>
								</ul>-->
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








                

@endforeach





</div>
</div>






