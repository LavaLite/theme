<header class="site-header">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{theme_asset('img/logo/public.svg')}}" class="img-fluid" alt="">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('about-us.html')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('contact.htm')}}">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="header-btns">
                @guest
                <a href="{{url('user')}}" class="btn btn-theme">{{ __('Login') }}</a>
                @else
                <a href="{{guard_url('/')}}" class="btn btn-theme">{{ Auth::user()->name }}</a>
                @endguest
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
</header>