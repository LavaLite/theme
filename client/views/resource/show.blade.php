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
                                    <a href="#main" aria-controls="main" role="tab" data-toggle="tab" class="pt-0">@section('title')@show</a>
                                </li>
                                <span class="add-btn pull-right mt-5">
                                    <a href="{{$links['back']}}" class="f-20 mr-10 text-primary" data-toggle="tooltip" data-placement="left" title="Back to examples"><i class="icon-arrow-left"></i></a>
                                    <a href="{{$links['edit']}}" class="f-20 text-warning" data-toggle="tooltip" data-placement="left" title="Edit example"><i class="icon-pencil"></i></a>
                                </span>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="main">

                            @include('notifications')
                            {!!Form::vertical_open()
                            ->id('show')
                            ->method('POST')
                            ->class('create-form')!!}

                            @section('content') 
                            @show

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
