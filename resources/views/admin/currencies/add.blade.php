@extends('admin.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Add Currency<small>Add Currency...</small> </h1>
        <ol class="breadcrumb">
            <li><a href="{{ URL::to('admin/dashboard/this_month') }}"><i class="fa fa-dashboard"></i>
            breadcrumb_dashboard</a></li>
            <li><a href="{{ URL::to('admin/currencies/display')}}"><i
                        class="fa fa-gears"></i>Currency</a></li>
            <li class="active">Add Currency</li>
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
                        <h3 class="box-title">Add Currency </h3>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box box-info">
                                    <!-- form start -->
                                    <br>
                                    @if (count($errors) > 0)
                                    @if($errors->any())
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        {{$errors->first()}}
                                    </div>
                                    @endif
                                    @endif
                                    @if(session()->has('success'))
                                    <div class="alert alert-success alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            {{ session()->get('success') }}
                                    </div>
                                    @endif
                                    <div class="box-body">

                                        {!! Form::open(array('url' =>'admin/currencies/add', 'method'=>'post', 'class'
                                        => 'form-horizontal form-validate', 'enctype'=>'multipart/form-data')) !!}
                                        <div class="form-group">
                                            <label for="name"
                                                class="col-sm-2 col-md-3 control-label">title
                                            </label>
                                            <div class="col-sm-10 col-md-4">
                                                {!! Form::text('title', '', array('class'=>'form-control
                                                field-validate', 'id'=>'title'))!!}
                                                <span class="help-block"
                                                    style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                    title</span>
                                                <span
                                                    class="help-block hidden">textRequiredFieldMessage</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name"
                                                class="col-sm-2 col-md-3 control-label">Country
                                            </label>
                                            <div class="col-sm-10 col-md-4">
                                                <select class="form-control field-validate" name="code">
                                                    @foreach($currencies as $currency)
                                                    <option value="{{$currency->code}}">{{ $currency->currency_name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                <span class="help-block"
                                            style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                            Choose Country</span>
                                            </div>
                                            
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="name"
                                                class="col-sm-2 col-md-3 control-label">symbol
                                            </label>
                                            <div class="col-sm-10 col-md-4">
                                                {!! Form::text('symbol', '', array('class'=>'form-control field-validate',
                                                'id'=>'symbol'))!!}
                                                <span class="help-block"
                                                    style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                    symbol text</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="name"
                                                class="col-sm-2 col-md-3 control-label">Position</label>
                                            <div class="col-sm-10 col-md-4">
                                                <select class="form-control" name="position">
                                                    <option value="left">Left</option>
                                                    <option value="right">Right</option>
                                                </select>
                                                <span class="help-block"
                                            style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                            Choose position of the currency</span>
                                            </div>
                                            
                                            
                                        </div>                                        

                                        <div class="form-group" style="display: none">
                                            <label for="name"
                                                class="col-sm-2 col-md-3 control-label">decimal_point
                                            </label>
                                            <div class="col-sm-10 col-md-4">
                                                {!! Form::text('decimal_point', '', array('class'=>'form-control',
                                                'id'=>'decimal_point'))!!}
                                                <span class="help-block"
                                                    style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                    decimal_point</span>
                                                <span
                                                    class="help-block hidden">textRequiredFieldMessage</span>
                                            </div>
                                        </div>
                                        <div class="form-group" style="display: none">
                                            <label for="name"
                                                class="col-sm-2 col-md-3 control-label">thousands_point
                                            </label>
                                            <div class="col-sm-10 col-md-4">
                                                {!! Form::text('thousands_point', '', array('class'=>'form-control',
                                                'id'=>'thousands_point'))!!}
                                                <span class="help-block"
                                                    style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                    thousands_point</span>
                                                <span
                                                    class="help-block hidden">textRequiredFieldMessage</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name"
                                                class="col-sm-2 col-md-3 control-label">decimal_places
                                            </label>
                                            <div class="col-sm-10 col-md-4">
                                                {!! Form::text('decimal_places', '', array('class'=>'form-control
                                                field-validate', 'id'=>'decimal_places'))!!}
                                                <span class="help-block"
                                                    style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                    decimal_places</span>
                                                <span
                                                    class="help-block hidden">textRequiredFieldMessage</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name"
                                                class="col-sm-2 col-md-3 control-label">value
                                            </label>
                                            <div class="col-sm-10 col-md-4">
                                                {!! Form::text('value', '', array('class'=>'form-control
                                                field-validate', 'id'=>'value'))!!}
                                                <span class="help-block"
                                                    style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                    value</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name"
                                                class="col-sm-2 col-md-3 control-label">Status</label>
                                            <div class="col-sm-10 col-md-4">
                                                <select class="form-control" name="status">
                                                    <option value="1">Active</option>
                                                    <option value="0">InActive</option>
                                                </select>
                                                <span class="help-block"
                                                    style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                                    StatusBannerText</span>
                                            </div>
                                        </div>

                                        <!-- /.box-body -->
                                        <div class="box-footer text-center">
                                            <button type="submit"
                                                class="btn btn-primary">Submit</button>
                                            <a href="{{ URL::to('admin/currencies/display')}}" type="button"
                                                class="btn btn-default">back</a>
                                        </div>
                                        <!-- /.box-footer -->
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
