<div class="app-list-header d-flex align-items-center justify-content-between">
    <h3>{!! trans('setting.names') !!} </h3>

</div>

<div class="app-list-wrap-inner ps ps--active-y" id="app-list">
    <div class="app-list-head">
        <h4>{{trans('setting.title.general')}}</h4>
    </div>

    <div class="app-item">
        <div class="app-avatar">
            <div class="app-avatar-image bg-primary">{{trans('setting.title.main')[0]}}</div>
        </div>
        <div class="app-info" data-action='SHOW' data-load-to="#app-entry" data-url="{{guard_url('settings/main')}}">
            <h3 style="margin-bottom: 10px;">{{trans('setting.title.main')}}</h3>
            <div class="app-metas">
                <p></p>
                <span class="badge badge-status in-progress"></span>
            </div>
        </div>
        <div class="app-actions">
            <a href="{{guard_url('settings/main')}}" class="btn las la-pencil-alt" data-action='EDIT'
                data-load-to="#app-entry" data-url="{{guard_url('settings/main')}}">
            </a>
        </div>
    </div>
    <div class="app-item ">
        <div class="app-avatar">
            <div class="app-avatar-image bg-primary">{{trans('setting.title.company')[0]}}</div>
        </div>
        <div class="app-info" data-action='SHOW' data-load-to="#app-entry" data-url="{{guard_url('settings/company')}}">
            <h3 style="margin-bottom: 10px;">{{trans('setting.title.company')}}</h3>
            <div class="app-metas">
                <p></p>
                <span class="badge badge-status in-progress"></span>
            </div>
        </div>
        <div class="app-actions">
            <a href="{{guard_url('settings/company')}}" class="btn las la-pencil-alt" data-action='EDIT'
                data-load-to="#app-entry" data-url="{{guard_url('settings/company')}}">
            </a>
        </div>
    </div>
    <div class="app-list-head">
        <h4>{{trans('setting.title.integration')}}</h4>
    </div>
    <div class="app-item ">
        <div class="app-avatar">
            <div class="app-avatar-image bg-primary">{{trans('setting.title.social')[0]}}</div>
        </div>
        <div class="app-info" data-action='SHOW' data-load-to="#app-entry" data-url="{{guard_url('settings/social')}}">
            <h3 style="margin-bottom: 10px;">{{trans('setting.title.social')}}</h3>
            <div class="app-metas">
                <p></p>
                <span class="badge badge-status in-progress"></span>
            </div>
        </div>
        <div class="app-actions">
            <a href="{{guard_url('settings/social')}}" class="btn las la-pencil-alt" data-action='EDIT'
                data-load-to="#app-entry" data-url="{{guard_url('settings/social')}}">
            </a>
        </div>
    </div>
    <div class="app-item ">
        <div class="app-avatar">
            <div class="app-avatar-image bg-primary">{{trans('setting.title.payment')[0]}}</div>
        </div>
        <div class="app-info" data-action='SHOW' data-load-to="#app-entry" data-url="{{guard_url('settings/payment')}}">
            <h3 style="margin-bottom: 10px;">{{trans('setting.title.payment')}}</h3>
            <div class="app-metas">
                <p></p>
                <span class="badge badge-status in-progress"></span>
            </div>
        </div>
        <div class="app-actions">
            <a href="{{guard_url('settings/payment')}}" class="btn las la-pencil-alt" data-action='EDIT'
                data-load-to="#app-entry" data-url="{{guard_url('settings/payment')}}">
            </a>
        </div>
    </div>
    <div class="app-item ">
        <div class="app-avatar">
            <div class="app-avatar-image bg-primary">{{trans('setting.title.email')[0]}}</div>
        </div>
        <div class="app-info" data-action='SHOW' data-load-to="#app-entry" data-url="{{guard_url('settings/mail')}}">
            <h3 style="margin-bottom: 10px;">{{trans('setting.title.email')}}</h3>
            <div class="app-metas">
                <p></p>
                <span class="badge badge-status in-progress"></span>
            </div>
        </div>
        <div class="app-actions">
            <a href="{{guard_url('settings/mail')}}" class="btn las la-pencil-alt" data-action='EDIT'
                data-load-to="#app-entry" data-url="{{guard_url('settings/mail')}}">
            </a>
        </div>
    </div>
    <div class="app-item ">
        <div class="app-avatar">
            <div class="app-avatar-image bg-primary">{{trans('setting.title.sms')[0]}}</div>
        </div>
        <div class="app-info" data-action='SHOW' data-load-to="#app-entry" data-url="{{guard_url('settings/sms')}}">
            <h3 style="margin-bottom: 10px;">{{trans('setting.title.sms')}}</h3>
            <div class="app-metas">
                <p></p>
                <span class="badge badge-status in-progress"></span>
            </div>
        </div>
        <div class="app-actions">
            <a href="{{guard_url('settings/sms')}}" class="btn las la-pencil-alt" data-action='EDIT'
                data-load-to="#app-entry" data-url="{{guard_url('settings/sms')}}">
            </a>
        </div>
    </div>
    <div class="app-item ">
        <div class="app-avatar">
            <div class="app-avatar-image bg-primary">{{trans('setting.title.chat')[0]}}</div>
        </div>
        <div class="app-info" data-action='SHOW' data-load-to="#app-entry" data-url="{{guard_url('settings/chat')}}">
            <h3 style="margin-bottom: 10px;">{{trans('setting.title.chat')}}</h3>
            <div class="app-metas">
                <p></p>
                <span class="badge badge-status in-progress"></span>
            </div>
        </div>
        <div class="app-actions">
            <a href="{{guard_url('settings/chat')}}" class="btn las la-pencil-alt" data-action='EDIT'
                data-load-to="#app-entry" data-url="{{guard_url('settings/chat')}}">
            </a>
        </div>
    </div>
    <div class="app-item ">
        <div class="app-avatar">
            <div class="app-avatar-image bg-primary">{{trans('setting.title.google')[0]}}</div>
        </div>
        <div class="app-info" data-action='SHOW' data-load-to="#app-entry" data-url="{{guard_url('settings/google')}}">
            <h3 style="margin-bottom: 10px;">{{trans('setting.title.google')}}</h3>
            <div class="app-metas">
                <p></p>
                <span class="badge badge-status in-progress"></span>
            </div>
        </div>
        <div class="app-actions">
            <a href="{{guard_url('settings/google')}}" class="btn las la-pencil-alt" data-action='EDIT'
                data-load-to="#app-entry" data-url="{{guard_url('settings/google')}}">
            </a>
        </div>
    </div>
</div>