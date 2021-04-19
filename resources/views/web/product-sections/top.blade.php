
<div class="container-indent"  >
		<div class="container container-fluid-custom-mobile-padding">
			<div class="tt-block-title pt-5 mt-5 mb-5">
				<h2 >TOP SELLING OF THE WEEK</h2>
				<div class="tt-description"></div>
			</div>
			<div class="row tt-layout-product-item">
      @if($result['weeklySoldProducts']['success']==1)
        @foreach($result['weeklySoldProducts']['product_data'] as $key=>$products)
        @if($key==0)
				<div class="col-6 col-md-4 col-lg-3">
        @include('web.common.product')     
				</div>
				
			
        @endif
        @endforeach
        @endif  
			</div>
		</div>

    @if($result['weeklySoldProducts']['success']==1)
          @foreach($result['weeklySoldProducts']['product_data'] as $key=>$products)
            @if($key!=0)
              @if($key<=6) 

              <div class="col-6 col-md-4 col-lg-3">
              @include('web.common.product')     
				</div>
				
        @endif
            @endif
          @endforeach
        @endif










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