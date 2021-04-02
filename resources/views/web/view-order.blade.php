@extends('web.layout')
@section('content')
<div class="tt-breadcrumb">
	<div class="container">
		<ul>
			<li><a href="{{ URL::to('/')}}">Home</a></li>
			<li>Order Information</li>
		</ul>
	</div>
</div>

@if(session()->has('message'))
       <div class="col-md-12">
       <div class="row">
      	<div class="alert alert-success alert-dismissible">
           <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
           <h4><i class="icon fa fa-check"></i> {{ trans('labels.Successlabel') }}</h4>
            {{ session()->get('message') }}
        </div>
        </div>
        </div>
        @endif
        @if(session()->has('error'))
        <div class="col-md-12">
      	<div class="row">
        	<div class="alert alert-warning alert-dismissible">
               <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
               <h4><i class="icon fa fa-warning"></i> {{ trans('labels.WarningLabel') }}</h4>
                {{ session()->get('error') }}
            </div>
          </div>
         </div>
        @endif
<div id="tt-pageContent">
	<div class="container-indent">
		<div class="container container-fluid-custom-mobile-padding">
			<h1 class="tt-title-subpages noborder">Order Information</h1>
           
            <h3 class="">{{ trans('labels.OrderID') }}# {{ $data['orders_data'][0]->orders_id }}  
           </h3>
            <small style="display: inline-block" class="label label-primary">
         <strong>  @if($data['orders_data'][0]->ordered_source == 1)
            {{ trans('labels.Website') }}
            @else
            {{ trans('labels.Application') }}
            @endif
<strong>
            </small>
            {{ trans('labels.OrderedDate') }}: {{ date('m/d/Y', strtotime($data['orders_data'][0]->date_purchased)) }}
			
            <div class="tt-shopping-layout">
				<h2 class="tt-title">MY ACCOUNT</h2>
				<a href="account.html" class="tt-link-back">
					<!-- <i class="icon-e-19"></i> RETURN TO ACCOUNT PAGE -->
				</a>
				<div class="tt-data">November 20, 2016</div>
				<div class="tt-wrapper">
					<div class="tt-table-responsive">
						<table class="tt-table-shop-03">
							<thead>
								<tr>
									<th>{{ trans('labels.Qty') }}</th>
									<th>{{ trans('labels.Image') }}</th>
									<th>{{ trans('labels.ProductName') }}</th>
									<th>{{ trans('labels.ProductModal') }}</th>
                                    <th>{{ trans('labels.Options') }}</th>
              <th>{{ trans('labels.Price') }}</th>

                                    
								</tr>
							</thead>
							<tbody>
                             @foreach($data['orders_data'][0]->data as $products)
								<tr>
									<td>{{  $products->products_quantity }} </td>
                                    <td >
                   <img src="{{ asset('').$products->image }}" width="60px"> <br>
                </td>
									<td>  {{  $products->products_name }}</td>
									<td>   {{  $products->products_model }}</td>
									<td>       @foreach($products->attribute as $attributes)
                	<b>{{ trans('labels.Name') }}:</b> {{ $attributes->products_options }}<br>
                    <b>{{ trans('labels.Value') }}:</b> {{ $attributes->products_options_values }}<br>
                    <b>{{ trans('labels.Price') }}:</b> 
                    @if(!empty($result['commonContent']['currency']->symbol_left) && $result['commonContent']['currency']->symbol_left == $data['orders_data'][0]->currency)  {{ $data['orders_data'][0]->currency }}  {{ $attributes->options_values_price * $data['orders_data'][0]->currency_value }} @else  {{ $attributes->options_values_price * $data['orders_data'][0]->currency_value }}  {{ $data['orders_data'][0]->currency }} @endif

                @endforeach</td>
                <td>
                @if(!empty($result['commonContent']['currency']->symbol_left) && $result['commonContent']['currency']->symbol_left == $data['orders_data'][0]->currency)  {{ $data['orders_data'][0]->currency }}  {{$products->final_price  * $data['orders_data'][0]->currency_value }} @else  {{$products->final_price  * $data['orders_data'][0]->currency_value }}  {{ $data['orders_data'][0]->currency }} @endif<br>
             
                </td>
								</tr>
                                @endforeach
							
									<td colspan="3"><strong>{{ trans('labels.Subtotal') }}:</strong></td>
									<td>
                                    @if(!empty($result['commonContent']['currency']->symbol_left) && $result['commonContent']['currency']->symbol_left == $data['orders_data'][0]->currency)  {{ $data['orders_data'][0]->currency }}  {{$data['subtotal']  * $data['orders_data'][0]->currency_value }} @else  {{$data['subtotal']  * $data['orders_data'][0]->currency_value }}  {{ $data['orders_data'][0]->currency }} @endif<br>

                                    </td>
								</tr>
								<tr>
									<td colspan="3"><strong>{{ trans('labels.ShippingCost') }}:</strong></td>
									<td>
                                    @if(!empty($result['commonContent']['currency']->symbol_left) && $result['commonContent']['currency']->symbol_left == $data['orders_data'][0]->currency)  {{ $data['orders_data'][0]->currency }}  {{$data['orders_data'][0]->shipping_cost  * $data['orders_data'][0]->currency_value }} @else  {{$data['orders_data'][0]->shipping_cost  * $data['orders_data'][0]->currency_value }}  {{ $data['orders_data'][0]->currency }} @endif<br>
               
                                    </td>

                                    @if(!empty($data['orders_data'][0]->coupon_code))
              <tr>
                <th>{{ trans('labels.DicountCoupon') }}:</th>
                <td>
                @if(!empty($result['commonContent']['currency']->symbol_left) && $result['commonContent']['currency']->symbol_left == $data['orders_data'][0]->currency)  {{ $data['orders_data'][0]->currency }}  {{$data['orders_data'][0]->coupon_amount  * $data['orders_data'][0]->currency_value }} @else  {{$data['orders_data'][0]->coupon_amount  * $data['orders_data'][0]->currency_value }}  {{ $data['orders_data'][0]->currency }} @endif<br>                  
              </tr>
              @endif

								</tr>
								<tr>
									<td colspan="3"><strong>{{ trans('labels.Total') }}:</strong></td>
									<td><strong>
                                    @if(!empty($result['commonContent']['currency']->symbol_left) && $result['commonContent']['currency']->symbol_left == $data['orders_data'][0]->currency)  {{ $data['orders_data'][0]->currency }}  {{$data['orders_data'][0]->order_price  * $data['orders_data'][0]->currency_value }} @else  {{$data['orders_data'][0]->order_price  * $data['orders_data'][0]->currency_value }}  {{ $data['orders_data'][0]->currency }} @endif<br>

                                    </strong></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>








                <div class="tt-data">{{ trans('labels.OrderHistory') }}</div>
				<div class="tt-wrapper">
					<div class="tt-table-responsive">
						<table class="tt-table-shop-03">
							<thead>
								<tr>
									<th>{{ trans('labels.Date') }}</th>
									<th>{{ trans('labels.Status') }}</th>
									<th>{{ trans('labels.Comments') }}</th>
								    
								</tr>
							</thead>
							<tbody>
                            @foreach( $data['orders_status_history'] as $orders_status_history)
                      
								<tr>
									<td>
                                    <?php
								$date = new DateTime($orders_status_history->date_added);
								$status_date = $date->format('d-m-Y');
								print $status_date;
							?> </td>
                                    <td>
                                    @if($orders_status_history->orders_status_id==1)
                            	<span class="label label-warning">
                            @elseif($orders_status_history->orders_status_id==2)
                                <span class="label label-success">
                            @elseif($orders_status_history->orders_status_id==3)
                                 <span class="label label-danger">
                            @else
                                 <span class="label label-primary">
                            @endif
                            {{ $orders_status_history->orders_status_name }}
                                 </span>
                                    </td>
                                    <td>

                                    {{ $orders_status_history->comments }}  
                                    </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                    </table>
                                    </div>
                                    </div>
                                    </div>




























                
				<div class="tt-wrapper">
					<div class="tt-shop-info">
						<div class="tt-item">
							<h6 class="tt-title">{{ trans('labels.BillingInfo') }}:</h6>
							<div class="tt-description">
                            <strong>{{ $data['orders_data'][0]->billing_name }}</strong>
                            {{ $data['orders_data'][0]->billing_street_address }} <br>
            <strong>{{ trans('labels.Phone') }}: </strong>{{ $data['orders_data'][0]->billing_phone }}<br>
            {{ $data['orders_data'][0]->billing_city }}, {{ $data['orders_data'][0]->billing_state }} {{ $data['orders_data'][0]->billing_postcode }}, {{ $data['orders_data'][0]->billing_country }}<br>
       
							
							</div>
						</div>
						<div class="tt-item">
							<h6 class="tt-title">{{ trans('labels.CustomerInfo') }}:</h6>
							<div class="tt-description">
								<strong><a href="#">{{ $data['orders_data'][0]->customers_name }}</a></strong>
                                <br>
                                {{ $data['orders_data'][0]->customers_street_address }} <br>
            {{ $data['orders_data'][0]->customers_city }}, {{ $data['orders_data'][0]->customers_state }} {{ $data['orders_data'][0]->customers_postcode }}, {{ $data['orders_data'][0]->customers_country }}<br>
            {{ trans('labels.Phone') }}: {{ $data['orders_data'][0]->customers_telephone }}<br>
            {{ trans('labels.Email') }}: {{ $data['orders_data'][0]->email }}
                             
							</div>

                            <div class="tt-item">
							<h6 class="tt-title">{{ trans('labels.ShippingInfo') }}:</h6>
							<div class="tt-description">
								<strong>{{ $data['orders_data'][0]->delivery_name }}</strong><br>
            {{ $data['orders_data'][0]->delivery_street_address }} <br>
            {{ $data['orders_data'][0]->delivery_city }}, {{ $data['orders_data'][0]->delivery_state }} {{ $data['orders_data'][0]->delivery_postcode }}, {{ $data['orders_data'][0]->delivery_country }}<br>
 <br>
 <strong>{{ trans('labels.Phone') }}: </strong>{{ $data['orders_data'][0]->delivery_phone }}<br>
           <strong> {{ trans('labels.ShippingMethod') }}:</strong> {{ $data['orders_data'][0]->shipping_method }} <br>
           <strong> {{ trans('labels.ShippingCost') }}:</strong> 
           @if(!empty($data['orders_data'][0]->shipping_cost)) 
            @if(!empty($result['commonContent']['currency']->symbol_left) && $result['commonContent']['currency']->symbol_left == $data['orders_data'][0]->currency)  {{ $data['orders_data'][0]->currency }}  {{$data['orders_data'][0]->shipping_cost  * $data['orders_data'][0]->currency_value }} @else  {{$data['orders_data'][0]->shipping_cost  * $data['orders_data'][0]->currency_value }}  {{ $data['orders_data'][0]->currency }} @endif<br>
            @else --- @endif
                             
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection