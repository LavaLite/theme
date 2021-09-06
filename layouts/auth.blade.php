<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ Theme::getMetaTitle() }}</title>
    <meta name="description" content="The Lavalite Content Management System">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {!! Theme::asset()->styles() !!}
    {!! Theme::asset()->scripts() !!}
</head>

<body>
    <div class="auth-wrapper">
        <div class="container-fluid h-100">
            <div class="row flex-row h-100 auth-form-bg">
                {!! Theme::content() !!}
            </div>
        </div>
    </div>
    {!! Theme::asset()->container('footer')->scripts() !!}
</body>

</html>