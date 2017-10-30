<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ Theme::getTitle() }} - {{trans('app.name')}}</title>
        <meta name="description" content="The Lavalite Content Management System">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{!!url('favicon.ico')!!}"/>
        <link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        {!! Theme::asset()->styles() !!}
        {!! Theme::asset()->scripts() !!}
    </head>

    <body data-color="red">
        <div class="wrapper">
            {!! Theme::partial('header') !!}
            {!! Theme::partial('aside') !!}
            <div class="main-panel">
                <div class="content">
                    <div class="container-fluid">
                    {!! Theme::content() !!}
                    </div>
                </div>
            </div>
            {!! Theme::partial('footer') !!}
        </div>   
        {!! Theme::asset()->container('footer')->scripts() !!}
        {!! Theme::asset()->container('extra')->scripts() !!}
    </body>
</html>
