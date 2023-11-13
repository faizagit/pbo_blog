<header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">Ideku</a>

    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn btn-dark text-white">Logout<i data-feather="log-out"
                        class="ps-2"></i></button>
            </form>
        </div>
    </div>

</header>
