@extends('user.template.index')

@section('title', 'Ideku | Categories')

@section('content')
    <div class="container mt-5">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <div class="card text-bg-dark">
                        <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img"
                            alt="{{ $category->name }}">
                        <div class="card-img-overlay">
                            <a href="/?category={{ $category->slug }}" class="text-decoration-none text-white">
                                <h5 class="card-title">{{ $category->title }}</h5>
                                <div class="card-img-overlay d-flex align-items-center p-0">
                                    <h5 class="card-title text-center  py-2 px-3 fs-4 flex-fill"
                                        style="background-color: rgba(0, 0, 0, 0.7)">
                                        {{ $category->name }}</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-md-4">


                {{-- <h1>Post Categories</h1>

                @foreach ($categories as $category)
                    <ul>
                        <li>
                            <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
                        </li>
                    </ul>
                @endforeach --}}
            </div>
        </div>
    </div>
@endsection
