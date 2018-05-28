<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ Theme::getTitle() }} - {{__('app.name')}}</title>
        <meta name="keyword" content="{{ Theme::getMetaKeyword() }}">
        <meta name="description" content="{{ Theme::getMetaDescription() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {!! Theme::asset()->styles() !!}
        {!! Theme::asset()->scripts() !!}
    </head>

    <body>

        {!! Theme::partial('login') !!}
        {!! Theme::partial('header') !!}
        {!! Theme::content() !!}
        {!! Theme::partial('footer') !!}
        {!! Theme::asset()->container('footer')->scripts() !!}
    </body>
</html>
