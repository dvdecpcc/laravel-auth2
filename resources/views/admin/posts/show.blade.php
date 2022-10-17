@extends('layouts.app')
@section('content')

    <div class="container">
        <div>
            <span class="fw-bolder">Title:</span>
            {{$post->title}}
        </div>
        <div>
            <span>Content</span>
            {{$post->content}}
        </div>
        <div>
            <span>Slug:</span>
            {{$post->slug}}
        </div>
        <a class="btn btn-primary" href="{{route('admin.posts.index')}}">Go Back</a>
    </div>

@endsection