@extends('dashboard.layouts.main')

@section('content')
    <div class="container my-3">
        <div class="row ">
            <div class="col-lg-8">
                <h1 class="mb-4">{{ $post->title }} </h1>
                <a href="/dashboard/posts" class="btn btn-warning text-white"><span class="me-2"
                        data-feather="arrow-left"></span>Back
                    to all my
                    posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-success "><span class="me-2"
                        data-feather="edit"></span>Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="text-white me-2"
                            data-feather="x-circle"></i>Delete</button>
                </form>

                @if ($post->image)
                    <div style="max-width: 300px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid mt-3 rounded-4">
                    </div>
                @else
                    <img class="img-fluid my-3 rounded-4"
                        src="https://source.unsplash.com/1200x500?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}">
                @endif

                <p>{!! $post->body !!}</p>

                {{-- <a href="/" class="text-decoration-none"> Back to post </a> --}}
            </div>
        </div>
    </div>
    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
@endsection
