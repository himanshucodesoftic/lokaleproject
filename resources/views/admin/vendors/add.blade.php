@extends('admin.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> AddVendor <small>AddVendor...</small> </h1>
        <ol class="breadcrumb">
            <li><a href="{{ URL::to('admin/dashboard/this_month')}}"><i class="fa fa-dashboard"></i> breadcrumb_dashboard</a></li>
            <li><a href="{{ URL::to('admin/vendors/display')}}"><i class="fa fa-users"></i> ListingAllVendors</a></li>
            <li class="active">AddVendor</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->

        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">AddVendor </h3>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box box-info">
                                    <!--<div class="box-header with-border">
                                          <h3 class="box-title">Edit category</h3>
                                        </div>-->
                                    <!-- /.box-header -->
                                  <br>
                                  @if (session('update'))
                                  <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
                                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                      <strong> {{ session('update') }} </strong>
                                  </div>
                                  @endif

                                  @if (count($errors) > 0)
                                    @if($errors->any())
                                      <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        {{$errors->first()}}
                                      </div>
                                    @endif
                                  @endif

                                    <div class="box-body">
                                      {!! Form::open(array('url' =>'admin/vendors/add', 'method'=>'post', 'class' => 'form-horizontal form-validate', 'enctype'=>'multipart/form-data')) !!}
                                        
                                        <div class="form-group">
                                          <label for="name" class="col-sm-2 col-md-3 control-label">Image </label>
                                          <div class="col-sm-10 col-md-4">

                                            <!-- Modal -->
                                            <div class="modal fade" id="Modalmanufactured" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" id="closemodal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    <h3 class="modal-title text-primary" id="myModalLabel">Choose Image </h3>
                                                  </div>

                                                  <div class="modal-body manufacturer-image-embed">
                                                    @if(isset($allimage))
                                                      <select class="image-picker show-html " name="image_id" id="select_img">
                                                        <option value=""></option>
                                                        @foreach($allimage as $key=>$image)
                                                        <option data-img-src="{{asset($image->path)}}" class="imagedetail" data-img-alt="{{$key}}" value="{{$image->id}}"> {{$image->id}} </option>
                                                        @endforeach
                                                      </select>
                                                    @endif
                                                  </div>
                                                  <div class="modal-footer">
                                                    <a href="{{url('admin/media/add')}}" target="_blank" class="btn btn-primary pull-left">Add Image</a>
                                                    <button type="button" class="btn btn-default refresh-image"><i class="fa fa-refresh"></i></button>
                                                    <button type="button" class="btn btn-primary" id="selected" data-dismiss="modal">Done</button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div id="imageselected">
                                              {!! Form::button(trans('Add Image'), array('id'=>'newImage','class'=>"btn btn-primary ", 'data-toggle'=>"modal", 'data-target'=>"#Modalmanufactured" )) !!}
                                              <br>
                                              <div id="selectedthumbnail" class="selectedthumbnail col-md-5"> </div>
                                              <div class="closimage">
                                                <button type="button" class="close pull-left image-close " id="image-close"
                                                  style="display: none; position: absolute;left: 105px; top: 54px; background-color: black; color: white; opacity: 2.2; " aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                            </div>
                                            <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">UploadVendorImageText</span>
                                          </div>
                                        </div>
                                        <hr>

                                        <div class="form-group">
                                          <label for="name" class="col-sm-2 col-md-3 control-label">Name </label>
                                          <div class="col-sm-10 col-md-4">
                                            {!! Form::text('vendor_name',  '', array('class'=>'form-control field-validate', 'id'=>'vendor_name')) !!}
                                            <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">VendorNameText</span>
                                            <span class="help-block hidden">textRequiredFieldMessage</span>
                                          </div>

                                          <div class="col-sm-10 col-md-4">
                                            {!! Form::text('vendor_name_arabic',  '', array('class'=>'form-control field-validate', 'id'=>'vendor_name_arabic')) !!}
                                            <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">VendorNameArabicText</span>
                                            <span class="help-block hidden">textRequiredFieldMessage</span>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label for="name" class="col-sm-2 col-md-3 control-label">Telephone</label>
                                          <div class="col-sm-10 col-md-4">
                                            {!! Form::text('vendor_phone',  '', array('class'=>'form-control field-validate', 'id'=>'vendor_phone')) !!}
                                            <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                            TelephoneText</span>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label for="name" class="col-sm-2 col-md-3 control-label">Address </label>
                                          <div class="col-sm-10 col-md-4">
                                            {!! Form::text('vendor_address',  '', array('class'=>'form-control field-validate', 'id'=>'vendor_address')) !!}
                                            <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">VendorAddressText</span>
                                            <span class="help-block hidden">textRequiredFieldMessage</span>
                                          </div>
                                        </div>
                                        <hr>

                                        <div class="form-group">
                                          <label for="name" class="col-sm-2 col-md-3 control-label">EmailAddress </label>
                                          <div class="col-sm-10 col-md-4">
                                            {!! Form::text('email',  '', array('class'=>'form-control email-validate', 'id'=>'email')) !!}
                                              <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                              EmailText</span>
                                            <span class="help-block hidden"> EmailError</span>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label for="name" class="col-sm-2 col-md-3 control-label">Password</label>
                                          <div class="col-sm-10 col-md-4">
                                            {!! Form::password('password', array('class'=>'form-control field-validate', 'id'=>'password')) !!}
                                            <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                            PasswordText</span>
                                            <span class="help-block hidden">textRequiredFieldMessage</span>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label for="name" class="col-sm-2 col-md-3 control-label">Confirm Password</label>
                                          <div class="col-sm-10 col-md-4">
                                            {!! Form::password('confirm_password', array('class'=>'form-control field-validate', 'id'=>'confirm_password')) !!}
                                            <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                            ConfirmPasswordText</span>
                                            <span class="help-block hidden">textRequiredFieldMessage</span>
                                          </div>
                                        </div>                                        
                                          
                                        <!-- <div class="form-group">
                                          <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.DOB') }} </label>
                                          <div class="col-sm-10 col-md-4">
                                            {!! Form::text('customers_dob',  '', array('class'=>'form-control datepicker' , 'readonly'=>'readonly', 'id'=>'customers_dob')) !!}
                                            <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                            {{ trans('labels.DOBText') }}</span>
                                          </div>
                                        </div> -->
                                        
                                        <!-- <div class="form-group">
                                          <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Fax') }}</label>
                                          <div class="col-sm-10 col-md-4">
                                            {!! Form::text('customers_fax',  '', array('class'=>'form-control', 'id'=>'customers_fax')) !!}
                                            <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.FaxText') }}</span>
                                          </div>
                                        </div> -->
                                        <hr>

                                        <div class="form-group">
                                          <label for="name" class="col-sm-2 col-md-3 control-label">Current Status</label>
                                          <div class="col-sm-10 col-md-4">
                                            <label>
                                              <input type="radio" name="vendor_open" value="1" class="minimal" checked>                                               <input type="radio" name="vendor_open" value="1" class="minimal" checked> {{ trans('labels.Open') }}

                                            </label><br>

                                            <label>
                                              <input type="radio" name="vendor_open" value="0" class="minimal">Close
                                            </label>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label for="name" class="col-sm-2 col-md-3 control-label">Close </label>
                                          <div class="col-sm-10 col-md-4">
                                            <select class="form-control" name="isActive">
                                              <option value="1">Active</option>
                                              <option value="0">Inactive</option>
                                            </select>
                                          <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                          StatusText</span>
                                          </div>
                                        </div>
                                        <div class="box-footer text-center">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <a href="{{ URL::to('admin/vendors/display')}}" type="button" class="btn btn-default">back</a>
                                        </div>

                                      {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->

        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
@endsection
