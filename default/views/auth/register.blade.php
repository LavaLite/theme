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
        ->id('register')
        ->method('POST')!!}
        <div class="form-group">
            {!! Form::text('name')
            ->required()
            ->placeholder(__('Name'))
            ->raw() !!}
            <i class="las la-user-circle"></i>
        </div>
        <div class="form-group">
            {!! Form::email('email')
            ->required()
            ->placeholder(__('Email'))
            ->raw() !!}
            <i class="las la-envelope"></i>
        </div>
        <div class="form-group">
            {!! Form::password('password')
            ->required()
            ->placeholder('Password')
            ->raw() !!}
            <i class="las la-key"></i>
        </div>
        <div class="form-group">
            {!! Form::password('password_confirmation')
            ->required()
            ->placeholder('Confirm Password')
            ->raw() !!}
            <i class="las la-key"></i>
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
                <a href="{{guard_url('login')}}">Already have an account? Sign In here</a>
            </div>
        </div>
    </div>
</div>