
@extends('newlayout')
@section('content')
<div class="container">
<div class="row">

@foreach($productlist as $users)  
<div class="col-6 col-md-4 col-lg-3">

					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<!-- <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a> -->
							<!-- <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a> -->
							<!-- <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a> -->
							<a href="">
								<span class="tt-img"><img src="{{asset($users['image'])}}" value="{{asset($users['image'])}}" alt=""></span>
								<span class="tt-img-roll-over"><img src="{{asset($users['image'])}}" value= ></span>
								<span class="tt-label-location">
									<!--<span class="tt-label-our-stock">Out Of Stock</span>-->
								</span>
							</a>
						</div>
						<div class="tt-description">
							<div class="tt-row">
								<ul class="tt-add-info">
									<li><a href="#">{{$users['vendor_id']}}</a></li>
								</ul>
							</div>
						
							<div class="tt-price">
								$12
							</div>
							<div class="tt-option-block">
								<!--<ul class="tt-options-swatch">
									<li><a class="options-color tt-color-bg-01" href="#"></a></li>
									<li><a class="options-color tt-color-bg-02" href="#"></a></li>
								</ul>-->
							</div>
							<div class="tt-product-inside-hover">
								<div class="tt-row-btn">
									</div>
								<div class="tt-row-btn">
								
								</div>
							</div>
						</div>
					</div>
         
				</div>
        @endforeach 
       
        </div>
        </div>

