@extends('user.template.index')

@section('title', 'Ideku | Home')

@section('content')
    <div class="container" style="margin-top: 50px">
        <h1 class="text-center">{{ $title }}</h1>

        @if ($posts->count())
            <div class="card shadow text-center mb-5">
                {{-- <div class="card-header">
                    Featured
                </div> --}}
                <div class="card-body">
                    @if ($posts[0]->image)
                        <div class="d-flex justify-content-center pt-3">
                            <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
                                class="rounded-2 mb-4">
                        </div>
                    @else
                        <img class="img-fluid mb-4"
                            src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}"
                            alt="{{ $posts[0]->category->name }}">
                    @endif

                    <h4 class="card-title fw-bold"><a class="text-decoration-none text-dark"
                            href="/posts/{{ $posts[0]->id }}">{{ $posts[0]->title }}</a></h4>
                    <p class="card-text">By. <a class="text-decoration-none "
                            href="/?author={{ $posts[0]->author->username }}">
                            {{ $posts[0]->author->name }} </a> in <a href="/?category={{ $posts[0]->category->slug }}"
                            class="text-decoration-none">
                            {{ $posts[0]->category->name }}</a>
                    </p>
                    <p class="card-text">{{ $posts[0]->excerpt }}</p>
                    <a href="/posts/{{ $posts[0]->id }}" class="text-decoration-none btn btn-primary"> Read more </a>
                </div>
                <div class="card-footer text-body-secondary ">
                    {{ $posts[0]->created_at->diffForHumans() }}
                </div>
            </div>


            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-6 mb-3">
                        <div class="card shadow">
                            <div class="position-absolute px-3 py-2 rounded" style="background-color: rgba(0, 0, 0, 0.7)"><a
                                    class="text-decoration-none text-white"
                                    href="/?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                            </div>
                            @if ($post->image)
                                <div class="d-flex justify-content-center ">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                        class="img-fluid rounded-2" style="max-width: 400px; max-height: 400px">
                                </div>
                            @else
                                <img class="img-fluid"
                                    src="https://source.unsplash.com/1200x500?{{ $post->category->name }}"
                                    alt="{{ $post->category->name }}">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{ $post->title }}</h5>
                                <p class="text-muted">By. <a class="text-decoration-none"
                                        href="/?author={{ $post->author->username }}">
                                        {{ $post->author->name }} </a>
                                    {{ $post->created_at->diffForHumans() }}
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->id }}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>
    </div>
@else
    <h3 class="text-center mt-5 text-muted">No post found.</h3>
    @endif

    <div class="d-flex justify-content-center ">
        {{ $posts->links() }}
    </div>
@endsection


