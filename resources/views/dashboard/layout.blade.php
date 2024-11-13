<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="./build/assets/dashboard/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="./build/assets/dashboard/css/style.css">
    <link rel="stylesheet" href="./build/assets/dashboard/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="./build/assets/dashboard/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='./build/assets/img/favicon.ico' />
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar"
                                class="nav-link nav-link-lg
                                      collapse-btn"> <i
                                    data-feather="align-justify"></i></a></li>
                        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a></li>
                        <li>
                            <form class="form-inline mr-auto">
                                <div class="search-element">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                        data-width="200">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image"
                                src="./build/assets/dashboard/img/user.png" class="user-img-radious-style"> <span
                                class="d-sm-none d-lg-inline-block"></span></a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">
                            <div class="dropdown-title">Hello Sarah Smith</div>
                            <a href="profile.html" class="dropdown-item has-icon"> <i
                                    class="far
                                          fa-user"></i> Profile
                            </a> <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                                Activities
                            </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                                Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item has-icon text-danger" :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    <i class="fas fa-sign-out-alt"></i>
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html"> <img alt="image" src="./build/assets/dashboard/img/logo.png"
                                class="header-logo" /> <span class="logo-name">Otika</span>
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Main</li>
                        <li class="dropdown">
                            <a href="/" class="nav-link"><i
                                    data-feather="monitor"></i><span>Dashboard</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="layers"></i><span>Products</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="widget-chart.html">New Product</a></li>
                                <li><a class="nav-link" href="widget-data.html">Products</a></li>
                                <li><a class="nav-link" href="widget-data.html">Categories</a></li>
                                <li><a class="nav-link" href="widget-data.html">Tags</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-link"><i
                                    data-feather="users"></i><span>Users</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="dollar-sign"></i><span>Financial</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="widget-chart.html">Orders</a></li>
                                <li><a class="nav-link" href="widget-data.html">Payments</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-link"><i
                                    data-feather="settings"></i><span>Settings</span></a>
                        </li>
                    </ul>
                </aside>
            </div>
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-body">
                        <!-- add content here -->
                        @yield("content")
                    </div>
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    <a href="templateshub.net">Templateshub</a></a>
                </div>
                <div class="footer-right">
                </div>
            </footer>
        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="./build/assets/dashboard/js/app.min.js"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="./build/assets/dashboard/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="./build/assets/dashboard/js/custom.js"></script>
</body>

</html>