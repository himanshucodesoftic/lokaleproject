@extends('web.layout')
@section('content')


<div class="container-fuild ">
  <nav aria-label="breadcrumb">
      <div class="container">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ URL::to('/')}}">@lang('website.Home')</a></li>
            <li class="breadcrumb-item active" aria-current="page">@lang('website.Shipping Address')</li>
          </ol>
      </div>
    </nav>
</div> 

<!--Shipping Content -->
<section class="shipping-content pro-content">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-3">
        <div class="heading">
            <h2>
                @lang('website.My Account')
            </h2>
            <hr >
          </div>

        <ul class="list-group">
            <li class="list-group-item">
                <a class="nav-link" href="{{ URL::to('/profile')}}">
                    <i class="fas fa-user"></i>
                  @lang('website.Profile')
                </a>
            </li>
            <li class="list-group-item">
                <a class="nav-link" href="{{ URL::to('/wishlist')}}">
                    <i class="fas fa-heart"></i>
                 @lang('website.Wishlist')
                </a>
            </li>
            <li class="list-group-item">
                <a class="nav-link" href="{{ URL::to('/orders')}}">
                    <i class="fas fa-shopping-cart"></i>
                  @lang('website.Orders')
                </a>
            </li>
            <li class="list-group-item">
                <a class="nav-link" href="{{ URL::to('/shipping-address')}}">
                    <i class="fas fa-map-marker-alt"></i>
                 @lang('website.Shipping Address')
                </a>
            </li>
            <li class="list-group-item">
                <a class="nav-link" href="{{ URL::to('/logout')}}">
                    <i class="fas fa-power-off"></i>
                  @lang('website.Logout')
                </a>
            </li>
            <li class="list-group-item">
              <a class="nav-link" href="{{ URL::to('/change-password')}}">
                  <i class="fas fa-unlock-alt"></i>
                @lang('website.Change Password')
              </a>
          </li>
          </ul>
      </div>
      <div class="col-12 col-lg-9 ">
          <div class="heading">
              <h2>
                  @lang('website.Shipping Address')
              </h2>
              <hr >
            </div>
            @if(!empty($result['action']) and $result['action']=='detele')
                  <div class="alert alert-success alert-dismissible" role="alert">
                      @lang('website.Your address has been deteled successfully')

                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>
              @endif

              @if(!empty($result['action']) and $result['action']=='default')
                  <div class="alert alert-success alert-dismissible" role="alert">
                      @lang('website.Your address has been changed successfully')
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>
              @endif
          <table class="table shipping-table">
            <thead>
              <tr>
                <th scope="col">@lang('website.Default')</th>
                <th scope="col" class="d-none d-md-block">@lang('website.Action')</th>
              </tr>
            </thead>
            <tbody>
            @if(!empty($result['address']) and count($result['address'])>0)
            @foreach($result['address'] as $address_data)
              <tr>
                <td >
                  <div class="form-check">
                  <input class="form-check-input default_address" address_id="{{$address_data->address_id}}" type="radio" name="default" @if($address_data->default_address == 1) checked @endif>
                  <label class="form-check-label" for="gridCheck">
                    {{$address_data->firstname}}, {{$address_data->lastname}}, {{$address_data->street}}, {{$address_data->city}}, {{$address_data->zone_name}}, {{$address_data->country_name}}, {{$address_data->postcode}}
                  </label>
                </div>
              </td>
              <td class="edit-tag">
                <ul>
                  <li><a href="{{ URL::to('/shipping-address?address_id='.$address_data->address_id)}}"> <i class="fas fa-pen"></i> @lang('website.Edit') </a></li>
                  @if($address_data->default_address == 0)
                  <a  href="{{url('delete-address')}}/{{$address_data->address_id}}" ><i class="fa fa-trash" aria-hidden="true"></i>@lang('website.Remove') </a>
                  @endif
                  
                </ul>
                @include('web.common.scripts.deleteAddress')
              </td>
            </tr>
           @endforeach
           @else
            <tr>
                <td valign="center">@lang('website.Shipping addresses are not added yet')</td>
              </tr>
           @endif
            </tbody>
          </table>
          <div class="heading mt-4">
            <h2>
            @lang('website.Add Shipping Address')
            </h2>
            <hr>
          </div>
          <div class="main-form">
              <form name="addMyAddress" class="form-validate" enctype="multipart/form-data" action="@if(!empty($result['editAddress'])){{ URL::to('/update-address')}}@else{{ URL::to('/addMyAddress')}}@endif" method="post">
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

                @if(!empty($result['editAddress']))
                <input type="hidden" name="address_book_id" value="{{$result['editAddress'][0]->address_id}}">
                @endif
                    @if( count($errors) > 0)
                       @foreach($errors->all() as $error)
                           <div class="alert alert-danger" role="alert">
                                 <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                 <span class="sr-only">@lang('website.Error'):</span>
                                 {{ $error }}
                           </div>
                        @endforeach
                   @endif
                  @if(session()->has('error'))
                   <div class="alert alert-success">
                       {{ session()->get('error') }}
                   </div>
               @endif
                   @if(Session::has('error'))

                       <div class="alert alert-danger" role="alert">
                             <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                             <span class="sr-only">@lang('website.Error'):</span>
                             {{ session()->get('error') }}
                         </div>

                   @endif

                   @if(Session::has('error'))
                       <div class="alert alert-danger" role="alert">
                             <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                             <span class="sr-only">@lang('website.Error'):</span>
                             {!! session('loginError') !!}
                       </div>
                   @endif

                   @if(session()->has('success') )
                       <div class="alert alert-success">
                           {{ session()->get('success') }}
                       </div>
                   @endif

                  @if(!empty($result['action']) and $result['action']=='update')
                       <div class="alert alert-success">

                           @lang('website.Your address has been updated successfully')
                       </div>
                   @endif

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputfirstname"><span class="star">*</span>@lang('website.First Name')</label>
                      <input type="text" name="entry_firstname" class="form-control field-validate" id="entry1_firstname" @if(!empty($result['editAddress'])) value="{{$result['editAddress'][0]->firstname}}" @endif>
                      <span class="help-block error-content7" hidden>@lang('website.Please enter your first name')</span>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputlastname">@lang('website.Last Name')</label>
                      <input type="text" name="entry_lastname" class="form-control field-validate" rid="entry1_lastname" @if(!empty($result['editAddress'])) value="{{$result['editAddress'][0]->lastname}}" @endif>
                      <span class="help-block error-content7" hidden>@lang('website.Please enter your address')</span>                  </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputcomapnyname"><span class="star">*</span>@lang('website.Address')</label>
                      <input type="text" name="entry_street_address"  class="form-control field-validate" id="entry1_street_address" @if(!empty($result['editAddress'])) value="{{$result['editAddress'][0]->street}}" @endif>
                      <span class="help-block error-content7" hidden>@lang('website.Please enter your address')</span>
                    </div>
                    <div class="form-group select-control col-md-6">
                      <label for="inputState"><span class="star">*</span> @lang('website.Country')</label>
                      <select name="entry_country_id"  onChange="getZones();" id="entry_country_id" class="form-control field-validate">
                          <option value="">@lang('website.select Country')</option>
                          @foreach($result['countries'] as $countries)
                          <option value="{{$countries->countries_id}}" @if(!empty($result['editAddress'])) @if($countries->countries_id==$result['editAddress'][0]->countries_id) selected @endif @endif>{{$countries->countries_name}}</option>
                          @endforeach
                      </select>
                      <span class="help-block error-content1" hidden>@lang('website.Please select your country')</span>
                    </div>
                  </div>
                  <div class="form-row">

                    <div class="form-group select-control col-md-6">
                      <label for="inputState">@lang('website.State')</label>
                      <select name="entry_zone_id"  id="entry_zone_id" class="form-control field-validate">
                          <option value="-1">Others</option>
                          @if(!empty($result['zones']))
                          @foreach($result['zones'] as $zones)
                          <option value="{{$zones->zone_id}}" @if(!empty($result['editAddress'])) @if($zones->zone_id==$result['editAddress'][0]->zone_id) selected @endif @endif>{{$zones->zone_name}}</option>
                          @endforeach
                          @endif
                      </select>
                      <span class="help-block error-content6" hidden>@lang('website.Please select your state')</span>
                    </div>
                    <div class="form-group select-control col-md-6">
                      <label for="inputState"><span class="star">*</span> @lang('website.City')</label>
                      <input type="text" name="entry_city"  class="form-control field-validate" id="entry_city1" @if(!empty($result['editAddress'])) value="{{$result['editAddress'][0]->city}}" @endif>
                      <span class="help-block error-content7" hidden>@lang('website.Please enter your city')</span>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputaddress"><span class="star">*</span> @lang('website.Zip/Postal Code')</label>
                      <input type="text" name="entry_postcode"  class="form-control field-validate" id="entry_postcode1" @if(!empty($result['editAddress'])) value="{{$result['editAddress'][0]->postcode}}" @endif>
                      <span class="help-block error-content7" hidden>@lang('website.Please enter your Zip/Postal Code')</span>
                    </div>
                  </div>
                  <div class="button">
                  @if(!empty($result['editAddress']))
                      <a href="{{ URL::to('/shipping-address')}}" class="btn btn-default">@lang('website.cancel')</a>
                  @endif
                      <button type="submit" class="btn btn-secondary swipe-to-top">@if(!empty($result['editAddress']))  @lang('website.Update')  @else @lang('website.Add Address') @endif </button>
                  </div>
                </form>
          </div>
        <!-- ............the end..... -->
      </div>
    </div>
  </div>
</section>












<!-- <div class="tt-breadcrumb">
	<div class="container">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li>Account</li>
		</ul>
	</div>
</div>
<div id="tt-pageContent">
	<div class="container-indent">
		<div class="container container-fluid-custom-mobile-padding">
			<h1 class="tt-title-subpages noborder">SHIPPING ADDRESS
</h1>
			<div class="tt-shopping-layout">
				<h2 class="tt-title">YOUR ADDRESS</h2>
				<div class="tt-wrapper">
					<a href="#" class="btn">ADD A NEW ADDRESS</a><br>
					<a href="account.html" class="tt-link-back">
						<i class="icon-h-46"></i> RETURN TO ACCOUNT PAGE
					</a>
				</div>
				<div class="tt-wrapper">
					<h6 class="tt-title">ADD A NEW ADDRESS</h6>
					<div class="form-default">
						<form>
							<div class="form-group">
								<label for="shopInputFirstName" class="control-label">FIRST NAME *</label>
								<input type="text" class="form-control" id="shopInputFirstName">
							</div>
							<div class="form-group">
								<label for="shopInputLastName" class="control-label">LAST NAME *</label>
								<input type="text" class="form-control" id="shopInputLastName">
							</div>
							<div class="form-group">
                            <label for="shopAddress" class="control-label">ADDRESS *</label>
								<input type="text" class="form-control" id="shopAddress">
							
                            </div>
							<div class="form-group">
								<label for="shopCompanyName" class="control-label">COUNTRY *</label>
								<select class="form-control">
									<option>Country</option>
									<option>Country 02</option>
									<option>Country 03</option>
									<option>Country 04</option>
									<option>Country 05</option>
									<option>Country 06</option>
									<option>Country 07</option>
									<option>Country 08</option>
									<option>Country 09</option>
									<option>Country 10</option>
									<option>Country 11</option>
								</select>
							</div>
							<div class="form-group">
                            <label for="shopState" class="control-label">STATE / COUNTY *</label>
								<input type="text" class="form-control" id="shopState">
							</div>
							<div class="form-group">
								<label for="shopTown" class="control-label">TOWN / CITY *</label>
								<input type="text" class="form-control" id="shopTown">
							</div>
							<div class="form-group">
							</div>
							<div class="form-group">
								<label for="shopPostCode" class="control-label">POSTCODE / ZIP *</label>
								<input type="text" class="form-control" id="shopPostCode">
							</div>
							<div class="form-group">
							</div>
							<div class="form-group">
							
							</div>
							<div class="checkbox-group">
								<input type="checkbox" id="checkBox11" name="checkbox">
								<label for="checkBox11">
									<span class="check"></span>
									<span class="box"></span>
									Set as deafult address?
								</label>
							</div>
							<div class="row tt-offset-21">
								<div class="col-auto">
									<button type="submit" class="btn">ADD  ADDRESS</button>
								</div>
								<div class="col-auto align-self-center">
									or	<a href="#" class="tt-link">Cancel</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->
@endsection