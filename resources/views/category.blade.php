@extends('layouts.app')

@section('title', 'Головна')

@section('content')

    {{--{{ dump( Route::current() ) }}--}}

    {{--{{ dump( locale_link(route(Route::current()->getName()), 'en') ) }}--}}
{{--    {{ dump( locale_link(route(Route::current()->getName()), 'ua') ) }}--}}

    <a href="{{ locale_link(route(Route::current()->getName()), 'en') }}">EN</a>
    <a href="{{ locale_link(route(Route::current()->getName()), 'ua') }}">UA</a>

@endsection