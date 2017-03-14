
            <footer class="main-footer">
                <div class="container-fluid">
                    <div class="row logo">
                        <div class="col-md-12 text-center">
                            <img src="{{theme_asset('img/logo/icon.png')}}" alt="">
                        </div>
                    </div>
                    <div class="row links">
                        <div class="col-sm-4 social-links">
                            {!!Menu::menu('social')!!}
                        </div>
                        <div class="col-sm-4 copyright">
                            <p>Lavalite &copy; {{date('Y')}} All Rights Reserved. Proudly built with Laravel</p>
                        </div>
                        <div class="col-sm-4 navs">
                            {!!Menu::menu('footer')!!}
                        </div>
                    </div>
                </div>
            </footer>