                    <div class="modal-dialog  modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">@section('icon')<i class="pe-7s-display2"></i>@show @section('title'){!! trans('app.title') !!}@show</h4>
                            </div>
                            <div class="modal-body">
                                {!!Form::vertical_open()
                                ->id('form-edit')
                                ->method('PUT')
                                ->files('true')
                                ->class('form-edit')
                                ->action($links['form'])!!}
                                @section('content') 
                                @show
                            </div>
                            <div class="modal-footer"> 
                                <button type="button" class="btn btn-primary"  data-action="UPDATE" data-form="#form-edit">{{__('app.update')}}</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">{{__('app.close')}}</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>


@section('script')

@show

@section('style')

@show 


