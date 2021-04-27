
@extends('newlayout')
@section('content')


<div class="tt-breadcrumb">
	<div class="container">
		<ul>
			<li><a href="{{url('/')}}">Home</a></li>
			<li>vendor List</li>
		</ul>
	</div>
</div>

<div class="container">
<div class="row mt-5">

@if(isset($allimage))
@foreach($allimage as $key=>$image)
<div class="col-6 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="{{url('/vendor_product/'.$key)}}">
								<span class="tt-img"><img src="{{asset($image->path)}}"  height="100px" width="100px" alt=""></span>
								<span class="tt-img-roll-over"><img src="{{asset($image->path)}}"  height="100px" width="100px" alt=""></span>
								<span class="tt-label-location">
									<!--<span class="tt-label-our-stock">Out Of Stock</span>-->
								</span>
							</a>
						</div>
						<div class="tt-description">
							<div class="tt-row">
								<ul class="tt-add-info">
									<li><a href="#"></a></li>
								</ul>
							</div>
							<h2 class="tt-title"><a href="#"> </a></h2>
							<div class="tt-price">
								
							</div>
							<div class="tt-option-block">
							
							</div>
						
						</div>
					</div>
				</div>
				@endforeach
				@endif

</div>
</div>









