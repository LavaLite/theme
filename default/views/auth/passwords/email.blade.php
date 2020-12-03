<div class="col-xl-7 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
    <div class="auth-bg-img" style="background-image: url('{{theme_asset('img/login-bg.png')}}')"></div>
</div>
<div class="col-xl-5 col-lg-6 col-md-7 my-auto p-0 ">
    <div class="authentication-form mx-auto">
        <div class="text-left mb-30">
            <a href="#" class="auth-logo"><img src="{{theme_asset('img/logo/logo.svg')}}" alt=""></a>
        </div>
        <h3>Forgot Password?</h3>
        <p>Enther the email address associated with your account.</p>
        @include('notifications')
        {!!Form::vertical_open()
        ->id('reset')
        ->action(guard_url('password/email'))
        ->method('POST')!!}
        <div class="form-group">
            {!! Form::email('email')
            ->required()
            ->placeholder('Enter your email')
            ->raw() !!}
            <i class="las la-user-circle"></i>
        </div>
        <div class="row mt-20 mb-20">
            <div class="col text-left">

            </div>
            <div class="col text-right">
                <a href="{{guard_url('login')}}">Bac to login!</a>
            </div>
        </div>
        <div class="sign-btn text-center">
            <button type="submit" class="btn btn-theme btn-block">Send Reset Link!</button>
        </div>
        {!! Form::close() !!}
    </div>
</div>