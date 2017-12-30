@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <!--<div class="pull-left image">
            <img src="https://placehold.it/160x160/00a65a/ffffff/&text={{ mb_substr(Auth::user()->name, 0, 1) }}" class="img-circle" alt="User Image">
          </div>-->
          <div class="pull-left info">
            <p>{{ trans('backpack::base.hello') }} {{ Auth::user()->name }}</p>
            <!--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
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
			  {{-- CUSTOM CRUD ENTITIES --}}
			  <li><a href="{{ url(config('backpack.base.route_prefix').'/page') }}"><i class="fa fa-file-o"></i> <span>{{ trans('backpack::base.page_pages') }}</span></a></li>
			  <li class="treeview">
				  <a href="#"><i class="fa fa-globe"></i> <span>{{ trans('backpack::base.translations') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
				  <ul class="treeview-menu">
                 @if (Auth::user()->hasRole('Superadmin'))
                    <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/language') }}"><i class="fa fa-flag-checkered"></i> {{ trans('backpack::base.page_languages') }}</a></li>
                 @endif
					  <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/language/texts') }}"><i class="fa fa-language"></i> {{ trans('backpack::base.page_site_texts') }}</a></li>
				  </ul>
			  </li>
			  <li>
				  <a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/elfinder') }}">
					  <i class="fa fa-floppy-o"></i>
					  <span>{{ trans('admin.elfinder') }}</span>
				  </a>
			  </li>
			  <!-- ================================================ -->
			  <!-- ================= SETTINGS ================ -->
			  <!-- ================================================ -->
	           @if (Auth::user()->hasRole('Superadmin'))
				   <li class="header">{{ trans('backpack::base.settings') }}</li>
				   <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/setting') }}"><i class="fa fa-cog"></i> <span>{{ trans('backpack::base.page_settings') }}</span></a></li>
	             {{-- <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/log') }}"><i class="fa fa-terminal"></i> <span>{{ trans('backpack::base.page_logs') }}</span></a></li> --}}
	           @endif

			  <li class="header">{{ trans('backpack::base.user') }}</li>
			  <!-- Users, Roles Permissions -->
			  <li class="treeview">
				  <a href="#"><i class="fa fa-group"></i> <span>{{ trans('backpack::base.users_roles') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
				  <ul class="treeview-menu">
					  <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/user') }}"><i class="fa fa-user"></i> <span>{{ trans('backpack::base.page_users') }}</span></a></li>

					  @if (Auth::user()->hasRole('Superadmin'))
						  <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/role') }}"><i class="fa fa-group"></i> <span>{{ trans('backpack::base.page_roles') }}</span></a></li>
						  <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/permission') }}"><i class="fa fa-key"></i> <span>{{ trans('backpack::base.page_permissions') }}</span></a></li>
					  @endif
				  </ul>
			  </li>
		  @endif
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
