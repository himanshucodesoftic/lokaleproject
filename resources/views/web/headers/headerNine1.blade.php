<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<header id="tt-header" class="embed-mobilemenu"  >
	<div class="tt-mobile-border " >
		<div class="container">
			<div class="tt-header-row tt-top-row">
				<div class="tt-col-left">
					<div class="tt-box-info">
						<ul>
							<li><i class="icon-f-93"></i><a href="tel:+56647749930">{{$result['commonContent']['setting'][11]->value}}</a>; </li>
						</ul>
					</div>
				</div>
				<div class="tt-col-right ml-auto">
					<ul class="tt-social-icon">
						<li><a class="icon-g-67" target="_blank"  href="https://www.instagram.com/lokal_kw/"></a></li>
						</ul>
				</div>
			</div>
		</div>
	</div>

	<nav class="panel-menu mobile-main-menu" >


		<div class="mm-navbtn-names">
			<div class="mm-closebtn">Close</div>
			<div class="mm-backbtn">Back</div>
		</div>
	</nav>

	<div class="tt-mobile-header"  style="background-color:#2b5a80">
		<div class="container-fluid">
			<div class="tt-header-row">
				<div class="tt-mobile-parent-menu">
					<div class="tt-menu-toggle" id="js-menu-toggle">
						<i class="icon-h-26"></i>
					</div>
				</div>
		
				<div class="tt-logo-container">
					<a class="tt-logo tt-logo-alignment" href="{url('/')}}"><img src="{{asset('images/logo.png')}}" alt="">    </a>  
					
   
				</div>
		
				<div class="tt-mobile-parent-search tt-parent-box"></div>
		
				<div class="tt-mobile-parent-cart tt-parent-box"></div>
			
				<div class="tt-mobile-parent-account tt-parent-box"></div>
			
				<div class="tt-mobile-parent-multi tt-parent-box"></div>
			
			</div>
		</div>
	</div>

	<div class="tt-desktop-header" style="background-color:#2b5a80">
		<div class="container">
			<div class="tt-header-holder">
				<div class="tt-col-obj tt-obj-logo">

					<a class="tt-logo tt-logo-alignment" href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" style="height:170px !important;border:2px sold red;" alt=""></a>
        
		
          
				</div>

        











				<div class="tt-col-obj tt-obj-menu">
					<!-- tt-menu -->
					<div class="tt-desctop-parent-menu tt-parent-box">
						<div class="tt-desctop-menu tt-hover-03">

							<nav>
							
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
							</nav>

						</div>
					</div>
		
				</div>

			
<div class="tt-col-obj tt-obj-options obj-move-right">

	<a class="fa fa-heart" target="_blank"   href="{{url('wishlist')}}" style="color:black;padding:10px;text-decoration:none;">  <span class="tt-badge-cart" style="color:white;">{{$result['commonContent']['total_wishlist']}}</span></a>		
	

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

					<div class="tt-desctop-parent-cart tt-parent-box">
					@include('web.headers.cartButtons.cartButton9')
					</div>





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
              

                    
								
									</ul>
								</div>
							</div>
						</div>
					</div>











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









					
				</div>
			</div>
		</div>
	</div>


</header>



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
