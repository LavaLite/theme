


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

                                        <h4 class="text-uppercase text-center">Reset Password</h4>
                                        <div class="social-line text-center d-block">
                                            <a href="{!!guard_url('login/facebook')!!}" class="btn btn-simple btn-just-icon"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="{!!guard_url('login/twitter')!!}" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="{!!guard_url('login/google')!!}" class="btn btn-simple btn-just-icon"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                            <a href="{!!guard_url('login/linkedin')!!}" class="btn btn-simple btn-just-icon"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="account-content">
                                        {!!Form::vertical_open()
                                        ->id('reset')
                                        ->action(guard_url('password/email'))
                                        ->method('POST')!!}

                                        {!! Form::email('email')
                                        ->required()
                                        ->onGroupAddClass('mb-20 row')
                                        ->placeholder('Email') !!}

                                            <div class="form-group row text-center">
                                                <button class="btn btn-block theme-btn" type="submit">Send Password</button>
                                            </div>
                                        {!! Form::close() !!}
                                        <div class="row mt-30">
                                            <div class="col-sm-12 text-center">
                                                <p class="text-muted">
                                                Back to <a href="{{guard_url("login")}}" class="mr10">login</a>
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
        </style>
