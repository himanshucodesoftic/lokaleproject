<header id="tt-header" class="embed-mobilemenu" >
	<div class="tt-mobile-border">
		<div class="container">
			<div class="tt-header-row tt-top-row">
				<div class="tt-col-left">
					<div class="tt-box-info">
						<ul>
							<li><i class="icon-f-93"></i><a href="tel:+56647749930">{{$result['commonContent']['setting'][11]->value}}</a>; </li>
							<li><i class="icon-f-92"></i>All week from 9 am to 9 pm </li>
						</ul>
					</div>
				</div>
				<div class="tt-col-right ml-auto">
					<ul class="tt-social-icon">
						<!-- <li><a class="icon-g-64" target="_blank" href="http://www.facebook.com/"></a></li> -->
						<!-- <li><a class="icon-h-58" target="_blank" href="http://www.twitter.com/"></a></li> -->
						<!-- <li><a class="icon-g-66" target="_blank" href="http://www.google.com/"></a></li> -->
						<li><a class="icon-g-67" target="_blank" href="https://www.instagram.com/lokal_kw/"></a></li>
						<!-- <li><a class="icon-g-70" target="_blank" href="#"></a></li> -->
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- tt-mobile menu -->
	<nav class="panel-menu mobile-main-menu" >
	
	<ul>
		

	<ul>

		<div class="mm-navbtn-names">
			<div class="mm-closebtn">Close</div>
			<div class="mm-backbtn">Back</div>
		</div>
	</nav>
	<!-- tt-mobile-header -->
	<div class="tt-mobile-header"  style="background-color:#2b5a80">
		<div class="container-fluid">
			<div class="tt-header-row">
				<div class="tt-mobile-parent-menu">
					<div class="tt-menu-toggle" id="js-menu-toggle">
						<i class="icon-h-26"></i>
					</div>
				</div>
				<!-- mobile logo -->
				<div class="tt-logo-container">
					<a class="tt-logo tt-logo-alignment" href="{url('/')}}"><img src="https://lokalkw.com/images/media/2021/02/BqbQS15711.png" alt="">       @if($result['commonContent']['settings']['sitename_logo']=='logo')
            <img class="img-fluid" src="{{asset('').$result['commonContent']['settings']['website_logo']}}"
              alt="<?=stripslashes($result['commonContent']['settings']['website_name'])?>" width="100" height="35">
            @endif</a>
   
				</div>
				<!-- /mobile logo -->
				<!-- search -->
				<div class="tt-mobile-parent-search tt-parent-box"></div>
				<!-- /search -->
				<!-- cart -->
				<div class="tt-mobile-parent-cart tt-parent-box"></div>
				<!-- /cart -->
				<!-- account -->
				<div class="tt-mobile-parent-account tt-parent-box"></div>
				<!-- /account -->
				<!-- currency -->
				<div class="tt-mobile-parent-multi tt-parent-box"></div>
				<!-- /currency -->
			</div>
		</div>
	</div>
	<!-- tt-desktop-header -->
	<div class="tt-desktop-header" style="background-color:#2b5a80">
		<div class="container">
			<div class="tt-header-holder">
				<div class="tt-col-obj tt-obj-logo">
					<!-- logo -->
					<a class="tt-logo tt-logo-alignment" href="{{url('/')}}"><img src="https://lokalkw.com/images/media/2021/02/BqbQS15711.png" alt="">
          @if($result['commonContent']['settings']['sitename_logo']=='logo')
              <img class="img-fluid" src="{{asset('').$result['commonContent']['settings']['website_logo']}}"
                alt="<?=stripslashes($result['commonContent']['settings']['website_name'])?>" width="100" height="35">
              @endif   </a>
					<!-- /logo -->
          
				</div>
        











				<div class="tt-col-obj tt-obj-menu">
					<!-- tt-menu -->
					<div class="tt-desctop-parent-menu tt-parent-box">
						<div class="tt-desctop-menu tt-hover-03">

							<nav>
							@include('web.common.HeaderCategories')
								<ul>
								


								@php productCategories(); @endphp

							

								</ul>
							</nav>

						</div>
					</div>
					<!-- /tt-menu -->
				</div>

				<i class="fas fa-heart"></i>
<div class="tt-col-obj tt-obj-options obj-move-right">
<!-- 
	<div class="tt-desctop-parent-account tt-arent-box"> -->
	
	<a class="fa fa-heart" target="_blank"  href="{{url('wishlist')}}"> <strong>{{$result['commonContent']['total_wishlist']}}</strong></a>		
					<!-- </div> -->

</div>




				<div class="tt-col-obj tt-obj-options obj-move-right"  >
					<!-- tt-search -->
					<div class="tt-desctop-parent-search tt-parent-box">
						<div class="tt-search tt-dropdown-obj">
							<button class="tt-dropdown-toggle" data-tooltip="Search" data-tposition="bottom">
								<i class="icon-f-85"></i>
							</button>
							<div class="tt-dropdown-menu">
								<div class="container">
								<form class="form-inline" action="{{ URL::to('/shop')}}" method="get">
									<input type="hidden" name="category" class="category-value" value="">
										<div class="tt-col" >
											<input type="text" class="tt-search-input" placeholder="Search Products..." value="{{ app('request')->input('search') }}">
											<button class="tt-btn-search" type="submit"></button>
										</div>
										<div class="tt-col">
											<button class="tt-btn-close icon-g-80"></button>
										</div>
										<div class="tt-info-text">
											What are you Looking for?
										</div>
										<div class="search-results"></div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- /tt-search -->
					<!-- tt-cart -->
					<div class="tt-desctop-parent-cart tt-parent-box">
					@include('web.headers.cartButtons.cartButton9')
					</div>







					
					<!-- /tt-cart -->
					<!-- tt-account -->
					<div class="tt-desctop-parent-account tt-parent-box">
						<div class="tt-account tt-dropdown-obj">
							<button class="tt-dropdown-toggle"  data-tooltip="My Account" data-tposition="bottom"><i class="icon-f-94"></i></button>
							<div class="tt-dropdown-menu">
								<div class="tt-mobile-add">
									<button class="tt-close">Close</button>
								</div>
								<div class="tt-dropdown-inner">
								<?php if(auth()->guard('customer')->check()){ ?>
									<ul>
									<li>
                      <a href="{{url('orders')}}"><i class="icon-n-072"></i>Orders</a>
                    </li>
					<li>
                      <a href="{{url('profile')}}"><i class="icon-f-68"></i>Profile</a>
                    </li>
                    <li>
                      <a href="{{url('shipping-address')}}"><i class="icon-n-072"></i>Shipping Address</a>
                    </li>
					@if(session('role_id') != session('vendor_role'))
                    <li>
                      <a href="{{URL::to('/vendorForm')}}"><i class="icon-f-68"></i>BecomeVendor</a>
                    </li>
                    @endif
					@if(session('role_id') == session('vendor_role'))
                    <li>
                      <a href="{{URL::to('/getmyproduct')}}"><i class="ti-help-alt"></i>MyProducts</a>
                    </li>
                    <li>
                      <a href="{{URL::to('/addProduct')}}"><i class="ti-help-alt"></i>addProduct</a>
                    </li>
                    @endif
					<li>
                      <a href="{{url('logout')}}"><i class="icon-f-77"></i>Logout</a>
                    </li>
                  </ul>
                  <?php }else{ ?>
					<a href="{{ URL::to('/login')}}" class="icon-f-94">Login/Register</a><br>
                    <a class="icon-f-94" href="{{URL::to('/vendorForm')}}" style="margin-top: 10px;">BecomeVendor</a>
                  <?php } ?>
              

                    
										<!--
										<li><a href="login.html"><i class="icon-f-94"></i>Account</a></li>
										<li><a href="wishlist.html"><i class="icon-n-072"></i>Wishlist</a></li>
										<li><a href="compare.html"><i class="icon-n-08"></i>Compare</a></li>
										<li><a href="page404.html"><i class="icon-f-68"></i>Check Out</a></li>
										<li><a href="login.html"><i class="icon-f-76"></i>Sign In</a></li>
										<li><a href="page404.html"><i class="icon-f-77"></i>Sign Out</a></li>
										<li><a href="create-account.html"><i class="icon-f-94"></i>Register</a></li>
										-->
									</ul>
								</div>
							</div>
						</div>
					</div>











					
					<!-- /tt-account -->
					<!-- tt-langue and tt-currency -->
					<div class="tt-desctop-parent-multi tt-parent-box">
						<div class="tt-multi-obj tt-dropdown-obj">
							<button class="tt-dropdown-toggle" data-tooltip="Settings" data-tposition="bottom"><i class="icon-f-79"></i></button>
							<div class="tt-dropdown-menu">
								<div class="tt-mobile-add">
									<button class="tt-close">Close</button>
								</div>
								<div class="tt-dropdown-inner">
									<ul class="tt-languages">
										<li class="active">
											<a href="#">
												<span class="tt-full-text">English</span>
												<span class="tt-short-text">EN</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="tt-full-text">Deutsch</span>
												<span class="tt-short-text">DE</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="tt-full-text">Español</span>
												<span class="tt-short-text">ES</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="tt-full-text">Français</span>
												<span class="tt-short-text">FR</span>
											</a>
										</li>
									</ul>
									<ul>
										<li class="active"><a href="#"><i class="icon-h-59"></i>USD - US Dollar</a></li>
										<li><a href="#"><i class="icon-h-60"></i>EUR - Euro</a></li>
										<li><a href="#"><i class="icon-h-61"></i>GBP - British Pound Sterling</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>









					
					<!-- /tt-langue and tt-currency -->
				</div>
			</div>
		</div>
	</div>
	<!-- stuck nav -->
	<!-- <div class="tt-stuck-nav" id="js-tt-stuck-nav">
		<div class="container">
			<div class="tt-header-row ">
				<div class="tt-stuck-parent-menu"></div>
				<div class="tt-logo-container">
					<a class="tt-logo tt-logo-alignment" href="index.html"><img src="images/custom/logo.png" alt=""></a>
				</div>
				<div class="tt-stuck-parent-search tt-parent-box"></div>
				<div class="tt-stuck-parent-cart tt-parent-box"></div>
				<div class="tt-stuck-parent-account tt-parent-box"></div>
				<div class="tt-stuck-parent-multi tt-parent-box"></div>
			</div>
		</div>
	</div> -->
	<script>
    $('.dropdown-cart, .dropdown-access').hover(function () {
      $(this).find('.dropdown-menu').stop(true, true).delay(50).fadeIn(300);
    }, function () {
      $(this).find('.dropdown-menu').stop(true, true).delay(50).fadeOut(300);
    });

    $('.dropdown-cart, .dropdown-access').on('click',function () {
      console.log('=============================')
      $(this).find('.dropdown-menu').css('display', 'block');
    });
  </script>

</header>



