        <nav id="nav" class="navbar navbar-default navbar-full">
            <div class="container container-nav">
                <div class="navbar-header">
                    <button aria-expanded="false" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="{{guard_url('/')}}"><img src="{{theme_asset('img/logo/logo.svg')}}" class="mt20 mb20" alt="{{__('app.name')}}"></a>
                </div>
                <div style="height: 1px;" role="main" aria-expanded="false" class="navbar-collapse collapse" id="bs">
                     <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{guard_url('/')}}"><i class="icon-user icons"></i> My Account</a></li>
                        <li><a class="signin-button" href="{{guard_url('logout')}}"><i class="icon-logout icons"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>