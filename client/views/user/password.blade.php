        <div class="card">
            <div class="card-block">
            <h2 class="title">Change password</h2>
            @include('notifications')

            {!!Form::vertical_open()
            ->id('contact')
            ->method('POST')
            ->class('change-password')!!}

            {!! Form::password('old_password')
            -> label(trans('user::user.label.current_password'))
            -> placeholder(trans('user::user.placeholder.current_password'))!!}

            {!! Form::password('password')
            -> label(trans('user::user.label.new_password'))
            -> placeholder(trans('user::user.placeholder.new_password'))!!}


            {!! Form::password('password_confirmation')
            -> label(trans('user::user.label.new_password_confirmation'))
            -> placeholder(trans('user::user.placeholder.new_password_confirmation'))!!}

            {!! Form::submit(trans('auth.changepassword'))->class('btn btn-primary')!!}
            <br>
            <br>

            {!! Form::close() !!}
          </div>
      </div>