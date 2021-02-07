@extends('layout')

@section('content')

@foreach ($post as $p)

<div class="columns">
    <div class="column is-6 is-offset-3">
        <div class="box">
            <h1 class="title"><a href="/post/{{ $p->slug }}">{{ $p->title }}</a></h1>
            <p class="subtitle is-size-7">Published at {{ $p->created_at }}</h3>
        </div>
    </div>
</div>

@endforeach

@endsection


