@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <style>
            form {
                width: 70%;
            }
        </style>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> Orders <small>ListingAllOrders...</small> </h1>
            <ol class="breadcrumb">
                <li><a href="{{ URL::to('admin/dashboard/this_month') }}"><i class="fa fa-dashboard"></i> breadcrumb_dashboard</a></li>
                <li class="active">Orders</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Info boxes -->

            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header" style="display: flex;">
                            <h3 class="box-title">{{ trans('labels.ListingAllOrders') }} </h3>

                            {!! Form::open(array('url' =>'admin/orders/display', 'method'=>'get', 'class' => 'form-horizontal form-validate', 'enctype'=>'multipart/form-data')) !!}
                            <div style="margin-left: 20%;">
                                <label for="vendor_id">Vendor</label>
                                <select name="vendor_id" id="vendor_id" style="margin: 0 16px 0 7px;">
                                    <option value="" selected>All</option>
                                    @foreach($result['vendors'] as $vendor)
                                    <option value="{{$vendor->vendor_id}}" @if(session('filter_vendor_id'))@if(session('filter_vendor_id') == $vendor->vendor_id) selected @endif @endif>{{$vendor->vendor_name}}</option>
                                    @endforeach
                                </select>

                                <label for="from">From</label>
                                <input type="date" name="from_date" id="from_date" placeholder="Choose Date" value="@if(session('from_date')){{session('from_date')}}@endif">

                                <label for="to" style="margin-left: 10px;">To</label>
                                <input type="date" name="to_date" id="to_date" placeholder="Choose Date" value="@if(session('to_date')){{session('to_date')}}@endif">

                                <button type="submit" style="margin-left: 10px;">Filter</button>
                            </div>
                            {!! Form::close() !!}
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
                                            <th>ID</th>
                                            <th>CustomerName</th>
                                            <th>.Order Source</th>
                                            <th>OrderTotal</th>
                                            <th>DatePurchased</th>
                                            <th>Product Name</th>
                                            <th>Status </th>
                                            
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($listingOrders['orders'])>0)
                                            @foreach ($listingOrders['orders'] as $key=>$orderData)
                                                <tr>
                                                    <td>{{ $orderData->orders_id }}</td>
                                                    <td>{{ $orderData->customers_name }}</td>
                                                    <td>
                                                        @if($orderData->ordered_source == 1)
                                                        Website
                                                        @else
                                                        Application
                                                        @endif</td>
                                                    <td>
                                                        
                                                    @if(!empty($result['commonContent']['currency']->symbol_left) && $result['commonContent']['currency']->symbol_left == $orderData->currency)  {{ $orderData->currency }}  {{ $orderData->order_price *  $orderData->currency_value }} @else  {{ $orderData->order_price *  $orderData->currency_value }}  {{ $orderData->currency }} @endif</td>
                                                    <td>{{ date('d/m/Y', strtotime($orderData->date_purchased)) }}</td>

                                                    <td>
                                                    @foreach($orderData->order_products as $prod)
                                                        {{$prod->products_name}} (x {{$prod->products_quantity}}),
                                                    @endforeach
                                                    </td>

                                                    <td>
                                                        @if($orderData->orders_status_id==1)
                                                            <span class="label label-warning">
                                                        @elseif($orderData->orders_status_id==2)
                                                            <span class="label label-success">
                                                        @elseif($orderData->orders_status_id==3)
                                                            <span class="label label-danger">
                                                        @else
                                                            <span class="label label-primary">
                                                        @endif
                                                        {{ $orderData->orders_status }}
                                                            </span>
                                                    </td>
                                                    
                                                    <td>
                                                        <a data-toggle="tooltip" data-placement="bottom" title="View Order" href="vieworder/{{ $orderData->orders_id }}" class="badge bg-light-blue"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                                                        <a data-toggle="tooltip" data-placement="bottom" title="Delete Order" id="deleteOrdersId" orders_id ="{{ $orderData->orders_id }}" class="badge bg-red"><i class="fa fa-trash" aria-hidden="true"></i></a>

                                                    </td>

                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="6"><strong>NoRecordFound</strong></td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                    <div class="col-xs-12 text-right">
                                        {{$listingOrders['orders']->links()}}
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

            <!-- deleteModal -->
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="deleteModalLabel">DeleteOrder</h4>
                        </div>
                        {!! Form::open(array('url' =>'admin/orders/deleteOrder', 'name'=>'deleteOrder', 'id'=>'deleteOrder', 'method'=>'post', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data')) !!}
                        {!! Form::hidden('action',  'delete', array('class'=>'form-control')) !!}
                        {!! Form::hidden('orders_id',  '', array('class'=>'form-control', 'id'=>'orders_id')) !!}
                        <div class="modal-body">
                            <p>DeleteOrderText</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="deleteOrder">Close</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

            <!-- Main row -->

            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection
