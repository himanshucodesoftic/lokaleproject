
@extends('newlayout')
@section('content')


<div id="tt-pageContent">
	<div class="container-indent nomargin">
		<div class="container-fluid">
			<div class="row">
				<div class="slider-revolution revolution-default">
					<div class="tp-banner-container">
						<div class="tp-banner revolution">
							<ul>
								<!--
								<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide">
									<img src="https://lokalkw.com/images/banner.jpg" data-lazyload="images/slides/01/slide-01.jpg"  alt="slide1"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" >
									<div class="tp-caption tp-caption1 lft stb"
										data-x="center"
										data-y="center"
										data-hoffset="0"
										data-voffset="0"
										data-speed="600"
										data-start="900"
										data-easing="Power4.easeOut"
										data-endeasing="Power4.easeIn">
										<div class="tp-caption1-wd-1 tt-base-color">Multipurpose</div>
										<div class="tp-caption1-wd-2">Premium<br>Html Template</div>
										<div class="tp-caption1-wd-3">30 skins, powerful features, great support, exclusive offer</div>
										<div class="tp-caption1-wd-4 "><a href="listing-left-column.html" target="_blank" class="btn btn-xl btn-classforchange" data-text="SHOP NOW!">SHOP NOW!</a></div>
									</div>
								</li>	-->
								<li data-transition="fade" class="second-slide" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
									<img src="https://lokalkw.com/images/banner.jpg"  alt="slide1"   data-bgfit="cover" data-bgrepeat="no-repeat" >
									<div class="tp-caption tp-caption1 lft stb"
										data-x="center"
										data-y="center"
										data-hoffset="0"
										data-voffset="0"
										data-speed="600"
										data-start="900"
										data-easing="Power4.easeOut"
										data-endeasing="Power4.easeIn">
										<!--<div class="tp-caption1-wd-1 tt-white-color tt-white-color-change">Ready To</div>
										<div class="tp-caption1-wd-2 tt-white-color tt-white-color-change">Use Unique<br>Demos</div>
										<div class="tp-caption1-wd-3 tt-white-color tt-white-color-change">Optimized for speed, website that sells</div>-->
										<div class="tp-caption1-wd-4 tp-caption1-wd-4-change "><a href="listing-left-column.html" target="_blank" class="btn btn-xl tp-caption1-wd-4-change" data-text="SHOP NOW!"><b>SHOP NOW!</b></a></div>
									</div>
								</li>
								<li data-transition="fade" class="second-slide" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
									<img src="https://lokalkw.com/images/banner.jpg"  alt="slide1"   data-bgfit="cover" data-bgrepeat="no-repeat" >
									<div class="tp-caption tp-caption1 lft stb"
										data-x="center"
										data-y="center"
										data-hoffset="0"
										data-voffset="0"
										data-speed="600"
										data-start="900"
										data-easing="Power4.easeOut"
										data-endeasing="Power4.easeIn">
										<!--<div class="tp-caption1-wd-1 tt-white-color tt-white-color-change">Ready To</div>
										<div class="tp-caption1-wd-2 tt-white-color tt-white-color-change">Use Unique<br>Demos</div>
										<div class="tp-caption1-wd-3 tt-white-color tt-white-color-change">Optimized for speed, website that sells</div>-->
										<div class="tp-caption1-wd-4 tp-caption1-wd-4-change "><a href="listing-left-column.html" target="_blank" class="btn btn-xl tp-caption1-wd-4-change" data-text="SHOP NOW!"><b>SHOP NOW!</b></a></div>
									</div>
								</li>
								<li data-transition="fade" class="second-slide" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
									<img src="https://lokalkw.com/images/banner.jpg"  alt="slide1"   data-bgfit="cover" data-bgrepeat="no-repeat" >
									<div class="tp-caption tp-caption1 lft stb"
										data-x="center"
										data-y="center"
										data-hoffset="0"
										data-voffset="0"
										data-speed="600"
										data-start="900"
										data-easing="Power4.easeOut"
										data-endeasing="Power4.easeIn">
										<!--<div class="tp-caption1-wd-1 tt-white-color tt-white-color-change">Ready To</div>
										<div class="tp-caption1-wd-2 tt-white-color tt-white-color-change">Use Unique<br>Demos</div>
										<div class="tp-caption1-wd-3 tt-white-color tt-white-color-change">Optimized for speed, website that sells</div>-->
										<div class="tp-caption1-wd-4 tp-caption1-wd-4-change "><a href="listing-left-column.html" target="_blank" class="btn btn-xl tp-caption1-wd-4-change" data-text="SHOP NOW!"><b>SHOP NOW!</b></a></div>
									</div>
								</li>


								<!--<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
									<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAB4AAAAMgAQMAAAD4P+14AAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAPdJREFUeNrswYEAAAAAgKD9qRepAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABg9uBAAAAAAADI/7URVFVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVWFPTgQAAAAAADyf20EVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVpDw4JAAAAAAT9f+0JIwAAAAAAAAAAALAJ8T4AAZAZiOkAAAAASUVORK5CYII=" data-lazyload="video/blank.png"  alt="slide1"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" >
									<div class="tp-caption tp-fade fadeout fullscreenvideo"
										data-x="0"
										data-y="0"
										data-speed="600"
										data-start="0"
										data-easing="Power4.easeOut"
										data-endspeed="1500"
										data-endeasing="Power4.easeIn"
										data-autoplay="true"
										data-autoplayonlyfirsttime="false"
										data-nextslideatend="true"
										data-forceCover="1"
										data-dottedoverlay="twoxtwo"
										data-aspectratio="16:9">
										<video class="video-js vjs-default-skin" preload="none"
											poster='video/video_img.jpg' data-setup="{}">
											<source src='video/video.mp4' type='video/mp4'>
										</video>
									</div>
									<div class="tp-caption  tp-fade"
										data-x="right"
										data-y="bottom"
										data-voffset="-60"
										data-hoffset="-90"
										data-speed="600"
										data-start="900"
										data-easing="Power4.easeOut"
										data-endeasing="Power4.easeIn">
										<div class="video-play">
											<a class="icon-f-29 btn-play" href="#"></a>
											<a class="icon-f-28 btn-pause" href="#"></a>
										</div>
									</div>
									<div class="tp-caption lfb lft text-center"
										data-x="center"
										data-y="center"
										data-voffset="-20"
										data-hoffset="0"
										data-speed="600"
										data-start="900"
										data-easing="Power4.easeOut"
										data-endeasing="Power4.easeIn">
										<div class="tp-caption1-wd-1 tt-base-color">Oberlo</div>
										<div class="tp-caption1-wd-2 tt-white-color">Find Products for<br>Shop Store</div>
										<div class="tp-caption1-wd-3 tt-white-color">Oberlo allows you to easily import dropshipped products directly into your ecommerce store</div>
										<div class="tp-caption1-wd-4"><a href="listing-left-column.html" target="_blank" class="btn btn-xl" data-text="SHOP NOW!">SHOP NOW!</a></div>
									</div>
								</li>-->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-indent0">
		<div class="container-fluid">
			<!--welcome to store starts-->
			<div class="row">
				<div class="col-md-12 col-sm-12 mt-5 mb-5">
					 <div class="first-text-section">
						 <h1 class="sectione-heading">WELCOME TO STORE</h1>
						 <h4 ><button class="most-liked-button pr-5 pl-5 pt-2 pb-2">Most Liked</button></h4>
					 </div>
				</div>
			 </div>

			 <!--welcome to store ends-->
			<div class="row tt-layout-promo-box">
				<div class="col-sm-12 col-md-6">
					<div class="row">
						<div class="col-sm-6">
							<a href="listing-left-column.html" class="tt-promo-box tt-one-child hover-type-2">
								<img src="https://lokalkw.com/images/media/2021/02/medium1612883904jk6ep09603.jpg" data-src="https://lokalkw.com/images/media/2021/02/medium1612883904jk6ep09603.jpg" alt="">
								<div class="tt-description">
									<div class="tt-description-wrapper">
										<div class="tt-background"></div>
										<div class="tt-title-small">SALE</div>
									</div>
								</div>
							</a>
							<a href="listing-left-column.html" class="tt-promo-box tt-one-child hover-type-2">
								<img src="https://lokalkw.com/images/media/2021/02/medium16135663996HFbs17212.jpg" data-src="https://lokalkw.com/images/media/2021/02/medium16135663996HFbs17212.jpg" alt="">
								<div class="tt-description">
									<div class="tt-description-wrapper">
										<div class="tt-background"></div>
										<div class="tt-title-small">NEW</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-6">
							<a href="listing-left-column.html" class="tt-promo-box tt-one-child hover-type-2">
								<img src="https://lokalkw.com/images/media/2021/02/medium16128846481DOxB09503.jpg" data-src="https://lokalkw.com/images/media/2021/02/medium16128846481DOxB09503.jpg" alt="">
								<div class="tt-description">
									<div class="tt-description-wrapper">
										<div class="tt-background"></div>
										<div class="tt-title-small">WOMEN</div>
									</div>
								</div>
							</a>
							<a href="listing-left-column.html" class="tt-promo-box tt-one-child hover-type-2">
								<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRphlgiYVWu-7eHdQ0jh_Pcu1rPm_IY3PZddQ&usqp=CAU" data-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRphlgiYVWu-7eHdQ0jh_Pcu1rPm_IY3PZddQ&usqp=CAU" alt="">
								<div class="tt-description">
									<div class="tt-description-wrapper">
										<div class="tt-background"></div>
										<div class="tt-title-small">NEW</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6">
					<div class="row">
						<div class="col-sm-6">
							<a href="listing-left-column.html" class="tt-promo-box tt-one-child hover-type-2">
								<img src="https://i.pinimg.com/originals/45/56/94/455694d273a933476e054cb827f99e7a.jpg" data-src="https://i.pinimg.com/originals/45/56/94/455694d273a933476e054cb827f99e7a.jpg" alt="">
								<div class="tt-description">
									<div class="tt-description-wrapper">
										<div class="tt-background"></div>
										<div class="tt-title-small">MEN</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-6">
							<a href="listing-left-column.html" class="tt-promo-box tt-one-child hover-type-2">
								<img src="https://previews.123rf.com/images/maximleshkovich/maximleshkovich1710/maximleshkovich171000029/87201600-women-modern-fashion-clothes-and-accessories-flat-lay-female-casual-style-look-top-view-.jpg" data-src="https://previews.123rf.com/images/maximleshkovich/maximleshkovich1710/maximleshkovich171000029/87201600-women-modern-fashion-clothes-and-accessories-flat-lay-female-casual-style-look-top-view-.jpg" alt="">
								<div class="tt-description">
									<div class="tt-description-wrapper">
										<div class="tt-background"></div>
										<div class="tt-title-small">ACCESSORIES</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-12">
							<a href="listing-left-column.html" class="tt-promo-box tt-one-child">
								<img src="https://world.benetton.com/on/demandware.static/-/Library-Sites-BenettonSharedLibrary/default/dw6f5f2fe6/01-REDESIGN/LANDER/women-lander_footwear.jpg" data-src="https://world.benetton.com/on/demandware.static/-/Library-Sites-BenettonSharedLibrary/default/dw6f5f2fe6/01-REDESIGN/LANDER/women-lander_footwear.jpg" alt="">
								<div class="tt-description">
									<div class="tt-description-wrapper">
										<div class="tt-background"></div>
										<div class="tt-title-small">SHOES</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-indent">
		<div class="container container-fluid-custom-mobile-padding">
			<div class="tt-block-title pt-5 mt-5 mb-5">
				<h2 >TOP SELLING OF THE WEEK</h2>
				<div class="tt-description"></div>
			</div>
			<div class="row tt-layout-product-item">
				<!--<div class="col-6 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center product-nohover">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGbJPRa8OioKpQY79CefyqHnTAyMDGE6RS62NAZJnAbpbGDP_BNAHPV8pKaFdOLlaoMsk&usqp=CAU" data-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGbJPRa8OioKpQY79CefyqHnTAyMDGE6RS62NAZJnAbpbGDP_BNAHPV8pKaFdOLlaoMsk&usqp=CAU" alt=""></span>
								<span class="tt-img-roll-over"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGbJPRa8OioKpQY79CefyqHnTAyMDGE6RS62NAZJnAbpbGDP_BNAHPV8pKaFdOLlaoMsk&usqp=CAU" data-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGbJPRa8OioKpQY79CefyqHnTAyMDGE6RS62NAZJnAbpbGDP_BNAHPV8pKaFdOLlaoMsk&usqp=CAU" alt=""></span>
								<span class="tt-label-location">
									<!--<span class="tt-label-new">New</span>-->
								<!--</span>
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
								$12
							</div>
							<div class="tt-option-block">
								<ul class="tt-options-swatch js-change-img">
									<li class="active"><a href="#" class="options-color-img" data-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGbJPRa8OioKpQY79CefyqHnTAyMDGE6RS62NAZJnAbpbGDP_BNAHPV8pKaFdOLlaoMsk&usqp=CAU" data-src-hover="images/product/product-03-02.jpg" data-tooltip="Blue" data-tposition="top"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGbJPRa8OioKpQY79CefyqHnTAyMDGE6RS62NAZJnAbpbGDP_BNAHPV8pKaFdOLlaoMsk&usqp=CAU" data-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGbJPRa8OioKpQY79CefyqHnTAyMDGE6RS62NAZJnAbpbGDP_BNAHPV8pKaFdOLlaoMsk&usqp=CAU" alt=""></a></li>
									<li><a href="#" class="options-color-img" data-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGbJPRa8OioKpQY79CefyqHnTAyMDGE6RS62NAZJnAbpbGDP_BNAHPV8pKaFdOLlaoMsk&usqp=CAU" data-src-hover="images/product/product-03-05-hover.jpg" data-tooltip="Light Blue" data-tposition="top"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGbJPRa8OioKpQY79CefyqHnTAyMDGE6RS62NAZJnAbpbGDP_BNAHPV8pKaFdOLlaoMsk&usqp=CAU" data-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGbJPRa8OioKpQY79CefyqHnTAyMDGE6RS62NAZJnAbpbGDP_BNAHPV8pKaFdOLlaoMsk&usqp=CAU" alt=""></a></li>
									<li><a href="#" class="options-color-img" data-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGbJPRa8OioKpQY79CefyqHnTAyMDGE6RS62NAZJnAbpbGDP_BNAHPV8pKaFdOLlaoMsk&usqp=CAU" data-src-hover="images/product/product-03-06-hover.jpg" data-tooltip="Green" data-tposition="top"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGbJPRa8OioKpQY79CefyqHnTAyMDGE6RS62NAZJnAbpbGDP_BNAHPV8pKaFdOLlaoMsk&usqp=CAU" data-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGbJPRa8OioKpQY79CefyqHnTAyMDGE6RS62NAZJnAbpbGDP_BNAHPV8pKaFdOLlaoMsk&usqp=CAU" alt=""></a></li>
									<li><a href="#" class="options-color-img" data-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGbJPRa8OioKpQY79CefyqHnTAyMDGE6RS62NAZJnAbpbGDP_BNAHPV8pKaFdOLlaoMsk&usqp=CAU" data-src-hover="images/product/product-03-07-hover.jpg" data-tooltip="Pink" data-tposition="top"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGbJPRa8OioKpQY79CefyqHnTAyMDGE6RS62NAZJnAbpbGDP_BNAHPV8pKaFdOLlaoMsk&usqp=CAU" data-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGbJPRa8OioKpQY79CefyqHnTAyMDGE6RS62NAZJnAbpbGDP_BNAHPV8pKaFdOLlaoMsk&usqp=CAU" alt=""></a></li>
									<li><a href="#" class="options-color-img" data-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGbJPRa8OioKpQY79CefyqHnTAyMDGE6RS62NAZJnAbpbGDP_BNAHPV8pKaFdOLlaoMsk&usqp=CAU" data-src-hover="images/product/product-03-08-hover.jpg" data-tooltip="Orange" data-tposition="top"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGbJPRa8OioKpQY79CefyqHnTAyMDGE6RS62NAZJnAbpbGDP_BNAHPV8pKaFdOLlaoMsk&usqp=CAU" data-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGbJPRa8OioKpQY79CefyqHnTAyMDGE6RS62NAZJnAbpbGDP_BNAHPV8pKaFdOLlaoMsk&usqp=CAU" alt=""></a></li>
								</ul>
							
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
				</div>-->
				<div class="col-6 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8ZmFzaGlvbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" data-src="https://images.unsplash.com/photo-1483985988355-763728e1935b?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8ZmFzaGlvbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" alt=""></span>
								<span class="tt-img-roll-over"><img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8ZmFzaGlvbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" data-src="https://images.unsplash.com/photo-1483985988355-763728e1935b?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8ZmFzaGlvbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" alt=""></span>
								<span class="tt-label-location">
									<!--<span class="tt-label-our-fatured">Fatured</span>-->
								</span>
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
								$17
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
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
									<a href="#" class="tt-btn-wishlist"></a>
									<a href="#" class="tt-btn-compare"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-6 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCaftzatws52920Utvdgj8h58fm7IUdMEMFPjAoAex1fZVkq5Y9BQkOHjU65AoDJNcd1o&usqp=CAU" data-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCaftzatws52920Utvdgj8h58fm7IUdMEMFPjAoAex1fZVkq5Y9BQkOHjU65AoDJNcd1o&usqp=CAU" alt=""></span>
								<span class="tt-img-roll-over"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCaftzatws52920Utvdgj8h58fm7IUdMEMFPjAoAex1fZVkq5Y9BQkOHjU65AoDJNcd1o&usqp=CAU" data-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCaftzatws52920Utvdgj8h58fm7IUdMEMFPjAoAex1fZVkq5Y9BQkOHjU65AoDJNcd1o&usqp=CAU" alt=""></span>
								<span class="tt-label-location">
									<!--<span class="tt-label-our-stock">Out Of Stock</span>-->
								</span>
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
				<div class="col-6 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img src="https://media.gettyimages.com/photos/just-found-a-shopping-sale-close-by-picture-id888019354?s=612x612" data-src="https://media.gettyimages.com/photos/just-found-a-shopping-sale-close-by-picture-id888019354?s=612x612" alt=""></span>
								<span class="tt-img-roll-over"><img src="https://media.gettyimages.com/photos/just-found-a-shopping-sale-close-by-picture-id888019354?s=612x612" data-src="https://media.gettyimages.com/photos/just-found-a-shopping-sale-close-by-picture-id888019354?s=612x612" alt=""></span>
								<span class="tt-label-location">
									<!--<span class="tt-label-our-stock">Out Of Stock</span>-->
								</span>
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
							<div class="tt-option-block">
								<!--<ul class="tt-options-swatch">
									<li><a class="options-color tt-color-bg-01" href="#"></a></li>
									<li><a class="options-color tt-color-bg-02" href="#"></a></li>
								</ul>
							-->
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
				<div class="col-6 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ646KueMc_x0IdRNYGEoaLSeaAaf90W7D1r5pAHk13KN-2O0R0y40L_Yq0_uoCzh8Q0pI&usqp=CAU" data-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ646KueMc_x0IdRNYGEoaLSeaAaf90W7D1r5pAHk13KN-2O0R0y40L_Yq0_uoCzh8Q0pI&usqp=CAU" alt=""></span>
								<span class="tt-img-roll-over"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ646KueMc_x0IdRNYGEoaLSeaAaf90W7D1r5pAHk13KN-2O0R0y40L_Yq0_uoCzh8Q0pI&usqp=CAU" data-src="images/product/product-27.jpghttps://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ646KueMc_x0IdRNYGEoaLSeaAaf90W7D1r5pAHk13KN-2O0R0y40L_Yq0_uoCzh8Q0pI&usqp=CAU" alt=""></span>
								<span class="tt-label-location">
									<!--<span class="tt-label-our-stock">Out Of Stock</span>-->
								</span>
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
				<!--<div class="col-6 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8ZmFzaGlvbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" data-src="https://images.unsplash.com/photo-1483985988355-763728e1935b?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8ZmFzaGlvbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" alt=""></span>
								<span class="tt-img-roll-over"><img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8ZmFzaGlvbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" data-src="https://images.unsplash.com/photo-1483985988355-763728e1935b?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8ZmFzaGlvbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" alt=""></span>
								<span class="tt-label-location">
									<!--<span class="tt-label-sale">Sale 15%</span>-->
								<!--</span>
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
								<span class="new-price">$14</span>
								<span class="old-price">$24</span>
							</div>
							<div class="tt-option-block">
								<ul class="tt-options-swatch">
									<li class="active"><a href="#" class="options-color-img" data-src="images/custom/texture-img-06.jpg" data-tooltip="Blue" data-tposition="top"><img src="images/loader.svg" data-src="images/custom/texture-img-06.jpg" alt=""></a></li>
									<li><a href="#" class="options-color-img" data-src="images/custom/texture-img-07.jpg" data-tooltip="Light Blue" data-tposition="top"><img src="images/loader.svg" data-src="images/custom/texture-img-07.jpg" alt=""></a></li>
									<li><a href="#" class="options-color-img" data-src="images/custom/texture-img-08.jpg" data-tooltip="Yellow" data-tposition="top"><img src="images/loader.svg" data-src="images/custom/texture-img-08.jpg" alt=""></a></li>
								</ul>
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
				</div>-->
				<!--<div class="col-6 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8ZmFzaGlvbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" data-src="https://images.unsplash.com/photo-1483985988355-763728e1935b?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8ZmFzaGlvbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" alt=""></span>
								<span class="tt-img-roll-over"><img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8ZmFzaGlvbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" data-src="https://images.unsplash.com/photo-1483985988355-763728e1935b?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8ZmFzaGlvbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" alt=""></span>
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
								$56
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
				</div>-->
				<!--<div class="col-6 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img src="images/loader.svg" data-src="images/product/product-45.jpg" alt=""></span>
								<span class="tt-img-roll-over"><img src="images/loader.svg" data-src="images/product/product-45-01.jpg" alt=""></span>
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
								$78
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
				<div class="col-6 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img src="images/loader.svg" data-src="images/product/product-14.jpg" alt=""></span>
								<span class="tt-img-roll-over"><img src="images/loader.svg" data-src="images/product/product-14-01.jpg" alt=""></span>
							</a>
							<div class="tt-countdown_box">
								<div class="tt-countdown_inner">
									<div class="tt-countdown"
										data-date="2019-05-01"
										data-year="Yrs"
										data-month="Mths"
										data-week="Wk"
										data-day="Day"
										data-hour="Hrs"
										data-minute="Min"
										data-second="Sec"></div>
								</div>
							</div>
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
								$51
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
				<div class="col-6 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img src="images/loader.svg" data-src="images/product/product-15.jpg" alt=""></span>
								<span class="tt-img-roll-over"><img src="images/loader.svg" data-src="images/product/product-15-01.jpg" alt=""></span>
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
									<a href="#" class="tt-btn-wishlist"></a>
									<a href="#" class="tt-btn-compare"></a>
								</div>
							</div>
						</div>
					</div>
				</div>-->
			</div>
		</div>
	</div>
	<div class="container-indent ">
		<div class="container-fluid-custom mt-5 pt-5 mb-5 pb-5">
			<div class="row tt-layout-promo-box mt-4 mb-5 pb-5">
				<div class="col-sm-6 col-md-4">
					<a href="listing-left-column.html" class="tt-promo-box">
						<img src="https://img-static.popxo.com/app_photos/images/1793/original/Amazon__fashion__week__shows__season__Collection_Pictures_-_Patine_presents_autumn_winter_collection_at_FDCI_AIFW_AW_2018.JPG" data-src="https://img-static.popxo.com/app_photos/images/1793/original/Amazon__fashion__week__shows__season__Collection_Pictures_-_Patine_presents_autumn_winter_collection_at_FDCI_AIFW_AW_2018.JPG" alt="" height="50%">
						<div class="tt-description">
							<div class="tt-description-wrapper">
								<div class="tt-background"></div>
								<div class="tt-title-small">FALL-WINTER CLEARANCE SALES</div>
								<div class="tt-title-large">GET UP TO <span class="tt-base-color" style>50% OFF</span></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-md-4">
					<a href="listing-left-column.html" class="tt-promo-box">
						<img src="images/loader.svg" data-src="images/promo/index-promo-img-08.jpg" alt="">
						<div class="tt-description">
							<div class="tt-description-wrapper">
								<div class="tt-background"></div>
								<div class="tt-title-small">SUMMER <span class="tt-base-color" tyle>2018</span></div>
								<div class="tt-title-large">NEW ARRIVALS</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-md-4">
					<a href="listing-left-column.html" class="tt-promo-box">
						<img src="https://i.pinimg.com/originals/b5/85/b2/b585b2d31803032121eba9e5334d8211.jpg" data-src="https://i.pinimg.com/originals/b5/85/b2/b585b2d31803032121eba9e5334d8211.jpg" alt="">
						<div class="tt-description">
							<div class="tt-background"></div>
							<div class="tt-description-wrapper">
								<div class="tt-background"></div>
								<div class="tt-title-small">NEW COLLECTION</div>
								<div class="tt-title-large"><span class="tt-base-color">HANDBAGS</span></div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container-indent">
		<!--<div class="container container-fluid-custom-mobile-padding">
			<div class="tt-block-title">
				<h2 class="tt-title">BEST SELLER</h2>
				<div class="tt-description">TOP SALE IN THIS WEEK</div>
			</div>
			<div class="row tt-layout-product-item">
				<div class="col-6 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img src="images/loader.svg" data-src="images/product/product-16.jpg" alt=""></span>
								<span class="tt-img-roll-over"><img src="images/loader.svg" data-src="images/product/product-16-01.jpg" alt=""></span>
							</a>
							<div class="tt-countdown_box">
								<div class="tt-countdown_inner">
									<div class="tt-countdown"
										data-date="2019-04-14"
										data-year="Yrs"
										data-month="Mths"
										data-week="Wk"
										data-day="Day"
										data-hour="Hrs"
										data-minute="Min"
										data-second="Sec"></div>
								</div>
							</div>
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
									<a href="#" class="tt-btn-wishlist"></a>
									<a href="#" class="tt-btn-compare"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-6 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img src="images/loader.svg" data-src="images/product/product-46.jpg" alt=""></span>
								<span class="tt-img-roll-over"><img src="images/loader.svg" data-src="images/product/product-46-01.jpg" alt=""></span>
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
							<div class="tt-option-block">
								<ul class="tt-options-swatch">
									<li class="active"><a class="options-color" href="#">
										<span class="swatch-img">
											<img src="images/loader.svg" data-src="images/custom/texture-img-06.jpg" alt="">
										</span>
										<span class="swatch-label color-black"></span>
									</a></li>
									<li><a class="options-color" href="#">
										<span class="swatch-img">
											<img src="images/loader.svg" data-src="images/custom/texture-img-07.jpg" alt="">
										</span>
										<span class="swatch-label color-black"></span>
									</a></li>
									<li><a class="options-color" href="#">
										<span class="swatch-img">
											<img src="images/loader.svg" data-src="images/custom/texture-img-08.jpg" alt="">
										</span>
										<span class="swatch-label color-black"></span>
									</a></li>
								</ul>
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
				<div class="col-6 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img src="images/loader.svg" data-src="images/product/product-18.jpg" alt=""></span>
								<span class="tt-img-roll-over"><img src="images/loader.svg" data-src="images/product/product-18-01.jpg" alt=""></span>
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
									<a href="#" class="tt-btn-wishlist"></a>
									<a href="#" class="tt-btn-compare"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-6 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img src="images/loader.svg" data-src="images/product/product-19.jpg" alt=""></span>
								<span class="tt-img-roll-over"><img src="images/loader.svg" data-src="images/product/product-19-02.jpg" alt=""></span>
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
									<a href="#" class="tt-btn-wishlist"></a>
									<a href="#" class="tt-btn-compare"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-6 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img src="images/loader.svg" data-src="images/product/product-41.jpg" alt=""></span>
								<span class="tt-img-roll-over"><img src="images/loader.svg" data-src="images/product/product-41-01.jpg" alt=""></span>
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
								$124
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
				<div class="col-6 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img src="images/loader.svg" data-src="images/product/product-02.jpg" alt=""></span>
								<span class="tt-img-roll-over"><img src="images/loader.svg" data-src="images/product/product-02-03.jpg" alt=""></span>
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
								$43
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
				<div class="col-6 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img src="images/loader.svg" data-src="images/product/product-05.jpg" alt=""></span>
								<span class="tt-img-roll-over"><img src="images/loader.svg" data-src="images/product/product-05-02.jpg" alt=""></span>
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
								$124
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
				<div class="col-6 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img src="images/loader.svg" data-src="images/product/product-33.jpg" alt=""></span>
								<span class="tt-img-roll-over"><img src="images/loader.svg" data-src="images/product/product-33-01.jpg" alt=""></span>
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
								$54
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
			</div>
		</div>-->
	</div>

	<!--<div class="container-indent">
		<div class="container">
			<div class="tt-block-title">
				<h2 class="tt-title">LATES FROM BLOG</h2>
				<div class="tt-description">THE FRESHEST AND MOST EXCITING NEWS</div>
			</div>
			<div class="tt-blog-thumb-list">
				<div class="row">
					<div class="col-12 col-sm-6 col-md-6 col-lg-4">
						<div class="tt-blog-thumb">
							<div class="tt-img"><a href="blog-single-post.html" target="_blank"><img src="images/loader.svg" data-src="images/blog/blog-post-img-06.jpg" alt=""></a></div>
							<div class="tt-title-description">
								<div class="tt-background"></div>
								<div class="tt-tag">
									<a href="blog-single-post.html">FASHION</a>
								</div>
								<div class="tt-title">
									<a href="blog-single-post.html">DOLORE EU FUGIATNULLA PARIATUR</a>
								</div>
								<p>
									Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<div class="tt-meta">
									<div class="tt-autor">
										by <a href="#">ADRIAN</a> on January 14, 2017
									</div>
									<div class="tt-comments">
										<a href="#"><i class="tt-icon icon-f-88"></i>7</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-6 col-lg-4">
						<div class="tt-blog-thumb">
							<div class="tt-img"><a href="blog-single-post.html" target="_blank"><img src="images/loader.svg" data-src="images/blog/blog-post-img-04.jpg" alt=""></a></div>
							<div class="tt-title-description">
								<div class="tt-background"></div>
								<div class="tt-tag">
									<a href="blog-single-post.html">FASHION</a>
								</div>
								<div class="tt-title">
									<a href="blog-single-post.html">INCIDIDUNT UT LABORE ET DOLORE</a>
								</div>
								<p>
									Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<div class="tt-meta">
									<div class="tt-autor">
										by <a href="#">ADRIAN</a> on January 14, 2017
									</div>
									<div class="tt-comments">
										<a href="#"><i class="tt-icon icon-f-88"></i>7</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-6 col-lg-4">
						<div class="tt-blog-thumb">
							<div class="tt-img"><a href="blog-single-post.html" target="_blank"><img src="images/loader.svg" data-src="images/blog/blog-post-img-02.jpg" alt=""></a></div>
							<div class="tt-title-description">
								<div class="tt-background"></div>
								<div class="tt-tag">
									<a href="blog-single-post.html">FASHION</a>
								</div>
								<div class="tt-title">
									<a href="blog-single-post.html">INCIDIDUNT UT LABORE ET DOLORE</a>
								</div>
								<p>
									Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<div class="tt-meta">
									<div class="tt-autor">
										by <a href="#">ADRIAN</a> on January 14, 2017
									</div>
									<div class="tt-comments">
										<a href="#"><i class="tt-icon icon-f-88"></i>7</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

-->
	<div class="container-indent">
		<div class="container-fluid">
			<div class="tt-block-title">
				<h2 class="tt-title"><a target="_blank" href="https://www.instagram.com/wokieeshop/">@ FOLLOW</a> US ON</h2>
				<div class="tt-description">INSTAGRAM</div>
			</div>
			<div class="row">
				<div id="instafeed" class="instafeed-fluid" data-access-token="IGQVJXX1hydHVETWFEMGIzeFFmYzIyU1ZAjTHREakhBU1ZAHU0JOZAXJmSWtfbUotMnNHVGxUTUxXckIwVUlhVk1QTEhfQXliNkVoejlILS1Kem40NU1fSWszOTZAhT0dOZAWZAqLXZA1QWxKSHNhSTdpRmN5WQZDZD" data-limitimg="6"></div>
			</div>
		</div>
	</div>
	<div class="container-indent">
		<div class="container">
			<div class="row tt-services-listing">
				<div class="col-xs-12 col-md-6 col-lg-4">
					<a href="#" class="tt-services-block">
						<div class="tt-col-icon">
							<i class="icon-f-48"></i>
						</div>
						<div class="tt-col-description">
							<h4 class="tt-title">FREE SHIPPING</h4>
							<p>Free shipping on all US order or order above $99</p>
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-4">
					<a href="#" class="tt-services-block">
						<div class="tt-col-icon">
							<i class="icon-f-35"></i>
						</div>
						<div class="tt-col-description">
							<h4 class="tt-title">SUPPORT 24/7</h4>
							<p>Contact us 24 hours a day, 7 days a week</p>
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-4">
					<a href="#" class="tt-services-block">
						<div class="tt-col-icon">
							<i class="icon-e-09"></i>
						</div>
						<div class="tt-col-description">
							<h4 class="tt-title">30 DAYS RETURN</h4>
							<p>Simply return it within 24 days for an exchange.</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection