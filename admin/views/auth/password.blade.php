@include('notifications')


        <div class="login-box">
            <div class="logo">
                <a href="{!! guard_url('/') !!}"><img src="{!!theme_asset('img/logo/logo.svg')!!}" class="img-responsive center-block" alt="logo" title="Lavalite"></a>
            </div>
            <div class="body">
                <h2>Reset Password</h2>
                {!! Form::vertical_open()
                ->method('POST')
                ->action(guard_url('password/email'))!!}
                {!! csrf_field() !!}
                <div class="form-group has-feedback mt20">
                    {!!Form::text('email', '')!!}
                    <span class="fa fa-envelope form-control-feedback"></span>
                </div>
                <button type="submit" class="btn theme-btn btn-block mt-20">Send password</button>
                {!!Form::Close()!!}
                
            </div>
        </div>
        <div class="row mt10">
            <div class="col-md-12 text-center">
               <a class="text-white" href="{{guard_url("login")}}">Back to Login</a> 
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
