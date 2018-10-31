@include('notifications')
<div class="box">
    <div class="logo">
        <a href="{{guard_url('/')}}"><img src="{{theme_asset('img/logo/logo.svg')}}" class="img-responsive center-block" alt="logo" title="Lavalite"></a>
    </div>
    <div class="body">
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
            <button type="submit" class="btn btn-theme btn-round btn-block mt-10 mb-20">Sign In</button>
            <p class="text-center mb-0">Don't have an account yet? <a href="{{guard_url("register")}}" class="mr-10">Sign Up</a></p>

            {!! Form::close() !!}
    </div>
    <div class="text-center social-links">
        <h3><span class="login">Social Login</span></h3>
            <a href="{!!guard_url('login/facebook')!!}"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
            <a href="{!!guard_url('login/twitter')!!}"><i class="fab fa-twitter-square" aria-hidden="true"></i></a>
            <a href="{!!guard_url('login/google')!!}"><i class="fab fa-google-plus-square" aria-hidden="true"></i></a>
            <a href="{!!guard_url('login/linkedin')!!}"><i class="fab fa-linkedin-square" aria-hidden="true"></i></a>
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
