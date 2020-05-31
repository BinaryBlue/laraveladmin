<li class="nav-item dropdown user-menu">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
      <img src="{{ asset('amartaka/propics/propic.jpg') }}" class="user-image" alt="User Image">
      <span class="hidden-xs">{{ Auth::user()->name }}</span>
    </a>
    <div class="progress progress-xs">
        <div class="sixty progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
          <span class="sr-only">60% Complete (warning)</span>
        </div>
    </div>
    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
      <!-- User image -->
      <li class="user-header sixty">
        <img src="{{ asset('amartaka/propics/propic.jpg') }}" class="img-circle" alt="User Image">

        <p>
            {{ Auth::user()->name }}
          <small>Profile Completed 60%</small>
        </p>
        <div class="progress progress-xs">
            <div class="insider progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
              <span class="sr-only">60% Complete (warning)</span>
            </div>
        </div>
      </li>
      <!-- Menu Footer-->
      <li class="user-footer">
        @if($profile_url)
            <a href="{{ $profile_url }}" class="btn btn-default btn-flat">Profile</a>
            @endif

            <a class="btn btn-default btn-flat float-right @if(!$profile_url)btn-block @endif" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-fw fa-power-off"></i> {{ __('adminlte::adminlte.log_out') }}
            </a>
            <form id="logout-form" action="{{ $logout_url }}" method="POST" style="display: none;">
                @if(config('adminlte.logout_method'))
                    {{ method_field(config('adminlte.logout_method')) }}
                @endif
                {{ csrf_field() }}
            </form>
      </li>
    </ul>
  </li>

<!--default code-->
<!--li class="nav-item dropdown user-menu">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
        @if(config('adminlte.usermenu_image'))
        <img src="{{ Auth::user()->adminlte_image() }}" class="user-image img-circle elevation-2" alt="{{ Auth::user()->name }}">
        @endif
        <span @if(config('adminlte.usermenu_image'))class="d-none d-md-inline"@endif>{{ Auth::user()->name }}</span>
    </a>
    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        @if(!View::hasSection('usermenu_header') && config('adminlte.usermenu_header'))
        <li class="user-header {{ config('adminlte.usermenu_header_class', 'bg-primary') }} @if(!config('adminlte.usermenu_image'))h-auto @endif">
            @if(config('adminlte.usermenu_image'))
            <img src="{{ Auth::user()->adminlte_image() }}" class="img-circle elevation-2" alt="{{ Auth::user()->name }}">
            @endif
            <p class="@if(!config('adminlte.usermenu_image'))mt-0 @endif">
                {{ Auth::user()->name }}
                @if(config('adminlte.usermenu_desc'))
                <small>{{ Auth::user()->adminlte_desc() }}</small>
                @endif
            </p>
        </li>
        @else
        @yield('usermenu_header')
        @endif
        @each('adminlte::partials.menu-item-top-nav-user', $adminlte->menu(), 'item')
        @hasSection('usermenu_body')
        <li class="user-body">
            @yield('usermenu_body')
        </li>
        @endif
        <li class="user-footer">
            @if($profile_url)
            <a href="{{ $profile_url }}" class="btn btn-default btn-flat">Profile</a>
            @endif

            <a class="btn btn-default btn-flat float-right @if(!$profile_url)btn-block @endif" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-fw fa-power-off"></i> {{ __('adminlte::adminlte.log_out') }}
            </a>
            <form id="logout-form" action="{{ $logout_url }}" method="POST" style="display: none;">
                @if(config('adminlte.logout_method'))
                    {{ method_field(config('adminlte.logout_method')) }}
                @endif
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
</li-->