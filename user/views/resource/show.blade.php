<div class="container-fluid"> 
    <div class="row">
        <div class="col-xs-12">
            
            <div class="card">
                <div class="card-header with-sub" data-background-color="red">
                    <div class="row">
                        <div class="col-sm-11 title-main">
                            @section('icon')<i class="pe-7s-display2"></i>@show
                            <h4 class="title">@section('title'){!! trans('app.title') !!}@show</h4>
                            <p class="sub-title">@section('sub.title'){!! trans('app.sub-title') !!}@show</p>
                        </div>
                        <div class="col-sm-1">
                            @section('tools') 
                            <a href="#" rel="tooltip" class="btn btn-white btn-round btn-simple btn-icon pull-right add-new" data-original-title="" title="">
                                    <i class="fa fa-chevron-left"></i>
                            </a>
                            @show
                        </div>
                    </div>
                </div>
                @include('notifications')
                {!!Form::vertical_open()
                ->id('create-example-example')
                ->method('POST')
                ->class('dashboard-form')!!}
                <div class="card-content">                
                    @section('content') 
                    @show
                </div>
                <div class="card-footer text-right">
                    @section('actions') 
                    @show
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@section('script')

@show

@section('style')

@show 
