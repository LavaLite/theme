<!DOCTYPE html>
<html class="lockscreen">
    <head>
        <meta charset="UTF-8">
        <title>{!! Theme::getTitle() !!} :: {{__('app.name')}}</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {!! Theme::asset()->styles() !!}
        {!! Theme::asset()->scripts() !!}
        @stack('styles')
    </head>
    <body class="login-page">
 
             {!! Theme::content() !!}

    <script src="{{ asset('js/vendor.js') }}"></script>
    {!! Theme::asset()->container('footer')->scripts() !!}
    @stack('scripts')
    </body>
</html>
