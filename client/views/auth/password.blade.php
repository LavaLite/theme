        @include('notifications')
        <div class="box">
            <div class="logo">
                <a href="{{guard_url('/')}}"><img src="{{theme_asset('img/logo/logo.svg')}}" class="img-responsive center-block" alt="logo" title="Lavalite"></a>
            </div>
            <div class="body">
                <h2>Reset Password</h2>
                    {!!Form::vertical_open()
                                        ->id('reset')
                                        ->action(guard_url('password/email'))
                                        ->method('POST')!!}
                    <div class="form-group has-feedback">
                        {!! Form::email('email')
                        ->required()
                        ->placeholder('Enter your email')
                        ->raw() !!}
                        <span class="fa fa-user-circle form-control-feedback"></span>
                    </div>


                    <button type="submit" class="btn btn-theme btn-block mt-20 mb-20">Send Password</button>
                    <p class="text-center mb-0">Back to <a href="{{guard_url("login")}}" class="mr10">login</a></p>

                    {!! Form::close() !!}
            </div>
            <div class="text-center social-links">
                <h3><span class="login">social login</span></h3>
                    <a href="{!!guard_url('login/facebook')!!}"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                    <a href="{!!guard_url('login/twitter')!!}"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                    <a href="{!!guard_url('login/google')!!}"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
                    <a href="{!!guard_url('login/linkedin')!!}"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="stripes-wraper">
            <div class="stripes">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
