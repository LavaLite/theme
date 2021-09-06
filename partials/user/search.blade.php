<form id="search" name="search">
    <input type="search" class="form-control" placeholder="Search..." id="q" name="q">
    <span class="search-btn" id="search-btn"><i class="las la-search"></i></span>
    <button type="button" class="settings dropdown-toggle" id="adv_search_toggler" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false"><i class="las la-sliders-h"></i></button>

    <div class="adv-search-wrap dropdown-menu" aria-labelledby="adv_search_toggler">
        <div class="adv-search-header">
            <div class="search-title">
                <h4>Search</h4>
                <div class="search-dropdown">
                    <div class="search-item">
                        <select class="form-control">
                            <option value="0">Search Field</option>
                        </select>
                    </div>
                    <div class="search-item">
                        <button class="btn btn-sort active" type="button" data-toggle="tooltip" data-placement="top"
                            title="" data-original-title="Sort by Ascending"><i
                                class="las la-sort-alpha-down"></i></button>
                    </div>
                    <div class="search-item">
                        <button class="btn btn-sort" type="button" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Sort by Descending"><i class="las la-sort-alpha-down-alt"></i></button>
                    </div>
                </div>
            </div>
            <button type="button" class="btn adv-search-close"><i class="las la-times"></i></button>
        </div>
        <div class="row gutter-5">
            @foreach($form['search'] as $key => $field)
            <div class="col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Title" id="name" name="name"
                        data-search-operator="like">
                </div>
            </div>
            @endforeach
            <div class="col-md-6">
                <div class="form-group">
                    <select class="form-control" id="type" name="type" data-search-operator="=">
                        <option value="">All</option>
                        <option value="null">Null</option>
                        <option value="3">Task</option>
                        <option value="3">Bugs</option>
                        <option value="3">Story</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <select class="form-control" id="status" name="status" data-search-operator="!=">
                        <option value="">Status</option>
                        <option value="null">(Empty)</option>
                        <option value="1">Inprogress</option>
                        <option value="1">Ready for QA</option>
                        <option value="1">Done</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <select id="date" name="date" class="form-control" data-search-operator="in" multiple>
                        <option value="">Status</option>
                        <option value="null">(Empty)</option>
                        <option value='1'>1 day</option>
                        <option value='3'>3 days</option>
                        <option value='2'>2 week</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input id="start" name="start" type="text" class="form-control" placeholder="Start date"
                        data-search-operator="=">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input id="dates" name="dates" type="dates" class="form-control" placeholder="Start date"
                        data-search-operator="between">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input id="range" name="range" type="range" class="form-control" placeholder="End date"
                        data-search-operator="between">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input id="id" name="id" type="text" class="form-control" placeholder="ID" data-search-operator='>'>
                </div>
            </div>
        </div>
        <button class="btn btn-theme" type="button" id="filter-btn">Search</button>
        <button class="btn btn-grey" type="button" id="clear-btn">Clear</button>
    </div>
</form>
<script type="text/javascript">
$(function() {
    $('#filter-btn').click(function(e) {
        var search = app.prepareSearch($('form#search :input'));
        $('#q').val(search);
        $('#q').trigger('search');
        $(".header-search").toggleClass("open");
    });

    $('#q').on('search', function() {
        console.log($(this).val());
    });

    $('#clear-btn').click(function(e) {
        $('form#search').trigger('reset');
        $('#q').trigger('search');
    });
});
</script>