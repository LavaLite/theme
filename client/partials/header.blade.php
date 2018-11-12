
        <header class="main-header header-desktop">
          <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}"><img src="{{theme_asset('img/logo/logo.svg')}}" title="{{__('app.name')}}" alt="{{__('app.name')}}"></a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                      <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" id="userdropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <img  class="profile-pic" src="{{user()->picture}}">
                          <span>{{users('name')}}</span>
                          <i class="fa fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="userdropdownMenu">
                          <div class="user-box">
                            <a href="{{guard_url('/')}}">
                              <img src="{{user()->picture}}">
                              <h4>{{users('name')}} <span>{{users('email')}}</span></h4>
                            </a>
                          </div>
                          <div class="user-navs">
                            <a href="{{guard_url('profile')}}" class="mr-10"><i class="far fa-user-circle"></i> {{__('app.settings')}}</a>
                            <a href="{{guard_url('password')}}"><i class="fas fa-key"></i> {{__('app.password')}}</a>
                          </div>
                          <a href="{{guard_url('logout')}}" class="logout-btn">Logout</a>
                        </div>
                      </li>
                    </ul>
                </div>
            </div>
        </nav>
</header>
