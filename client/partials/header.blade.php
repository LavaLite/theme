
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{guard_url('/')}}"><img src="{{theme_asset('img/logo/logo.svg')}}" title="{{__('app.name')}}" alt="{{__('app.name')}}"></a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{guard_url('/')}}"><i class="icon-user icons"></i> {{__('auth.myaccount')}}</a></li>
                        <li><a href="{{guard_url('logout')}}" class="btn"><i class="icon-logout icons"></i> {{__('auth.logout')}}</a></li>
                    </ul>
                </div>
            </div>
        </nav>