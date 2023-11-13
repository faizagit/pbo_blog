<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Circl - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
    <link href="{{ asset('assets-admin') }}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets-admin') }}/plugins/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets-admin') }}/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="{{ asset('assets-admin') }}/css/main.min.css" rel="stylesheet">
    <link href="{{ asset('assets-admin') }}/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    {{-- <div class='loader'>
        <div class='spinner-grow text-primary' role='status'>
            <span class='sr-only'>Loading...</span>
        </div>
    </div> --}}

    <div class="page-container">
        <div class="page-header">
            <nav class="navbar navbar-expand-lg d-flex justify-content-between">
                <div class="" id="navbarNav">
                    <ul class="navbar-nav" id="leftNav">
                        <li class="nav-item">
                            <a class="nav-link" id="sidebar-toggle" href="#"><i data-feather="arrow-left"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                    </ul>
                </div>
                <div class="logo">
                    <a class="navbar-brand"></a>
                </div>
            </nav>
        </div>
        <div class="page-sidebar">
            <ul class="list-unstyled accordion-menu">
                <li class="sidebar-title">
                    Main
                </li>
                <li class="{{ request()->is('admin/dashboard*') ? 'active-page' : '' }}">
                    <a href="{{ route('dashboard') }}"><i data-feather="home"></i>Dashboard</a>
                </li>
                <li class="sidebar-title">
                    Apps
                </li>
                {{-- <li class="{{ request()->is('admin/post*') ? 'active-page' : '' }}">
                    <a href="{{ route('post') }} "><i data-feather="inbox"></i>My Post</a>
                </li> --}}
                <li class="{{ request()->is('blog*') ? 'active-page' : '' }}">
                    <a href="{{ route('blog') }}"><i data-feather="clipboard"></i>My Blog</a>
                </li>
            </ul>
        </div>
        <div class="page-content">
            <div class="main-wrapper">
                @yield('content')
            </div>
        </div>

    </div>

    <!-- Javascripts -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="{{ asset('assets-admin') }}/plugins/jquery/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('assets-admin') }}/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets-admin') }}/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('assets-admin') }}/js/main.min.js"></script>
</body>

</html>
