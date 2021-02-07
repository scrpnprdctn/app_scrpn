@extends('layout')

@section('content')

<div class="columns">
    <div class="column is-6 is-offset-3">
        <div class="box">

            <form action="#" method="POST">
            @csrf
                <div class="field">
                    <label class="label" for="title">Title</label>
                    <div class="control">
                    <input class="input" type="text" name="title" id="title" placeholder="Title of my post">
                    </div>
                    <p class="help">This is a help text</p>
                </div>

                <div class="field">
                    <label class="label" for="slug">Slug</label>
                    <div class="control">
                    <input class="input" type="text" name="slug" id="slug" placeholder="title-of-my-post">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body">Content</label>
                    <div class="control">
                        <textarea class="textarea" name="body" id="body" placeholder="e.g. Hello world"></textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                    <button class="button is-link">Submit</button>
                    </div>
                    <div class="control">
                    <button class="button is-link is-light">Cancel</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection
