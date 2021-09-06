<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ Theme::getMetaTitle() }} - {{__('app.name')}}</title>
    <meta name="keyword" content="{{ Theme::getMetaKeyword() }}">
    <meta name="description" content="{{ Theme::getMetaDescription() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}">

    {!! Theme::asset()->styles() !!}
    {!! Theme::asset()->scripts() !!}
</head>

<body>
    <div class="app-wrap">
        {!! Theme::partial('user.aside') !!}
        <div class="app-content-wrap">
            <div class="container-fluid">
                {!! Theme::content() !!}
            </div>
        </div>
    </div>
    {!! Theme::asset()->container('footer')->scripts() !!}
    {!! Theme::asset()->container('extra')->scripts() !!}
</body>

</html>