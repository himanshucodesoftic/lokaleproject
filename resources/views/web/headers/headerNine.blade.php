<div id="loader-wrapper" >
	<div id="loader">
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
	</div>
</div>

<header id="tt-header">
	<!-- tt-mobile menu -->


	
	<nav class="panel-menu mobile-main-menu">
		
<ul>
@foreach($result['commonContent']["menuData"] as $menu)
              <li class="@if(isset($menu->childs) && count($menu->childs) > 0) submenu @endif">
                <a href="{{ URL::to(''.$menu->link)}}" class="show-submenu">{{$menu->name}}</a>
                @if(isset($menu->childs) && count($menu->childs) > 0)
                  <ul>
                  @foreach($menu->childs as $submenu)
                    <li><a href="{{ URL::to(''.$submenu->link)}}">{{$submenu->name}}</a></li>
                  @endforeach
                  </ul>
                @endif
              </li>
              @endforeach 

</ul>




		<div class="mm-navbtn-names">
			<div class="mm-closebtn">Close</div>
			<div class="mm-backbtn">Back</div>
		</div>
	</nav>
	<!-- tt-mobile-header -->











	
	<div class="tt-mobile-header">
		<div class="container-fluid">
			<div class="tt-header-row">
				<div class="tt-mobile-parent-menu">
					<div class="tt-menu-toggle" id="js-menu-toggle">
						<i class="icon-03"></i>
					</div>
				</div>
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
		<div class="container-fluid tt-top-line">
			<div class="row">
				<div class="tt-logo-container">
					<!-- mobile logo -->
					<a class="tt-logo tt-logo-alignment" href="index.html"><img src="{{url('images/logo.png')}}" alt=""></a>
					<!-- /mobile logo -->
				</div>
			</div>
		</div>
	</div>
	<!-- tt-desktop-header -->
	<div class="tt-desktop-header">
		
		<div class="container">
			<div class="tt-header-holder">
				<div class="tt-col-obj tt-obj-logo" >
					<!-- logo -->
					@if($result['commonContent']['settings']['sitename_logo']=='logo')
              <img class="img-fluid" src="{{asset('').$result['commonContent']['settings']['website_logo']}}"
                alt="<?=stripslashes($result['commonContent']['settings']['website_name'])?>" width="100" height="35">
              @endif
					<!-- <a class="tt-logo tt-logo-alignment" href="index.html"><img src="{{url('images/logo.png')}}" alt=""></a> -->
					<!-- /logo -->
				</div>
				<div class="tt-col-obj tt-obj-menu">
					<!-- tt-menu -->
					<div class="tt-desctop-parent-menu tt-parent-box">
						<div class="tt-desctop-menu tt-hover-03" id="js-include-desktop-menu"></div>
					</div>
					<!-- /tt-menu -->
				</div>
				<div class="tt-col-obj tt-obj-options obj-move-right" >
					<!-- tt-search -->
					<div class="tt-desctop-parent-search tt-parent-box" >
						<div class="tt-search tt-dropdown-obj">
							<button class="tt-dropdown-toggle" data-tooltip="Search" data-tposition="bottom">
								<i class="icon-f-85"></i>
							</button>
							<div class="tt-dropdown-menu">
								<div class="container">
									<form  action="{{ URL::to('/shop')}}" method="get">
										<div class="tt-col">
											<input type="text" class="tt-search-input" placeholder="Search Products...">
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
					<div class="tt-desctop-parent-cart tt-parent-box" >
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
									    <li><a href="{{url('orders')}}"><i class="icon-f-94"></i>Orders</a></li>
									    <li><a href="{{url('profile')}}"><i class="icon-n-072"></i>Profile</a></li>
									    <li><a href="{{url('shipping-address')}}"><i class="icon-n-08"></i>Shipping Address</a></li>
									    @if(session('role_id') != session('vendor_role'))
										
										<li><a href="{{URL::to('/vendorForm')}}"><i class="icon-f-68"></i>BecomeVendor</a></li>
									    @endif
										@if(session('role_id') == session('vendor_role'))
										<li><a href="{{URL::to('/getmyproduct')}}"><i class="icon-f-76"></i>MyProducts</a></li>
									    <li><a href="{{URL::to('/addProduct')}}"><i class="icon-f-77"></i>addProduct</a></li>
										@endif
										<li><a href="{{url('logout')}}"><i class="icon-f-94"></i>Logout</a></li>
									
										<?php }else{ ?>
											<li><a href="{{ URL::to('/login')}}"><i class="icon-f-94"></i>Login/Register</a></li>
											<li><a href="{{URL::to('/vendorForm')}}"><i class="icon-f-94"></i>BecomeVendor</a></li>
									
                  <?php } ?>
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
									<ul>
										<li class="active"><a href="#">English</a></li>
										<li><a href="#">Deutsch</a></li>
										<li><a href="#">Español</a></li>
										<li><a href="#">Français</a></li>
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
	<div class="tt-stuck-nav" id="js-tt-stuck-nav">
		<div class="container">
			<div class="tt-header-row ">
				<div class="tt-stuck-parent-menu"></div>
				<div class="tt-stuck-parent-search tt-parent-box"></div>
				<div class="tt-stuck-parent-cart tt-parent-box"></div>
				<div class="tt-stuck-parent-account tt-parent-box"></div>
				<div class="tt-stuck-parent-multi tt-parent-box"></div>
			</div>
		</div>
	</div>
</header>

<!-- <div id="header"></div> -->

