

<div class="tt-breadcrumb" >
	<div class="container">
		<ul>
			<li><a href="index.html">Home</a></li>
			

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


		</ul>
	</div>
</div>
<div id="tt-pageContent" >
	<div class="container-indent">
		<!-- mobile product slider  -->
		<div class="tt-mobile-product-layout visible-xs"  >
			<div class="tt-mobile-product-slider arrow-location-center" id="zoom-mobile__slider">
				<div><img data-lazy="images/test.jpg" alt=""></div>
				<div><img data-lazy="images/product/product-01-02.jpg"  alt=""></div>
				<div><img data-lazy="images/product/product-01-03.jpg" alt=""></div>
				<div><img data-lazy="images/product/product-01-04.jpg" alt=""></div>
				<div>
					<div class="tt-video-block">
						<a href="#" class="link-video"></a>
						<video class="movie" src="video/video.mp4" poster="video/video_img.jpg"></video>
					</div>
				</div>
				<!-- <div>
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="" data-src="http://www.youtube.com/embed/GhyKqj_P2E4" allowfullscreen></iframe>
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
					<div class="tt-product-vertical-layout">
						<div class="tt-product-single-img">
							<div>
								<button class="tt-btn-zomm tt-top-right"><i class="icon-f-86"></i></button>
								<img class="zoom-product" style="border:2px solid red;height:300px"  src='images/product/product-01.jpg' data-zoom-image="images/product/product-01.jpg" alt="">
								<div id="custom-product-item">
										<button type="button" class="slick-arrow slick-prev">Previous</button>
										<button type="button" class="slick-arrow slick-next">Next</button>
									</div>
							</div>
						</div>
						<div class="tt-product-single-carousel-vertical">
							 <ul id="smallGallery" class="tt-slick-button-vertical  slick-animated-show-js" style="height:80px;" >
								<li><a class="zoomGalleryActive" href="#" data-image="images/product/product-01.jpg" data-zoom-image="images/product/product-01.jpg"><img src="images/product/product-01.jpg" alt=""></a></li>
								<li><a href="#" data-image="images/product/product-01-02.jpg" data-zoom-image="images/product/product-01-02.jpg"><img src="images/product/product-01-02.jpg" alt=""></a></li>
								<li><a href="#" data-image="images/product/product-01-03.jpg" data-zoom-image="images/product/product-01-03.jpg"><img src="images/product/product-01-03.jpg" alt=""></a></li>
								<li><a href="#" data-image="images/product/product-01-04.jpg" data-zoom-image="images/product/product-01-04.jpg"><img src="images/product/product-01-04.jpg" alt=""></a></li>
								<li><a class="zoomGalleryActive" href="#" data-image="images/product/product-01.jpg" data-zoom-image="images/product/product-01.jpg"><img src="images/product/product-01.jpg" alt=""></a></li>
								<li><a href="#" data-image="images/product/product-01-02.jpg" data-zoom-image="images/product/product-01-02.jpg"><img src="images/product/product-01-02.jpg" alt=""></a></li>
								<li><a href="#" data-image="images/product/product-01-03.jpg" data-zoom-image="images/product/product-01-03.jpg"><img src="images/product/product-01-03.jpg" alt=""></a></li>
								<li><a href="#" data-image="images/product/product-01-04.jpg" data-zoom-image="images/product/product-01-04.jpg"><img src="images/product/product-01-04.jpg" alt=""></a></li>
								<li>
									<div class="video-link-product" data-toggle="modal" data-type="youtube" data-target="#modalVideoProduct" data-value="http://www.youtube.com/embed/GhyKqj_P2E4">
										<img src="images/product/product-small-empty.png" alt="">
										<div>
											<i class="icon-f-32"></i>
										</div>
									</div>
								</li>
								<li>
									<div class="video-link-product" data-toggle="modal" data-type="video" data-target="#modalVideoProduct" data-value="video/video.mp4" data-poster="video/video_img.jpg">
										<img src="images/product/product-small-empty.png" alt="" >
										<div>
											<i class="icon-f-32"></i>
										</div>
									</div>
								</li>
							</ul> -->
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="tt-product-single-info">
						<div class="tt-add-info">
							<ul>
								<li><span>ProductID:</span> 001</li>
								<li><span>Category:</span> HandBags</li>
								<li><span>Availability:</span> 40 in Stock</li>
							</ul>
						</div>
						<h1 class="tt-title">Women HandBag for Daily Use</h1>
						<div class="tt-price">
							<span class="new-price">$299</span>
						</div>
						<div class="tt-review">
							<div class="tt-rating">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star-half"></i>
								<i class="icon-star-empty"></i>
							</div>
							<a class="product-page-gotocomments-js" href="#">(1 Customer Review)</a>
						</div>
						<div class="tt-wrapper">
							Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
						</div>

						<div class="tt-wrapper">
							<div class="tt-row-custom-01">
								<div class="col-item">
									<div class="tt-input-counter style-01">
										<span class="minus-btn"></span>
										<input type="text" value="1" size="5">
										<span class="plus-btn"></span>
									</div>
								</div>
								<div class="col-item">
									<a href="#" class="btn btn-lg"><i class="icon-f-39"></i>ADD TO CART</a>
								</div>
							</div>
						</div>
				
						<div class="tt-collapse-block">
							<div class="tt-item">
								<div class="tt-collapse-title">DESCRIPTION</div>
								<div class="tt-collapse-content">
									Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.

								</div>
							</div>
						
							<div class="tt-item">
								<div class="tt-collapse-title tt-poin-comments">REVIEWS (3)</div>
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
							
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-2 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
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
							<div class="tt-product-inside-hover">
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
								</div>
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-2 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
						<a href="product.html">
								<span class="tt-img"><img data-lazy="images/product/product-18.jpg" alt=""></span>
								<span class="tt-img-roll-over"><img data-lazy="images/product/product-18-02.jpg" alt=""></span>
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
								$46
							</div>
							<div class="tt-option-block">
								<ul class="tt-options-swatch">
									<li><a class="options-color tt-color-bg-01" href="#"></a></li>
									<li><a class="options-color tt-color-bg-02" href="#"></a></li>
								</ul>
							</div>
							<div class="tt-product-inside-hover">
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
								</div>
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-2 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
						<a href="product.html">
								<span class="tt-img"><img data-lazy="images/product/product-19.jpg" alt=""></span>
								<span class="tt-img-roll-over"><img data-lazy="images/product/product-19-02.jpg" alt=""></span>
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
									<i class="icon-star"></i>
									<i class="icon-star"></i>
								</div>
							</div>
							<h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
							<div class="tt-price">
								$35
							</div>
							<div class="tt-product-inside-hover">
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
								</div>
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-2 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
						<a href="product.html">
								<span class="tt-img"><img data-lazy="images/product/product-14.jpg" alt=""></span>
								<span class="tt-img-roll-over"><img data-lazy="images/product/product-14-02.jpg" alt=""></span>
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
								$12
							</div>
							<div class="tt-product-inside-hover">
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
								</div>
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>