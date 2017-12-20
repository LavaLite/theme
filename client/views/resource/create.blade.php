        <div class="page-wrapper">
            <header class="header clearfix">
                <h2 class="main-title pull-left">@section('title')@show</h2>
                <ol class="breadcrumb pull-right">
                    @section('breadcrumb')@show
                </ol>
            </header>
            <div class="card">
                <div class="card-block">
                    <div role="tabpanel">
                        <div class="card-title clearfix">
                            <ul class="nav nav-tabs tabs-bordered" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#main" aria-controls="main" role="tab" data-toggle="tab" class="pt-0">{{__('app.addnew')}}@section('title')@show</a>
                                </li>
                                <span class="add-btn pull-right mt-5">
                                    <a href="{{$links['back']}}" class="f-20 mr-10 text-primary" data-toggle="tooltip" data-placement="left" title="Back to examples"><i class="icon-arrow-left"></i></a>
                                </span>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="main">

                @include('notifications')
                {!!Form::vertical_open()
                ->id('create')
                ->method('POST')
                ->files('true')
                ->class('dashboard-form')
                ->action($links['form'])!!}
                
                @section('content') 
                @show

                <div class="text-right">
                        <input class="btn-large btn-primary btn" type="submit" value="{{__('app.create')}}"> 
                        <input class="btn-large btn-inverse btn" type="reset" value="{{__('app.reset')}}">
                </div>
                {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('script')

@show

@section('style')

@show 
