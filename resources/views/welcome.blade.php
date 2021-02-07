@extends('layout')

@section('content')

<div class="catalogue">

@foreach ($post as $p)

<a href="/post/{{ $p->slug }}" class="catalogue-item">

    <div>
        <time datetime="2019-05-28 00:00:00 &#43;0000 UTC" class="catalogue-time">{{ $p->published_at }}</time>
        <h1 class="catalogue-title">{{ $p->title }}</h1>
        <div class="catalogue-line"></div>

        <p>
            {{ $p->body }}
        </p>
    </div>
</a>

@endforeach

@endsection


