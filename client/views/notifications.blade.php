
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
        <div class="alert alert-danger">
            <button type="button" aria-hidden="true" class="close"  data-dismiss="alert" aria-label="close">
                <i class="icon-close"></i>
            </button>
            <ul>
              @foreach(session('errors')->all() as $message)
              <li>{{$message}} </li>
              @endforeach
            </ul>
        </div>
@endif
