<div class="app-nav">
    <a class="navbar-brand" href="{{guard_url('/')}}">
        <img src="{{theme_asset('img/logo/logo.svg')}}" class="img-fluid" alt="">
    </a>
    <nav class="navbar nav main-nav-wrap m-t-0">
        <a class="nav-link mt-0" href="#" data-toggle="tooltip" data-placement="right" title=""
            data-original-title="Notifications"><i class="las la-bell"></i></a>
        {{Menu::menu('admin')}}    
    </nav>
    <nav class="navbar nav flex-column user-nav-wrap">
        <div class="dropdown user-dropdown dropright">
            <button class="btn dropdown-toggle" type="button" id="user_dropdown" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">S</button>
            <div class="dropdown-menu" aria-labelledby="user_dropdown">
                <a class="dropdown-item user-info" href="{{guard_url('profile')}}">
                    <span class="user-avatar">S</span>
                    <span class="user-ac-info">
                        <h4>{{users('name')}}</h4>
                        <p>View Profile</p>
                    </span>
                </a>
                @if(user()->isAdmin())
                <div class="dropdown-divider"></div>
                <div class="dropdown has-child">
                    <a class="dropdown-item has-child" data-toggle="collapse" href="#userCollapse" role="button" aria-expanded="true" aria-controls="userCollapse"><i class="las la-user-circle"></i>Users</a>
                    <div class="collapse"  id="userCollapse">
                        <div class="dropdown-inner">
                            <a class="dropdown-item" href="{{url('admin/roles/role')}}"><i class="las la-lock-open"></i>Roles &amp; Permissions</a>
                            <a class="dropdown-item" href="{{url('admin/user/user')}}"><i class="las la-users"></i>Users</a>
                            <a class="dropdown-item" href="{{url('admin/user/client')}}"><i class="las la-user-tie"></i>Clients</a>
                            <a class="dropdown-item" href="{{url('admin/teams/team')}}"><i class="las la-user-lock"></i>Teams</a>
                        </div>
                    </div>
                </div>
                <a class="dropdown-item" href="{{url('admin/settings')}}"><i class="las la-cog"></i>Settings</a>
                <a class="dropdown-item" href="{{url('admin/masters')}}"><i class="las la-dice-d20"></i>Masters</a>
                <a class="dropdown-item" href="{{url('admin/menu/menu')}}"><i class="las la-stream"></i>Menus</a>
                @endif
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{guard_url('logout')}}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="las la-sign-out-alt"></i>Sign Out
                </a>
                <form id="logout-form" action="{{guard_url('logout')}}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </nav>
</div>
