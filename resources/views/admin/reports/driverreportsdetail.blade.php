@extends('admin.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>{{ trans('labels.Drivers Report Detail') }} <small>Drivers Report Detail...</small> </h1>
        <ol class="breadcrumb">
            <li><a href="{{ URL::to('admin/dashboard/this_month')}}"><i class="fa fa-dashboard"></i>
            breadcrumb_dashboard</a></li>
            <li class="active">Drivers Report Detail</li>
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
                        <h3 class="box-title">Driver Listing </h3>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>OrderID</th>
                                            <th>CustomerName</th>
                                            <th>Vendor</th>
                                            <th>Date</th>
                                            <th>OrdersStatus</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if(count($result['reportdata'])>0)
                                        @foreach ($result['reportdata'] as $key=>$data)
                                        <tr>
                                            <td> {{ ++$key }}</td>
                                            <td> {{ $data->orders_id }}</td>
                                            <td> {{ $data->customers_name }}</td>
                                            <td> {{ $data->deliveryboy_name }}</td>
                                            <td> {{ $data->created_at }}</td>
                                            <td> {{ $data->orders_status_name }}</td>
                                       </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td colspan="6"><strong>NoRecordFound</strong></td>
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

        <!-- Main row -->

        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
@endsection