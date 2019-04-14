@include('notifications')
<div class="box">
    <div class="logo">
        <a href="{{guard_url('/')}}"><img src="{{theme_asset('img/logo/logo.svg')}}" class="img-responsive center-block" alt="logo" title="Lavalite"></a>
    </div>
    <div class="body">
        <h2>Sign Up</h2>
        {!!Form::vertical_open()
        ->id('register')
        ->method('POST')!!}
        <div class="form-group has-feedback">
            {!! Form::text('name')
            ->required()
            ->placeholder('Name')
            ->raw() !!}
            <span class="fa fa-user-circle form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
            {!! Form::email('email')
            ->required()
            ->placeholder('Email')
            ->raw() !!}
            <span class="fa fa-envelope form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
            {!! Form::password('password')
            ->required()
            ->placeholder('Password')
            ->raw() !!}
            <span class="fa fa-key form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
            {!! Form::password('password_confirmation')
            ->required()
            ->placeholder('Confirm Password')
            ->raw() !!}
            <span class="fa fa-lock form-control-feedback"></span>
        </div>

        <button type="submit" class="btn btn-theme btn-round btn-block mt-10 mb-20">Sign Up</button>
        <p class="text-center mb-0">Already have an account? <a href="{{guard_url("login")}}" class="mr-10">Sign In</a></p>

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
    <div id="stripes">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
