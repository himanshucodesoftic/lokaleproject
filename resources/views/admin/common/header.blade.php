
<header class="main-header">


    <!-- Logo -->
    <a href="{{ URL::to('admin/dashboard/this_month')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini" style="font-size:12px"><b>admin</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>admin</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" id="linkid" data-toggle="offcanvas" role="button">
        <span class="sr-only">toggle_navigation</span>
      </a>
		<div id="countdown" style="
    width: 350px;
    margin-top: 13px !important;
    position: absolute;
    font-size: 16px;
    color: #ffffff;
    display: inline-block;
    margin-left: -175px;
    left: 50%;
"></div>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-list-ul"></i>
              <span class="label label-success"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">you_have  new_orders</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
           
                  <!-- end message -->
                </ul>
              </li>
              <!--<li class="footer"><a href="#">See All Messages</a></li>-->
            </ul>
          </li>

          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-users"></i>
         
            </a>
            <ul class="dropdown-menu">
              
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
            
                  <!-- end message -->
                </ul>
              </li>
              <!--<li class="footer"><a href="#">See All Messages</a></li>-->
            </ul>
          </li>
         
          <li class="dropdown user user-menu">
          <a href="javascript:void(0)"  class="clear-cache small-box-footer btn" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="{{ trans('labels.Clear Cache') }}">
            <i class="fa fa-eraser" aria-hidden="true"></i>
          </a>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }} </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">

                <p>
                  {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
                  <small>administrator</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ URL::to('admin/admin/profile')}}" class="btn btn-default btn-flat">profile_link</a>
                </div>
                <div class="pull-right">
                  <a href="{{ URL::to('admin/logout')}}" class="btn btn-default btn-flat">sign_out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!--<li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>-->
        </ul>
      </div>
    </nav>
  </header>
