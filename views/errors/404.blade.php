@extends('errors::minimal')

@section('title', __('Page Not Found'))
@section('code', '404')
@section('message', __('Page Not Found'))

@section('description')
It's looking like you may have taken a wrong turn. Don't worry... it happens to the best of us. Here's a little tip that might help you get back on track.
@endsection

@section('url')
<a href="{{url('/')}}">Return Home</a>
@endsection
