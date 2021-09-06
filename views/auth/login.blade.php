<div class="col-xl-7 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
    <div class="auth-bg-img" style="background-image: url('{{theme_asset('img/login-bg.png')}}')"></div>
</div>
<div class="col-xl-5 col-lg-6 col-md-7 my-auto p-0 ">
    <div class="authentication-form mx-auto">
        <div class="text-left mb-30">
            <a href="#" class="auth-logo"><img src="{{theme_asset('img/logo/logo.svg')}}" alt=""></a>
        </div>
        <h3>Welcome!</h3>
        <p>Sign in to your account</p>
        @include('notifications')
        {!!Form::vertical_open()
        ->id('login')
        ->method('POST')!!}
        <div class="form-group">
            {!! Form::email('email')
            ->required()
            ->raw() !!}
            <i class="las la-user-circle"></i>
        </div>
        <div class="form-group">
            {!! Form::password('password')
            ->required()
            ->raw()!!}
            <i class="las la-key"></i>
        </div>
        <div class="row mt-20 mb-20">
            <div class="col text-left">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="remember_me" checked>
                    <label class="custom-control-label text-white" for="remember_me">Remember Me</label>
                </div>
            </div>
            <div class="col text-right">
                <a href="{{guard_url('password/reset')}}">Forgot Password ?</a>
            </div>
        </div>
        <div class="sign-btn text-center">
            <button type="submit" class="btn btn-theme btn-block">Sign In</button>
        </div>
        {!! Form::close() !!}
        <div class="social-login">
            <p>Or you can sign up with</p>
            <div class="social-login-buttons">
                <a href="{!!guard_url('login/google')!!}" class="btn btn-google fab fa-google"></a>
                <a href="{!!guard_url('login/facebook')!!}" class="btn btn-facebook fab fa-facebook-f"></a>
                <a href="{!!guard_url('login/twitter')!!}" class="btn btn-twitter fab fa-twitter"></a>
                <a href="{!!guard_url('login/linkedin')!!}" class="btn btn-linkedin fab fa-linkedin-in"></a>
                <a href="{!!guard_url('login/github')!!}" class="btn btn-github fab fa-github"></a>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col">
                <a href="{{guard_url('register')}}">Don't have an account? register here</a>
            </div>
        </div>
    </div>
</div>