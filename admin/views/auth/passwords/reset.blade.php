@include('notifications')

        <div class="login-box">
            <div class="logo">
                <a href="{!! guard_url('/') !!}"><img src="{!!theme_asset('img/logo/logo.svg')!!}" class="img-responsive center-block" alt="logo" title="Lavalite"></a>
            </div>
            <div class="body">
                <h2>Reset Password</h2>
                    <form method="POST" action="{{ route('guard.password.update', ['guard' => 'admin']) }}" class="form-vertical">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group  has-feedback ">

                            <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus placeholder="{{ __('E-Mail Address') }}">
                            <span class="fa fa-user-circle form-control-feedback"></span>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group  has-feedback">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="{{ __('Password') }}">
                            <span class="fa fa-key form-control-feedback"></span>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group  has-feedback">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="{{ __('Confirm Password') }}">
                            <span class="fa fa-key form-control-feedback"></span>
                        </div>

                        <button type="submit" class="btn theme-btn btn-block mt-20">
                            {{ __('Reset Password') }}
                        </button>
                        <br/>
                    <p class="text-center mb-0">Back to <a href="{{guard_url("login")}}" class="mt10">login</a></p>

                    </form>
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


