@extends('layouts.app')

@section('title', 'Головна')

@section('content')

    {{ trans('main.header') }}

    <a href="{{ route('about') }}">route /about</a>

    {{----}}
    {{--<h1>Головна сторінка</h1>--}}

    {{--<div class="catalog">--}}

        {{--@foreach( $categories as $key => $category )--}}

            {{--/catalog/2--}}
            {{--<a href="{{ route('catalog',['id' => $category->id]) }}">--}}
                {{--{{ $category->title }}--}}
            {{--</a>--}}

            {{--<p>{{ ++$key }}. {{ $category->title }}</p>--}}

            {{--@if( $category->ads()->count() > 0 )--}}
                {{--@foreach($category->mainPageAds as $key2 => $ad)--}}
                    {{--<p>{{ ++$key2 }}. {{ $ad->title }}</p>--}}
                {{--@endforeach--}}
            {{--@endif--}}

        {{--@endforeach--}}

    {{--</div>--}}

    {{--<form method="POST" action="/profile">--}}
        {{--{{ csrf_field() }}--}}

    {{--</form>--}}

@endsection