<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
{{--    @vite('resources/css/app.css')--}}
    <style>
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
    </style>
</head>
<body class="bg-gray-100 text-gray-800">
<header class="bg-white shadow">
    <div class="container mx-auto p-6 flex justify-between items-center">
        <div class="text-lg font-semibold">
            <a href="{{ route('page.index') }}" target="_blank">Admin Dashboard</a>
            <label class="toggle-switch">
                <input type="checkbox" id="theme-switch">
                <span class="slider"></span>
            </label>
        </div>
        <div class="d-flex align-items-center">
            <span class="me-3 text-sm font-medium text-gray-700">{{ Auth::user()->name ?? 'not logged' }}</span>
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
    <div class="flex" style="gap: 1%;">
        <aside class="w-1/4">
            <nav>
                <ul>
                    <li class="mb-4">
                        <a href="{{ route('admin.news.index') }}"
                           class="block p-4 bg-white rounded shadow hover:bg-gray-100">News</a>
                        <ul class="pl-4 mt-2">
                            <li>
                                <a href="{{ route('admin.news.create') }}"
                                   class="block p-2 bg-gray-200 rounded hover:bg-gray-300">Create musgrave news</a>
                            </li>
                        </ul>
                        <ul class="pl-4 mt-2">
                            <li>
                                <a href="{{ route('admin.news.index') }}"
                                   class="block p-2 bg-gray-200 rounded hover:bg-gray-300">Show musgrave news</a>
                            </li>
                        </ul>
                        <ul class="pl-4 mt-2">
                            <li>
                                <a href="{{ route('admin.news.sustainability.create') }}"
                                   class="block p-2 bg-gray-200 rounded hover:bg-gray-300">Create sustainability
                                    news</a>
                            </li>
                        </ul>
                        <ul class="pl-4 mt-2">
                            <li>
                                <a href="{{ route('admin.news.sustainability.index') }}"
                                   class="block p-2 bg-gray-200 rounded hover:bg-gray-300">Show musgrave news</a>
                            </li>
                        </ul>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="block p-4 bg-white rounded shadow hover:bg-gray-100">Reports</a>
{{--                        <ul class="pl-4 mt-2">--}}
{{--                            <li>--}}
{{--                                <a href="{{ route('admin.news.create') }}"--}}
{{--                                   class="block p-2 bg-gray-200 rounded hover:bg-gray-300">Create site report</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
                        <ul class="pl-4 mt-2">
                            <li>
                                <a href="{{ route('admin.reports.index') }}"
                                   class="block p-2 bg-gray-200 rounded hover:bg-gray-300">Show reports</a>
                            </li>
                        </ul>
                        <ul class="pl-4 mt-2">
                            <li>
                                <a href="{{ route('admin.reports.create') }}"
                                   class="block p-2 bg-gray-200 rounded hover:bg-gray-300">Create report</a>
                            </li>
                        </ul>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="block p-4 bg-white rounded shadow hover:bg-gray-100">Vacancies</a>
                        <ul class="pl-4 mt-2">
                            <li>
                                <a href="{{ route('admin.vacancy.create') }}"
                                   class="block p-2 bg-gray-200 rounded hover:bg-gray-300">Create vacancy</a>
                            </li>
                        </ul>
                        <ul class="pl-4 mt-2">
                            <li>
                                <a href="{{ route('admin.vacancy.index') }}"
                                   class="block p-2 bg-gray-200 rounded hover:bg-gray-300">Show vacancies</a>
                            </li>
                        </ul>
                        <ul class="pl-4 mt-2">
                            <li>
                                <a href="{{ route('admin.vacancy.category.index') }}"
                                   class="block p-2 bg-gray-200 rounded hover:bg-gray-300">Show all category</a>
                            </li>
                        </ul>
                        <ul class="pl-4 mt-2">
                            <li>
                                <a href="{{ route('admin.vacancy.category.create') }}"
                                   class="block p-2 bg-gray-200 rounded hover:bg-gray-300">Create new category</a>
                            </li>
                        </ul>
                        <ul class="pl-4 mt-2">
                            <li>
                                <a href="{{ route('admin.vacancy.location.index') }}"
                                   class="block p-2 bg-gray-200 rounded hover:bg-gray-300">Show all locations</a>
                            </li>
                        </ul>
                        <ul class="pl-4 mt-2">
                            <li>
                                <a href="{{ route('admin.vacancy.location.create') }}"
                                   class="block p-2 bg-gray-200 rounded hover:bg-gray-300">Create new location</a>
                            </li>
                        </ul>
                    </li>

                    <li class="mb-4">
                        <a href="#" class="block p-4 bg-white rounded shadow hover:bg-gray-100">Podcasts</a>
                        <ul class="pl-4 mt-2">
                            <li>
                                <a href="{{ route('admin.podcasts.index') }}"
                                   class="block p-2 bg-gray-200 rounded hover:bg-gray-300">Show podcasts</a>
                            </li>
                        </ul>
                        <ul class="pl-4 mt-2">
                            <li>
                                <a href="{{ route('admin.podcasts.create') }}"
                                   class="block p-2 bg-gray-200 rounded hover:bg-gray-300">Create podcast</a>
                            </li>
                        </ul>
                    </li>

                    <li class="mb-4">
                        <a href="#" class="block p-4 bg-white rounded shadow hover:bg-gray-100">Forms</a>
                        <ul class="pl-4 mt-2">
                            <li>
                                <a href="{{ route('admin.users.applied') }}"
                                   class="block p-2 bg-gray-200 rounded hover:bg-gray-300">Show users applieds to work</a>
                            </li>
                        </ul>
                        <ul class="pl-4 mt-2">
                            <li>
                                <a href="{{ route('admin.users.form') }}"
                                   class="block p-2 bg-gray-200 rounded hover:bg-gray-300">Show users company form</a>
                            </li>
                        </ul>
                    </li>

                    <li class="mb-4">
                        <a href="#" class="block p-4 bg-white rounded shadow hover:bg-gray-100">Users</a>
                        <ul class="pl-4 mt-2">
                            <li>
                                <a href="{{ route('admin.users.index') }}"
                                   class="block p-2 bg-gray-200 rounded hover:bg-gray-300">Manage users</a>
                            </li>
                        </ul>
                    </li>

                    @if(Auth::user()?->isAdmin())
                        <li class="mb-4">
                            <a href="#" class="block p-4 bg-white rounded shadow hover:bg-gray-100">Manage admin</a>
                            <ul class="pl-4 mt-2">
                                <li>
                                    <a href="{{ route('admin.manage.list', ['model' => 'news']) }}"
                                       class="block p-2 bg-gray-200 rounded hover:bg-gray-300">News</a>
                                </li>
                            </ul>
                            <ul class="pl-4 mt-2">
                                <li>
                                    <a href="{{ route('admin.manage.list', ['model' => 'vacancy']) }}"
                                       class="block p-2 bg-gray-200 rounded hover:bg-gray-300">Vacancies</a>
                                </li>
                            </ul>
                            <ul class="pl-4 mt-2">
                                <li>
                                    <a href="{{ route('admin.manage.list', ['model' => 'podcast']) }}"
                                       class="block p-2 bg-gray-200 rounded hover:bg-gray-300">Podcasts</a>
                                </li>
                            </ul>
                            <ul class="pl-4 mt-2">
                                <li>
                                    <a href="{{ route('admin.manage.list', ['model' => 'newsSustainability']) }}"
                                       class="block p-2 bg-gray-200 rounded hover:bg-gray-300">News Sustainability</a>
                                </li>
                            </ul>
                        </li>
                    @endif

                </ul>
            </nav>
        </aside>

        <main class="flex-1">
            <section id="content" class="p-6 bg-white rounded shadow">
                @yield('content')
            </section>
        </main>
    </div>
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
</body>
</html>
