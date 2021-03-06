<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">navigation</li>
        <li class="treeview {{ Request::is('admin/dashboard') ? 'active' : '' }}">
          <a href="{{ URL::to('admin/dashboard/this_month')}}">
            <i class="fa fa-dashboard"></i> <span>header_dashboard</span>
          </a>
        </li>
    
      <li class="treeview {{ Request::is('admin/media/add') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-picture-o"></i> <span>media</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="treeview {{ Request::is('admin/media/add') ? 'active' : '' }} ">
              <a href="{{url('admin/media/add')}}">

                  <i class="fa fa-circle-o" aria-hidden="true"></i> <span> media </span>
              </a>
          </li>

          <li class="treeview {{ Request::is('admin/media/display') ? 'active' : '' }} {{ Request::is('admin/addimages') ? 'active' : '' }} {{ Request::is('admin/uploadimage/*') ? 'active' : '' }} ">
              <a href="{{url('admin/media/display')}}">

                  <i class="fa fa-circle-o" aria-hidden="true"></i> <span> Media Setings </span>
              </a>
          </li>
        </ul>
      </li>

     

        <li class="treeview {{ Request::is('admin/languages/display') ? 'active' : '' }} {{ Request::is('admin/languages/add') ? 'active' : '' }} {{ Request::is('admin/languages/edit/*') ? 'active' : '' }} ">
          <a href="{{ URL::to('admin/languages/display')}}">
            <i class="fa fa-language" aria-hidden="true"></i> <span> languages </span>
          </a>
        </li>


      <li class="treeview {{ Request::is('admin/currencies/display') ? 'active' : '' }} {{ Request::is('admin/currencies/add') ? 'active' : '' }} {{ Request::is('admin/currencies/edit/*') ? 'active' : '' }} {{ Request::is('admin/currencies/filter') ? 'active' : '' }}">
        <a href="{{ URL::to('admin/currencies/display')}}">
          <i class="fa fa-circle-o"></i> currency
        </a>
      </li>


      <li class="treeview {{ Request::is('admin/vendors/display') ? 'active' : '' }} {{ Request::is('admin/vendors/requests') ? 'active' : '' }} {{ Request::is('admin/vendors/accept') ? 'active' : '' }} {{ Request::is('admin/vendors/add') ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-picture-o"></i> <span>vendors</span> @if ($result['commonContent']['new_vendor_requests'] > 0)<span style='color: white; background: green; padding: 1px 5px; border-radius: 5px;font-size: 11px; margin-left: 35px;'>New</span>@endif <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="treeview {{ Request::is('admin/vendors/requests') ? 'active' : '' }} ">
            <a href="{{url('admin/vendors/requests')}}">
              <i class="fa fa-circle-o" aria-hidden="true"></i> <span> all_requests </span> @if ($result['commonContent']['new_vendor_requests'] > 0)<span class="label label-success pull-right">{{$result['commonContent']['new_vendor_requests']}} New</span>@endif
            </a>
          </li>

          <li class="treeview {{ Request::is('admin/vendors/display') ? 'active' : '' }} ">
            <a href="{{url('admin/vendors/display')}}">
              <i class="fa fa-circle-o" aria-hidden="true"></i> <span> all_vendors </span>
            </a>
          </li>

          <li class="treeview {{ Request::is('admin/vendors/add') ? 'active' : '' }}">
            <a href="{{url('admin/vendors/add')}}">
              <i class="fa fa-circle-o" aria-hidden="true"></i> <span> add_vendor </span>
            </a>
          </li>
        </ul>
      </li>
    
        <li class="treeview {{ Request::is('admin/customers/display') ? 'active' : '' }}  {{ Request::is('admin/customers/add') ? 'active' : '' }}  {{ Request::is('admin/customers/edit/*') ? 'active' : '' }} {{ Request::is('admin/customers/address/display/*') ? 'active' : '' }} {{ Request::is('admin/customers/filter') ? 'active' : '' }} ">
          <a href="{{ URL::to('admin/customers/display')}}">
            <i class="fa fa-users" aria-hidden="true"></i> <span>link_customers</span>
          </a>
        </li>
        

        <li class="treeview {{ Request::is('admin/reviews/display') ? 'active' : '' }} {{ Request::is('admin/manufacturers/display') ? 'active' : '' }} {{ Request::is('admin/manufacturers/add') ? 'active' : '' }} {{ Request::is('admin/manufacturers/edit/*') ? 'active' : '' }} {{ Request::is('admin/units') ? 'active' : '' }} {{ Request::is('admin/addunit') ? 'active' : '' }} {{ Request::is('admin/editunit/*') ? 'active' : '' }} {{ Request::is('admin/products/display') ? 'active' : '' }} {{ Request::is('admin/products/add') ? 'active' : '' }} {{ Request::is('admin/products/edit/*') ? 'active' : '' }} {{ Request::is('admin/products/detail/*') ? 'active' : '' }} {{ Request::is('admin/editattributes/*') ? 'active' : '' }} {{ Request::is('admin/products/attributes/display') ? 'active' : '' }}  {{ Request::is('admin/products/attributes/add') ? 'active' : '' }} {{ Request::is('admin/products/attributes/add/*') ? 'active' : '' }} {{ Request::is('admin/addinventory/*') ? 'active' : '' }} {{ Request::is('admin/addproductimages/*') ? 'active' : '' }} {{ Request::is('admin/categories/display') ? 'active' : '' }} {{ Request::is('admin/categories/add') ? 'active' : '' }} {{ Request::is('admin/categories/edit/*') ? 'active' : '' }} {{ Request::is('admin/categories/filter') ? 'active' : '' }} {{ Request::is('admin/products/inventory/display') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-database"></i> <span>Catalog</span> @if ($result['commonContent']['new_pro_req'] > 0 || $result['commonContent']['new_reviews']>0)<span style='color: white; background: green; padding: 1px 5px; border-radius: 5px;font-size: 11px; margin-left: 35px;'>New</span>@endif <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
    
        
              <li class="{{ Request::is('admin/reviews/display') ? 'active' : '' }}">
                <a href="{{ URL::to('admin/reviews/display')}}">
                  <i class="fa fa-circle-o" aria-hidden="true"></i> <span>{{ trans('labels.reviews') }}</span>@if($result['commonContent']['new_reviews']>0)<span class="label label-success pull-right">{{$result['commonContent']['new_reviews']}} new</span>@endif
                </a>
              </li>
        
          </ul>
        </li>


      
        <li class="treeview {{ Request::is('admin/orderstatus') ? 'active' : '' }} {{ Request::is('admin/addorderstatus') ? 'active' : '' }} {{ Request::is('admin/editorderstatus/*') ? 'active' : '' }} {{ Request::is('admin/orders/display') ? 'active' : '' }} {{ Request::is('admin/orders/vieworder/*') ? 'active' : '' }}">
          <a href="#" ><i class="fa fa-list-ul" aria-hidden="true"></i> <span> link_orders</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
          <li class="{{ Request::is('admin/orderstatus') ? 'active' : '' }} {{ Request::is('admin/addorderstatus') ? 'active' : '' }} {{ Request::is('admin/editorderstatus/*') ? 'active' : '' }} "><a href="{{ URL::to('admin/orderstatus')}}"><i class="fa fa-circle-o"></i> link_order_status</a></li>
            <li class="{{ Request::is('admin/orders/display') ? 'active' : '' }} {{ Request::is('admin/orders/vieworder/*') ? 'active' : '' }}">
              <a href="{{ URL::to('admin/orders/display')}}" >
                <i class="fa fa-circle-o" aria-hidden="true"></i> <span> link_orders</span>
              </a>
            </li>
          </ul>
        </li>
    
        <li class="treeview {{ Request::is('admin/maxstock') ? 'active' : '' }} {{ Request::is('admin/minstock') ? 'active' : '' }} {{ Request::is('admin/inventoryreport') ? 'active' : '' }} {{ Request::is('admin/salesreport') ? 'active' : '' }} {{ Request::is('admin/couponreport') ? 'active' : '' }} {{ Request::is('admin/customers-orders-report') ? 'active' : '' }} {{ Request::is('admin/outofstock') ? 'active' : '' }} {{ Request::is('admin/statsproductspurchased') ? 'active' : '' }} {{ Request::is('admin/statsproductsliked') ? 'active' : '' }} {{ Request::is('admin/lowinstock') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-file-text-o" aria-hidden="true"></i>
  <span>link_reports</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <!-- <li class="{{ Request::is('admin/lowinstock') ? 'active' : '' }} "><a href="{{ URL::to('admin/lowinstock')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_products_low_stock') }}</a></li> -->
            @if($result['commonContent']['setting']['Inventory'] == '1')
            <li class="{{ Request::is('admin/outofstock') ? 'active' : '' }} "><a href="{{ URL::to('admin/outofstock')}}"><i class="fa fa-circle-o"></i> link_out_of_stock_products</a></li>
            <li class="{{ Request::is('admin/inventoryreport') ? 'active' : '' }} "><a href="{{ URL::to('admin/inventoryreport')}}"><i class="fa fa-circle-o"></i> Inventory Report</a></li>
             <li class="{{ Request::is('admin/minstock') ? 'active' : '' }} "><a href="{{ URL::to('admin/minstock')}}"><i class="fa fa-circle-o"></i> Min Stock Report</a></li>
            <li class="{{ Request::is('admin/maxstock') ? 'active' : '' }} "><a href="{{ URL::to('admin/maxstock')}}"><i class="fa fa-circle-o"></i>Max Stock Report</a></li> 
            @endif
            <li class="{{ Request::is('admin/customers-orders-report') ? 'active' : '' }} "><a href="{{ URL::to('admin/customers-orders-report')}}"><i class="fa fa-circle-o"></i> link_customer_orders_total</a></li>
            
            <!-- <li class="{{ Request::is('admin/statsproductsliked') ? 'active' : '' }}"><a href="{{ URL::to('admin/statsproductsliked')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_products_liked') }}</a></li> -->

            <li class="{{ Request::is('admin/couponreport') ? 'active' : '' }}"><a href="{{ URL::to('admin/couponreport')}}"><i class="fa fa-circle-o"></i> Coupon Report</a></li>
            <li class="{{ Request::is('admin/salesreport') ? 'active' : '' }}"><a href="{{ URL::to('admin/salesreport')}}"><i class="fa fa-circle-o"></i> Sales Report</a></li>
            
          </ul>
        </li>
     
     
  
      
     
          <li class="treeview {{ Request::is('admin/countries/display') ? 'active' : '' }} {{ Request::is('admin/countries/add') ? 'active' : '' }} {{ Request::is('admin/countries/edit/*') ? 'active' : '' }} {{ Request::is('admin/zones/display') ? 'active' : '' }} {{ Request::is('admin/zones/add') ? 'active' : '' }} {{ Request::is('admin/zones/edit/*') ? 'active' : '' }} {{ Request::is('admin/tax/taxclass/display') ? 'active' : '' }} {{ Request::is('admin/tax/taxclass/add') ? 'active' : '' }} {{ Request::is('admin/tax/taxclass/edit/*') ? 'active' : '' }} {{ Request::is('admin/tax/taxrates/display') ? 'active' : '' }} {{ Request::is('admin/tax/taxrates/add') ? 'active' : '' }} {{ Request::is('admin/tax/taxrates/edit/*') ? 'active' : '' }}">
            <a href="#">
              <i class="fa fa-money" aria-hidden="true"></i>
              <span>link_tax_location</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li class="{{ Request::is('admin/countries/display') ? 'active' : '' }} {{ Request::is('admin/countries/add') ? 'active' : '' }} {{ Request::is('admin/countries/edit/*') ? 'active' : '' }} "><a href="{{ URL::to('admin/countries/display')}}"><i class="fa fa-circle-o"></i> link_countries</a></li>
              <li class="{{ Request::is('admin/zones/display') ? 'active' : '' }} {{ Request::is('admin/zones/add') ? 'active' : '' }} {{ Request::is('admin/zones/edit/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/zones/display')}}"><i class="fa fa-circle-o"></i> link_zones</a></li>
              <li class="{{ Request::is('admin/tax/taxclass/display') ? 'active' : '' }} {{ Request::is('admin/tax/taxclass/add') ? 'active' : '' }} {{ Request::is('admin/tax/taxclass/edit/*') ? 'active' : '' }} "><a href="{{ URL::to('admin/tax/taxclass/display')}}"><i class="fa fa-circle-o"></i> link_tax_class</a></li>
              <li class="{{ Request::is('admin/tax/taxrates/display') ? 'active' : '' }} {{ Request::is('admin/tax/taxrates/add') ? 'active' : '' }} {{ Request::is('admin/tax/taxrates/edit/*') ? 'active' : '' }} "><a href="{{ URL::to('admin/tax/taxrates/display')}}"><i class="fa fa-circle-o"></i> link_tax_rates</a></li>
              </ul>
          </li>
       
        <li class="treeview {{ Request::is('admin/coupons/display') ? 'active' : '' }} {{ Request::is('admin/editcoupons/*') ? 'active' : '' }}">
          <a href="{{ URL::to('admin/coupons/display')}}" ><i class="fa fa-tablet" aria-hidden="true"></i> <span>link_coupons</span></a>
        </li>
     
        <li class="treeview {{ Request::is('admin/shippingmethods/display') ? 'active' : '' }} {{ Request::is('admin/shippingmethods/upsShipping/display') ? 'active' : '' }} {{ Request::is('admin/shippingmethods/flateRate/display') ? 'active' : '' }}">
          <a href="{{ URL::to('admin/shippingmethods/display')}}"><i class="fa fa-truck" aria-hidden="true"></i> <span> link_shipping_methods</span>
          </a>
        </li>
         
            <li class="treeview {{ Request::is('admin/paymentmethods/index') ? 'active' : '' }} {{ Request::is('admin/paymentmethods/display/*') ? 'active' : '' }}">
              <a  href="{{ URL::to('admin/paymentmethods/index')}}"><i class="fa fa-credit-card" aria-hidden="true"></i> <span>
              link_payment_methods</span>
              </a>
            </li>
        
    <li class="treeview {{ Request::is('admin/newscategories/display') ? 'active' : '' }} {{ Request::is('admin/newscategories/add') ? 'active' : '' }} {{ Request::is('admin/newscategories/edit/*') ? 'active' : '' }} {{ Request::is('admin/news/display') ? 'active' : '' }}  {{ Request::is('admin/news/add') ? 'active' : '' }}  {{ Request::is('admin/news/edit/*') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-database" aria-hidden="true"></i>
<span>     Blog</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
          	<li class="{{ Request::is('admin/newscategories/display') ? 'active' : '' }} {{ Request::is('admin/newscategories/add') ? 'active' : '' }} {{ Request::is('admin/newscategories/edit/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/newscategories/display')}}"><i class="fa fa-circle-o"></i>link_news_categories</a></li>
            <li class="{{ Request::is('admin/news/display') ? 'active' : '' }}  {{ Request::is('admin/news/add') ? 'active' : '' }}  {{ Request::is('admin/news/edit/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/news/display')}}"><i class="fa fa-circle-o"></i> link_sub_news</a></li>
          </ul>
        </li>
    
      <li class="treeview {{ Request::is('admin/pushnotification') ? 'active' : '' }}{{ Request::is('admin/devices/display') ? 'active' : '' }} {{ Request::is('admin/devices/viewdevices/*') ? 'active' : '' }} {{ Request::is('admin/devices/notifications') ? 'active' : '' }}">
          <a href="{{ URL::to('admin/devices/display')}} ">
            <i class="fa fa-bell-o" aria-hidden="true"></i>
            <span>link_notifications</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
          <li class="{{ Request::is('admin/pushnotification') ? 'active' : '' }}"><a href="{{ URL::to('admin/pushnotification')}}"><i class="fa fa-circle-o"></i> link_setting</a></li>
            <li class="{{ Request::is('admin/devices/display') ? 'active' : '' }} {{ Request::is('admin/devices/viewdevices/*') ? 'active' : '' }}">
          		<a href="{{ URL::to('admin/devices/display')}}"><i class="fa fa-circle-o"></i>link_devices </a>
            </li>
            <li class="{{ Request::is('admin/devices/notifications') ? 'active' : '' }} ">
            	<a href="{{ URL::to('admin/devices/notifications') }}"><i class="fa fa-circle-o"></i> link_send_notifications</a>
            </li>
          </ul>
        </li>
    
      
        <li class="treeview {{ Request::is('admin/loginsetting') ? 'active' : '' }} {{ Request::is('admin/firebase') ? 'active' : '' }} {{ Request::is('admin/facebooksettings') ? 'active' : '' }} {{ Request::is('admin/setting') ? 'active' : '' }} {{ Request::is('admin/googlesettings') ? 'active' : '' }}  {{ Request::is('admin/alertsetting') ? 'active' : '' }}  ">
          <a href="#">
            <i class="fa fa-gears" aria-hidden="true"></i>
          <span> link_general_settings</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">            
            <li class="{{ Request::is('admin/setting') ? 'active' : '' }}"><a href="{{ URL::to('admin/setting')}}"><i class="fa fa-circle-o"></i> link_store_setting</a></li>
            <li class="{{ Request::is('admin/facebooksettings') ? 'active' : '' }}"><a href="{{ URL::to('admin/facebooksettings')}}"><i class="fa fa-circle-o"></i> link_facebook</a></li>
            <li class="{{ Request::is('admin/googlesettings') ? 'active' : '' }}"><a href="{{ URL::to('admin/googlesettings')}}"><i class="fa fa-circle-o"></i> link_google</a></li>
            
            <li class="{{ Request::is('admin/alertsetting') ? 'active' : '' }}"><a href="{{ URL::to('admin/alertsetting')}}"><i class="fa fa-circle-o"></i> alertSetting</a></li>
            <li class="{{ Request::is('admin/firebase') ? 'active' : '' }}"><a href="{{ URL::to('admin/firebase')}}"><i class="fa fa-circle-o"></i>Firebase</a></li>
            <!-- <li class="{{ Request::is('admin/loginsetting') ? 'active' : '' }}"><a href="{{ URL::to('admin/loginsetting')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.Login Setting') }}</a></li> -->
         
          </ul>
        </li>
      
        <li class="treeview {{ Request::is('admin/webPagesSettings/12') ? 'active' : '' }} {{ Request::is('admin/instafeed') ? 'active' : '' }} {{ Request::is('admin/menus') ? 'active' : '' }} {{ Request::is('admin/mailchimp') ? 'active' : '' }} {{ Request::is('admin/topoffer/display') ? 'active' : '' }} {{ Request::is('admin/webPagesSettings/*') ? 'active' : '' }} {{ Request::is('admin/homebanners') ? 'active' : '' }} {{ Request::is('admin/sliders') ? 'active' : '' }} {{ Request::is('admin/addsliderimage') ? 'active' : '' }} {{ Request::is('admin/editslide/*') ? 'active' : '' }} {{ Request::is('admin/webpages') ? 'active' : '' }}  {{ Request::is('admin/addwebpage') ? 'active' : '' }}  {{ Request::is('admin/editwebpage/*') ? 'active' : '' }} {{ Request::is('admin/websettings') ? 'active' : '' }} {{ Request::is('admin/webthemes') ? 'active' : '' }} {{ Request::is('admin/customstyle') ? 'active' : '' }} {{ Request::is('admin/constantbanners') ? 'active' : '' }} {{ Request::is('admin/addconstantbanner') ? 'active' : '' }} {{ Request::is('admin/editconstantbanner/*') ? 'active' : '' }}" >
          <a href="#">
            <i class="fa fa-gears" aria-hidden="true"></i>
            <span> link_site_settings</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="treeview {{ Request::is('admin/topoffer/display') ? 'active' : '' }} {{ Request::is('admin/webPagesSettings/*') ? 'active' : '' }}">
              <a href="#">
                <i class="fa fa-picture-o"></i> <span>Theme Setting</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="treeview {{ Request::is('admin/webPagesSettings/1') ? 'active' : '' }} ">
                    <a href="{{url('admin/webPagesSettings')}}/1">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> <span> Home Page Builder </span>
                    </a>
                </li>
                <li class="treeview {{ Request::is('admin/webPagesSettings/7') ? 'active' : '' }} ">
                    <a href="{{url('admin/webPagesSettings')}}/7">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> <span> Colors Settings</span>
                    </a>
                </li>
                <li class="treeview {{ Request::is('admin/webPagesSettings/10') ? 'active' : '' }} ">
                  <a href="{{url('admin/webPagesSettings')}}/10">
                      <i class="fa fa-picture-o" aria-hidden="true"></i> <span> Banner Transition Settings </span>
                  </a>
                </li>
                <li class="treeview {{ Request::is('admin/webPagesSettings/11') ? 'active' : '' }} ">
                  <a href="{{url('admin/webPagesSettings')}}/11">
                      <i class="fa fa-picture-o" aria-hidden="true"></i> <span> Product Card Style </span>
                  </a>
               </li>
               <li class="treeview {{ Request::is('admin/webPagesSettings/12') ? 'active' : '' }} ">
                 <a href="{{url('admin/webPagesSettings')}}/12">
                     <i class="fa fa-picture-o" aria-hidden="true"></i> <span> Categorywidget </span>
                 </a>
              </li>

              <li class="treeview {{ Request::is('admin/webPagesSettings/13') ? 'active' : '' }} ">
                <a href="{{url('admin/webPagesSettings')}}/13">
                    <i class="fa fa-picture-o" aria-hidden="true"></i> <span>Categories Section </span>
                </a>
             </li>
                <li class="treeview {{ Request::is('admin/topoffer/display') ? 'active' : '' }} ">
                    <a href="{{url('admin/topoffer/display')}}">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> <span> Top Offer </span>
                    </a>
                </li>
               
                <li class="treeview {{ Request::is('admin/webPagesSettings/8') ? 'active' : '' }} ">
                    <a href="{{url('admin/webPagesSettings')}}/8">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> <span>login </span>
                    </a>
                </li>
                
                <li class="treeview {{ Request::is('admin/webPagesSettings/9') ? 'active' : '' }} ">
                  <a href="{{url('admin/webPagesSettings')}}/9">
                      <i class="fa fa-picture-o" aria-hidden="true"></i> <span>News</span>
                    </a>
                </li>

                <li class="treeview {{ Request::is('admin/webPagesSettings/5') ? 'active' : '' }} ">
                  <a href="{{url('admin/webPagesSettings')}}/5">
                      <i class="fa fa-picture-o" aria-hidden="true"></i> <span> Shop Page Settings </span>
                  </a>
               </li>

                <li class="treeview {{ Request::is('admin/webPagesSettings/2') ? 'active' : '' }} ">
                    <a href="{{url('admin/webPagesSettings')}}/2">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> <span> Cart Page Settings</span>
                    </a>
                </li>
                <li class="treeview {{ Request::is('admin/webPagesSettings/6') ? 'active' : '' }} ">
                    <a href="{{url('admin/webPagesSettings')}}/6">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> <span> Contact Page Settings</span>
                    </a>
                </li>
               
               
                <li class="treeview {{ Request::is('admin/webPagesSettings/4') ? 'active' : '' }} ">
                    <a href="{{url('admin/webPagesSettings')}}/4">
                        <i class="fa fa-picture-o" aria-hidden="true"></i> <span> Product Page Settings</span>
                    </a>
                </li>
             
             

              </ul>
            </li>
           
            <li class="{{ Request::is('admin/sliders') ? 'active' : '' }} {{ Request::is('admin/addsliderimage') ? 'active' : '' }} {{ Request::is('admin/editslide/*') ? 'active' : '' }} "><a href="{{ URL::to('admin/sliders')}}"><i class="fa fa-circle-o"></i> link_Sliders</a></li>
            <li class="{{ Request::is('admin/homebanners') ? 'active' : '' }} "><a href="{{ URL::to('admin/homebanners')}}"><i class="fa fa-circle-o"></i> Parallax Banners</a></li>
            <li class="{{ Request::is('admin/constantbanners') ? 'active' : '' }} {{ Request::is('admin/constantbanners') ? 'active' : '' }} {{ Request::is('admin/constantbanners/*') ? 'active' : '' }} "><a href="{{ URL::to('admin/constantbanners')}}"><i class="fa fa-circle-o"></i> link_Banners</a></li>
           
            <li class="{{ Request::is('admin/menus') ? 'active' : '' }}  {{ Request::is('admin/addmenus') ? 'active' : '' }}  {{ Request::is('admin/editmenus/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/menus')}}"><i class="fa fa-circle-o"></i> menus</a></li>

            <li class="{{ Request::is('admin/webpages') ? 'active' : '' }}  {{ Request::is('admin/addwebpage') ? 'active' : '' }}  {{ Request::is('admin/editwebpage/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/webpages')}}"><i class="fa fa-circle-o"></i> content_pages</a></li>

            <!-- <li class="{{ Request::is('admin/webthemes') ? 'active' : '' }} "><a href="{{ URL::to('admin/webthemes')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.website_themes') }}</a></li> -->

            <li class="{{ Request::is('admin/seo') ? 'active' : '' }} "><a href="{{ URL::to('admin/seo')}}"><i class="fa fa-circle-o"></i> seo content</a></li>

            <li class="{{ Request::is('admin/customstyle') ? 'active' : '' }} "><a href="{{ URL::to('admin/customstyle')}}"><i class="fa fa-circle-o"></i> custom_style_js</a></li>
            <li class="{{ Request::is('admin/newsletter') ? 'active' : '' }}"><a href="{{ URL::to('admin/newsletter')}}"><i class="fa fa-circle-o"></i> mailchimp</a></li>
            <li class="{{ Request::is('admin/instafeed') ? 'active' : '' }}"><a href="{{ URL::to('admin/instafeed')}}"><i class="fa fa-circle-o"></i> instagramfeed</a></li>
            <li class="{{ Request::is('admin/websettings') ? 'active' : '' }}"><a href="{{ URL::to('admin/websettings')}}"><i class="fa fa-circle-o"></i> link_setting</a></li>
          </ul>
        </li>
     

        <li class="treeview {{ Request::is('admin/banners') ? 'active' : '' }} {{ Request::is('admin/addbanner') ? 'active' : '' }} {{ Request::is('admin/editbanner/*') ? 'active' : '' }} {{ Request::is('admin/pages') ? 'active' : '' }}  {{ Request::is('admin/addpage') ? 'active' : '' }}  {{ Request::is('admin/editpage/*') ? 'active' : '' }}  {{ Request::is('admin/appSettings') ? 'active' : '' }} {{ Request::is('admin/admobSettings') ? 'active' : '' }} {{ Request::is('admin/applabel') ? 'active' : '' }} {{ Request::is('admin/addappkey') ? 'active' : '' }} {{ Request::is('admin/applicationapi') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-gears" aria-hidden="true"></i>
  <span> link_app_settings</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('admin/banners') ? 'active' : '' }} {{ Request::is('admin/addbanner') ? 'active' : '' }} {{ Request::is('admin/editbanner/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/banners')}}"><i class="fa fa-circle-o"></i> link_Banners</a></li>

            <li class="{{ Request::is('admin/pages') ? 'active' : '' }}  {{ Request::is('admin/addpage') ? 'active' : '' }}  {{ Request::is('admin/editpage/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/pages')}}"><i class="fa fa-circle-o"></i> content_pages</a></li>

            <li class="{{ Request::is('admin/admobSettings') ? 'active' : '' }}"><a href="{{ URL::to('admin/admobSettings')}}"><i class="fa fa-circle-o"></i> link_admob</a></li>

            <li class="android-hide {{ Request::is('admin/applabel') ? 'active' : '' }} {{ Request::is('admin/addappkey') ? 'active' : '' }}"><a href="{{ URL::to('admin/applabel')}}"><i class="fa fa-circle-o"></i> labels</a></li>

            <li class="{{ Request::is('admin/applicationapi') ? 'active' : '' }}"><a href="{{ URL::to('admin/applicationapi')}}"><i class="fa fa-circle-o"></i> applicationApi</a></li>

            <li class="{{ Request::is('admin/appsettings') ? 'active' : '' }}"><a href="{{ URL::to('admin/appsettings')}}"><i class="fa fa-circle-o"></i> link_setting</a></li>

          </ul>
        </li>
    

     <li
      class="treeview {{ Request::is('admin/deliveryboys/status/display') ? 'active' : '' }}  {{ Request::is('admin/deliveryboys/status/add') ? 'active' : '' }}  {{ Request::is('admin/deliveryboys/status/edit/*') ? 'active' : '' }} {{ Request::is('admin/deliveryboys/withdraw/display') ? 'active' : '' }} {{ Request::is('admin/deliveryboys/floatingcash/display') ? 'active' : '' }} {{ Request::is('admin/deliveryboys/ratings') ? 'active' : '' }} {{ Request::is('admin/deliveryboys/display') ? 'active' : '' }}  {{ Request::is('admin/deliveryboys/add') ? 'active' : '' }}  {{ Request::is('admin/deliveryboys/edit/*') ? 'active' : '' }} {{ Request::is('admin/deliveryboys/filter') ? 'active' : '' }}">
      <a href="#">
          <i class="fa fa-database" aria-hidden="true"></i>
          <span> link_manage_deliveryboy</span> <i
              class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
          <li
              class="{{ Request::is('admin/deliveryboys/display') ? 'active' : '' }}  {{ Request::is('admin/deliveryboys/add') ? 'active' : '' }}  {{ Request::is('admin/deliveryboys/edit/*') ? 'active' : '' }} {{ Request::is('admin/deliveryboys/filter') ? 'active' : '' }}">
              <a href="{{ URL::to('admin/deliveryboys/display')}}"><i
                      class="fa fa-circle-o"></i>link_deliveryboy</a></li>
          <li
              class="{{ Request::is('admin/deliveryboys/floatingcash/display') ? 'active' : '' }}">
              <a href="{{ URL::to('admin/deliveryboys/floatingcash/display')}}"><i class="fa fa-circle-o"></i>
              Floating Cash</a></li>
          <li
              class="{{ Request::is('admin/deliveryboys/withdraw/display') ? 'active' : '' }}">
              <a href="{{ URL::to('admin/deliveryboys/withdraw/display')}}"><i class="fa fa-circle-o"></i>
              Withdraw</a></li>
          <li
              class="{{ Request::is('admin/deliveryboys/pages') ? 'active' : '' }}  {{ Request::is('admin/deliveryboys/addpage') ? 'active' : '' }}  {{ Request::is('admin/deliveryboys/editpage/*') ? 'active' : '' }}">
              <a href="{{ URL::to('admin/deliveryboys/pages')}}"><i class="fa fa-circle-o"></i>
              content_pages</a></li>
          
          <li
              class="{{ Request::is('admin/deliveryboys/status/display') ? 'active' : '' }}  {{ Request::is('admin/deliveryboys/status/add') ? 'active' : '' }}  {{ Request::is('admin/deliveryboys/status/edit/*') ? 'active' : '' }}">
              <a href="{{ URL::to('admin/deliveryboys/status/display')}}"><i class="fa fa-circle-o"></i>
              Status</a></li>     
                  
            <li
              class="{{ Request::is('admin/deliveryboys/setting') ? 'active' : '' }} ">
              <a href="{{ URL::to('admin/deliveryboys/setting')}}"><i class="fa fa-circle-o"></i>
              Setting</a></li>     
        </ul>
      </li>
      

   

         <li class="treeview {{ Request::is('admin/admins') ? 'active' : '' }} {{ Request::is('admin/addadmins') ? 'active' : '' }} {{ Request::is('admin/editadmin/*') ? 'active' : '' }} {{ Request::is('admin/manageroles') ? 'active' : '' }} {{ Request::is('admin/addadminType') ? 'active' : '' }} {{ Request::is('admin/editadminType/*') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-users" aria-hidden="true"></i>
  <span> Manage Admins</span> <i class="fa fa-angle-left pull-right"></i>
          </a>

          <ul class="treeview-menu">
            <li class="{{ Request::is('admin/admins') ? 'active' : '' }} {{ Request::is('admin/addadmins') ? 'active' : '' }} {{ Request::is('admin/editadmin/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/admins')}}"><i class="fa fa-circle-o"></i> link_admins</a></li>
            <li class="{{ Request::is('admin/manageroles') ? 'active' : '' }} {{ Request::is('admin/addadminType') ? 'active' : '' }} {{ Request::is('admin/editadminType/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/manageroles')}}"><i class="fa fa-circle-o"></i>link_manage_roles</a></li>
          </ul>
        </li>
        

          <!--------create middlewares -------->
        <li class="treeview {{ Request::is('admin/managements/merge') ? 'active' : '' }} {{ Request::is('admin/managements/updater') ? 'active' : '' }} {{ Request::is('admin/managements/restore') ? 'active' : '' }} {{ Request::is('admin/managements/backup') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-gears" aria-hidden="true"></i>
  <span> Code Manager</span> <i class="fa fa-angle-left pull-right"></i>
          </a>

          <ul class="treeview-menu">
            @if($result['commonContent']['setting']['is_deliverboy_purchased'] == '0')
              <li class="{{ Request::is('admin/managements/merge') ? 'active' : '' }}"><a href="{{ URL::to('admin/managements/merge')}}"><i class="fa fa-circle-o"></i> link_merge</a></li>
            @endif
              <li class="{{ Request::is('admin/managements/updater') ? 'active' : '' }}"><a href="{{ URL::to('admin/managements/updater')}}"><i class="fa fa-circle-o"></i> link_updater</a></li>
          </ul>
        </li>
     
       
          <!--------create middlewares -------->
        <li class="treeview  {{ Request::is('admin/managements/restore') ? 'active' : '' }} {{ Request::is('admin/managements/backup') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-gears" aria-hidden="true"></i>
  <span> Backup / Restore</span> <i class="fa fa-angle-left pull-right"></i>
          </a>

          <ul class="treeview-menu">
            <li class="{{ Request::is('admin/managements/updater') ? 'active' : '' }}"><a href="{{ URL::to('admin/managements/backup')}}"><i class="fa fa-circle-o"></i> backup</a></li>
            <li class="{{ Request::is('admin/managements/updater') ? 'active' : '' }}"><a href="{{ URL::to('admin/managements/import')}}"><i class="fa fa-circle-o"></i> restore</a></li>
           
          </ul>
        </li>
       

        <!-- cache clear -->
        <li class="treeview {{ Request::is('admin/dashboard') ? 'active' : '' }}">
          <a href="javascript:void(0)" class="clear-cache">
          <i class="fa fa-eraser" aria-hidden="true"></i> <span>Clear Cache</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
