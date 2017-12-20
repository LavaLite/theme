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
                            <a href="{{$links['create']}}" class="f-20 text-success" data-toggle="tooltip" data-placement="left" title="Add New"><i class="icon-plus"></i></a>
                        </span>
                        <form action="{{$links['search']}}" class="pull-right form-search">
                            <input type="search" class="form-control" placeholder="Search" name="search" value="{{request('search')}}">
                            <button type="submit" class="btn theme-btn"><i class="icon-magnifier"></i></button>
                        </form>
                    </ul>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="main">


                        @include('notifications')                                
                        @section('list') 
                        @show
                        @section('pagination') 
                        @show
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