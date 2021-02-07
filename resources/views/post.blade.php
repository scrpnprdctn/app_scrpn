@extends('layout')

@section('content')

<div class="columns">
    <div class="column is-6 is-offset-3">
        <div class="box">

            <h1 class="title">{{ $post->title }}</h1>

            <p>{{ $post->body }}</p>

            <hr>

            <a href="/post">Return</a>
        </div>
    </div>
</div>

@endsection
