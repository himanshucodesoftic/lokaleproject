@if($result['special']['success']==1 or $result['top_seller']['success']==1 or $result['most_liked']['success']==1 )




<div class="container-indent0" >
		<div class="container-fluid">
			<!--welcome to store starts-->
			<div class="row">
				<div class="col-md-12 col-sm-12 mt-5 mb-5">
					 <div class="first-text-section">
						 <h1 class="sectione-heading">WELCOME TO STORE</h1>


						 @if($result['top_seller']['success']==1)
						 <button class="most-liked-button pr-5 pl-5 pt-2 pb-2">Most Liked</button>

            @endif
            @if($result['special']['success']==1)
			<button class="most-liked-button pr-5 pl-5 pt-2 pb-2" <?php if($result['top_seller']['success'] != 1 && $result['special']['success']==1) print 'active show'; ?>" >Most Liked</button>
          
            @endif
            @if($result['most_liked']['success']==1)


			<button class="most-liked-button pr-5 pl-5 pt-2 pb-2" <?php if($result['top_seller']['success'] != 1 && $result['special']['success'] != 1 && $result['most_liked']['success'] == 1) print 'active show'; ?>">Most Liked</button>
         
            @endif
						 <!-- <h4 ><button class="most-liked-button pr-5 pl-5 pt-2 pb-2">Most Liked</button></h4> -->
					 </div>
				</div>
			 </div>
			 @if($result['top_seller']['success']==1)
			 <div class="row tt-layout-product-item">
			 @foreach($result['top_seller']['product_data'] as $key=>$products)
				<div class="col-6 col-md-4 col-lg-3">
				@include('web.common.product')
				</div>
				@endforeach
				</div>
				@endif


				@if($result['special']['success']==1)
			 <div class="row tt-layout-product-item" >
			 @foreach($result['special']['product_data'] as $key=>$products)
				<div class="col-6 col-md-4 col-lg-3">
				@include('web.common.product')
				</div>
				@endforeach
				</div>
				@endif
		

				
				@if($result['most_liked']['success']==1)
			 <div class="row tt-layout-product-item"  >
			 @foreach($result['most_liked']['product_data'] as $key=>$products)
				<div class="col-6 col-md-4 col-lg-3 " style="margin-left:100px;" >
				@include('web.common.product')
				</div>
				@endforeach
				</div>
				@endif
		
		</div>
	</div>
	@endif




	