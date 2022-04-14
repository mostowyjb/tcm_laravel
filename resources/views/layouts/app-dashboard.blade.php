<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ asset('img/tcm-logo.png') }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <title>Dashboard TCM</title>
        <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        @livewireStyles()
        @stack('styles')

    </head>

    <body class="bg-gray-800 font-sans leading-normal tracking-normal">
        @include('partials.navbar')  
        <main>
        <div class="flex flex-col md:flex-row">
            <nav aria-label="alternative nav">
                <div class="bg-gray-800 shadow-xl h-20 fixed bottom-0 md:relative z-10 w-full md:w-48 content-center">

                    <div class="md:w-48 md:fixed md:left-0 content-center md:content-start text-left justify-between">
                        <ul class="list-reset flex flex-row md:flex-col pt-3 md:py-3 px-1 md:px-2 text-center md:text-left">
                            <li class="mr-3 flex-1">
                                <a href="{{ route('match') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-[#FBE302] {{ Request::is('dashboard/match') ? 'text-[#FBE302] border-[#FBE302] ' : '' }}">
                                    <i class="fas fa-baseball-ball pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Match</span>
                                </a>
                            </li>
                            <li class="mr-3 flex-1">
                                <a href="{{ route('programmation') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-[#FBE302] {{ Request::is('dashboard/programmation') ? 'text-[#FBE302] border-[#FBE302] ' : '' }}">
                                    <i class="fas fa-calendar pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Programmation</span>
                                </a>
                            </li>
                            <li class="mr-3 flex-1">
                                <a href="{{ route('player') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-[#FBE302] {{ Request::is('dashboard/player') ? 'border-b-2 border-[#FBE302] text-[#FBE302]' : '' }}">
                                    <i class="fas fa-users pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Joueurs</span>
                                </a>
                            </li>
                            <li class="mr-3 flex-1">
                                <a href="#" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                                    <i class="fas fa-newspaper pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Articles</span>
                                </a>
                            </li>
                            <li class="mr-3 flex-1">
                                <a href="{{ route('visist') }}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500  {{ Request::is('dashboard/stats') ? 'border-b-2 border-red-500 text-red-500' : '' }}">
                                    <i class="fas fa-chart-bar pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Statistiques</span>
                                </a>
                            </li>
                        </ul>
                    </div>


                </div>
            </nav>
            <section class="container shadow-lg mx-auto">
                <div id="main" class="main-content bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
                    @yield('content')
                </div>
            </section>
        </main>


        @livewireScripts()

        <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
        @include('partials.scripts')
        @stack('scripts')
    </body>
</html>
