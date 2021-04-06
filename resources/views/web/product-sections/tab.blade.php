
@if($result['special']['success']==1 or $result['top_seller']['success']==1 or $result['most_liked']['success']==1 )

<div id="tt-pageContent" >
	
	
	<div class="container-indent">
		<div class="container container-fluid-custom-mobile-padding">
			<div class="tt-block-title">
				<h1 class="tt-title">WELCOME TO STORE</h1>
				@if($result['top_seller']['success']==1)
            <a class="nav-link btn active show" data-toggle="tab" href="#featured" role="tab"><span
                data-toggle="tooltip" data-placement="bottom"
                title="@lang('website.TopSales')">@lang('website.TopSales')</span></a>
            @endif
            @if($result['special']['success']==1)
            <a class="nav-link btn <?php if($result['top_seller']['success'] != 1 && $result['special']['success']==1) print 'active show'; ?>" data-toggle="tab" href="#special" role="tab" aria-controls="special"
              aria-selected="true"><span data-toggle="tooltip" data-placement="bottom"
                title="@lang('website.Special')">@lang('website.Special')</span></a>
            @endif
            @if($result['most_liked']['success']==1)
            <a class="nav-link btn <?php if($result['top_seller']['success'] != 1 && $result['special']['success'] != 1 && $result['most_liked']['success'] == 1) print 'active show'; ?>" data-toggle="tab" href="#liked" role="tab" aria-controls="liked"
              aria-selected="true"><span data-toggle="tooltip" data-placement="bottom"
                title="@lang('website.MostLiked')">@lang('website.MostLiked')</span></a>
            @endif

			</div>






			@if($result['top_seller']['success']==1)



			<div class="row tt-layout-product-item">
			@foreach($result['top_seller']['product_data'] as $key=>$products)
				<div class="col-6 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
					
						
						@include('web.common.product')
					</div>
				</div>
				@endforeach
			
			</div>
			@endif


			@if($result['special']['success']==1)



			<div class="row tt-layout-product-item <?php if($result['top_seller']['success'] != 1 && $result['special']['success']==1) print 'active show'; ?>" id="special" >
			@foreach($result['special']['product_data'] as $key=>$products)
				<div class="col-6 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
					
						@include('web.common.product')
					</div>
				</div>
				@endforeach
			
			</div>
			@endif


			
			@if($result['most_liked']['success']==1)



			<div class="row tt-layout-product-item">
			@foreach($result['most_liked']['product_data'] as $key=>$products)
				<div class="col-6 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						@include('web.common.product')
					</div>
				</div>
				@endforeach
			
			</div>
			@endif













		</div>
	</div>

	
<!-- modal (AddToCartProduct) -->
</div>

@endif