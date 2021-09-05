<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <div class="app-entry-form-section" id="1">
                <div class="section-title">{{__('Details')}}</div>

                <div class='row'>
                    <div class='col-md-6 col-sm-12'>
                        {!! Form::text('name')
                        -> required('required')
                        -> label(trans('master.master.label.name'))
                        -> placeholder(trans('master.master.placeholder.name'))!!}
                    </div>
                    <div class='col-md-6 col-sm-12'>
                        {!! Form::select('status')
                        -> label(trans('master.master.label.status'))
                        -> options(trans('master.master.options.status'))
                        -> placeholder(trans('master.master.placeholder.status'))!!}
                    </div>
                    @if(in_array('icon', config("master.masters.$type.fields", [])))
                    <div class='col-md-6 col-sm-12'>
                        {!! Form::text('icon')
                        -> label(trans('master.master.label.icon'))
                        -> placeholder(trans('master.master.placeholder.icon'))!!}
                    </div>
                    @endif
                    @if(in_array('amount', config("master.masters.$type.fields", [])))
                    <div class='col-md-6 col-sm-12'>
                        {!! Form::number('amount')
                        -> label(trans('master.master.label.amount'))
                        -> placeholder(trans('master.master.placeholder.amount'))!!}
                    </div>
                    @endif

                    @if(in_array('parent', config("master.masters.$type.fields", [])))
                    <div class='col-md-6 col-sm-12'>
                        {!! Form::select('parent_id')
                        -> label(trans('master.master.label.parent_id'))
                        -> options([ 0 => 'Root'] + $parents)
                        -> placeholder(trans('master.master.placeholder.parent_id'))!!}
                    </div>
                    @endif

                    <div class='col-md-12 col-sm-12'>
                        {!! Form::textarea('description')
                        -> label(trans('master.master.label.description'))
                        -> placeholder(trans('master.master.placeholder.description'))!!}
                    </div>
                    @if(in_array('image', config("master.masters.$type.fields", [])))
                    <div class='col-md-12 col-sm-12'>
                        {!! Form::file('image', trans('master.master.label.image'))!!}
                    </div>
                    @endif

                </div>
            </div>
        </div>

        <div class="col-lg-4 d-none d-lg-block">
            <aside class="app-create-steps">
                <h5 class="steps-header">{!!__('Steps')!!}</h5>
                <div class="steps-wrap" id="steps_nav">
                    <a class="step-item active" href="#1"><span>1</span> {{__('Details')}} </a>
                </div>
            </aside>
        </div>
    </div>
</div>