@if (Auth::check())
    <aside class="main-sidebar">
      <section class="sidebar">
        <div class="user-panel">
          <div class="pull-left info">
            <p>{{ trans('backpack::base.hello') }} {{ Auth::user()->name }}</p>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <!-- ================================================ -->
          <!-- ================= ADMINISTRACIÓ ================ -->
          <!-- ================================================ -->
          <li class="header">{{ trans('backpack::base.administration') }}</li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
		  @if (Auth::user()->hasRole('Superadmin') || Auth::user()->hasRole('Admin'))
			  <li><a href="{{ url(config('backpack.base.route_prefix').'/page') }}"><i class="fa fa-file-o"></i> <span>{{ trans('backpack::base.page_pages') }}</span></a></li>
			  <li><a href="{{ url(config('backpack.base.route_prefix').'/setting') }}"><i class="fa fa-file-o"></i> <span>{{ trans('backpack::base.settings') }}</span></a></li>
			  <li class="header">{{ trans('backpack::base.user') }}</li>
			  <li class="treeview">
				  <a href="#"><i class="fa fa-group"></i> <span>{{ trans('backpack::base.users_roles') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
				  <ul class="treeview-menu">
					  <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/user') }}"><i class="fa fa-user"></i> <span>{{ trans('backpack::base.page_users') }}</span></a></li>
				  </ul>
			  </li>
		  @endif
        </ul>
      </section>
    </aside>
@endif
