<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Admin Dashboard')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">
<header class="bg-white shadow">
    <div class="container mx-auto p-6 flex justify-between items-center">
        <div class="text-lg font-semibold">
            <a href="{{ route('dashboard') }}">Admin Dashboard</a>
        </div>
        <div>
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
                        <a href="{{ route('admin.news.index') }}" class="block p-4 bg-white rounded shadow hover:bg-gray-100">Новости</a>
                        <ul class="pl-4 mt-2">
                            <li>
                                <a href="{{ route('admin.news.create') }}" class="block p-2 bg-gray-200 rounded hover:bg-gray-300">Создать</a>
                            </li>
                            <li>
                                <a href="#" class="block p-2 bg-gray-200 rounded hover:bg-gray-300">Другое действие</a>
                            </li>
                        </ul>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="block p-4 bg-white rounded shadow hover:bg-gray-100">Другой раздел</a>
                    </li>
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
</body>
</html>
