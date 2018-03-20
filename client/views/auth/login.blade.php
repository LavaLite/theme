
        <div class="login-box">
            <div class="login-logo">
                <a href="{{guard_url('/')}}"><img src="{{theme_asset('img/logo/logo.svg')}}" class="img-responsive center-block" alt="logo" title="Lavalite"></a>
            </div>
            <div class="login-box-body">
                <h2>Login to your account</h2>
                    {!!Form::vertical_open()
                    ->id('login')
                    ->method('POST')!!}
                    <div class="form-group has-feedback">
                        {!! Form::email('email')
                        ->required()
                        ->raw() !!}
                        <span class="fa fa-user-circle form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        


                        {!! Form::password('password')
                        ->required()->raw()!!}
                        <span class="fa fa-key form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="checkbox mt-0">
                                <input id="rememberme" type="checkbox" name="rememberme">
                                <label for="rememberme">Remember Me</label>
                            </div>
                        </div>
                        <div class="col-xs-6 text-right">
                            <a href="{{guard_url("password/reset")}}"> Forgot Password?</a>
                        </div>
                    </div>
                    <button type="submit" class="btn theme-btn btn-block mt-20">Sign In</button>
                    Don't have an account? <a href="{{guard_url("register")}}" class="mr10">Sign Up</a>
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

