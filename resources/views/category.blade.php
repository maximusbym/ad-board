@extends('layouts.app')

@section('title', 'Головна')

@section('content')

    {{--{{ dump( Route::current() ) }}--}}

    {{ dump( locale_link($_SERVER['REQUEST_URI'], 'en') ) }}
    {{ dump( locale_link($_SERVER['REQUEST_URI'], 'ua') ) }}

    <a href="{{ locale_link($_SERVER['REQUEST_URI'], 'en') }}">EN</a>
    <a href="{{ locale_link($_SERVER['REQUEST_URI'], 'ua') }}">UA</a>

@endsection