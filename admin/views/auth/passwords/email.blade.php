@include('notifications')

        <div class="login-box">
            <div class="logo">
                <a href="{!! guard_url('/') !!}"><img src="{!!theme_asset('img/logo/logo.svg')!!}" class="img-responsive center-block" alt="logo" title="Lavalite"></a>
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


                    <button type="submit" class="btn theme-btn btn-block mt-20">Send Password</button>
                        <br/>
                    <p class="text-center mb-0">Back to <a href="{{guard_url("login")}}" class="mt-10">login</a></p>

                    {!! Form::close() !!}
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
