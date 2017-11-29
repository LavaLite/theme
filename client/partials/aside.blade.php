
                        <aside class="sidebar">
                            <div class="user-profile">
                                <a href="{{guard_url('/')}}"><img src="{{user()->picture}}" alt=""></a>
                                <h3 class="mb10">{{user()->name}} <span>{{user()->email}}</span></h3>
                                <p class="mb30"> <a href="{{guard_url('profile')}}">  <i class="icon-settings icons"></i> {{__('app.settings')}}</a> <a href="{{guard_url('password')}}"> <i class="icon-key icons"></i>{{__('app.password')}}</a></p>
                                <a href="#" class="btn theme-btn btn-block">My Advts</a>
                                <a href="#" class="btn theme-btn btn-block">Add New Advts</a>
                            </div>
                        </aside>