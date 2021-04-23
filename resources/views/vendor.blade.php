@extends('layouts.layout')
@section('content')
<div class="tt-breadcrumb">
	<div class="container">
		<ul>
			<li><a href="{{url('/')}}">Home</a></li>
			<li>vendor form</li>
		</ul>
	</div>
</div>

@if( count($errors) > 0)
            @foreach($errors->all() as $error)
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">@lang('website.Error'):</span>
                {{ $error }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endforeach
          @endif

          @if(Session::has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              <span class="sr-only">@lang('website.Error'):</span>
              {!! session('error') !!}

              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif

          @if(session()->has('message'))
            <div class="alert alert-success" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              {{ session()->get('message') }}
            </div>
          @endif
<div id="tt-pageContent">
	<div class="container-indent">
		<div class="container">
			<h1 class="tt-title-subpages noborder">
Vendor Request Form</h1>
			<div class="tt-login-form">
				<div class="row justify-content-center">
					<div class="col-md-8 col-lg-6">
						<div class="tt-item">
							<h2 class="tt-title"></h2>
							<div class="form-default">
								<!-- <form id="contactform"   enctype="multipart/form-data"  action="{{url('/confirmVendor')}}" method="post">
                         -->
                <form action="{{url('/confirmVendor')}}" method="post" accept-charset="utf-8"
                            enctype="multipart/form-data">
                            @csrf
                        
                                <div class="row">
<div class="col-md-6">

<div class="form-group">
										<label for="loginLastName">First Name*</label>
										<input type="text"name="firstName"  class="form-control" id="loginLastName" placeholder="Enter Your First Name">
									</div>


</div>

<div class="col-md-6">

<div class="form-group">
										<label for="loginLastName">Last Name*</label>
										<input type="text" name="lastName" class="form-control" id="loginLastName" placeholder="Enter Your Last Name">
									</div>


</div>

</div>
                        
                        
                        
                        
                        
                             

<div class="row">
<div class="col-md-12">

<div class="form-group">
										<label for="loginLastName">Address*</label>
										<input type="text" name="vendor_address" class="form-control" id="loginLastName" placeholder="Enter Your Address">
									</div>


</div>

</div>

<div class="row">
<div class="col-md-6">
<label for="loginLastName" style="display:none;">Zip code*</label>
<input name="vendor_zipcode" type="hidden" class="form-control" id="vendor_zipcode" placeholder="" value="">
                 		


</div>

</div>

<div class="row">
<div class="col-md-6">
<label for="loginLastName">City*</label>
										<input  type="text"name="vendor_city"class="form-control" id="loginLastName" placeholder="city">
								


</div>


<div class="col-md-6">
<label for="loginLastName">country</label>

<select id="country" class="form-control" name="country">
  
   <option value="">select country</option>
 
</select>									


</div>

</div>
<br>
<div class="row">
<div class="col-md-12">
<div class="form-group">

<label for="loginInputEmail">Phone Number</label>
										<input type="text" name="phone_number"  class="form-control" id="loginInputEmail" placeholder="Enter your phone number">
								
</div>


</div>


</div>


<div class="row">
<div class="col-md-12">
<div class="form-group">

<label for="loginInputEmail">vendor username</label>
										<input type="text" name="vendor_name" class="form-control" id="loginInputEmail" placeholder="Vendor username">
								
</div>


</div>


</div>


<div class="row">
<div class="col-md-12">
<div class="form-group">

<label for="loginInputEmail">vendor Arabic username</label>
										<input type="text" name="vendor_arabic_name" class="form-control" id="loginInputEmail" placeholder="Vendor arabic username">
								
</div>


</div>


</div>






                                    
									<div class="form-group">
										<label for="loginInputEmail">E-MAIL Address *</label>
										<input type="text" name="email" class="form-control" id="loginInputEmail" placeholder="Enter E-mail">
									</div>
									<div class="form-group">
										<label for="loginInputPassword">PASSWORD *</label>
										<input type="text"name="password" class="form-control" id="loginInputPassword" placeholder="Enter Password">
									</div>


                                    <div class="row">
<div class="col-md-12">
<div class="form-group">
<label>
      <input type="checkbox" checked="checked" name="remember"> Confirm request means you agree on our Terms and Services   and  
      <a href="{{url('terms')}}">
Privacy Policy.
</a>
    </label>


</div>

</div>

</div>
									<div class="row">
										<div class="col-auto">
											<div class="form-group">

                      <button class="btn btn-primary  btn-register"><b>Add Cars</b></button>
      
            
												<!-- <button class="btn btn-border"  type="submit">CONFIRM REQUEST</button> -->
											</div>
										</div>
									
									</div>

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection