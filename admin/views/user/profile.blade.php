<div class="content-wrapper" style="min-height: 1096px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        <i class="fa fa-user "></i> Profile
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!!url('admin')!!}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Profile</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="box box-warning">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="{!!user()->picture!!}" alt="User profile picture">
                        <h3 class="profile-username text-center">{!!user()->name!!}</h3>
                        <p class="text-muted text-center">{!!user()->designation!!} - Member Since {!!user()->joined!!}</p>
                        <button  class="btn btn-primary btn-block"  id="update-profile"><b>Update Profile</b></button>
                        <button  class="btn btn-warning btn-block" id="change-password"><b>Change Password</b></button>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- /.box -->
            </div>
            
            <div id="show-profile">
                <div class="col-md-9">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#profile" data-toggle="tab" aria-expanded="false">Profile</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="profile">
                                 @include('notifications')


                                    {!!Form::vertical_open()
                                    ->id('form-update-profile')
                                    ->method('POST')
                                    ->action('admin/profile')
                                    ->class('update-profile')!!}

                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        {!! Form::text('name')
                                        -> label(trans('user::user.label.name'))
                                        -> placeholder(trans('user::user.placeholder.name'))!!}

                                        {!! Form::date('dob')
                                        -> label(trans('user::user.label.dob'))
                                        -> placeholder(trans('user::user.placeholder.dob'))!!}

                                        {!! Form::text('designation')
                                        -> label(trans('user::user.label.designation'))
                                        -> placeholder(trans('user::user.placeholder.designation')) !!}

                                        {!! Form::tel('mobile')
                                        -> label(trans('user::user.label.mobile'))
                                        -> placeholder(trans('user::user.placeholder.mobile')) !!}  
                                              
                                        {!! Form::tel('phone')
                                        -> label(trans('user::user.label.phone'))
                                        -> placeholder(trans('user::user.placeholder.phone')) !!}        

                                        </div>

                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">    
                                                {!! $user->files('photo')->url($user->getUploadUrl('photo'))->cropper($user->picture)!!}
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        {!! Form::text('address')
                                        -> label(trans('user::user.label.address'))
                                        -> placeholder(trans('user::user.placeholder.address')) !!}
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        {!! Form::text('street')
                                        -> label(trans('user::user.label.street'))
                                        -> placeholder(trans('user::user.placeholder.street')) !!}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        {!! Form::text('city')
                                        -> label(trans('user::user.label.city'))
                                        -> placeholder(trans('user::user.placeholder.city')) !!}
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        {!! Form::text('district')
                                        -> label(trans('user::user.label.district'))
                                        -> placeholder(trans('user::user.placeholder.district')) !!}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        {!! Form::text('state')
                                        -> label(trans('user::user.label.state'))
                                        -> placeholder(trans('user::user.placeholder.state')) !!}
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        {!! Form::text('country')
                                        -> label(trans('user::user.label.country'))
                                        -> placeholder(trans('user::user.placeholder.country')) !!}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        {!! Form::url('web')
                                        -> label(trans('user::user.label.web'))
                                        -> placeholder(trans('user::user.placeholder.web')) !!}
                                        </div>
                                    </div>


                                    {!! Form::close() !!}
                                    <button type="button" class="btn btn-primary" id="btn-update-profile">Save changes</button>
                                <button type="button" class="btn btn-default btn-close">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<style type="text/css">
    .mh500{
        min-height: 500px;
    }
</style>

<script type="text/javascript">
(function ($) {

    $('#btn-update-profile').click(function(){
        $('#form-update-profile').submit();
    });

    $('#form-update-profile')
    .submit( function( e ) {
        if($('#form-update-profile').valid() == false) {
            toastr.error('Unprocessable entry.', 'Warning');
            return false;
        }

        var url  = $(this).attr('action');
        var formData = new FormData( this );

        $.ajax( {
            url: url,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            beforeSend:function()
            {
            },
            success:function(data, textStatus, jqXHR)
            {
                 location.reload();
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
            }
        });
        e.preventDefault();
    });
}(jQuery));
</script>
