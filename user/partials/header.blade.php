        <header class="main-header">
            <div class="logo">
                <a href="#">
                    <img src="{{theme_asset('img/logo/white.svg')}}" class="img-responsive center-block" alt="Lavalite Logo">
                </a>
            </div>
            
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{guard_url('/')}}">{{ Theme::getTitle() }}</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown list-grid">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="material-icons text-success">lock</i><span>Accounts</span></a></li>
                                    <li><a href="#"><i class="material-icons text-warning">shopping_basket</i><span>Sale</span></a></li>
                                    <li><a href="#"><i class="material-icons text-danger">add_shopping_cart</i><span>Purchase</span></a></li>
                                    <li><a href="#"><i class="material-icons text-info">list</i><span>Inventory</span></a></li>
                                    <li><a href="#"><i class="material-icons text-rose">work</i><span>Ltr</span></a></li>
                                    <li><a href="#"><i class="material-icons text-indigo">view_carousel</i><span>Projects</span></a></li>
                                    <li><a href="#"><i class="material-icons text-pink">developer_board</i><span>CRM</span></a></li>
                                    <li><a href="#"><i class="material-icons text-brown">error</i><span>Help</span></a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Mike John responded to your email</a></li>
                                    <li><a href="#">You have 5 new tasks</a></li>
                                    <li><a href="#">You're now friend with Andrew</a></li>
                                    <li><a href="#">Another Notification</a></li>
                                    <li><a href="#">Another One</a></li>
                                </ul>
                            </li>
                            <li class="dropdown settings">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                   <i class="material-icons">account_circle</i>
                                   <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="userinfo">
                                            <a href="{{guard_url('profile')}}"><span class="avatar"><img class="img-responsive img-circle" src="{{user()->picture}}"></span>
                                            <span class="name">{{user()->name}}</span>
                                            <span class="email">{{user()->email}}</span></a>
                                      </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{guard_url('message/message')}}">Messages</a></li>
                                    <li><a href="http://help.lavalite.org">Help Center</a></li>
                                    <li><a href="{{guard_url('settings/settings')}}">Settings</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{guard_url('lock')}}">Lock</a></li>
                                    <li><a href="{{guard_url('logout')}}">Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
