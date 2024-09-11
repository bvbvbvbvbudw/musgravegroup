<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .dark-mode  li.nav-item a {
            color:white !important
        }
        .dark-mode .dropdown-menu li {
            background: #1a202c;
        }
        .dark-mode .dropdown-menu li a {
            background: #1a202c;
            transition-duration: .5s;
        }
        .dark-mode .dropdown-menu li a:hover {
            background: #595e7c;
        }
        .dark-mode .dropdown-menu {
            padding: 0!important;
        }
        a:hover {
            text-decoration: none;
            color: rgb(160, 174, 192);
        }

        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 24px;
        }

        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 24px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 20px;
            width: 20px;
            left: 2px;
            bottom: 2px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:checked + .slider:before {
            transform: translateX(26px);
        }

        .dark-mode {
            background-color: #1a202c;
            color: #a0aec0;
        }

        .dark-mode .bg-white {
            background-color: #2d3748 !important;
        }

        .dark-mode .text-gray-700 {
            color: #a0aec0 !important;
        }

        .dark-mode .text-gray-800 {
            color: #cbd5e0 !important;
        }

        .dark-mode .bg-gray-100 {
            background-color: #4a5568 !important;
        }

        .dark-mode .bg-gray-200 {
            background-color: #718096 !important;
        }

        .dark-mode .bg-gray-300 {
            background-color: #a0aec0 !important;
        }

        .navbar-nav .dropdown-menu {
            background-color: #fff;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-nav .dropdown-item {
            padding: 10px 20px;
        }

        .navbar-nav .dropdown-item:hover {
            background-color: #f8f9fa;
            color: #343a40;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">
<header class="bg-white shadow">
    <div class="container mx-auto p-6 d-flex justify-content-between align-items-center">
        <div class="text-lg font-semibold">
            <a href="{{ route('page.index') }}" target="_blank">Admin Dashboard</a>
            <label class="toggle-switch">
                <input type="checkbox" id="theme-switch">
                <span class="slider"></span>
            </label>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">

                        <!-- News Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarNewsDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                News
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarNewsDropdown">
                                <li><a class="dropdown-item" href="{{ route('admin.news.create') }}">Create Musgrave News</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.news.index') }}">View Musgrave News</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.news.sustainability.create') }}">Create Sustainability News</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.news.sustainability.index') }}">View Sustainability News</a></li>
                            </ul>
                        </li>

                        <!-- Brands Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarBrandsDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                Brands
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarBrandsDropdown">
                                <li><a class="dropdown-item" href="{{ route('admin.brands.index') }}">View All Brands</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.brands.create') }}">Create Brand</a></li>
                            </ul>
                        </li>

                        <!-- Reports Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarReportsDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                Reports
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarReportsDropdown">
                                <li><a class="dropdown-item" href="{{ route('admin.reports.index') }}">View Reports</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.reports.create') }}">Create Report</a></li>
                            </ul>
                        </li>

                        <!-- Vacancies Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarVacanciesDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                Vacancies
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarVacanciesDropdown">
                                <li><a class="dropdown-item" href="{{ route('admin.vacancy.create') }}">Create Vacancy</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.vacancy.index') }}">View Vacancies</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.vacancy.category.index') }}">View All Categories</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.vacancy.category.create') }}">Create New Category</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.vacancy.location.index') }}">View All Locations</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.vacancy.location.create') }}">Create New Location</a></li>
                            </ul>
                        </li>

                        <!-- Podcasts Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarPodcastsDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                Podcasts
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarPodcastsDropdown">
                                <li><a class="dropdown-item" href="{{ route('admin.podcasts.index') }}">View Podcasts</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.podcasts.create') }}">Create Podcast</a></li>
                            </ul>
                        </li>

                        <!-- Forms Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarFormsDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                Forms
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarFormsDropdown">
                                <li><a class="dropdown-item" href="{{ route('admin.users.applied') }}">View Applied Users</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.users.sender') }}">View Vacancy Users</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.users.form') }}">View Company Forms</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.users.supplied') }}">View Supplied Forms</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.email.settings') }}">Settings</a></li>
                            </ul>
                        </li>

                        <!-- Users Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarUsersDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                Users
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarUsersDropdown">
                                <li><a class="dropdown-item" href="{{ route('admin.users.index') }}">Manage Users</a></li>
                            </ul>
                        </li>

                        <!-- Admin Dropdown (Visible only to Admin) -->
                        @if(Auth::user()?->isAdmin())
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarAdminDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                    Admin Management
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarAdminDropdown">
                                    <li><a class="dropdown-item" href="{{ route('admin.manage.list', ['model' => 'news']) }}">Manage News</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.manage.list', ['model' => 'vacancy']) }}">Manage Vacancies</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.manage.list', ['model' => 'podcast']) }}">Manage Podcasts</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.manage.list', ['model' => 'newsSustainability']) }}">News Sustainability</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.manage.list', ['model' => 'brand']) }}">Manage Brand</a></li>
                                </ul>
                            </li>
                        @endif

                    </ul>

                </div>
            </div>
        </nav>
        <div class="d-flex align-items-center">
            <span class="me-3 text-sm font-medium text-gray-700">{{ Auth::user()->name ?? 'Not Logged' }}</span>
            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-secondary">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</header>

<div class="container mx-auto mt-6">
    <main>
        <section id="content" class="p-6 bg-white rounded shadow">
            @yield('content')
        </section>
    </main>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const themeSwitch = document.getElementById('theme-switch');
        const body = document.body;
        if (localStorage.getItem('theme') === 'dark') {
            body.classList.add('dark-mode');
            themeSwitch.checked = true;
        }
        themeSwitch.addEventListener('change', function () {
            if (themeSwitch.checked) {
                body.classList.add('dark-mode');
                localStorage.setItem('theme', 'dark');
            } else {
                body.classList.remove('dark-mode');
                localStorage.setItem('theme', 'light');
            }
        });
    });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
