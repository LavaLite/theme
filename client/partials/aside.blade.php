        <aside class="sidebar">
            <div class="user-profile">
                <a href="">
                    <img src="{{user()->picture}}" alt="">
                </a>
                <h3>{{user()->name}}<span>{{user()->email}}</span></h3>
                <p>
                    <a href="{{guard_url('profile')}}"><i class="icon-settings icons"></i>{{__('app.settings')}}</a>
                    <a href="{{guard_url('password')}}"><i class="icon-key icons"></i>{{__('app.password')}}</a>
                </p>
                <a href="#" class="btn theme-btn btn-block">My Advts</a>
                <a href="#" class="btn theme-btn btn-block">Add New Advts</a>
            </div>
        </aside>
