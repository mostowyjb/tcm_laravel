<div class="w-full text-gray-700 bg-white pt-2 md:pt-1 pb-1 px-1 mt-0  w-full z-20 ">
    <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8 max-w-6xl px-4 mb-5 flex space-x-7 flex justify-between">
        <div class="flex flex-row items-center justify-between ">
            <a href="#" class="text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline flex items-center">
                <img width=50 height=50 src="{{ secure_asset('img/tcm-logo.png') }}">
                <span class="font-semibold text-gray-500">TC Montigny-en-Gohelle</span>
            </a>
            <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div>
            <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-row pb-4 md:pb-0 w-full justify-between md:flex md:flex-row">
                <div class= " flex-col flex-row justify-self-end md:flex-row md:flex md:flex-row pb-4 md:pb-0 ">
                    <a href="/" class=" py-2 px-2 text-marine font-semibold {{ Request::is('/') ? ' border-b-4 border-marine ' : '' }}">Accueil</a>
                    <a href="{{ route('tournoi') }}" class="py-2 px-2 text-marine font-semibold hover:text-marine transition duration-300 {{ Request::is('tournoi') ? 'border-b-4 border-marine ' : '' }}">Info Tournoi</a>
                    <a href="" class="py-2 px-2 text-marine font-semibold hover:text-marine transition duration-300">Contacter-nous</a>
                </div> 
            </nav>
        </div>
        <div> 
            <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-row pb-4 md:pb-0 w-full justify-between md:flex md:flex-row">
                @guest
                    <!-- Secondary Navbar items -->
                    <div class="px-4 py-2 md:flex items-center space-x-3  md:justify-between md:flex-row ">
                        <a href="{{ route('login') }}" class="py-2 px-2 font-medium text-marine bg-transparent border border-marine rounded hover:bg-marine hover:text-white transition duration-300">Espace Licencié</a>
                    </div>
                @endguest
                @auth
                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="flex flex-row items-center w-full  py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                            <span class="pr-2"><i class="em em-robot_face"></i></span> Bonjour, {{auth()->user()->name}} 
                            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                            <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                                <a href="{{ route('dashboard') }}" class="p-2 hover:bg-gray-200 text-marine text-sm no-underline hover:no-underline block"><i class="fas fa-columns"></i> Dashboard</a>
                                <a href="{{ route('dashboard') }}" class="p-2 hover:bg-gray-200 text-marine text-sm no-underline hover:no-underline block"><i class="fa fa-user fa-fw"></i> Profile</a>
                                <div class="border border-gray-200"></div>
                                <a href="{{ route('signout') }}" class="p-2 hover:bg-gray-200 text-marine text-sm no-underline hover:no-underline block"><i class="fas fa-sign-out-alt fa-fw"></i> Déconnexion</a>
                            </div>
                        </div>
                    </div>
                @endauth    
            </nav>
        </div>
    </div>
</div>
