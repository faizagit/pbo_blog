@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success text-center" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <a href="/dashboard/posts/create" class="btn btn-primary mb-4"><span data-feather="plus-circle"></span> Create New
            Post</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr class="text-center ">
                    <th class="pb-3" scope="col">#</th>
                    <th class="pb-3" scope="col">Title</th>
                    <th class="pb-3" scope="col">Category</th>
                    <th class="pb-3" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr class="align-middle text-center">
                        <td class="p-4">{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-info"><i class="text-white"
                                    data-feather="eye"></i></a>
                            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-success"><i
                                    class="text-white" data-feather="edit"></i></a>
                            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i
                                        class="text-white" data-feather="x-circle"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
@endsection
