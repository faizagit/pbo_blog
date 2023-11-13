@extends('user.template.index')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }} </h1>
                <p>By. <a href="/?authors={{ $post->author->username }}" class="text-decoration-none">
                        {{ $post->author->name }} </a> in <a class="text-decoration-none"
                        href="/?category={{ $post->category->slug }}">{{ $post->category->name }}
                </p></a>
                <img class="img-fluid my-4" src="https://source.unsplash.com/1200x500?{{ $post->category->name }}"
                    alt="{{ $post->category->name }}">
                <p>{!! $post->body !!}</p>

                <a href="/" class="text-decoration-none"> Back to post </a>
            </div>
        </div>
    </div>
@endsection
