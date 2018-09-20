<header class="main-header">
    <!-- Logo -->
    <a href="{{ Trans::to('admin') }}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><img src="{!!theme_asset('img/logo/logo-white.svg')!!}" alt=""></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><img src="{!!theme_asset('img/logo/logo-big-white.svg')!!}" alt=""></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success"> {!!Message::count('Inbox')!!}</span>
                </a>
                {!! Message::gadget('admin.message.drop') !!}
                </li>
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">              
                        {!! Calendar::display('drop',50) !!}
                </li>
                <!-- Tasks: style can be found in dropdown.less -->
                <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">  {!!count(Task::tasks())!!}</span>
                </a>
                {!! Task::display('drop') !!}
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{!!user()->picture!!}" class="user-image" alt="User Image"/>
                    <span class="hidden-xs">{!!user()->name!!}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{!!user()->picture!!}" class="img-circle" alt="User Image" />
                            <p>
                            {!!user()->name!!} - {!!user()->designation!!}
                            <small>Member since {!!user()->joined!!}</small>
                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ guard_url('profile') }}" class="btn btn-theme">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ guard_url('logout') }}" class="btn btn-theme">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                  <!-- Control Sidebar Toggle Button -->
                  <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                  </li>
            </ul>
        </div>
    </nav>
</header>