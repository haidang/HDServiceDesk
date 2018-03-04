  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset("vendor/almasaeed2010/adminlte/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->firstname . ' '.Auth::user()->lastname }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="{{ trans('commons.search')}}..."/>
          <span class="input-group-btn">
            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
          </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu tree">
        <li class="header">MENU</li>
        @foreach($menus as $menu)
          @if(count($menu->subMenus)) {{-- //Menu have childs --}}
            <li class="treeview{{ (Request::route()->getPrefix() == $menu->name.'/'.Route::currentRouteName()) || (Request::is($menu->url)) ? ' active' : '' }}">
              <a href="#">
                <i class="{{$menu->fa_icon}}"></i> <span>{{ $menu->label }}</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
              @foreach($menu->subMenus as $sub) {{-- //Childs Menu --}}
                  <li{{ (Request::is('*/'.$sub->url)) || (Request::route()->getName() == $menu->url) ? ' class=active' : '' }}><a href="{{route($sub->url)}}"><i class="{{$sub->fa_icon}}"></i> {{ $sub->label}}</a></li>
              @endforeach
              </ul>
            </li>
          @elseif($menu->parent == Null)
            <li{{ (Request::is($menu->url.'/*')) || (Request::route()->getName() == $menu->url) ? ' class=active' : '' }}>
              <a href="{{ route($menu->url)}}">
                <i class="{{$menu->fa_icon}}"></i>
                <span>{{$menu->label }}</span>
              </a>
            </li>
          @endif
        @endforeach
        <li class="header">CHỨC NĂNG</li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
