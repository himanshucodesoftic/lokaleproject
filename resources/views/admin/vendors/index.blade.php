@extends('admin.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Vendors<small>ListingAllVendors...</small> </h1>
        <ol class="breadcrumb">
            <li><a href="{{ URL::to('admin/dashboard/this_month')}}"><i class="fa fa-dashboard"></i> breadcrumb_dashboard</a></li>
            <li class="active">Vendors</li>
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
                        <div class="container-fluid">
                            <div class="row">

                                <div class="col-lg-6 form-inline" id="contact-form" style="display: none;">
                                    <form name='registration' id="registration" class="registration" method="get" action="{{url('admin/customers/filter')}}">
                                        <input type="hidden" value="{{csrf_token()}}">
                                        {{--<div class="input-group-btn search-panel ">--}}
                                        <div class="input-group-form search-panel ">
                                            <select type="button" class="btn btn-default dropdown-toggle form-control" data-toggle="dropdown" name="FilterBy" id="FilterBy">
                                                <option value="" selected disabled hidden>Filter By</option>
                                                <option value="Name" @if(isset($filter)) @if ($filter=="Name" ) {{ 'selected' }} @endif @endif>Name</option>
                                                <option value="E-mail" @if(isset($filter)) @if ($filter=="E-mail" ) {{ 'selected' }}@endif @endif>Email</option>
                                                <option value="Phone" @if(isset($filter)) @if ($filter=="Phone" ) {{ 'selected' }}@endif @endif>Phone</option>
                                                <option value="Address" @if(isset($filter)) @if ($filter=="Address" ) {{ 'selected' }}@endif @endif>Address</option>
                                                <!-- <option value="Suburb" @if(isset($filter)) @if ($filter=="Suburb" ) {{ 'selected' }}@endif @endif>{{ trans('labels.Suburb') }}</option> -->
                                                <option value="Postcode" @if(isset($filter)) @if ($filter=="Postcode" ) {{ 'selected' }}@endif @endif>Postcode</option>
                                                <option value="City" @if(isset($filter)) @if ($filter=="City" ) {{ 'selected' }}@endif @endif>City</option>
                                                <option value="State" @if(isset($filter)) @if ($filter=="State" ) {{ 'selected' }}@endif @endif>State</option>
                                                <option value="Country" @if(isset($filter)) @if ($filter=="Country" ) {{ 'selected' }}@endif @endif>Country</option>
                                            </select>
                                            <input type="text" class="form-control input-group-form " name="parameter" placeholder="Search term..." id="parameter" @if(isset($parameter)) value="{{$parameter}}" @endif>
                                            <button class="btn btn-primary " id="submit" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                                            @if(isset($parameter,$filter)) <a class="btn btn-danger " href="{{url('admin/customers/display')}}"><i class="fa fa-ban" aria-hidden="true"></i> </a>@endif
                                        </div>
                                    </form>
                                    <div class="col-lg-4 form-inline" id="contact-form12"></div>
                                </div>

                                <div class="box-tools pull-right">
                                    <a href="{{ url('admin/vendors/add')}}" type="button" class="btn btn-block btn-primary">AddNew</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-12">
                                @if (count($errors) > 0)
                                  @if($errors->any())
                                  <div class="alert alert-success alert-dismissible" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      {{$errors->first()}}
                                  </div>
                                  @endif
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                                              
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>@sortablelink('id', trans('ID) )</th>
                                            <th>{{ trans('labels.Picture') }}</th>
                                            <th>@sortablelink('vendor_name', trans('Name')) </th>
                                            <th>{{ trans('Owner') }}</th>
                                            <th>{{ trans('Email') }}</th>
                                            <th>{{ trans('Phone') }} </th>
                                            <th>{{ trans('Address') }}</th>
                                            <th>{{ trans('Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (isset($vendors['result']))
                                            @foreach ($vendors['result'] as $key => $listingCustomers)
                                            <tr>
                                                <td style="vertical-align: middle;"><center>{{ $key+1 }}</center></td>
                                                <td>
                                                    <img src="{{asset($listingCustomers->image_path)}}" alt="" width=" 100px">
                                                </td>
                                                <td style="vertical-align: middle;">{{ $listingCustomers->vendor_name }}</td>
                                                <td style="vertical-align: middle;">{{ $listingCustomers->first_name }} {{ $listingCustomers->last_name }}</td>
                                                <td style="text-transform: none; vertical-align: middle;">{{ $listingCustomers->email }}</td>
                                                <td style="vertical-align: middle;">{{ $listingCustomers->phone }}</td>
                                                <td style="vertical-align: middle;">
                                                    {{ $listingCustomers->address }}
                                                </td>
                                                <td style="vertical-align: middle;">
                                                    <ul class="nav table-nav">
                                                        <li class="dropdown">
                                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                            Action <span class="caret"></span>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="{{url('admin/vendors/edit') }}/{{$listingCustomers->vendor_id}}">{{ trans('labels.View Detail') }}</a></li>
                                                                <li role="presentation" class="divider"></li>                                                                
                                                                <li role="presentation"><a data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.Delete') }}" id="deleteCustomerFrom"
                                                                    users_id="{{ $listingCustomers->vendor_id }}">Delete</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            @endforeach
                                        @else
                                        <tr>
                                            <td colspan="4">NoRecordFound</td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                                
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

        <!-- deleteCustomerModal -->
        <div class="modal fade" id="deleteCustomerModal" tabindex="-1" role="dialog" aria-labelledby="deleteCustomerModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="deleteCustomerModalLabel">Delete</h4>
                    </div>
                    {!! Form::open(array('url' =>'admin/vendors/delete', 'name'=>'deleteCustomer', 'id'=>'deleteCustomer', 'method'=>'post', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data')) !!}
                    {!! Form::hidden('action', 'delete', array('class'=>'form-control')) !!}
                    {!! Form::hidden('users_id', '', array('class'=>'form-control', 'id'=>'users_id')) !!}
                    <div class="modal-body">
                        <p>DeleteVendorText</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Delete</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        <div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="notificationModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content notificationContent">

                </div>
            </div>
        </div>

        <!-- Main row -->

        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>

@endsection
