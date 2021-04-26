
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


  
