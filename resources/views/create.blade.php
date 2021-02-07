@extends('layout')

@section('content')

<div class="post">

    <form action="">

        <label for="title">Title of your Post</label>
        <input type="text" name="title" id="title" placeholder="My first Post">
        
        <label for="body"></label>
        <textarea name="body" id="body" cols="30" rows="10" placeholder="Here is my content"></textarea>
    </form>
    
</div>

@endsection
