<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ Theme::getMetaTitle() }} - {{__('app.name')}}</title>
    <meta name="description" content="{{ Theme::getMetaDesctiption() }}">
    <meta name="keyword" content="{{ Theme::getMetaKeyword() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! Theme::asset()->styles() !!}
    {!! Theme::asset()->scripts() !!}
</head>

<body>
    <div class="site-wrapper">
        {!! Theme::partial('header') !!}
        {!! Theme::content() !!}
        {!! Theme::partial('footer') !!}
    </div>
</body>
{!! Theme::asset()->container('footer')->scripts() !!}

</html>