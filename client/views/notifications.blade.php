
@if (Session::has('message'))
    @if (session('code') < 200)
        <div class="alert alert-info">
            <button type="button" aria-hidden="true" class="close"  data-dismiss="alert" aria-label="close">
                <i class="icon-close"></i>
            </button>
            <span>
                <b> Info - </b> {{ session('message') }}</span>
        </div>
    @elseif  (session('code') < 300)
        <div class="alert alert-success">
            <button type="button" aria-hidden="true" class="close"  data-dismiss="alert" aria-label="close">
                <i class="icon-close"></i>
            </button>
            <span>
                <b> Success - </b> {{ session('message') }}</span>
        </div>
    @elseif  (session('code') < 400)
        <div class="alert alert-warning">
            <button type="button" aria-hidden="true" class="close"  data-dismiss="alert" aria-label="close">
                <i class="icon-close"></i>
            </button>
            <span>
                <b> Warning - </b> {{ session('message') }}</span>
        </div>
    @else
        <div class="alert alert-danger">
            <button type="button" aria-hidden="true" class="close"  data-dismiss="alert" aria-label="close">
                <i class="icon-close"></i>
            </button>
            <span>
                <b> Error - </b> {{ session('message') }}</span>
        </div>
    @endif
@endif


@if (Session::has('errors'))
        <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <b> Error </b>
            <ul>
              @foreach(Session::get('errors')->all() as $message)
              <li>{{$message}} </li>
              @endforeach
            </ul>
        </div>
@endif

@if (Session::has('success'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <b> Success </b>
            <div>{{Session::get('success')}}</div>
        </div>
@endif

@if (Session::has('success'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <b> Success </b>
            <div>{{Session::get('success')}}</div>
        </div>
@endif

@if (Session::has('status'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <b> Info </b>
            <div>{{Session::get('status')}}</div>
        </div>
@endif
