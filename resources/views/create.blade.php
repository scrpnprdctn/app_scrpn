@extends('layout')

@section('content')

<div class="columns">
    <div class="column is-6 is-offset-3">
        <div class="box">

            <form action="#" method="POST">
            @csrf

                <div class="field">
                    <label class="label" for="title">
                        Title
                        </label>

                    <div class="control">
                        <input
                            class="input @error('title') is-danger @enderror" 
                            type="text" 
                            name="title" 
                            id="title" 
                            placeholder="Title of my post"
                            value="{{ old('title') }}">
                    </div>
                    <!-- Error @title p -->
                    @error('title')<p class="help has-text-danger">{{ $errors->first('title') }}</p>@enderror
                </div>

                <div class="field">
                    <label class="label" for="slug">
                        Slug
                        </label>

                    <div class="control">
                    <input 
                        class="input @error('slug') is-danger @enderror" 
                        type="text" 
                        name="slug" 
                        id="slug" 
                        placeholder="title-of-my-post"
                        value="{{ old('slug') }}">
                    </div>
                    <!-- Error @slug p -->
                    @error('slug') <p class="help has-text-danger">{{ $errors->first('slug') }}</p> @enderror

                </div>

                <div class="field">
                    <label class="label" for="body">Content</label>
                    <div class="control">
                        <textarea 
                            class="textarea @error('body') is-danger @enderror" 
                            name="body" 
                            id="body" 
                            placeholder="e.g. Hello world"
                            >{{ old('body') }}</textarea>
                    </div>
                    <!-- Error @body p -->
                    @error('body') <p class="help has-text-danger">{{ $errors->first('body') }}</p> @enderror
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
