<!-- Products content -->




<div id="tt-pageContent">
	

	<div class="container-indent">
		<div class="container container-fluid-custom-mobile-padding">
			<div class="tt-block-title">
				<h1 class="tt-title" >NEW ARRIVAL</h1>
				<!-- <div class="tt-description">TOP VIEW IN THIS WEEK</div> -->
			</div>
			<div class="row tt-layout-product-item">
      @if($result['products']['success']==1)
        @foreach($result['products']['product_data'] as $key=>$products)
				<div class="col-6 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
          @include('web.common.product')
					</div>
				</div>
        @endforeach
        @endif
			</div>
		</div>
	</div>


	
	
























