<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Platform Dashboard</title>
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/material-dashboard.css?v=3.1.0') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
</head>

<body class="bg-gray-200 g-sidenav-show">
    <!-- Sidebar -->
    <aside class="my-3 border-0 sidenav navbar navbar-vertical navbar-expand-xs border-radius-xl fixed-start bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <a class="m-0 navbar-brand" href="{{ route('dashboard') }}">
                <img src="{{ asset('assets/img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
                <span class="text-white ms-1 font-weight-bold">Platform Dashboard</span>
            </a>
        </div>
        <hr class="mt-0 mb-2 horizontal light">
        <div class="w-auto collapse navbar-collapse" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="text-white nav-link" href="{{ route('dashboard') }}">
                        <i class="material-icons opacity-10">dashboard</i>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="text-white nav-link" href="{{route('users.index')}}">
                        <i class="material-icons opacity-10">person</i>
                        <span class="nav-link-text ms-1">USERS</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="text-white nav-link" href="{{route('roles.index')}}">
                        <i class="material-icons opacity-10">group</i>
                        <span class="nav-link-text ms-1">ROLES</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="text-white nav-link" href="{{route('permissions.index')}}">
                        <i class="material-icons opacity-10">lock</i>
                        <span class="nav-link-text ms-1">PERMISSIONS</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="text-white nav-link" href="#">
                        <i class="material-icons opacity-10">category</i>
                        <span class="nav-link-text ms-1">Products</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="text-white nav-link" href="#">
                        <i class="material-icons opacity-10">receipt</i>
                        <span class="nav-link-text ms-1">Orders</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="text-white nav-link" href="#">
                        <i class="material-icons opacity-10">payments</i>
                        <span class="nav-link-text ms-1">Transactions</span>
                    </a>
                </li>

            </ul>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->
        <nav class="px-0 mx-4 shadow-none navbar navbar-main navbar-expand-lg border-radius-xl" id="navbarBlur" data-scroll="true">
            <div class="px-3 py-1 container-fluid">
                <h6 class="mb-0 font-weight-bolder">@yield('title', 'Dashboard')</h6>
                <div class="mt-2 collapse navbar-collapse mt-sm-0 me-md-0 me-sm-4">
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="/profile" class="px-0 nav-link text-body font-weight-bold">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">Profile</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <!-- Yield Content Here -->
        <div class="py-4 container-fluid">
            @yield('content')
        </div>
    </main>

    <!-- JS Files -->
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>
    <script src="{{ asset('assets/js/material-dashboard.min.js?v=3.1.0') }}"></script>
</body>

</html>
