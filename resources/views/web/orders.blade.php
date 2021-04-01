@extends('web.layout')
@section('content')
<div class="tt-breadcrumb">
	<div class="container">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li>Account</li>
		</ul>
	</div>
</div>
<div id="tt-pageContent">
	<div class="container-indent">
    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
              aria-hidden="true">&times;</span></button>
          {{ session()->get('message') }}
        </div>

        @endif
		<div class="container container-fluid-custom-mobile-padding">
			<h1 class="tt-title-subpages noborder">My ACCOUNT</h1>
			<div class="tt-shopping-layout">
				<h2 class="tt-title">ORDER </h2>
			
				<div class="tt-data">November 20, 2016</div>
				<div class="tt-wrapper">
					<div class="tt-table-responsive">
						<table class="tt-table-shop-03">
							<thead>
								<tr>
									<th>Order ID</th>
									<th>Order Date</th>
									<th>Price</th>
									<th>TOTAL</th>
                                    <th>Detail</th>
								</tr>
							</thead>
							<tbody>
                            @if(count($result['orders']) > 0)
            @foreach( $result['orders'] as $orders)
								<tr>
									<td{{$orders->orders_id}}</td>
									<td> {{ date('d/m/Y', strtotime($orders->date_purchased))}}</td>
									<td>@if($orders->currency == '$')
                {{ $orders->currency }} {{ $orders->order_price  }}
                @else
                {{ $orders->order_price * $orders->currency_value }} {{ $orders->currency }}
                @endif</td>
									<td> @if($orders->orders_status_id == '2')
                                    <span class="badge badge-success">{{$orders->orders_status}}</span>
                <!-- &nbsp;&nbsp;/&nbsp;&nbsp;

                              <form action="{{ URL::to('/updatestatus')}}" method="post" onSubmit="return returnOrder();" style="display: inline-block">
                              <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                              <input type="hidden" name="orders_id" value="{{$orders->orders_id}}">
                              <input type="hidden" name="orders_status_id" value="4">
                              <button type="submit" class="badge badge-danger" style="text-transform:capitalize; cursor:pointer">{{$orders->orders_status}}) </button>
                              </form> -->
                @else
                @if($orders->orders_status_id == '3')
                <span class="badge badge-danger">{{$orders->orders_status}} </span>
                @elseif($orders->orders_status_id == '4')
                <span class="badge badge-danger">{{$orders->orders_status}} </span>
                @else
                <span class="badge badge-primary">{{$orders->orders_status}}</span>
                &nbsp;&nbsp;/&nbsp;&nbsp;
                <form action="{{ URL::to('/updatestatus')}}" method="post" onSubmit="return cancelOrder();"
                  style="display: inline-block">
                  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                  <input type="hidden" name="orders_id" value="{{$orders->orders_id}}">
                  <input type="hidden" name="orders_status" value="3">
                  <input type="hidden" name="old_orders_status" value="{{ $orders->orders_status_id }}">
                  <button type="submit" class="badge badge-danger"
                    style="text-transform:capitalize; cursor:pointer">@lang('website.cancel order') </button>
                </form>

                @endif
                @endif
                                    
                                    </td>

                                    <td align="right" href="{{ URL::to('/view-order/'.$orders->orders_id)}}">view Order</td>
								</tr>
                                @endforeach
            @else
            <tr>
              <td colspan="4">No order is placed yet
              </td>
            </tr>
            @endif
							
							</tbody>
						</table>
					</div>
				</div>
				<!-- <div class="tt-wrapper">
					<div class="tt-shop-info">
						<div class="tt-item">
							<h6 class="tt-title">BILLING ADDRESS:</h6>
							<div class="tt-description">
								<strong>Payment status: pendibg</strong>
								<p>
									Ut enim ad minim veniam, quis nostrud
									Eexercitation ullamco laboris nisi ut aliquip ex ea
									Commodo consequat
								</p>
							</div>
						</div>
						<div class="tt-item">
							<h6 class="tt-title">SHIPPING ADDRESS:</h6>
							<div class="tt-description">
								<strong><a href="#">Payment status: pendibg</a></strong>
								<p>
									Ut enim ad minim veniam, quis nostrud
									Eexercitation ullamco laboris nisi ut aliquip ex ea
									Commodo consequat
								</p>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</div>
@endsection