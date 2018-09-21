@include('notifications')

        <div class="login-box">
            <div class="logo">
                <a href="{!! guard_url('/') !!}"><img src="{!!theme_asset('img/logo/logo.svg')!!}" class="img-responsive center-block" alt="logo" title="Lavalite"></a>
            </div>
            <div class="body">
                <h2>Login to your account</h2>
                {!!Form::vertical_open()
                ->id('login')
                ->method('POST')
                ->class('white-row')!!}
                    <div class="form-group has-feedback">
                        {!!Form::text('email')->placeholder('Username')->raw()!!}
                        <span class="fa fa-user-circle form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        {!!Form::password('password')->placeholder('Password')->raw()!!}
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
                {!!Form::Close()!!}
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


