@extends('layouts.app')
@section('content')
<div class="max-w-4xl flex items-center h-auto mt-4 flex-wrap mx-auto my-32 lg:my-0 md:pt-32 mb-10">

    <!--Main Col-->
    <div id="profile" class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">


        <div class="p-4 md:p-12 text-center lg:text-left">
            <!-- Image for mobile view-->
            <div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" style="background-image: url('https://img3.localgymsandfitness.com/444/732/1426208234447321.jpg')"></div>

            <h1 class="text-3xl font-bold pt-8 lg:pt-0">🚨TOURNOI OPEN 2022</h1>
            <div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-green-500 opacity-25"></div>
            <p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start"><i class="fa-regular fa-calendar h-4 fill-current text-marine pr-4"></i> Du 15 Avril au 7 Mai</p>
            <p class="pt-2 text-gray-600 text-xs lg:text-sm flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current text-marine pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm7.75-8a8.01 8.01 0 0 0 0-4h-3.82a28.81 28.81 0 0 1 0 4h3.82zm-.82 2h-3.22a14.44 14.44 0 0 1-.95 3.51A8.03 8.03 0 0 0 16.93 14zm-8.85-2h3.84a24.61 24.61 0 0 0 0-4H8.08a24.61 24.61 0 0 0 0 4zm.25 2c.41 2.4 1.13 4 1.67 4s1.26-1.6 1.67-4H8.33zm-6.08-2h3.82a28.81 28.81 0 0 1 0-4H2.25a8.01 8.01 0 0 0 0 4zm.82 2a8.03 8.03 0 0 0 4.17 3.51c-.42-.96-.74-2.16-.95-3.51H3.07zm13.86-8a8.03 8.03 0 0 0-4.17-3.51c.42.96.74 2.16.95 3.51h3.22zm-8.6 0h3.34c-.41-2.4-1.13-4-1.67-4S8.74 3.6 8.33 6zM3.07 6h3.22c.2-1.35.53-2.55.95-3.51A8.03 8.03 0 0 0 3.07 6z"></path>
                </svg> Rue Emile Zola, 62640 Montigny-en-Gohelle</p>
            <p class="pt-8 text-sm">Après des éditions 2020 et 2021 annulées, nous avons le plaisir de vous annoncer que notre tournoi open aura lieu cette année ! 🎉🍻
                Du 15 Avril au 7 Mai ! 📅
                Clôture des insciptions sans préavis, vous serez informé en temps et en heure 😉
                Et comme chaque année, des soirées à thème tous les vendredis soirs !!! 🥳
                On vous attend nombreux, on vous garanti une convivialité au top, comme à notre habitude 😜
                Le TCMeg ! 🎾</p>

            <div class="pt-12 pb-8">
                <a href="/tournoi/prog?d={{date('Y-m-d')}}" class="bg-marine hover:bg-marine text-white font-bold py-2 px-4 rounded-full">
                    Voir la programmation
                </a>
            </div>



            <!-- Use https://simpleicons.org/ to find the svg for your preferred product -->

        </div>

    </div>

    <!--Img Col-->
    <div class="w-full lg:w-2/5">
        <!-- Big profile image for side bar (desktop) -->
        <img src="{{ asset('img/affiche_tcm.jpg') }}" width="636" height="954" class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">
        <!-- Image from: http://unsplash.com/photos/MP0IUfwrn0A -->

    </div>


  
</div>
<style>
    

  .transition{
      transition: all .2s ease-out;
  }

  .h-60{
    height: 16rem;
  }

  .w-128{
    width: 50rem;
  }


</style>
<div class="text-center pt-16 md:pt-32 mb-10">
    <h1 class="font-bold break-normal text-3xl md:text-5xl ">En ce moment </h1>
</div>

  @if(!empty($matchesNow))
  <div class="grid overflow-hidden grid-cols-2 gap-2 pt-16 mx-auto">
    @if(isset($matchesNow[0]))
      <div class="box row-span-2">
        <div class="flex justify-center items-center ">
            <div class="p-1 w-full md:w-1/2">
                <div class="bg-white rounded-lg shadow-lg">
                  <img src="{{ asset('img/terrain.jpg') }}" alt="" class="rounded-t-lg">
                  <div class="p-6 flex-1">
                        <div class="mx-auto my-2 max-w-md rounded overflow-hidden shadow-md text-xs">
  
                            <div class="flex bg-gray-200 px-2 py-2">
                              <div class="w-7/12 text-gray-700 text-left text-red-700">{{date_format(new \DateTime($matchesNow[0]->date_match), 'H : i')}} - {{$matchesNow[0]->category}}</div>
                              <div class="w-5/12 flex justify-end items-center">
                                <p class="w-8 px-2 text-center">1</p>
                                <p class="w-8 px-2 text-center">2</p>
                                <p class="w-8 px-2 text-center">3</p>
                                <i class=" fas fa-trophy"></i>
                              </div>
                            </div>
                          
                            <div class="flex px-2 py-2 items-center">
                              <div class="w-7/12 flex">
                                <img class="w-6 sm:w-10 mr-2 self-center" alt="away-logo" src="{{ asset('img/tcm-logo.png') }}">
                                <div class="flex flex-col">
                                  <?php 
                                    $pm = App\Models\PlayerMatch::where('id_matches',$matchesNow[0]->id)->get();
                                    $p1 = $pm->first();
                                    $id = $p1->id_player1;
                                    $player1=App\Models\Player::find($id);
                                    if(!is_null($p1->id_player1bis))
                                    {
                                      $id1bis = $p1->id_player1bis;
                                      $player1bis=App\Models\Player::find($id1bis);
                                    }
                                  ?>
                                <p class="text-sm font-bold">
                                  {{$player1->lastname}} {{$player1->firstname}}
                                  @if(isset( $player1bis))
                                  {{$player1bis->lastname}} {{$player1bis->firstname}}
                                  @endif                                    
                                </p>
                                @if(!isset( $player1bis))
                                  <p class="hidden sm:block text-gray-600">{{$player1->club}}</p>
                                @endif
                                </div>
                              </div>
                              <div class="w-5/12 flex justify-end items-center">
                                <p class="w-8 px-2 text-center">{{$matchesNow[0]->set1_a}}</p>
                                <p class="w-8 px-2 text-center">{{$matchesNow[0]->set2_a}}</p>
                                <p class="w-8 px-2 text-center">{{$matchesNow[0]->set3_a}}</p>
                                @if($player1->id === $matchesNow[0]->winner)
                                <i class="fas fa-trophy text-[#E2D91B]"></i>
                                @elseif($player1->id === $matchesNow[0]->abandon)
                                  <p >Ab.</p>
                                @else
                                <i class="fas fa-trophy text-white"></i>
                                @endif
                              </div>
                            </div>
                            <div class="flex px-2 py-2 items-center">
                              <div class="w-7/12 flex">
                                <img class="w-6 sm:w-10 mr-2 self-center" alt="home-logo" src="{{ asset('img/tcm-logo.png') }}">
                                <div class="flex flex-col">
                                  <?php 
                                  $p2 = $pm->first();
                                  $id2 = $p2->id_player2;
                                  $player2=App\Models\Player::find($id2);
                                  if(!is_null($p2->id_player2bis))
                                  {
                                    $id2bis = $p2->id_player2bis;
                                    $player2bis=App\Models\Player::find($id2bis);
                                  }
                                ?>
                                <p class="text-sm font-bold">{{$player2->lastname}} {{$player2->firstname}} 
                                  @if(isset( $player2bis))
                                     {{$player2bis->lastname}} {{$player2bis->firstname}}
                                  @endif
                                </p>
                                @if(!isset( $player2bis))
                                  <p class="hidden sm:block text-gray-600">{{$player2->club}}</p>
                                @endif
                                </div>
                              </div>
                              <div class="w-5/12 flex justify-end items-center">
                                <p class="w-8 px-1 text-center">{{$matchesNow[0]->set1_b}}</p>
                                <p class="w-8 px-1 text-center">{{$matchesNow[0]->set2_b}}</p>
                                <p class="w-8 px-1 text-center">{{$matchesNow[0]->set3_b}}</p>
                                @if($player2->id === $matchesNow[0]->winner)
                                <i class="fas fa-trophy text-[#E2D91B]"></i>
                                @elseif($player2->id === $matchesNow[0]->abandon)
                                <p >Ab.</p>
                                @else
                                <i class="fas fa-trophy text-white"></i>
                                @endif
                              </div>
                            </div>
                          
                        </div>
                    </div>              
                </div>
              </div>

        </div>
      </div>
    @endif
    @if(isset($matchesNow[1]))
      <div class="box col-start-2 col-span-2">
          <div class="flex justify-center items-center  bg-blue-lightest">
              <div id="app" class="bg-white w-128 h-60 rounded shadow-md flex card text-grey-darkest">
                  <img class="w-1/2 h-full rounded-l-sm" src="{{ asset('img/terrain.jpg') }}" alt="Room Image">
                  <div class="w-full flex flex-col">
                      <div class="p-4 pb-0 flex-1">
                          <div class="flex items-center justify-between">
                          </div>
                          <div class="mx-auto my-2 max-w-md rounded overflow-hidden shadow-md text-xs">
    
                              <div class="flex bg-gray-200 px-2 py-2">
                                <div class="w-7/12 text-gray-700 text-left text-red-700">{{date_format(new \DateTime($matchesNow[1]->date_match), 'H : i')}} - {{$matchesNow[1]->category}}</div>
                                <div class="w-5/12 flex justify-end items-center">
                                  <p class="w-8 px-2 text-center">1</p>
                                  <p class="w-8 px-2 text-center">2</p>
                                  <p class="w-8 px-2 text-center">3</p>
                                  <i class=" fas fa-trophy"></i>
                                </div>
                              </div>
                            
                              <div class="flex px-2 py-2 items-center">
                                <div class="w-7/12 flex">
                                  <img class="w-6 sm:w-10 mr-2 self-center" alt="away-logo" src="{{ asset('img/tcm-logo.png') }}">
                                  <div class="flex flex-col">
                                    <?php 
                                      $pm = App\Models\PlayerMatch::where('id_matches',$matchesNow[1]->id)->get();
                                      $p1 = $pm->first();
                                      $id = $p1->id_player1;
                                      $player1=App\Models\Player::find($id);
                                      if(!is_null($p1->id_player1bis))
                                      {
                                        $id1bis = $p1->id_player1bis;
                                        $player1bis=App\Models\Player::find($id1bis);
                                      }
                                    ?>
                                  <p class="text-sm font-bold">
                                    {{$player1->lastname}} {{$player1->firstname}}
                                    @if(isset( $player1bis))
                                    {{$player1bis->lastname}} {{$player1bis->firstname}}
                                    @endif                                    
                                  </p>
                                  @if(!isset( $player1bis))
                                    <p class="hidden sm:block text-gray-600">{{$player1->club}}</p>
                                  @endif
                                  </div>
                                </div>
                                <div class="w-5/12 flex justify-end items-center">
                                  <p class="w-8 px-2 text-center">{{$matchesNow[1]->set1_a}}</p>
                                  <p class="w-8 px-2 text-center">{{$matchesNow[1]->set2_a}}</p>
                                  <p class="w-8 px-2 text-center">{{$matchesNow[1]->set3_a}}</p>
                                  @if($player1->id === $matchesNow[1]->winner)
                                  <i class="fas fa-trophy text-[#E2D91B]"></i>
                                  @elseif($player1->id === $matchesNow[1]->abandon)
                                    <p >Ab.</p>
                                  @else
                                  <i class="fas fa-trophy text-white"></i>
                                  @endif
                                </div>
                              </div>
                            
                              <div class="flex px-2 py-2 items-center">
                                <div class="w-7/12 flex">
                                  <img class="w-6 sm:w-10 mr-2 self-center" alt="home-logo" src="{{ asset('img/tcm-logo.png') }}">
                                  <div class="flex flex-col">
                                    <?php 
                                    $p2 = $pm->first();
                                    $id2 = $p2->id_player2;
                                    $player2=App\Models\Player::find($id2);
                                    if(!is_null($p2->id_player2bis))
                                    {
                                      $id2bis = $p2->id_player2bis;
                                      $player2bis=App\Models\Player::find($id2bis);
                                    }
                                  ?>
                                  <p class="text-sm font-bold">{{$player2->lastname}} {{$player2->firstname}} 
                                    @if(isset( $player2bis))
                                       {{$player2bis->lastname}} {{$player2bis->firstname}}
                                    @endif
                                  </p>
                                  @if(!isset( $player2bis))
                                    <p class="hidden sm:block text-gray-600">{{$player2->club}}</p>
                                  @endif
                                  </div>
                                </div>
                                <div class="w-5/12 flex justify-end items-center">
                                  <p class="w-8 px-1 text-center">{{$matchesNow[1]->set1_b}}</p>
                                  <p class="w-8 px-1 text-center">{{$matchesNow[1]->set2_b}}</p>
                                  <p class="w-8 px-1 text-center">{{$matchesNow[1]->set3_b}}</p>
                                  @if($player2->id === $matchesNow[1]->winner)
                                  <i class="fas fa-trophy text-[#E2D91B]"></i>
                                  @elseif($player2->id === $matchesNow[1]->abandon)
                                  <p >Ab.</p>
                                  @else
                                  <i class="fas fa-trophy text-white"></i>
                                  @endif
                                </div>
                              </div>
                            
                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </div>
    @endif
    @if(isset($matchesNow[2]))
      <div class="box col-start-2 col-span-2">
          <div class="flex justify-center items-center  bg-blue-lightest">
              <div id="app" class="bg-white w-128 h-60 rounded shadow-md flex card text-grey-darkest">
                  <img class="w-1/2 h-full rounded-l-sm" src="{{ asset('img/terrain.jpg') }}" alt="Room Image">
                  <div class="w-full flex flex-col">
                      <div class="p-4 pb-0 flex-1">
                          <div class="flex items-center justify-between">
                          </div>
                          <div class="mx-auto my-2 max-w-md rounded overflow-hidden shadow-md text-xs">
    
                              <div class="flex bg-gray-200 px-2 py-2">
                                <div class="w-7/12 text-gray-700 text-left text-red-700">{{date_format(new \DateTime($matchesNow[2]->date_match), 'H : i')}} - {{$matchesNow[2]->category}}</div>
                                <div class="w-5/12 flex justify-end items-center">
                                  <p class="w-8 px-2 text-center">1</p>
                                  <p class="w-8 px-2 text-center">2</p>
                                  <p class="w-8 px-2 text-center">3</p>
                                  <i class=" fas fa-trophy"></i>
                                </div>
                              </div>
                            
                              <div class="flex px-2 py-2 items-center">
                                <div class="w-7/12 flex">
                                  <img class="w-6 sm:w-10 mr-2 self-center" alt="away-logo" src="{{ asset('img/tcm-logo.png') }}">
                                  <div class="flex flex-col">
                                    <?php 
                                      $pm = App\Models\PlayerMatch::where('id_matches',$matchesNow[2]->id)->get();
                                      $p1 = $pm->first();
                                      $id = $p1->id_player1;
                                      $player1=App\Models\Player::find($id);
                                      if(!is_null($p1->id_player1bis))
                                      {
                                        $id1bis = $p1->id_player1bis;
                                        $player1bis=App\Models\Player::find($id1bis);
                                      }
                                    ?>
                                  <p class="text-sm font-bold">
                                    {{$player1->lastname}} {{$player1->firstname}}
                                    @if(isset( $player1bis))
                                    {{$player1bis->lastname}} {{$player1bis->firstname}}
                                    @endif                                    
                                  </p>
                                  @if(!isset( $player1bis))
                                    <p class="hidden sm:block text-gray-600">{{$player1->club}}</p>
                                  @endif
                                  </div>
                                </div>
                                <div class="w-5/12 flex justify-end items-center">
                                  <p class="w-8 px-2 text-center">{{$matchesNow[2]->set1_a}}</p>
                                  <p class="w-8 px-2 text-center">{{$matchesNow[2]->set2_a}}</p>
                                  <p class="w-8 px-2 text-center">{{$matchesNow[2]->set3_a}}</p>
                                  @if($player1->id === $matchesNow[2]->winner)
                                  <i class="fas fa-trophy text-[#E2D91B]"></i>
                                  @elseif($player1->id === $matchesNow[2]->abandon)
                                    <p >Ab.</p>
                                  @else
                                  <i class="fas fa-trophy text-white"></i>
                                  @endif
                                </div>
                              </div>
                            
                              <div class="flex px-2 py-2 items-center">
                                <div class="w-7/12 flex">
                                  <img class="w-6 sm:w-10 mr-2 self-center" alt="home-logo" src="{{ asset('img/tcm-logo.png') }}">
                                  <div class="flex flex-col">
                                    <?php 
                                    $p2 = $pm->first();
                                    $id2 = $p2->id_player2;
                                    $player2=App\Models\Player::find($id2);
                                    if(!is_null($p2->id_player2bis))
                                    {
                                      $id2bis = $p2->id_player2bis;
                                      $player2bis=App\Models\Player::find($id2bis);
                                    }
                                  ?>
                                  <p class="text-sm font-bold">{{$player2->lastname}} {{$player2->firstname}} 
                                    @if(isset( $player2bis))
                                       {{$player2bis->lastname}} {{$player2bis->firstname}}
                                    @endif
                                  </p>
                                  @if(!isset( $player2bis))
                                    <p class="hidden sm:block text-gray-600">{{$player2->club}}</p>
                                  @endif
                                  </div>
                                </div>
                                <div class="w-5/12 flex justify-end items-center">
                                  <p class="w-8 px-1 text-center">{{$matchesNow[2]->set1_b}}</p>
                                  <p class="w-8 px-1 text-center">{{$matchesNow[2]->set2_b}}</p>
                                  <p class="w-8 px-1 text-center">{{$matchesNow[2]->set3_b}}</p>
                                  @if($player2->id === $matchesNow[2]->winner)
                                  <i class="fas fa-trophy text-[#E2D91B]"></i>
                                  @elseif($player2->id === $matchesNow[2]->abandon)
                                  <p >Ab.</p>
                                  @else
                                  <i class="fas fa-trophy text-white"></i>
                                  @endif
                                </div>
                              </div>
                            
                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </div>
    @endif
  </div>
  @else
  <div class="text-center px-2 py-8">
    <h3 class="font-bold break-normal mb-5">Pas de matchs en cours</h3>
    <h3 class="break-normal mb-5">Vous pouvez retrouver le reste de la programmation en cliquant sur le bouton "Voir en détail"</h3>
  </div>
  @endif


<div class="text-center pt-16 md:pt-32">
    <h1 class="font-bold break-normal text-3xl md:text-5xl mb-5">Programmation du jour</h1>
</div>
<div class="bg-gray-200">

  <div class="container w-full max-w-6xl mx-auto py-8 ">
    @if(!empty($matches))
      @foreach($matches as $key=>$matchs)
        <div class="text-center">
            <h3 class="font-bold break-normal mb-5">{{date_format(new \DateTime($key), 'H : i')}}</h3>
        </div>
        <div class="flex flex-wrap -mx-2 "> 
          @foreach($matchs as $match)
            <div class="w-full md:w-1/3 pb-12 px-2">
              <div class="h-full bg-white rounded overflow-hidden shadow-md hover:shadow-lg relative smooth">
                <a  class="no-underline hover:no-underline">
                  <div class="p-6">
                    <div class="mx-auto my-2 max-w-md rounded overflow-hidden shadow-md text-xs">

                        <div class="flex bg-gray-200 px-2 py-2">
                          <div class="w-7/12 text-gray-700 text-left text-red-700">{{date_format(new \DateTime($key), 'H : i')}} - {{$match->category}}</div>
                          <div class="w-5/12 flex justify-end items-center">
                            <p class="w-8 px-2 text-center">1</p>
                            <p class="w-8 px-2 text-center">2</p>
                            <p class="w-8 px-2 text-center">3</p>
                            <i class=" fas fa-trophy"></i>
                          </div>
                        </div>
                      
                        <div class="flex px-2 py-2 items-center">
                          <div class="w-7/12 flex">
                            <img class="w-6 sm:w-10 mr-2 self-center" alt="away-logo" src="{{ asset('img/tcm-logo.png') }}">
                            <div class="flex flex-col">
                              <?php 
                                $pm = App\Models\PlayerMatch::where('id_matches',$match->id)->get();
                                $p1 = $pm->first();
                                $id = $p1->id_player1;
                                $player1=App\Models\Player::find($id);
                                if(!is_null($p1->id_player1bis))
                                {
                                  $id1bis = $p1->id_player1bis;
                                  $player1bis=App\Models\Player::find($id1bis);
                                }
                              ?>
                              <p class="text-sm font-bold">
                                {{$player1->lastname}} {{$player1->firstname}}
                                @if(isset( $player1bis))
                                {{$player1bis->lastname}} {{$player1bis->firstname}}
                                @endif                                    
                              </p>
                              @if(!isset( $player1bis))
                                <p class="hidden sm:block text-gray-600">{{$player1->club}}</p>
                              @endif
                              
                            </div>
                          </div>
                          <div class="w-5/12 flex justify-end items-center">
                            <p class="w-8 px-2 text-center">{{$match->set1_a}}</p>
                            <p class="w-8 px-2 text-center">{{$match->set2_a}}</p>
                            <p class="w-8 px-2 text-center">{{$match->set3_a}}</p>
                            @if($player1->id === $match->winner)
                            <i class="fas fa-trophy text-[#E2D91B]"></i>
                            @elseif($player1->id === $match->abandon)
                            <p >Ab.</p>
                            @else
                            <i class="fas fa-trophy text-white"></i>
                            @endif
                          </div>
                        </div>
                      
                        <div class="flex px-2 py-2 items-center">
                          <div class="w-7/12 flex">
                            <img class="w-6 sm:w-10 mr-2 self-center" alt="home-logo" src="{{ asset('img/tcm-logo.png') }}">
                            <div class="flex flex-col">
                              <?php 
                                $p2 = $pm->first();
                                $id2 = $p2->id_player2;
                                $player2=App\Models\Player::find($id2);
                                if(!is_null($p2->id_player2bis))
                                {
                                  $id2bis = $p2->id_player2bis;
                                  $player2bis=App\Models\Player::find($id2bis);
                                }
                              ?>
                              <p class="text-sm font-bold">{{$player2->lastname}} {{$player2->firstname}} 
                                @if(isset( $player2bis))
                                  {{$player2bis->lastname}} {{$player2bis->firstname}}
                                @endif
                            </p>
                            @if(!isset( $player2bis))
                              <p class="hidden sm:block text-gray-600">{{$player2->club}}</p>
                            @endif
                            </div>
                          </div>
                          <div class="w-5/12 flex justify-end items-center">
                            <p class="w-8 px-1 text-center">{{$match->set1_b}}</p>
                            <p class="w-8 px-1 text-center">{{$match->set2_b}}</p>
                            <p class="w-8 px-1 text-center">{{$match->set3_b}}</p>
                            @if($player2->id === $match->winner)
                            <i class="fas fa-trophy text-[#E2D91B]"></i>
                            @elseif($player2->id === $match->abandon)
                            <p >Ab.</p>
                            @else
                            <i class="fas fa-trophy text-white"></i>
                            @endif
                          </div>
                        </div>
                      
                    </div>
                </div>
                </a>
              </div>
            </div>
          @endforeach

        </div>
      @endforeach
    @else
    <div class="text-center px-2 py-8">
      <h3 class="font-bold break-normal mb-5">Pas de matchs programmés aujourd'hui</h3>
      <h3 class="break-normal mb-5">Vous pouvez retrouver le reste de la programmation en cliquant sur le bouton "Voir en détail"</h3>
    </div>
    @endif
    <div class="text-center">
      <a href="/tournoi/prog?d={{date('Y-m-d')}}" class="bg-marine hover:bg-marine text-white font-bold py-2 px-4 rounded-full">
          Voir en détails
      </a>
  </div>

  </div>


</div>
@endsection
