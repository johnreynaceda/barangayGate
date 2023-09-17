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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="bg-white relative" x-data="{ showModal: false }">
        <img src="{{ asset('images/reii-bg.png') }}" class="absolute w-full object-cover opacity-10" alt="">
        <main>
            <!-- Hero section -->
            <div class="relative isolate overflow-hidden">
                <svg class="absolute inset-0 -z-10 h-full w-full stroke-white/10 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
                    aria-hidden="true">
                    <defs>
                        <pattern id="983e3e4c-de6d-4c3f-8d64-b9761d1534cc" width="200" height="200" x="50%"
                            y="-1" patternUnits="userSpaceOnUse">
                            <path d="M.5 200V.5H200" fill="none" />
                        </pattern>
                    </defs>
                    <svg x="50%" y="-1" class="overflow-visible fill-blue-500/30">
                        <path
                            d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
                            stroke-width="0" />
                    </svg>
                    <rect width="100%" height="100%" stroke-width="0"
                        fill="url(#983e3e4c-de6d-4c3f-8d64-b9761d1534cc)" />
                </svg>
                <div class="absolute left-[calc(50%-4rem)] top-10 -z-10 transform-gpu blur-3xl sm:left-[calc(50%-18rem)] lg:left-48 lg:top-[calc(50%-30rem)] xl:left-[calc(50%-24rem)]"
                    aria-hidden="true">
                    <div class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#3B82F6] to-[#3B82F6] opacity-20"
                        style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)">
                    </div>
                </div>
                <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-40 lg:flex lg:px-8 lg:pt-40">
                    <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8">
                        <img class="h-20 " src="{{ asset('image/barangayLogo.png') }}" alt="Your Company">
                        <div class="mt-24 sm:mt-32 lg:mt-16">

                        </div>
                        <h1
                            class="mt-10 text-4xl font-bold tracking-tight font-caprasimo text-blue-500 sm:text-6xl animate__animated animate__fadeIn animate__delay-1s">
                            "Barangay Gate: Building Community, Bridging
                            Hearts."</h1>
                        <p class="mt-6 text-lg leading-8  text-gray-500">"Barangay is the lowest political adminis-
                            trative unit of the Philippine government. Together with the municipal and provincial
                            government, the barangay is considered the fundamental base of the Philippine national
                            government. The term barangay dates back to precolonial times."</p>
                        <div class="mt-6 flex items-center gap-x-6">

                            <a href="{{ route('login') }}"
                                class="bg-blue-500 flex items-center group py-2 px-4 space-x-2 font-bold text-white rounded-full">
                                <span> SIGN IN</span>
                                <svg class="mt-0.5 ml-2 -mr-1 h-4 w-4 stroke-white stroke-2" fill="none"
                                    viewBox="0 0 10 10" aria-hidden="true">
                                    <path class="transition opacity-0 group-hover:opacity-100" d="M0 5h7"></path>
                                    <path class="transition group-hover:translate-x-[3px]" d="M1 1l4 4-4 4"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div
                        class="mx-auto mt-1 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32">
                        <div
                            class="max-w-3xl flex-none sm:max-w-5xl bg rounded-l-2xl bg-gradient-to-tr from-blue-400 to-gray-500 rounded-xl lg:max-w-none">
                            <img src="{{ asset('image/bg-barangay.jpg') }}" alt="App screenshot" width="2432"
                                height="1442"
                                class="w-[76rem] rounded-xl opacity-50  bg-white/5 shadow-2xl ring-1 ring-white/10">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Logo cloud -->

        </main>


    </div>

</body>

</html>
