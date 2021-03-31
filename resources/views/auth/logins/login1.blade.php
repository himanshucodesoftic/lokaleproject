@extends('layouts.layout')
@section('content')

<div id="tt-pageContent">
	<div class="container-indent">
		<div class="container">
			<h1 class="tt-title-subpages noborder">Sign In or Create an Account</h1>
			<div class="tt-login-form">
				<div class="row">
					<div class="col-xs-12 col-md-6">
					<div class="tt-item">

					@if($result['commonContent']['setting'][61]->value==1 || $result['commonContent']['setting'][2]->value==1)
            <div class="row no-gutters">
							@if($result['commonContent']['setting'][2]->value==1)
              <div class="col-lg-6 pr-lg-1">
                <a href="login/google" class="social_bt facebook">@lang('website.Facebook')</a>
              </div>
							@endif
							@if($result['commonContent']['setting'][61]->value==1)
              <div class="col-lg-6 pl-lg-1">
                <a href="login/facebook" class="social_bt google">@lang('website.Google')</a>
              </div>
							@endif
            </div>
            <div class="divider"><span>@lang('website.Or')</span></div>
						@endif

							<h2 class="tt-title">LOGIN</h2>
							
							<div class="form-default form-top">
							
						<form enctype="multipart/form-data" class="form-validate-login" action="{{ URL::to('/process-login')}}"
            method="post">
						{{csrf_field()}}
									<div class="form-group">
										<label for="loginInputName">E-MAIL </label>
										<div class="tt-required">* Required Fields</div>
										<input type="text" name="email" class="form-control" id="loginInputName" placeholder="plaese enter your valid email address">
										<span class="form-text text-muted error-content" hidden>@lang('website.Please enter your valid email address')</span>
         
									</div>
									<div class="form-group">
										<label for="loginInputEmail">PASSWORD </label>
										<input type="text" name="password" class="form-control" id="loginInputEmail" placeholder="Please Enter Password">
										<span class="form-text text-muted error-content" hidden>@lang('website.This field is required')</span>
            
									</div>

																		
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>


</div>

</div>

</div>
									<div class="row">
										<div class="col-auto mr-auto">
											<div class="form-group">
												<button class="btn btn-border" type="submit">LOGIN</button>
											</div>
										</div>

	

										<div class="col-auto align-self-end">
											<div class="form-group">
												<ul class="additional-links">
													<li><a  href="{{ URL::to('/forgotPassword')}}">Lost your password?</a></li>
												</ul>
											</div>
										</div>
									</div>
									@if($result['checkout_button'] == 1)
              <p style="text-align:center; margin-top:30px;">
                <strong> @lang('website.OR')</strong>
              </p>
              <a href="{{url('/guest_checkout')}}" type="submit" class="btn btn-light swipe-to-top btn-block">
                @lang('website.Guest Checkout')
              </a>
            @endif
								</form>
							</div>
						</div>
						
					</div>
					<div class="col-xs-12 col-md-6">
					<div class="tt-item">
							<h2 class="tt-title">NEW CUSTOMER</h2>
							
							<div class="form-default form-top">
							<form name="signup" enctype="multipart/form-data" class="form-validate"
            action="{{ URL::to('/signupProcess')}}" method="post">
						{{csrf_field()}}
									<div class="form-group">
										<label for="loginInputName">E-MAIL Address</label>
										<div class="tt-required">* Required Fields</div>
										<input type="text" name="email" class="form-control" id="loginInputName" placeholder="plaese enter your valid email address">
										<span class="form-text text-muted error-content" hidden>@lang('website.Please enter your valid email address')</span>
         
									</div>
									<div class="form-group">
										<label for="loginInputEmail">Password </label>
										<input type="text"name="password"  class="form-control" id="loginInputEmail" placeholder="Please Enter Password">
										<span class="form-text text-muted error-content" hidden>@lang('website.Please enter your password')</span>
          
									</div>
									<div class="form-group">
										<label for="loginInputEmail">Confirm Password </label>
										<input type="text" name="re_password" class="form-control" id="loginInputEmail" placeholder="Please Enter Password">
										<span class="form-text text-muted error-content" hidden>@lang('website.Please re-enter your password')</span>
							<span class="form-text text-muted re-password-content" hidden>@lang('website.Password does not match the confirm password')</span>
           
									</div>
									<div class="row">
									<div class="col-md-6">
									<div class="form-group">
									<label for="loginInputEmail">First Name  </label>
										<input type="text"name="firstName"  class="form-control" id="loginInputEmail" placeholder="please enter your first name " value="{{ old('firstName') }}">
										<span class="form-text text-muted error-content" hidden>@lang('website.Please enter your first name')</span>
         
									</div>
								
									</div>
									<div class="col-md-6">
									<div class="form-group">
									<label for="loginInputEmail">Last Name  </label>
										<input type="text"  name="lastName"  class="form-control" id="loginInputEmail" placeholder="please enter your Last name " value="{{ old('lastName') }}">
										<span class="form-text text-muted error-content" hidden>@lang('website.Please enter your last name')</span>
              
									</div>
									</div>
									</div>


									<div class="row">
									<div class="col-md-6">
									<div class="form-group">
									<label for="loginInputEmail">Date  of Birth</label>
										<input type="text"name="customers_dob"  class="form-control" id="loginInputEmail" placeholder="please enter your date of birth " value="{{ old('customers_dob') }}">
										<span class="form-text text-muted error-content" hidden>@lang('website.Please enter your date of birth')</span>
                 
									</div>
								
									</div>
									<div class="col-md-6">
									<div class="form-group">
									<label for="loginInputEmail">Gender </label>
									<select name="gender" class="form-control" id="cars">
  <option value="choose">choose</option>
  <option value="0" @if(!empty(old('gender')) and old('gender')==0) selected @endif)></option>
  <option value="1" @if(!empty(old('gender')) and old('gender')==1) selected @endif>Female</option>
 
</select>
														</div>
									</div>
									</div>




<div class="row">
<div class="col-md-12">
<div class="form-group">
									<label for="loginInputEmail">Phone Number</label>
										<input type="text"name="phone"class="form-control" id="loginInputEmail" placeholder="please enter your valid  phone number " value="{{ old('phone') }}">
										<span class="form-text text-muted error-content" hidden>@lang('website.Please enter your valid phone number')</span>
                
									</div>
								


</div>

</div>







<div class="row">
<div class="col-md-12">
<div class="form-group">
<label>
      <input type="checkbox" checked="checked" name="remember"> <a href="{{url('/page?name=term-services')}}">Accept Terms & Conditions
    </a>
	</label>


</div>

</div>

</div>



									<div class="row">
										<div class="col-auto mr-auto">
											<div class="form-group">
												<button class="btn btn-border" type="submit">Register</button>
											</div>
										</div>
										<div class="col-auto align-self-end">
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