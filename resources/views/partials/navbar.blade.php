<nav class="bg-white shadow-lg" aria-label="menu nav" class="bg-gray-800 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">
    <div class="max-w-6xl mx-auto px-4 mb-5">
        <div class="flex justify-between">
            <div class="flex space-x-7">
                <div>
                    <!-- Website Logo -->
                    <a href="#" class="flex items-center py-4 px-2">
                        <img width=50 height=50 src="{{ asset('img/tcm-logo.png') }}">
                        <span class="font-semibold text-gray-500 text-lg">Tennis Club Montigny-en-Gohelle</span>
                    </a>
                </div>
                <!-- Primary Navbar items -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="/" class="py-4 px-2 text-marine font-semibold {{ Request::is('/') ? ' border-b-4 border-marine ' : '' }}">Accueil</a>
                    <a href="{{ route('tournoi') }}" class="py-4 px-2 text-marine font-semibold hover:text-marine transition duration-300 {{ Request::is('tournoi') ? 'border-b-4 border-marine ' : '' }}">Info Tournoi</a>
                    <a href="" class="py-4 px-2 text-marine font-semibold hover:text-marine transition duration-300">Contacter-nous</a>
                </div>
            </div>
            

            @guest
                <!-- Secondary Navbar items -->
                <div class="hidden md:flex items-center space-x-3 ">
                    <a href="{{ route('login') }}" class="py-2 px-2 font-medium text-marine bg-transparent border border-marine rounded hover:bg-marine hover:text-white transition duration-300">Espace Licencié</a>
                </div>
            @endguest

            @auth
           
            <div class="hidden md:flex items-center space-x-3 ">
                <div class="relative inline-block">
                    <button onclick="toggleDD('myDropdown')" class="drop-button text-marine py-2 px-2"> <span class="pr-2"><i class="em em-robot_face"></i></span> Bonjour, {{auth()->user()->name}} <svg class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg></button>
                    <div id="myDropdown" class="dropdownlist absolute bg-white  text-marine right-0 mt-3 p-3 overflow-auto z-30 invisible">
                        <a href="{{ route('dashboard') }}" class="p-2 hover:bg-gray-200 text-marine text-sm no-underline hover:no-underline block"><i class="fas fa-columns"></i> Dashboard</a>
                        <a href="{{ route('dashboard') }}" class="p-2 hover:bg-gray-200 text-marine text-sm no-underline hover:no-underline block"><i class="fa fa-user fa-fw"></i> Profile</a>
                        <div class="border border-gray-200"></div>
                        <a href="{{ route('signout') }}" class="p-2 hover:bg-gray-200 text-marine text-sm no-underline hover:no-underline block"><i class="fas fa-sign-out-alt fa-fw"></i> Déconnexion</a>
                    </div>
                </div>
                <a href="{{ route('signout') }}"  class="py-2 px-2 font-medium text-marine bg-transparent border border-marine rounded hover:bg-marine hover:text-white transition duration-300">Déconnexion</a>
            </div>
            @endauth
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
            </div>
        </div>
    </div>
</nav>
<script>
    /*Toggle dropdown list*/
    function toggleDD(myDropMenu) {
        document.getElementById(myDropMenu).classList.toggle("invisible");
    }
    /*Filter dropdown options*/
    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
            var dropdowns = document.getElementsByClassName("dropdownlist");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (!openDropdown.classList.contains('invisible')) {
                    openDropdown.classList.add('invisible');
                }
            }
        }
    }
</script>
