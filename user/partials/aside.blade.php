        <div class="sidebar" data-image="{{theme_asset('img/bg/sidebar-1.jpg')}}">
            

            <div class="logo">
                <a href="#">
                    <img src="{{theme_asset('img/logo/logo.svg')}}" class="img-responsive center-block" alt="Lavalite Logo">
                </a>
            </div>

            <div class="sidebar-wrapper">
                {!!Menu::menu('user')!!}
            </div>
        </div>
