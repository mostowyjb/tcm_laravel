@extends('layouts.app-dashboard')
@section('content')
<div class="bg-gray-800 pt-3">
    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
        <h1 class="font-bold pl-2">Joueurs</h1>
    </div>
</div>

<div class="flex flex-wrap">
  
    <!-- FORMULAIRE AJOUR JOUERU -->
    <div class="w-full p-6">
        <div class="">
            <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md mx-auto">
                <form  method="post" action="{{ route('player.addPlayer') }}">
                    @csrf
                  <div class="grid grid-cols-2 gap-4">
                    <div class="form-group mb-6">
                      <input type="text" class="form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="lastname" name="lastname"
                        aria-describedby="emailHelp123" placeholder="Nom">
                    </div>
                    <div class="form-group mb-6">
                      <input type="text" class="form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="firstname" name="firstname"
                        aria-describedby="emailHelp124" placeholder="Prénom">
                    </div>
                  </div>
                  <div class="form-group mb-6">
                    <input type="text" class="form-control block
                      w-full
                      px-3
                      py-1.5
                      text-base
                      font-normal
                      text-gray-700
                      bg-white bg-clip-padding
                      border border-solid border-gray-300
                      rounded
                      transition
                      ease-in-out
                      m-0
                      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="club" name="club"
                      placeholder="Tennis Club">
                  </div>
                  <div class="form-group mb-6">
                    <input type="text" class="form-control block
                      w-full
                      px-3
                      py-1.5
                      text-base
                      font-normal
                      text-gray-700
                      bg-white bg-clip-padding
                      border border-solid border-gray-300
                      rounded
                      transition
                      ease-in-out
                      m-0
                      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  id="classement" name="classement"
                      placeholder="Classement">
                  </div>
                  <button type="submit" class="
                    w-full
                    px-6
                    py-2.5
                    bg-blue-600
                    text-white
                    font-medium
                    text-xs
                    leading-tight
                    uppercase
                    rounded
                    shadow-md
                    hover:bg-blue-700 hover:shadow-lg
                    focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                    active:bg-blue-800 active:shadow-lg
                    transition
                    duration-150
                    ease-in-out">Créer</button>
                </form>
              </div>
        </div>
        <!--/Graph Card-->
    </div>

    <!-- TABLEAU DES JOUERUS -->
    <div class="w-full">
      <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
          <div class="overflow-hidden">
            <table class="min-w-full">
              <thead class="bg-white border-b">
                <tr>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left font-bold">
                    Prénom
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left font-bold">
                    Nom
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left font-bold">
                    Club
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left font-bold">
                    Classement
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left font-bold">
                    Edit
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($players as $player)
                  <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$player->firstname}}</td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      {{$player->lastname}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      {{$player->club}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      {{$player->classement}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      <a href="{{ route('player.deletePlayer', $player->id)}}" class="py-2 px-2 font-medium text-red-600 border border-red-600 rounded hover:bg-red-600 hover:text-white transition duration-300"><i class="fas fa-trash-alt"></i></a>
                      <a href="{{ route('player.deletePlayer', $player->id)}}" class="py-2 px-2 font-medium text-emerald-400 border border-emerald-400 rounded hover:bg-emerald-400 hover:text-white transition duration-300"><i class="fas fa-pen"></i></a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
