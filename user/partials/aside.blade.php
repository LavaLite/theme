        <div class="sidebar" data-image="{{theme_asset('img/sidebar-1.jpg')}}">
            

            <div class="logo">
                <a href="#">
                    <img src="{{theme_asset('img/logo-color.svg')}}" class="img-responsive center-block" alt="Lavalite Logo">
                </a>
            </div>

            <div class="sidebar-wrapper">
                {!!Menu::menu('user')!!}
            </div>
        </div>
