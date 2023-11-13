@extends('user.template.index')

@section('title', 'Ideku | Home ')

@section('content')
    <div class="container mt-4">
        <div class="new-article">
            <div class="img-article d-flex justify-content-center">
                <img class="rounded-5 " style="max-width: 400px" src="{{ asset('assets/img/img-article.png') }}" alt="yahahah">
            </div>
            <div class="title-article my-4">
                <h1 class="text-center fw-bold">Judul article</h1>
            </div>
            <div class="body-article mb-4">
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ut, laborum,
                    distinctio
                    accusamus, delectus officia eveniet nulla ipsum alias commodi debitis atque aliquid dolor quibusdam quae
                    cupiditate facilis ea! Id officiis tempora praesentium, nesciunt hic tenetur soluta amet aliquam sed
                    odio atque neque, repellendus illo laudantium doloremque voluptates omnis maiores.</p>
            </div>
            <div class="line pt-4 mb-5 w-50 mx-auto" style="border-top: 1px solid #000000">

            </div>
        </div>
    </div>
    <div class="container">
        <div class="all-article">
            <div class="row">
                <div class="col-6 mb-4">
                    <div class="img-article d-flex justify-content-center">
                        <img class="w-50 rounded-5 mb-3" src="{{ asset('assets/img/img-article2.png') }}" alt="">
                    </div>
                    <div class="title-article">
                        <h3 class="text-center fw-bold">Judul Article</h3>
                    </div>
                    <div class="body-article">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut voluptas nulla veritatis, aliquid
                        adipisci necessitatibus amet vitae doloremque similique magni. Alias sapiente et omnis repudiandae
                        expedita minima eos beatae repellat harum? Porro architecto minus facilis quibusdam autem sit maxime
                        omnis?
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="img-article d-flex justify-content-center">
                        <img class="w-50 rounded-5 mb-3" src="{{ asset('assets/img/img-article2.png') }}" alt="">
                    </div>
                    <div class="title-article">
                        <h3 class="text-center fw-bold">Judul Article</h3>
                    </div>
                    <div class="body-article">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut voluptas nulla veritatis, aliquid
                        adipisci necessitatibus amet vitae doloremque similique magni. Alias sapiente et omnis repudiandae
                        expedita minima eos beatae repellat harum? Porro architecto minus facilis quibusdam autem sit maxime
                        omnis?
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="img-article d-flex justify-content-center">
                        <img class="w-50 rounded-5 mb-3" src="{{ asset('assets/img/img-article2.png') }}" alt="">
                    </div>
                    <div class="title-article">
                        <h3 class="text-center fw-bold">Judul Article</h3>
                    </div>
                    <div class="body-article">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut voluptas nulla veritatis, aliquid
                        adipisci necessitatibus amet vitae doloremque similique magni. Alias sapiente et omnis repudiandae
                        expedita minima eos beatae repellat harum? Porro architecto minus facilis quibusdam autem sit maxime
                        omnis?
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="img-article d-flex justify-content-center">
                        <img class="w-50 rounded-5 mb-3" src="{{ asset('assets/img/img-article2.png') }}" alt="">
                    </div>
                    <div class="title-article">
                        <h3 class="text-center fw-bold">Judul Article</h3>
                    </div>
                    <div class="body-article">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut voluptas nulla veritatis, aliquid
                        adipisci necessitatibus amet vitae doloremque similique magni. Alias sapiente et omnis repudiandae
                        expedita minima eos beatae repellat harum? Porro architecto minus facilis quibusdam autem sit maxime
                        omnis?
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="img-article d-flex justify-content-center">
                        <img class="w-50 rounded-5 mb-3" src="{{ asset('assets/img/img-article2.png') }}" alt="">
                    </div>
                    <div class="title-article">
                        <h3 class="text-center fw-bold">Judul Article</h3>
                    </div>
                    <div class="body-article">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut voluptas nulla veritatis, aliquid
                        adipisci necessitatibus amet vitae doloremque similique magni. Alias sapiente et omnis repudiandae
                        expedita minima eos beatae repellat harum? Porro architecto minus facilis quibusdam autem sit maxime
                        omnis?
                    </div>
                </div>
            </div>
            <div class="line pt-4 mx-5 w-50 mx-auto" style="border-top: 1px solid #000000">
            </div>
        </div>
    @endsection
