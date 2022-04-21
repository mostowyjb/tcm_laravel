<footer class="border-t border-gray-200">
    <div class="bg-gray-100">
        <div class="max-w-screen-xl py-10 px-4 sm:px-6 text-gray-800 sm:flex justify-between mx-auto">
           <div class="p-5 sm:w-8/12">
             <h3 class="font-bold text-3xl text-marine mb-4">TC Montigny-en-Gohelle</h3>
             
             <div class="flex text-gray-500 uppercase text-sm">
               <a href="/" class="mr-2 hover:text-marine">Accueil</a>
               <a href="{{ route('tournoi') }}" class="mr-2 hover:text-marine">Info Tournoi</a>
               <a href="" class="mr-2 hover:text-marine">A propos</a>
             </div>
             
            </div>
          <div class="p-5 sm:w-4/12">
            <h3 class="font-medium text-lg text-marine mb-4">Contacter-nous</h3>
            <form class="mt-4">
                <a class="my-3 block">Rue Emile Zola, 62640 Montigny-en-Gohelle <span class="text-teal-600 text-xs p-1"></span></a>
                <a class="my-3 block">06 61 94 79 10<span class="text-teal-600 text-xs p-1"></span></a>
                <a class="my-3 block">tc-meg_62640@outlook.fr<span class="text-teal-600 text-xs p-1"></span></a> 
            </form>
          </div>
        </div>
        <div class="flex py-5 m-auto text-gray-800 text-sm flex-col items-center border-t max-w-screen-xl">
           <p>© Copyright {{date('Y')}}. All Rights Reserved.</p>
        </div>
        <!-- Credit: Componentity.com -->
        <a href="/" target="_blank" class="block">
          <img src="{{ secure_asset('img/tcm-logo.png') }}" class="w-48 mx-auto my-5">
        </a>
     </div>
     

</footer>