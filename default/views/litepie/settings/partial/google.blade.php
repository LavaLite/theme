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
    ->action(guard_url('settings/google'))!!}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="app-entry-form-section" id="basic">
                    <div class="section-title">{{trans('setting.title.google')}} {!! trans('setting.name') !!}</div>
                    <div class='row'>
                        <div class='col-md-12 col-sm-12'>
                            <div class='row'>
                                <div class='col-md-12 col-sm-12'>
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-12">
                                                {!! Form::text('env[GOOGLE_ANALYTICS]')
                                                -> label(trans('setting.label.google.analytics'))
                                                -> value(env('GOOGLE_ANALYTICS'))
                                                ->
                                                placeholder(trans('setting.placeholder.google.analytics'))!!}
                                            </div>
                                            <div class="col-md-12">
                                                {!! Form::text('env[GOOGLE_RECAPTCHA]')
                                                -> label(trans('setting.label.google.recaptcha'))
                                                -> value(env('GOOGLE_RECAPTCHA'))
                                                ->
                                                placeholder(trans('setting.placeholder.google.recaptcha'))!!}
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