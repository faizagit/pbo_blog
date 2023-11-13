@extends('user.template.index')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <input required type="text" name="name"
                            class="form-control rounded @error('name') is-invalid @enderror" id="name"
                            placeholder="nama" value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input required type="text" name="username"
                            class="form-control rounded @error('username') is-invalid @enderror" id="usrname"
                            placeholder="nama" value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input required type="email" name="email"
                            class="form-control rounded @error('email') is-invalid @enderror" id="email"
                            placeholder="name@example.com" value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input required type="password" name="password"
                            class="form-control rounded @error('password') is-invalid @enderror" id="password"
                            placeholder="Password" value="{{ old('password') }}">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-3">Already registered? <a href="/login"
                        class="text-decoration-none">Login Now!</a> </small>
            </main>
        </div>
    </div>
@endsection
