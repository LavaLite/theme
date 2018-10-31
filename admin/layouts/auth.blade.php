<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{!! Theme::getMetaTitle() !!} :: {{__('app.name')}}</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <style>
            html {
                display: table;
                width: 100%;
                height: 100%;
            }
        </style>
        {!! Theme::asset()->styles() !!}
        {!! Theme::asset()->scripts() !!}

    </head>
    <body class="auth">
    {!! Theme::content() !!}

    {!! Theme::asset()->container('footer')->scripts() !!}
    </body>
</html>
