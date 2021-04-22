@extends('web.layout')
@section('content')
<div id="tt-pageContent">
	<div class="container-indent">
		<div class="container">
			<h1 class="tt-title-subpages noborder">SIGN IN OR CREATE AN ACCOUNT</h1>
			<div class="tt-login-form">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<div class="tt-item">
							<h2 class="tt-title">LOGIN</h2>
							If you have an account with us, please log in.
							<div class="form-default form-top">
							<form enctype="multipart/form-data" class="form-validate-login" action="{{ URL::to('/process-login')}}"
            method="post">
						{{csrf_field()}}		<div class="form-group">
										<label for="loginInputName">E-MAIL </label>
										<div class="tt-required">* Required Fields</div>
										<input type="text" name="email" class="form-control" id="loginInputName" placeholder="Enter Your E-mail">
									</div>
									<div class="form-group">
										<label for="loginInputEmail">PASSWORD *</label>
										<input type="text" name="password" class="form-control" id="loginInputEmail" placeholder="Enter Password">
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
													<li><a href="#">Forgot password?</a></li>
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
							<h2 class="tt-title">NEW CUSTOMER</h2>
						
							<div class="form-default form-top">
							<form name="signup" enctype="multipart/form-data" class="form-validate"
            action="{{ URL::to('/signupProcess')}}" method="post">
			{{csrf_field()}}
									<div class="form-group">
										<label for="loginInputName">Email </label>
										<div class="tt-required">* Required Fields</div>
										<input type="text" name="email" class="form-control" id="loginInputName" placeholder="Enter Your E-mail">
									</div>
									<div class="form-group">
										<label for="Password">Password *</label>
										<input type="text" name="password" class="form-control" id="loginInputEmail" placeholder="Enter Password">
									</div>
									<div class="form-group">
										<label for="CnfrmPwd">Confirm Password *</label>
										<input type="text" name="re_password" class="form-control" id="loginInputEmail" placeholder="Confirm Password">
									</div>
									<div class="row">
										<div class="col-xs-12 col-md-6"> 
											<div class="form-group">
												<label for="FirstName">First Name *</label>
												<input type="text" name="firstName" class="form-control" id="loginInputEmail" placeholder="Confirm Password">
											</div>	
										</div>
										<div class="col-xs-12 col-md-6"> 
											<div class="form-group">
												<label for="LastName">Last Name *</label>
												<input type="text" name="lastName" class="form-control" id="loginInputEmail" placeholder="Confirm Password">
											</div>	
										</div>
									</div>


									<div class="row">
										<div class="col-xs-12 col-md-6"> 
											<div class="form-group">
												<label for="FirstName">Date Of Birth *</label>
												<input type="date" name="customers_dob" class="form-control" id="loginInputDOB" placeholder="Confirm Password">
											</div>	
										</div>
										<div class="col-xs-12 col-md-6"> 
											<div class="form-group">
												<label for="LastName"> Gender *</label> <br />
												<!-- <input type="radio" name="gender" value="male" id="loginInputEmail">  <label for="male">Male</label> <br />
												<input type="radio" name="gender"value="female" id="loginInputEmail"><label for="male">FeMale</label><br /> -->
												<select name="gender" id="LoginInputGender" class="form-control">
													<option value="select" class="form-control">select</option>
													<option value="0" @if(!empty(old('gender')) and old('gender')==0) selected @endif) >Male</option>
													<option value="female" @if(!empty(old('gender')) and old('gender')==1) selected @endif>Female</option>
				
						
												  </select>
											</div>	
										</div>
									</div>
								
									<div class="form-group">
										<label for="CnfrmPwd">Phone Number *</label>
										<input type="Number" name="contactnumber" class="form-control" id="loginInputPhoneNumber" placeholder="Please Enter Your Contact Number">
									</div>

									<div class="form-group">
										<input type="checkbox" id="agree" name="agree" value="agree">
                                         <label for="agree"> I accept to all the terms and conditions .</label><br>
									</div>


									<div class="row">
										<div class="col-auto mr-auto">
											<div class="form-group">
												<button class="btn btn-border" type="submit">REGISTER</button>
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