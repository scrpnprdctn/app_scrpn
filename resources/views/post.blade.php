@extends('layout')

@section('content')

<div class="post">
    <div class="post-info">
        <span>Written by</span>
        Steve Francia
        <br>
        <span>on&nbsp;</span><time datetime="2019-05-28 00:00:00 &#43;0000 UTC">{{ $post->published_at }}</time>
    </div>

    <h1 class="post-title">{{ $post->title }}</h1>

    <div class="post-line"></div>

    <p>{{ $post->body }}</p>

    <a href="/post">Return</a>

@endsection
