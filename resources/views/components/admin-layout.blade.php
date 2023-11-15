<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @wireUiScripts()
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts
    @stack('scripts')
</head>

<body class="font-sans antialiased relative bg-gray-400">
    <img src="{{ asset('image/bg-barangay.jpg') }}" class="top-0 absolute bottom-0 h-full w-full object-cover opacity-5"
        alt="">
    <div class="flex h-screen overflow-hidden relative">
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64">
                <div class="flex flex-col flex-grow pt-5 overflow-y-auto bg-white bg-opacity-60 relative border-r">

                    <div class="flex flex-col flex-shrink-0 px-4">
                        <a class="text-lg font-semibold tracking-tighter flex justify-center items-center flex-col text-center text-blue-700 focus:outline-none focus:ring "
                            href="/">
                            <img src="{{ asset('image/barangayLogo.png') }}" class="h-20" alt="">
                            <span>BARANGAY GATE</span>
                        </a>
                        <button class="hidden rounded-lg focus:outline-none focus:shadow-outline">
                            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-col flex-grow relative  px-4 mt-5">

                        <nav class="flex-1 space-y-1 ">
                            <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase">
                                Analytics
                            </p>
                            <ul>
                                <li>
                                    <a class="{{ request()->routeIs('admin.dashboard') ? 'bg-white text-blue-500 fill-blue-500 scale-95' : 'text-gray-500 fill-gray-500' }} inline-flex items-center w-full px-4 py-2 mt-1 text-sm font-medium   transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500 hover:fill-blue-500"
                                        href="{{ route('admin.dashboard') }}">

                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="w-5 h-5 md hydrated">
                                            <path
                                                d="M21.04 7.19L12 12.42 2.96 7.19c.4-.74.98-1.39 1.63-1.75l5.34-2.96c1.14-.64 3-.64 4.14 0l5.34 2.96c.65.36 1.23 1.01 1.63 1.75z"
                                                opacity=".4"></path>
                                            <path
                                                d="M12 12.42V22c-.75 0-1.5-.16-2.07-.48l-5.34-2.96c-1.21-.67-2.2-2.35-2.2-3.73V9.17c0-.64.22-1.34.57-1.98L12 12.42z"
                                                opacity=".6"></path>
                                            <path
                                                d="M21.61 9.17v5.66c0 1.38-.99 3.06-2.2 3.73l-5.34 2.96c-.57.32-1.32.48-2.07.48v-9.58l9.04-5.23c.35.64.57 1.34.57 1.98z">
                                            </path>
                                        </svg>
                                        <span class="ml-3">
                                            Dashboard
                                        </span>
                                    </a>
                                </li>

                            </ul>
                            <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase">
                                MANAGE
                            </p>
                            <ul>
                                <li>
                                    <a class="{{ request()->routeIs('admin.official') ? 'bg-white text-blue-500 fill-blue-500 scale-95' : 'text-gray-500 fill-gray-500' }} inline-flex items-center w-full px-4 py-2 mt-1 text-sm font-medium   transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500 hover:fill-blue-500"
                                        href="{{ route('admin.official') }}">

                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="w-5 h-5 md hydrated">
                                            <path
                                                d="M18 13c-.94 0-1.81.33-2.5.88A3.97 3.97 0 0014 17c0 .75.21 1.46.58 2.06A3.97 3.97 0 0018 21c1.01 0 1.93-.37 2.63-1 .31-.26.58-.58.79-.94.37-.6.58-1.31.58-2.06 0-2.21-1.79-4-4-4zm2.07 3.57l-2.13 1.97c-.14.13-.33.2-.51.2-.19 0-.38-.07-.53-.22l-.99-.99a.754.754 0 010-1.06c.29-.29.77-.29 1.06 0l.48.48 1.6-1.48c.3-.28.78-.26 1.06.04s.26.77-.04 1.06z">
                                            </path>
                                            <path
                                                d="M21.09 21.5c0 .28-.22.5-.5.5H3.41c-.28 0-.5-.22-.5-.5 0-4.14 4.08-7.5 9.09-7.5 1.03 0 2.03.14 2.95.41-.59.7-.95 1.61-.95 2.59 0 .75.21 1.46.58 2.06.2.34.46.65.76.91.7.64 1.63 1.03 2.66 1.03 1.12 0 2.13-.46 2.85-1.2.16.54.24 1.11.24 1.7z"
                                                opacity=".4"></path>
                                            <path d="M12 12a5 5 0 100-10 5 5 0 000 10z"></path>
                                        </svg>
                                        <span class="ml-3">
                                            Barangay Official
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('admin.residents') ? 'bg-white text-blue-500 fill-blue-500 scale-95' : 'text-gray-500 fill-gray-500' }} inline-flex items-center w-full px-4 py-2 mt-1 text-sm font-medium   transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500 hover:fill-blue-500"
                                        href="{{ route('admin.residents') }}">

                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="w-5 h-5 md hydrated">
                                            <path
                                                d="M18 13c-.94 0-1.81.33-2.5.88A3.97 3.97 0 0014 17c0 .75.21 1.46.58 2.06A3.97 3.97 0 0018 21c1.01 0 1.93-.37 2.63-1 .31-.26.58-.58.79-.94.37-.6.58-1.31.58-2.06 0-2.21-1.79-4-4-4zm2.07 3.57l-2.13 1.97c-.14.13-.33.2-.51.2-.19 0-.38-.07-.53-.22l-.99-.99a.754.754 0 010-1.06c.29-.29.77-.29 1.06 0l.48.48 1.6-1.48c.3-.28.78-.26 1.06.04s.26.77-.04 1.06z">
                                            </path>
                                            <path
                                                d="M21.09 21.5c0 .28-.22.5-.5.5H3.41c-.28 0-.5-.22-.5-.5 0-4.14 4.08-7.5 9.09-7.5 1.03 0 2.03.14 2.95.41-.59.7-.95 1.61-.95 2.59 0 .75.21 1.46.58 2.06.2.34.46.65.76.91.7.64 1.63 1.03 2.66 1.03 1.12 0 2.13-.46 2.85-1.2.16.54.24 1.11.24 1.7z"
                                                opacity=".4"></path>
                                            <path d="M12 12a5 5 0 100-10 5 5 0 000 10z"></path>
                                        </svg>
                                        <span class="ml-3">
                                            Residents
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('admin.blotter') ? 'bg-white text-blue-500 fill-blue-500 scale-95' : 'text-gray-500 fill-gray-500' }} inline-flex items-center w-full px-4 py-2 mt-1 text-sm font-medium   transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500 hover:fill-blue-500"
                                        href="{{ route('admin.blotter') }}">

                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="w-5 h-5 md hydrated">
                                            <path
                                                d="M21.66 10.44l-.98 4.18c-.84 3.61-2.5 5.07-5.62 4.77-.5-.04-1.04-.13-1.62-.27l-1.68-.4c-4.17-.99-5.46-3.05-4.48-7.23l.98-4.19c.2-.85.44-1.59.74-2.2 1.17-2.42 3.16-3.07 6.5-2.28l1.67.39c4.19.98 5.47 3.05 4.49 7.23z"
                                                opacity=".4"></path>
                                            <path
                                                d="M15.06 19.39c-.62.42-1.4.77-2.35 1.08l-1.58.52c-3.97 1.28-6.06.21-7.35-3.76L2.5 13.28c-1.28-3.97-.22-6.07 3.75-7.35l1.58-.52c.41-.13.8-.24 1.17-.31-.3.61-.54 1.35-.74 2.2l-.98 4.19c-.98 4.18.31 6.24 4.48 7.23l1.68.4c.58.14 1.12.23 1.62.27zM17.49 10.51c-.06 0-.12-.01-.19-.02l-4.85-1.23a.75.75 0 01.37-1.45l4.85 1.23a.748.748 0 01-.18 1.47z">
                                            </path>
                                            <path
                                                d="M14.56 13.89c-.06 0-.12-.01-.19-.02l-2.91-.74a.75.75 0 01.37-1.45l2.91.74c.4.1.64.51.54.91-.08.34-.38.56-.72.56z">
                                            </path>
                                        </svg>
                                        <span class="ml-3">
                                            Blotter Records
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase">
                                FORMS
                            </p>
                            <ul>
                                <li>
                                    <a class="{{ request()->routeIs('admin.certificates') ? 'bg-white text-blue-500 fill-blue-500 scale-95' : 'text-gray-500 fill-gray-500' }} inline-flex items-center w-full px-4 py-2 mt-1 text-sm font-medium   transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500 hover:fill-blue-500"
                                        href="{{ route('admin.certificates') }}">

                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="w-5 h-5 md hydrated">
                                            <path
                                                d="M21.66 10.44l-.98 4.18c-.84 3.61-2.5 5.07-5.62 4.77-.5-.04-1.04-.13-1.62-.27l-1.68-.4c-4.17-.99-5.46-3.05-4.48-7.23l.98-4.19c.2-.85.44-1.59.74-2.2 1.17-2.42 3.16-3.07 6.5-2.28l1.67.39c4.19.98 5.47 3.05 4.49 7.23z"
                                                opacity=".4"></path>
                                            <path
                                                d="M15.06 19.39c-.62.42-1.4.77-2.35 1.08l-1.58.52c-3.97 1.28-6.06.21-7.35-3.76L2.5 13.28c-1.28-3.97-.22-6.07 3.75-7.35l1.58-.52c.41-.13.8-.24 1.17-.31-.3.61-.54 1.35-.74 2.2l-.98 4.19c-.98 4.18.31 6.24 4.48 7.23l1.68.4c.58.14 1.12.23 1.62.27zM17.49 10.51c-.06 0-.12-.01-.19-.02l-4.85-1.23a.75.75 0 01.37-1.45l4.85 1.23a.748.748 0 01-.18 1.47z">
                                            </path>
                                            <path
                                                d="M14.56 13.89c-.06 0-.12-.01-.19-.02l-2.91-.74a.75.75 0 01.37-1.45l2.91.74c.4.1.64.51.54.91-.08.34-.38.56-.72.56z">
                                            </path>
                                        </svg>
                                        <span class="ml-3">
                                            Certificates
                                        </span>
                                    </a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                    {{-- <div class="flex flex-shrink-0 p-4 px-4 bg-gray-50">
                        <div @click.away="open = false" class="relative inline-flex items-center w-full"
                            x-data="{ open: false }">
                            <button @click="open = !open"
                                class="inline-flex items-center justify-between w-full px-4 py-3 text-lg font-medium text-center text-white transition duration-500 ease-in-out transform rounded-xl hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                <span>
                                    <span class="flex-shrink-0 block group">
                                        <div class="flex items-center">
                                            <div>
                                                <img class="inline-block object-cover rounded-full h-9 w-9"
                                                    src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2070&amp;q=80"
                                                    alt="">
                                            </div>
                                            <div class="ml-3 text-left">
                                                <p class="text-sm font-medium text-gray-500 group-hover:text-blue-500">
                                                    Mike Vega
                                                </p>
                                                <p class="text-xs font-medium text-gray-500 group-hover:text-blue-500">
                                                    Pro user
                                                </p>
                                            </div>
                                        </div>
                                    </span>
                                </span>
                                <svg :class="{ 'rotate-180': open, 'rotate-0': !open }"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="inline w-5 h-5 ml-4 text-black transition-transform duration-200 transform rotate-0"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                class="absolute bottom-0 z-50 w-full mx-auto mt-2 origin-bottom-right bg-white rounded-xl"
                                style="display: none">
                                <div class="px-2 py-2 bg-white rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                                    <ul>
                                        <li>
                                            <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                                href="#">
                                                <ion-icon class="w-4 h-4 md hydrated" name="body-outline"
                                                    role="img" aria-label="body outline"></ion-icon>
                                                <span class="ml-4">
                                                    Account
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500"
                                                href="#">
                                                <ion-icon class="w-4 h-4 md hydrated" name="person-circle-outline"
                                                    role="img" aria-label="person circle outline"></ion-icon>
                                                <span class="ml-4">
                                                    Profile
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="flex flex-col flex-1 w-0 overflow-hidden">
            <main class="relative flex-1 overflow-y-auto focus:outline-none">
                <header class="flex justify-end bg-white bg-opacity-60 px-8 py-4 relative">
                    <div class="relative flex-shrink-0 ml-5" @click.away="open = false" x-data="{ open: false }">
                        <div>
                            <button @click="open = !open" class="flex space-x-3 items-center group">
                                @if (auth()->user()->profile_path != null)
                                    <img src="{{ Storage::url(auth()->user()->profile_path) }}"
                                        class="h-12 w-12 rounded-full object-cover " alt="">
                                @else
                                    <img src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                                        class="h-12 w-12 rounded-full object-cover " alt="">
                                @endif
                                <div class="flex space-x-5 items-center ">
                                    <div class="flex flex-col text-left">
                                        <h1 class="font-bold group-hover:text-blue-700 uppercase">
                                            {{ auth()->user()->name }}</h1>
                                        <span class="leading-3 text-gray-500 text-sm">Administrator</span>
                                    </div>
                                    <div>
                                        <svg :class="{ 'rotate-180': open, 'rotate-0': !open }"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="h-6 w-6 fill-gray-500 transition-transform duration-200 transform group-hover:fill-blue-700 rotate-0"">
                                            <path d="M12 16L6 10H18L12 16Z"></path>
                                        </svg>
                                    </div>
                                </div>


                            </button>
                        </div>

                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute right-0 z-10 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                            tabindex="-1" style="display: none;">
                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-500"
                                role="menuitem" tabindex="-1" id="user-menu-item-0">
                                Your Profile
                            </a>


                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="#"
                                    onclick="event.preventDefault();
                                this.closest('form').submit();"
                                    class="block px-4 py-2 text-sm text-gray-500" role="menuitem" tabindex="-1"
                                    id="user-menu-item-2">
                                    Sign out
                                </a>
                            </form>
                        </div>
                    </div>
                </header>
                <div class="p-10 px-20">
                    <header>
                        <h1 class="text-2xl uppercase font-bold text-gray-700">
                            @yield('title')
                        </h1>
                    </header>
                    <div class="mt-5">
                        {{ $slot }}
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
