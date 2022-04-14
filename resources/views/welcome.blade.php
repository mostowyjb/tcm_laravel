@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> <!--Replace with your tailwind.css once created-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">
<div class="text-center pt-16 md:pt-32">
    <h1 class="font-bold break-normal text-3xl md:text-5xl">Bienvenue sur TCM</h1>
</div>

<!--image-->
<div class="container w-full max-w-6xl mx-auto bg-white bg-cover mt-8 rounded" style="background-image:url('{{ secure_asset('img/test.jpg') }}'); height: 75vh;"></div>

<!--Container-->
<div class="container max-w-5xl mx-auto -mt-32">

    <div class="mx-0 sm:mx-6">

        <div class="bg-white w-full p-8 md:p-24 text-xl md:text-2xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">
            Vous êtes joueur ou juste curieux? <br/><br/>
            Le tennis club de Montigny en Gohelle vous ouvre ses portes pour vous faire partager la vie divertissante du club à travers la joie et la bonne humeur de ses licenciés. Vous serez informé des infos du club, des journées spéciales, des résultats des interclubs et des tournois, ect...
            <br/><br/>
            Bonne visite 
        </div>

    </div>


</div>




<div class="bg-gray-200">

    <div class="container w-full max-w-6xl mx-auto px-2 py-8">
        <div class="flex flex-wrap -mx-2">
            <div class="w-full md:w-1/3 px-2 pb-12">
                <div class="h-full bg-white rounded overflow-hidden shadow-md hover:shadow-lg relative smooth">
                    <a href="#" class="no-underline hover:no-underline">
                        <img src="https://source.unsplash.com/_AjqGGafofE/400x200" class="h-48 w-full rounded-t shadow-lg">
                        <div class="p-6 h-auto md:h-48">
                            <p class="text-gray-600 text-xs md:text-sm">GETTING STARTED</p>
                            <div class="font-bold text-xl text-gray-900">Lorem ipsum dolor sit amet.</div>
                            <p class="text-gray-800 font-serif text-base mb-5">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                            </p>
                        </div>
                        <div class="flex items-center justify-between inset-x-0 bottom-0 p-6">
                            <img class="w-8 h-8 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
                            <p class="text-gray-600 text-xs md:text-sm">2 MIN READ</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-2 pb-12">
                <div class="h-full bg-white rounded overflow-hidden shadow-md hover:shadow-lg relative smooth">
                    <a href="#" class="no-underline hover:no-underline">
                        <img src="https://source.unsplash.com/_AjqGGafofE/400x200" class="h-48 w-full rounded-t shadow">
                        <div class="p-6 h-auto md:h-48">
                            <p class="text-gray-600 text-xs md:text-sm">UNDERWATER</p>
                            <div class="font-bold text-xl text-gray-900">Biolumini algae diatomeae ecology.</div>
                            <p class="text-gray-800 font-serif text-base mb-5">
                                Lorem ipsum dolor sit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                            </p>
                        </div>
                        <div class="flex items-center justify-between inset-x-0 bottom-0 p-6">
                            <img class="w-8 h-8 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
                            <p class="text-gray-600 text-xs md:text-sm">4 MIN READ</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-2 pb-12">
                <div class="h-full bg-white rounded overflow-hidden shadow-md hover:shadow-lg relative smooth">
                    <a href="#" class="no-underline hover:no-underline">
                        <img src="https://source.unsplash.com/DEa8_vxKlEo/400x200" class="h-48 w-full rounded-t shadow">
                        <div class="p-6 h-auto md:h-48">
                            <p class="text-gray-600 text-xs md:text-sm">FOREST</p>
                            <div class="font-bold text-xl text-gray-900">What is life but a teardrop in the eye of infinity?</div>
                            <p class="text-gray-800 font-serif text-base mb-5">
                                Mollis pretium integer eros et dui orci, lectus nec elit sagittis neque. Dignissim ac nullam semper aliquet volutpat, ut scelerisque.
                            </p>
                        </div>
                        <div class="flex items-center justify-between inset-x-0 bottom-0 p-6">
                            <img class="w-8 h-8 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
                            <p class="text-gray-600 text-xs md:text-sm">7 MIN READ</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
