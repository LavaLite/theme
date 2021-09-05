    <div class="app-list-wrap-inner">
        @foreach($groups as $key => $group)
        <div class="app-list-head">
            {{__("master.master.groups.{$key}.name")}}
        </div>
        @foreach($group as $k => $v)
        <div class="app-item" data-id="task_{{$k}}" style="height: 50px;">
            <div class="app-avatar">
                <div class="app-avatar-image bg-primary">{{__("master.master.masters.{$v['type']}")[0]}}</div>
            </div>
            <div class="app-info">
                <h3>
                    <a data-load-to="#app-list" data-url="{{guard_url('masters/'.$v['type'])}}/list" data-action="SHOW">
                        {{__("master.master.masters.{$v['type']}")}}
                        <span class="pull-right badge bg-blue">{{@$count[$v['type']]}}</span>
                    </a>
                </h3>
            </div>
        </div>
        @endforeach
        @endforeach
    </div>