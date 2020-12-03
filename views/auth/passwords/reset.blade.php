<div class="col-xl-7 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
    <div class="auth-bg-img" style="background-image: url('{{theme_asset('img/login-bg.png')}}')"></div>
</div>
<div class="col-xl-5 col-lg-6 col-md-7 my-auto p-0 ">
    <div class="authentication-form mx-auto">
        <div class="text-left mb-30">
            <a href="#" class="auth-logo"><img src="{{theme_asset('img/logo/logo.svg')}}" alt=""></a>
        </div>
        <h3>Reset Password</h3>
        <p>Enther the email address and new password.</p>
        @include('notifications')
        {!!Form::vertical_open()
        ->id('login')
        ->action(guard_url('password/reset'))
        ->method('POST')!!}
        <input type="hidden" name="token" value="{{ $token }}">

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
        <div class="form-group">
            {!! Form::password('password_confirmation')
            ->required()
            ->raw()!!}
            <i class="las la-key"></i>
        </div>
        <div class="sign-btn text-center">
            <button type="submit" class="btn btn-theme btn-block">{{ __('Reset Password') }}</button>
        </div>
        {!! Form::close() !!}
    </div>
</div>
