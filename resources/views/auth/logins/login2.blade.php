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
							<h2 class="tt-title">LOGIN</h2>
							
							<div class="form-default form-top">
								<form id="customer_login" method="post" novalidate="novalidate">
									<div class="form-group">
										<label for="loginInputName">E-MAIL </label>
										<div class="tt-required">* Required Fields</div>
										<input type="text" name="name" class="form-control" id="loginInputName" placeholder="plaese enter your valid email address">
									</div>
									<div class="form-group">
										<label for="loginInputEmail">PASSWORD </label>
										<input type="text" name="passowrd" class="form-control" id="loginInputEmail" placeholder="Please Enter Password">
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
													<li><a href="#">Lost your password?</a></li>
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
								<form id="customer_login" method="post" novalidate="novalidate">
									<div class="form-group">
										<label for="loginInputName">E-MAIL Address</label>
										<div class="tt-required">* Required Fields</div>
										<input type="text" name="name" class="form-control" id="loginInputName" placeholder="plaese enter your valid email address">
									</div>
									<div class="form-group">
										<label for="loginInputEmail">Password </label>
										<input type="text" name="passowrd" class="form-control" id="loginInputEmail" placeholder="Please Enter Password">
									</div>
									<div class="form-group">
										<label for="loginInputEmail">Confirm Password </label>
										<input type="text" name="passowrd" class="form-control" id="loginInputEmail" placeholder="Please Enter Password">
									</div>
									<div class="row">
									<div class="col-md-6">
									<div class="form-group">
									<label for="loginInputEmail">First Name  </label>
										<input type="text" name="passowrd" class="form-control" id="loginInputEmail" placeholder="please enter your first name ">
									</div>
								
									</div>
									<div class="col-md-6">
									<div class="form-group">
									<label for="loginInputEmail">Last Name  </label>
										<input type="text" name="passowrd" class="form-control" id="loginInputEmail" placeholder="please enter your Last name ">
									</div>
									</div>
									</div>


									<div class="row">
									<div class="col-md-6">
									<div class="form-group">
									<label for="loginInputEmail">Date  of Birth</label>
										<input type="text" name="passowrd" class="form-control" id="loginInputEmail" placeholder="please enter your date of birth ">
									</div>
								
									</div>
									<div class="col-md-6">
									<div class="form-group">
									<label for="loginInputEmail">Gender </label>
									<select name="cars" class="form-control" id="cars">
  <option value="choose">choose</option>
  <option value="male">Male</option>
  <option value="Female">Female</option>
 
</select>
														</div>
									</div>
									</div>




<div class="row">
<div class="col-md-12">
<div class="form-group">
									<label for="loginInputEmail">Phone Number</label>
										<input type="text" name="phone" class="form-control" id="loginInputEmail" placeholder="please enter your valid  phone number ">
									</div>
								


</div>

</div>







<div class="row">
<div class="col-md-12">
<div class="form-group">
<label>
      <input type="checkbox" checked="checked" name="remember"> Accept Terms & Conditions
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