<div class="app-nav">
    <a class="navbar-brand app-list-toggler" href="#">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px" y="0px" viewBox="0 0 228 261.3" style="enable-background:new 0 0 228 261.3;" xml:space="preserve">
            <path class="l-0"
                d="M59,245.8L59,245.8c-24.2,0-44-19.8-44-44v-145c0-24.2,19.8-44,44-44l0,0c24.2,0,44,19.8,44,44v145 C103,226,83.2,245.8,59,245.8z" />
            <circle class="l-1" cx="175" cy="197.8" r="50" />
            <circle class="l-2" cx="175" cy="197.8" r="50" />
            <circle class="l-3" cx="61" cy="197.8" r="50" />
            <circle class="l-4" cx="61" cy="197.8" r="50" />
        </svg>
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
                    <a class="dropdown-item has-child" data-toggle="collapse" href="#userCollapse" role="button"
                        aria-expanded="true" aria-controls="userCollapse"><i class="las la-user-circle"></i>Users</a>
                    <div class="collapse" id="userCollapse">
                        <div class="dropdown-inner">
                            <a class="dropdown-item" href="{{url('admin/roles/role')}}"><i
                                    class="las la-lock-open"></i>Roles &amp; Permissions</a>
                            <a class="dropdown-item" href="{{url('admin/user/user')}}"><i
                                    class="las la-users"></i>Users</a>
                            <a class="dropdown-item" href="{{url('admin/user/client')}}"><i
                                    class="las la-user-tie"></i>Clients</a>
                            <a class="dropdown-item" href="{{url('admin/teams/team')}}"><i
                                    class="las la-user-lock"></i>Teams</a>
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

    <div class="app-nav-applist">
        <button type="button" class="btn app-nav-close"><i class="las la-times"></i></button>
        <div class="app-search">
            <i class="las la-search"></i>
            <input type="text" id="apps-quick-search" class="form-control" placeholder="Search all of your apps">
        </div>
        <div class="apps-wrap">
            <h4>Recently Added</h4>
            <div class="app-item">
                <a href="#"><i class="las la-tachometer-alt"></i><span>Dashboard</span></a>
            </div>

            <div class="app-item">
                <a href="#"><i class="las la-envelope"></i><span>Message</span></a>
            </div>

            <div class="app-item">
                <a href="#"><i class="las la-shopping-cart"></i><span>Sales</span></a>
            </div>
            <div class="app-item">
                <a href="#"><i class="las la-box"></i><span>Purchase</span></a>
            </div>


            <div class="app-item">
                <a href="#"><i class="las la-comments"></i><span>Chats</span></a>
            </div>

            <div class="app-item">
                <a href="#"><i class="las la-bell"></i><span>Notifications</span></a>
            </div>
            <div class="app-item">
                <a href="#"><i class="las la-chart-bar"></i><span>Reports</span></a>
            </div>
            <h4>Pages</h4>
            <div class="app-item">
                <a href="#"><i class="las la-cube"></i><span>Blocks</span></a>
            </div>
            <div class="app-item">
                <a href="#"><i class="las la-calendar-day"></i><span>Events</span></a>
            </div>
            <div class="app-item">
                <a href="#"><i class="las la-file-alt"></i><span>Pages</span></a>
            </div>
            <div class="app-item">
                <a href="#"><i class="las la-list-ul"></i><span>Tasks</span></a>
            </div>
            <div class="app-item">
                <a href="#"><i class="las la-book"></i><span>Blogs</span></a>
            </div>
            <div class="app-item">
                <a href="#"><i class="las la-map-marked-alt"></i><span>Contacts</span></a>
            </div>
            <h4>Settings</h4>
            <div class="app-item">
                <a href="#"><i class="las la-cog"></i><span>Settings</span></a>
            </div>
            <div class="app-item">
                <a href="#"><i class="las la-user-circle"></i><span>Accounts</span></a>
            </div>
            <div class="app-item">
                <a href="#"><i class="las la-palette"></i><span>UI</span></a>
            </div>
            <div class="app-item">
                <a href="#"><i class="las la-server"></i><span>Menus</span></a>
            </div>
        </div>
        <div class="app-lavalite-wrap">
            <div class="d-flex align-items-center">
                <div class="logo">
                    <a href="https://lavalite.org/" target="_blank">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 228 261.3"
                            style="enable-background:new 0 0 228 261.3;" xml:space="preserve">
                            <path
                                d="M59,245.8L59,245.8c-24.2,0-44-19.8-44-44v-145c0-24.2,19.8-44,44-44l0,0c24.2,0,44,19.8,44,44v145 C103,226,83.2,245.8,59,245.8z" />
                            <circle cx="175" cy="197.8" r="50" />
                        </svg>
                    </a>
                </div>
                <div class="w-100">
                    <div class="social-icons">
                        <a href="https://www.facebook.com/lavalite" target="_blank" class="fab fa-facebook-square"></a>
                        <a href="https://twitter.com/lavalitecms" target="_blank" class="fab fa-twitter"></a>
                        <a href="https://github.com/lavalite" target="_blank" class="fab fa-github"></a>
                    </div>

                    <div class="d-flex justify-content-between">
                        <div class="app-links">
                            <a href="#">Logout</a>
                            <a href="#">Switch Account</a>
                        </div>
                        <div class="app-version">v7.*</div>
                    </div>
                </div>
            </div>
            <p class="app-copyrights">Lavalite &copy; 2021 All Rights Reserved.</p>
        </div>
    </div>
</div>