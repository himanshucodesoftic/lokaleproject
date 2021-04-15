
@extends('newlayout')
@section('content')

<div class="row">
<div class="col-md-12 mt-5">

<p style="font-size:60px; text-align:center">@lang('home.msg')<p>

</div>

</div>
	<div class="container-indent" >
		<div class="container container-fluid-custom-mobile-padding">
			<div class="tt-contact02-col-list">
				<div class="row">
					<div class="col-sm-12 col-md-4 ml-sm-auto mr-sm-auto" >
						<div class="tt-contact-info" >
							<i class="tt-icon icon-f-93"></i>
							<h6 class="tt-title">
							
							
							@lang('home.HelpCenter')</h6>
							<address >
							<p  style="text-decoration:none;">
							@lang('home.+96555456559')
							 - contact@lokalkw.com
							</p><br>
							@lang('home.+MONtoFRI9am-6pmSAT9am-2pm')
						
							</address>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="tt-contact-info">
							<i class="tt-icon icon-f-24"></i>
							<h6 class="tt-title">@lang('home.Showroom')</h6>
							<address>
							@lang('home.addressCityState,ZipCountry,')
							<br>
							@lang('home.MONtoFRI9am-6pmSAT9am-2pm')
<br>
							
							</address>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="tt-contact-info">
							<i class="tt-icon icon-f-92"></i>
							<h6 class="tt-title">	@lang('home.Orders')</h6>
							<address>
							@lang('home.+96555456559-orders@lokalkw.com')
						<br>
						@lang('home.MONtoFRI9am-6pmSAT9am-2pm')
					
							</address>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<div class="container mt-5">
	<div class="row ">
	<div class="col-md-6  ">
<div class="container-indent">
		<div class="container">
               
        
			<div class="contact-map">
        
        
                <p class="info">
                    @lang('website.Contact us text')
                </p>
		</div>
 </div>
 </div>
 </div>



 <div class="container-indent" >
		<div class="container container-fluid-custom-mobile-padding">
        @if(session()->has('success') )
                     <div class="alert alert-success">
                         {{ session()->get('success') }}
                     </div>
                  @endif
                  <form enctype="multipart/form-data" action="{{ URL::to('/processContactUs')}}" method="post">
                    <input name="_token" value="{{ csrf_token() }}" type="hidden">
                    	<div class="row">
					<div class="col-md-8">
						<div class="form-group">
							<input type="text" name="name" class="form-control" id="inputName" placeholder="Your Name (required)">
						</div>
						<div class="form-group">
							<input type="text" name="email" class="form-control" id="inputEmail" placeholder="Your Email (required)">
						</div>
						
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<textarea name="message" class="form-control" rows="7" placeholder="write your Your Message"  id="textareaMessage"></textarea>
						</div>
					</div>
				</div>
				<div class="text-center">
					<button type="submit" class="btn"  style="background-color:#2b5a80!important">Submit</button>
				</div>
			</form>
		</div>
	</div>




 </div>
	</div>
	</div>

	</div>

    @endsection

