@extends('layout')

@section('content')
<form action="{{ route('index') }}" method="post" id="paste-form">
    <label for="title">Title</label>
    <input name="title" id="title" value="{{ old('title') }}" autofocus>

    <div class="row">
        <div class="col-md-7">
            <div class="row">
                <div class="col-md-12">
                    <label for="language">Language</label>
                    <input name="language" id="language" value="{{ old('language') }}">
                </div>
                <div class="col-md-6">
                    <label for="author">Author</label>
                    <input name="author" id="author" value="{{ old('author') }}">
                </div>
                <div class="col-md-6">
                    <label for="key">Key</label>
                    <div id="key-input">
                        <input name="key" id="key">
                        <button id="key-save" type="button" tabindex="-1" title="Remember the key">Set</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="6">{{ old('description') }}</textarea>
        </div>
    </div>
    <label for="content">Code</label>
    <textarea name="content" id="content" class="code" cols="30" rows="20">{{ old('content') }}</textarea>

    <button type="submit" class="button">paste</button>
</form>
@endsection
