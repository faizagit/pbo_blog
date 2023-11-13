<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://unpkg.com/feather-icons"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top "
        style="width: 100%; height: 100%; background: white; box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.16">
        <div class="container-fluid">
            <div class="navleft d-flex gap-5">
                <div class="logo">
                    <a class="navbar-brand" href="{{ route('blog') }}"><img style="width: 120px !important"
                            src="{{ asset('assets/img/logoku.png') }}" alt="yek salah"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="subclass d-flex ">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav d-flex justify-content-center gap-2">
                            <li class="nav-item">
                                <a class="nav-link {{ $active === 'home' ? 'active' : '' }} " href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ $active === 'categories' ? 'active' : '' }}"
                                    href="/categories">Categories</a>
                            </li>
                            {{-- <li>
                                <a class="nav-link" href="/post"></a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="navright d-flex">
                <form action="" class="d-flex">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <input class="form-control me-2 w-100" type="search" placeholder="Search.." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav ms-3">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Welcome back, {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/dashboard"><i data-feather="book" class="pe-2"></i>
                                        Dashboard</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i data-feather="log-out"
                                                class="pe-2"></i>Logout</button>
                                    </form>
                                    {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="/login"
                                class="nav-link text-decoration-none text-dark {{ $active === 'login' ? 'active' : '' }}"><i
                                    data-feather="log-in"></i>
                                Login</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <script>
        feather.replace();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.bundle.js') }}"></script>
</body>

</html>
