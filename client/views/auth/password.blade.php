            @include('notifications')

        <div class="login-box">
            <div class="login-logo">
                <a href="{{guard_url('/')}}"><img src="{{theme_asset('img/logo/logo.svg')}}" class="img-responsive center-block" alt="logo" title="Lavalite"></a>
            </div>
            <div class="login-box-body">
                <h2>Reset Password</h2>
                    {!!Form::vertical_open()
                                        ->id('reset')
                                        ->action(guard_url('password/email'))
                                        ->method('POST')!!}
                    <div class="form-group has-feedback">
                        {!! Form::email('email')
                        ->required()
                        ->raw() !!}
                        <span class="fa fa-user-circle form-control-feedback"></span>
                    </div>


                    <button type="submit" class="btn theme-btn btn-block mt-20">Send Password</button>
                    Back to <a href="{{guard_url("login")}}" class="mr10">login</a>
                    {!! Form::close() !!}
            </div>
            <div class="text-center social-links">
                <h3><span class="login">social login</span></h3>
                    <a href="{!!guard_url('login/facebook')!!}" class="btn btn-simple btn-just-icon"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="{!!guard_url('login/twitter')!!}" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="{!!guard_url('login/google')!!}" class="btn btn-simple btn-just-icon"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a href="{!!guard_url('login/linkedin')!!}" class="btn btn-simple btn-just-icon"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="stripes-wraper">
            <div id="stripes">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>


