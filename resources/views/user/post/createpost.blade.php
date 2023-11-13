@extends('admin.template.index')

@section('content')
    <div class="back-btn mb-4">
        <a href="{{ route('post') }}" class="btn btn-danger"> <i class="fas fa-chevron-left"></i> Back </a>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <div class="title-post mb-5">
                            <h2 class="fw-bold">Create Post</h2>
                        </div>
                        <div class="body-post">
                            <form action="">
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <label for="" class="form-label">Title Post:</label>
                                        <input type="text" class="form-control" id="" placeholder="Name Post">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="" class="form-label">Slug:</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="" class="form-label">Image</label>
                                        <input type="file" class="form-control">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="" class="form-label">Category:</label>
                                        <select name="" id="" class="form-control">
                                            {{--  --}}
                                            <option value="">Pilih Category</option>
                                            <option value="">hehe</option>
                                            <option value="">hehe</option>
                                            <option value="">hehe</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="" class="form-label">Body:</label>
                                        <textarea class="form-control" name="" id="" cols="10" rows="10">
                                        </textarea>
                                    </div>
                                    <div class="submit-btn">
                                        <button class="btn btn-success" type="submit">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
