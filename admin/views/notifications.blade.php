@if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            <div class="container">
                <div class="alert-icon">
                    <i class="ion-ios-bell-outline"></i>
                </div>
                <strong>{{trans('app.flash.success')}}</strong> {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="ion-ios-close-outline"></i>
                    </span>
                </button>
            </div>
        </div>
{{ Session::forget('success') }}
@endif

@if ($message = Session::get('error'))
        <div class="alert alert-danger" role="alert">
            <div class="container">
                <div class="alert-icon">
                    <i class="ion-ios-bell-outline"></i>
                </div>
                <strong>{{trans('app.flash.error')}}</strong> {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="ion-ios-close-outline"></i>
                    </span>
                </button>
            </div>
        </div>
{{ Session::forget('error') }}
@endif

@if ($message = Session::get('warning'))
        <div class="alert alert-warning" role="alert">
            <div class="container">
                <div class="alert-icon">
                    <i class="ion-ios-bell-outline"></i>
                </div>
                <strong>{{trans('app.flash.warning')}}</strong> {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="ion-ios-close-outline"></i>
                    </span>
                </button>
            </div>
        </div>

{{ Session::forget('warning') }}
@endif

@if ($message = Session::get('info'))
        <div class="alert alert-info" role="alert">
            <div class="container">
                <div class="alert-icon">
                    <i class="ion-ios-bell-outline"></i>
                </div>
                <strong>{{trans('app.flash.info')}}</strong> {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="ion-ios-close-outline"></i>
                    </span>
                </button>
            </div>
        </div>
{{ Session::forget('info') }}
@endif

@if ($message = Session::get('status'))
        <div class="alert alert-info" role="alert">
            <div class="container">
                <div class="alert-icon">
                    <i class="ion-ios-bell-outline"></i>
                </div>
                <strong>{{trans('app.flash.info')}}</strong> {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="ion-ios-close-outline"></i>
                    </span>
                </button>
            </div>
        </div>
{{ Session::forget('status') }}
@endif

@if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <div class="container">
                <div class="alert-icon">
                    <i class="ion-ios-bell-outline"></i>
                </div>
                <strong>Oops!</strong> {{$errors->first('email')}}.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="ion-ios-close-outline"></i>
                    </span>
                </button>
            </div>
        </div>
@endif
