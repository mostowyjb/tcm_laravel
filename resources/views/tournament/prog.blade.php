@extends('layouts.app')

@section('content')

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

<div class="text-center pt-16 md:pt-32">
    <h1 class="font-bold break-normal text-3xl md:text-5xl mb-5">Programmation du jour</h1>
</div>
<div class="bg-gray-200">
    <div class="container w-full max-w-6xl mx-auto px-2 py-8 ">
      @foreach($matches as $key=>$matchs)
        <div class="text-center">
            <h3 class="font-bold break-normal mb-5">{{date_format(new \DateTime($key), 'H : i')}}</h3>
        </div>
        <div class="flex flex-wrap -mx-2 "> 
          @foreach($matchs as $match)
            <div class="w-full md:w-1/3 pb-12">
              <div class="h-full bg-white rounded overflow-hidden shadow-md hover:shadow-lg relative smooth">
                <a href="#" class="no-underline hover:no-underline">
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
                            <img class="w-6 sm:w-10 mr-2 self-center" alt="away-logo" src="{{ secure_asset('img/tcm-logo.png') }}">
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
                            @else
                            <i class="fas fa-trophy text-white"></i>
                            @endif
                          </div>
                        </div>
                      
                        <div class="flex px-2 py-2 items-center">
                          <div class="w-7/12 flex">
                            <img class="w-6 sm:w-10 mr-2 self-center" alt="home-logo" src="{{ secure_asset('img/tcm-logo.png') }}">
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

      <div class="text-center">
          <button class="bg-marine hover:bg-marine text-white font-bold py-2 px-4 rounded-full">
              Voir en détails
          </button>
      </div>

    </div>


</div>
@endsection
