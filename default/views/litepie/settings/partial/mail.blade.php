<div class="app-entry-form-wrap">
    <div class="app-sec-title app-sec-title-with-icon app-sec-title-with-action">
        <i class="lab la-product-hunt app-sec-title-icon"></i>
        <h2> {!! trans('setting.name') !!} <small> {!! trans('app.manage') !!} {!!
                trans('setting.names') !!}</small></h2>
        <div class="actions">
            <button type="button" class="btn btn-with-icon btn-link  btn-outline" 
                data-action='UPDATE'
                data-form="#form-edit" 
                data-load-to="#app-entry" >
                <i class="las la-save"></i>{{__('Save')}}
            </button>
            <button type="button" class="btn btn-with-icon btn-link  btn-outline"
                data-action='SHOW'
                data-load-to="#app-entry" 
                data-url="{{guard_url('settings/0')}}">
                <i class="las la-window-close"></i>{{__('Cancel')}}
            </button>
        </div>
    </div>
    {!!Form::vertical_open()
    ->id('form-edit')
    ->method('POST')
    ->files('true')
    ->action(guard_url('settings/mail'))!!}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="app-entry-form-section" id="basic">
                    <div class="section-title">{{trans('setting.title.email')}} {!! trans('setting.name') !!}</div>
                    <div class='row'>
                        <div class='col-md-12 col-sm-12'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <fieldset>
                                        <div class="row">

                                            <div class="col-md-12">
                                                {!! Form::select('env[MAIL_DRIVER]')
                                                -> label(trans('setting.label.mail.driver'))
                                                -> options(__('settings::setting.options.mail.driver'),
                                                env('MAIL_MAILER'))!!}
                                            </div>
                                            <div class="col-md-12">
                                                {!! Form::text('env[MAIL_HOST]')
                                                -> label(trans('setting.label.mail.host'))
                                                -> value(env('MAIL_HOST'))
                                                -> placeholder(trans('setting.placeholder.mail.host'))!!}
                                            </div>
                                            <div class="col-md-12">
                                                {!! Form::text('env[MAIL_PORT]')
                                                -> label(trans('setting.label.mail.port'))
                                                -> value(env('MAIL_PORT'))
                                                -> placeholder(trans('setting.placeholder.mail.port'))!!}
                                            </div>
                                            <div class="col-md-12">
                                                {!! Form::text('env[MAIL_USERNAME]')
                                                -> label(trans('setting.label.mail.user'))
                                                -> value(env('MAIL_USERNAME'))
                                                -> placeholder(trans('setting.placeholder.mail.user'))!!}
                                            </div>
                                            <div class="col-md-12">
                                                {!! Form::text('env[MAIL_PASSWORD]')
                                                -> label(trans('setting.label.mail.password'))
                                                -> value(env('MAIL_PASSWORD'))
                                                -> placeholder(trans('setting.placeholder.mail.password'))!!}
                                            </div>
                                            <div class="col-md-12">
                                                {!! Form::select('env[MAIL_ENCRYPTION]')
                                                -> label(trans('setting.label.mail.encryption'))
                                                -> options(__('settings::setting.options.mail.encryption'),
                                                env('MAIL_ENCRYPTION'))!!}
                                            </div>
                                            <div class="col-md-12">
                                                {!! Form::select('env[MAIL_FROM_ADDRESS]')
                                                -> label(trans('setting.label.mail.from_address'))
                                                -> options(__('settings::setting.options.mail.from_address'),
                                                env('MAIL_FROM_ADDRESS'))!!}
                                            </div>
                                            <div class="col-md-12">
                                                {!! Form::select('env[MAIL_FROM_NAME]')
                                                -> label(trans('setting.label.mail.from_name'))
                                                -> options(__('settings::setting.options.mail.from_name'),
                                                env('MAIL_FROM_NAME'))!!}
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>