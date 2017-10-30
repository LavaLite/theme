    <header class="main-header">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" onclick="toggleNav()" id="nav_btn" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <a class="navbar-brand" href="{{trans_url('/')}}"><img src="{{theme_asset('img/logo/logo.svg')}}" alt=""></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                {!!Menu::menu('main')!!}
                </ul>
                <ul class="nav navbar-nav navbar-right hidden-sm hidden-xs">
                    <li><a href="https://twitter.com/lavalitecms" target="_new" class="social-icons"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.facebook.com/lavalite" target="_new" class="social-icons"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="https://github.com/lavalite" target="_new" class="social-icons"><i class="fa fa-github"></i></a></li>
            @if(!user_check())
                    <li><a href="{{trans_url('/user/login')}}" class="btn">Login</a></li>
            @else
                    <li><a href="{{trans_url('/user')}}" class="btn">{{users('name')}}</a></li>
            @endif
                </ul>
            </div>
        </div>
    </nav>
    @if(!user_check())
    <a href="{{trans_url('/user/login')}}" class="login_btn btn hidden-md hidden-lg">Login</a>
    @else
    <a href="{{trans_url('/user')}}" class="login_btn btn hidden-md hidden-lg">{{users('name')}}</a>
    @endif
    <a href="https://github.com/lavalite" target="_new" class="github_btn hidden-md hidden-lg"><i class="fa fa-github"></i></a>
</header>
