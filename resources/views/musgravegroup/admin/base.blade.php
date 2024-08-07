<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Admin Dashboard')</title>
    @vite('resources/css/app.css')
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
            <a href="{{ route('dashboard') }}">Admin Dashboard</a>
        </div>
        <div class="flex items-center">
            <label class="toggle-switch">
                <input type="checkbox" id="theme-switch">
                <span class="slider"></span>
            </label>
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-500 focus:outline-none transition duration-150 ease-in-out">
                        <div>{{ Auth::user()->name ?? 'Test' }}</div>
                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
</header>

<div class="container mx-auto mt-6">
    <div class="flex">
        <aside class="w-1/4">
            <nav>
                <ul>
                    <li class="mb-4">
                        <a href="{{ route('admin.news.index') }}" class="block p-4 bg-white rounded shadow hover:bg-gray-100">News</a>
                        <ul class="pl-4 mt-2">
                            <li>
                                <a href="{{ route('admin.news.create') }}" class="block p-2 bg-gray-200 rounded hover:bg-gray-300">Create musgrave news</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.news.create') }}" class="block p-2 bg-gray-200 rounded hover:bg-gray-300">Create sustainability news</a>
                            </li>
                            <li>
                                <a href="#" class="block p-2 bg-gray-200 rounded hover:bg-gray-300">Другое действие</a>
                            </li>
                        </ul>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="block p-4 bg-white rounded shadow hover:bg-gray-100">Reports</a>
                        <ul class="pl-4 mt-2">
                            <li>
                                <a href="{{ route('admin.news.create') }}" class="block p-2 bg-gray-200 rounded hover:bg-gray-300">Create site report</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.news.create') }}" class="block p-2 bg-gray-200 rounded hover:bg-gray-300">Create report</a>
                            </li>
                        </ul>
                    </li>
                    <!-- TODO: make another crud operations. -->
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

        // Check localStorage for theme preference
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
