


        <section>
            @include('notifications')
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="wrapper-page">
                            <div class="account-pages">
                                <div class="account-box">
                                    <div class="account-logo-box">
                                        <a href="{{guard_url('/')}}" class="text-center d-block">
                                            <span><img src="{{theme_asset('img/logo/logo.svg')}}" alt=""></span>
                                        </a>

                                        <h4 class="text-uppercase text-center">Sign Up</h4>
                                        <div class="social-line text-center d-block">
                                            <a href="{!!guard_url('login/facebook')!!}" class="btn btn-simple btn-just-icon"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="{!!guard_url('login/twitter')!!}" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="{!!guard_url('login/google')!!}" class="btn btn-simple btn-just-icon"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                            <a href="{!!guard_url('login/linkedin')!!}" class="btn btn-simple btn-just-icon"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="account-content">
                                            {!!Form::vertical_open()
                                            ->id('register')
                                            ->method('POST')!!}

                                            {!! Form::text('name')
                                            ->required()
                                            ->onGroupAddClass('mb-20 row')
                                            ->placeholder('Name') !!}

                                            {!! Form::email('email')
                                            ->required()
                                            ->onGroupAddClass('mb-20 row')
                                            ->placeholder('Email') !!}

                                            {!! Form::password('password')
                                            ->required()
                                            ->onGroupAddClass('mb-20 row')
                                            ->placeholder('Password')!!}

                                            {!! Form::password('password_confirmation')
                                            ->onGroupAddClass('mb-20 row')
                                            ->required()!!}


                                            <div class="form-group row text-center">
                                                <button class="btn btn-block theme-btn" type="submit">Sign In</button>
                                            </div>
                                        {!! Form::close() !!}
                                        <div class="row mt-30">
                                            <div class="col-sm-12 text-center">
                                                <p class="text-muted">
                                                Already have an account?<a href="{{guard_url("login")}}" class="mr10">Sign In</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style>
            section {
                background-color: #C93756;
            }
            input[type="checkbox"]:not(:checked), input[type="checkbox"]:checked {
                 position: static; 
                 left: 0px; 
                 opacity: 1; 
            }
        </style>


