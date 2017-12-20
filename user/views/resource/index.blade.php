        <div class="row">
            <div class="col-md-12">
                <div class="fresh-table" data-color="red">
                    <div class="toolbar">
                        <a data-action="CREATE" class="btn btn-default" href="{{$links['create']}}" data-load-to='modal-entry' ><i class="fa fa-plus" aria-hidden="true"></i></a>
                    </div>
                    
                    @section('list') 
                    @show

                </div>
            </div>
        </div>
    <script type="text/javascript">
        var $table = $('#main-table'),
            full_screen = false;
            
        $().ready(function(){
            $table.bootstrapTable({
                toolbar: ".toolbar",
    
                showRefresh: true,
                search: true,
                showToggle: true,
                showColumns: true,
                pagination: true,
                striped: true,
                pageSize: 8,
                pageList: [8,10,25,50,100],
                
                formatShowingRows: function(pageFrom, pageTo, totalRows){
                    //do nothing here, we don't want to show the text "showing x of y from..." 
                },
                formatRecordsPerPage: function(pageNumber){
                    return pageNumber + " rows visible";
                },
                icons: {
                    refresh: 'fa fa-refresh',
                    toggle: 'fa fa-list',
                    columns: 'fa fa-columns',
                    detailOpen: 'fa fa-plus-circle',
                    detailClose: 'fa fa-minus-circle'
                }
            });
        });

        function operateFormatter(value, row, index) {
            return [
                '<a href="' + row['url']['public'] + '" title="View Example" target="_blank" class="view mr10" data-action="SHOW" >',
                    '<i class="icon-eye""></i>',
                '</a>',
                '<a href="' + row.url.user + '/edit" title="Edit Example" class="edit mr10"  data-action="EDIT" >',
                    '<i class="icon-pencil"></i>',
                '</a>',
                '<a href="' + row.url.user + '" title="Remove Example" class="delete" data-action="DELETE" data-remove="">',
                    '<i class="icon-trash""></i>',
                '</a>'
                ].join('');
        }
    </script>
