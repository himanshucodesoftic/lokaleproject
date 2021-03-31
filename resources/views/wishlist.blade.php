@extends('layouts.layout')
@section('content')

<div id="tt-pageContent">
	<div class="container-indent">
		<div class="container">
			<h1 class="tt-title-subpages noborder">WISHLIST</h1>
			<div class="tt-wishlist-box" id="js-wishlist-removeitem">
				<div class="tt-wishlist-list">
					<div class="tt-item">
						<div class="tt-col-description">
							<div class="tt-img">
								<img src="images/product/product-01.jpg" alt="">
							</div>
							<div class="tt-description">
								<h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
								<div class="tt-price">
									<span class="new-price">$14</span>
									<span class="old-price">$24</span>
								</div>
							</div>
						</div>
						<div class="tt-col-btn">
							<a href="#" class="tt-btn-addtocart" data-toggle="modal" data-target="#modalAddToCartProduct"><i class="icon-f-39"></i>ADD TO CART</a>
							<a class="btn-link" href="#" data-toggle="modal" data-target="#ModalquickView"><i class="icon-f-73"></i>SEE PRODUCT</a>
							<a class="btn-link js-removeitem" href="#"><i class="icon-h-02"></i>REMOVE</a>
						</div>
					</div>
					<div class="tt-item">
						<div class="tt-col-description">
							<div class="tt-img">
								<img src="images/product/product-02.jpg" alt="">
							</div>
							<div class="tt-description">
								<h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
								<div class="tt-price">
									<span class="new-price">$14</span>
									<span class="old-price">$24</span>
								</div>
							</div>
						</div>
						<div class="tt-col-btn">
							<a href="#" class="tt-btn-addtocart" data-toggle="modal" data-target="#modalAddToCartProduct"><i class="icon-f-39"></i>ADD TO CART</a>
							<a class="btn-link" href="#" data-toggle="modal" data-target="#ModalquickView"><i class="icon-f-73"></i>SEE PRODUCT</a>
							<a class="btn-link js-removeitem" href="#"><i class="icon-h-02"></i>REMOVE</a>
						</div>
					</div>
					<div class="tt-item">
						<div class="tt-col-description">
							<div class="tt-img">
								<img src="images/product/product-03.jpg" alt="">
							</div>
							<div class="tt-description">
								<h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
								<div class="tt-price">
									$14
								</div>
							</div>
						</div>
						<div class="tt-col-btn">
							<a href="#" class="tt-btn-addtocart" data-toggle="modal" data-target="#modalAddToCartProduct"><i class="icon-f-39"></i>ADD TO CART</a>
							<a class="btn-link" href="#" data-toggle="modal" data-target="#ModalquickView"><i class="icon-f-73"></i>SEE PRODUCT</a>
							<a class="btn-link js-removeitem" href="#"><i class="icon-h-02"></i>REMOVE</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection