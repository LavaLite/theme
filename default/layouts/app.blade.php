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
            <div class="app-list-wrap">
                <div class="app-list-inner">
                    @if(isset($modules))
                    <div class="app-list-header d-flex align-items-center justify-content-between">
                        <div class="app-tabs">
                            @foreach($modules as $module)
                            <a href="{{$module['url']}}" class="{{$module['status']}}"><i
                                    class="{{$module['icon'] ?? 'las la-ellipsis-h'}}"></i><span>{{$module['name']}}</span> </a>
                            @endforeach
                        </div>
                        <button type="button" class="btn add-app-btn btn-icon btn-outline" data-action='CREATE'
                            data-load-to="#app-entry" data-url="{{$form['urls']['create']['url'] ?? ''}}"> New <i
                                class="las la-plus"></i>
                        </button>
                    </div>
                    @if(isset($form))
                    <div class="app-list-toolbar">
                        <div class="app-list-pagination">
                            <div class="select-all-checkbox">
                                <input type="checkbox" name="tasks_list" id="checkAll">
                                <label for="checkAll"></label>
                            </div>
                            <div class="header-search">
                                {!!Theme::partial('user.search', compact('form'))!!}
                            </div>
                        </div>
                        <button type="button" class="btn delete-app-btn btn-icon btn-outline"><i
                                class="las la-trash"></i></button>
                    </div>
                    @endif

                    @endif
                    <div class="app-list-wrap-inner perfect-scroll" id="app-list">
                        <div class="app-items" data-url="{{$form['urls']['list']['url'] ?? ''}}" id="item-list"
                            data-search-form='#search' data-scroll-div='#app-list'>
                            Loading...
                        </div>
                    </div>
                </div>
                <div class="app-detail-wrap" id="app-entry" data-url="{{$form['urls']['new']['url'] ?? ''}}">
                </div>
                <script type="text/javascript">
                $(function() {
                    let tag = $('#item-list');
                    tag.off().load(tag.data("url"));
                    app.doPageScroll(tag);
                    let appEntry = $('#appentry');
                    appEntry.off().load(appEntry.data("url"));
                });
                </script>
            </div>
        </div>
    </div>
    {!! Theme::asset()->container('footer')->scripts() !!}
    {!! Theme::asset()->container('extra')->scripts() !!}
</body>

</html>