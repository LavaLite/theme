<div class="profile-wrap">
    <div class="row">
        <div class="col-md-4">
            <div class="profile-aside">
                <div class="profile-avatar">
                    <span class="avatar-letter">{!!user()->name[0]!!}</span>
                    <!-- <span class="avatar-img" style="background-image: ('')"></span> -->
                </div>
                <div class="profile-info">
                    <h1 class="name">{!!user()->name!!}</h1>
                    <p class="designation">{!!user()->designation!!}</p>
                </div>
                <br />
                <div class="profile-buttons">
                    <div class="mb-15">
                        <a class="btn btn-theme" href="{{guard_url('profile')}}">Profile</a>
                        <a class="btn btn-theme" href="{{guard_url('password')}}">Change Password</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="profile-edit-card">
                <div class="app-sec-title app-sec-title-with-icon">
                    <i class="las la-cog app-sec-title-icon"></i>
                    <h2>Change Password</h2>
                </div>
                {!!Form::vertical_open()
                ->id('form-change-password')
                ->action(guard_url('password'))
                ->method('POST')
                ->class('change-password')!!}
                <div class="profile-edit-card-section">
                    <div class="form-group row">
                        <label for="full-name" class="col-sm-3 col-form-label text-sm-right">Old Password</label>
                        <div class="col-sm-9">
                            {!! Form::password('old_password')
                            -> label(trans('user::user.label.current_password'))
                            -> placeholder(trans('user::user.placeholder.current_password'))
                            ->raw()!!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="designation" class="col-sm-3 col-form-label text-sm-right">New Password</label>
                        <div class="col-sm-9">
                            {!! Form::password('password')
                            -> label(trans('user::user.label.current_password'))
                            -> placeholder(trans('user::user.placeholder.new_password'))
                            ->raw()!!}
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <label for="email" class="col-sm-3 col-form-label text-sm-right">Confirm Password</label>
                        <div class="col-sm-9">
                            {!! Form::password('password_confirmation')
                            -> label(trans('user::user.label.new_password_confirmation'))
                            -> placeholder(trans('user::user.placeholder.new_password_confirmation'))
                            ->raw()!!}
                        </div>
                    </div>
                </div>
                <div class="profile-edit-card-section text-center">
                    <button class="btn btn-theme" type="submit">Change Password</button>
                </div>
                {!! Form::close() !!}
            </div>

        </div>
    </div>
</div>