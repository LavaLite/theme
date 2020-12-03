
@if (Session::has('message'))
    @if (Session::get('code') < 200)
        <div class="alert alert-info alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <span>
                <b> Info - </b> {{ Session::get('message') }}</span>
        </div>
    @elseif  (Session::get('code') < 300)
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <span>
                <b> Success - </b> {{ Session::get('message') }}</span>
        </div>
    @elseif  (Session::get('code') < 400)
        <div class="alert alert-warning alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <span>
                <b> Warning - </b> {{ Session::get('message') }}</span>
        </div>
    @else
        <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <span>
                <b> Error - </b> {{ Session::get('message') }}</span>
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
