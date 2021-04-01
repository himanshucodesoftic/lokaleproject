@extends('web.layout')
@section('content')

<div class="tt-breadcrumb">
	<div class="container">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li>change password</li>
		</ul>
	</div>
</div>

<!-- page Content -->
<section class="page-area pro-content">
  <div class="container"> 
      <div class="row justify-content-center">
         
      
        <div class="col-12 col-sm-12 col-md-6">
            
          <div class="col-12 my-5">
              
             <h5>Change Password</h5>
             

             <hr style="margin-bottom: 0;">
                <div class="tab-content" id="registerTabContent">
                  @if(session()->has('success') )
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  @endif

                  @if(session()->has('error') )
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session()->get('error') }}
                    </div>
                  @endif              

                
                  
                  <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                      <div class="registration-process">
                      <form name="updateMyPassword" class="form-validate" id="updateMyPassword" enctype="multipart/form-data" action="{{ URL::to('/updateMyPassword')}}" method="post">
                        @csrf

                        <div class="from-group mb-3">
                          <div class="col-12"> <label for="current_password">Current Password</label></div>
                          <div class="input-group col-12">                          
                            <input name="current_password" type="password" class="form-control field-validate" id="current_password" placeholder="Current Password">
                            <!-- <span class="help-block error-content" hidden>@lang('website.Please enter current password')</span> -->
                          </div>
                        </div>
                        
                        <div class="from-group mb-3">
                          <div class="col-12"> <label for="password">New Password</label></div>
                          <div class="input-group col-12">                             
                            <input name="new_password" type="password" class="form-control password" id="new_password" placeholder="New Password">
                            <!-- <span class="help-block error-content" hidden>@lang('website.Please enter your password and should be at least 6 characters long')</span> -->
                          </div>
                        </div>

                        <div class="from-group mb-3">
                          <div class="col-12"> <label for="confirm_password">Confirm Password</label></div>
                          <div class="input-group col-12">                             
                            <input name="confirm_password" type="password" class="form-control password" id="confirm_password" placeholder="Confirm Password">
                            <!-- <span class="help-block error-content" hidden>@lang('website.Please enter your password and should be at least 6 characters long')</span> -->
                          </div>
                        </div>

                        <div class="alert alert-danger fade show" hidden id="passowrd-error" role="alert">
                        </div>

                          <div class="col-12 col-sm-12">
                              <button type="submit" class="btn btn-secondary">@lang('website.Update')</button>                            
                          </div>
                      </form>
                      </div>
                      
                  </div>
                </div>
          </div>
        </div>

      </div>
  </div>
</section>
 @endsection
