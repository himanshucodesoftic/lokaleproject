@extends('web.layout')
@section('content')
<div id="tt-pageContent"  >
	<div class="container-indent">
		<div class="container">
			<h1 class="tt-title-subpages noborder">
			@lang('home.SIGNINORCREATEANACCOUNT')
		</h1>
			<div class="tt-login-form">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<div class="tt-item">
							<h2 class="tt-title">@lang('home.Login')</h2>
							@lang('home.Ifyouhaveanaccountwithus,pleaselogin.')
							<div class="form-default form-top">
							<form enctype="multipart/form-data" class="form-validate-login" action="{{ URL::to('/process-login')}}"
            method="post">
						{{csrf_field()}}		<div class="form-group">
										<label for="loginInputName">@lang('home.E-MAIL') </label>
										<div class="tt-required"> @lang('home.*RequiredFields')</div>
										<input type="text" name="email" class="form-control" id="loginInputName" placeholder="@lang('home.enteryoure-mail')">
									</div>
									<div class="form-group">
										<label for="loginInputEmail">@lang('home.password')</label>
										<input type="text" name="password" class="form-control" id="loginInputEmail" placeholder="@lang('home.enterpassword')">
									</div>
									<div class="row">
										<div class="col-auto mr-auto">
											<div class="form-group">
												<button class="btn btn-border" type="submit">@lang('home.login')</button>
											</div>
										</div>
										<div class="col-auto align-self-end">
											<div class="form-group">
										<ul class="additional-links">
													<li><a href="#">@lang('home.forgotpassword')</a></li>
												</ul>
											</div>
										</div>
									</div>

								</form>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-md-6">
						<div class="tt-item">
							<h2 class="tt-title">
							@lang('home.Newcustomer')</h2>
						
							<div class="form-default form-top">
							<form name="signup" enctype="multipart/form-data" class="form-validate"
            action="{{ URL::to('/signupProcess')}}" method="post">
			{{csrf_field()}}
									<div class="form-group">
										<label for="loginInputName">	@lang('home.Email') </label>
										<div class="tt-required">@lang('home.*RequiredFields')</div>
										<input type="text" name="email" class="form-control" id="loginInputName" placeholder="@lang('home.enteryoure-mail')">
									</div>
									<div class="form-group">
										<label for="Password">@lang('home.password')</label>
										<input type="text" name="password" class="form-control" id="loginInputEmail" placeholder="@lang('home.password')">
									</div>
									<div class="form-group">
										<label for="CnfrmPwd">	@lang('home.ConfirmPassword*')</label>
										<input type="text" name="re_password" class="form-control" id="loginInputEmail" placeholder="@lang('home.ConfirmPassword*')">
									</div>
									<div class="row">
										<div class="col-xs-12 col-md-6"> 
											<div class="form-group">
												<label for="FirstName">	@lang('home.FirstName*')</label>
												<input type="text" name="firstName" class="form-control" id="loginInputEmail" placeholder="@lang('home.ConfirmPassword*')">
											</div>	
										</div>
										<div class="col-xs-12 col-md-6"> 
											<div class="form-group">
												<label for="LastName">@lang('home.LastName*')</label>
												<input type="text" name="lastName" class="form-control" id="loginInputEmail" placeholder="@lang('home.ConfirmPassword*')">
											</div>	
										</div>
									</div>


									<div class="row">
										<div class="col-xs-12 col-md-6"> 
											<div class="form-group">
												<label for="FirstName">@lang('home.DateOfBirth*')</label>
												<input type="date" name="customers_dob" class="form-control" id="loginInputDOB" placeholder="Confirm Password">
											</div>	
										</div>
										<div class="col-xs-12 col-md-6"> 
											<div class="form-group">
												<label for="LastName"> @lang('home.Gender*')</label> <br />
												<!-- <input type="radio" name="gender" value="male" id="loginInputEmail">  <label for="male">Male</label> <br />
												<input type="radio" name="gender"value="female" id="loginInputEmail"><label for="male">FeMale</label><br /> -->
												<select name="gender" id="LoginInputGender" class="form-control">
													<option value="select" class="form-control">@lang('home.select')</option>
													<option value="0" @if(!empty(old('gender')) and old('gender')==0) selected @endif) >Male</option>
													<option value="female" @if(!empty(old('gender')) and old('gender')==1) selected @endif>Female</option>
				
						
												  </select>
											</div>	
										</div>
									</div>
								
									<div class="form-group">
										<label for="CnfrmPwd">@lang('home.PhoneNumber*')</label>
										<input type="Number" name="contactnumber" class="form-control" id="loginInputPhoneNumber" placeholder="@lang('home.pleaseselectyourcontactno')">
									</div>

									<div class="form-group">
										<input type="checkbox" id="agree" name="agree" value="agree">
                                         <label for="agree">@lang('home.Iaccepttoallthetermsandconditions.')</label><br>
									</div>


									<div class="row">
										<div class="col-auto mr-auto">
											<div class="form-group">
												<button class="btn btn-border" type="submit">@lang('home.register')</button>
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