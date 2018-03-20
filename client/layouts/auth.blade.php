<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ Theme::getTitle() }} - {{__('app.name')}}</title>
        <meta name="description" content="The Lavalite Content Management System">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        {!! Theme::asset()->styles() !!}
        {!! Theme::asset()->scripts() !!}
    </head>
    <body class="login-page">

        {!! Theme::content() !!}
        <div class="footer">
            <p>{!!__('app.all.rights')!!}</p>
        </div>
        {!! Theme::asset()->container('footer')->scripts() !!}
    </body>
</html>
<style type="text/css">
html {
    display: table;
    height: 100%;
    width: 100%;
}
</style>