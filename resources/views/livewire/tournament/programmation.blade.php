<div>
  <div class="bg-gray-800 pt-3">
    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
        <h1 class="font-bold pl-2">Programmation</h1>
    </div>
  </div>
  <div class="container w-full max-w-6xl mx-auto py-8 ">
    <date-carousel useFrenchCalendar (on-week-change)="onDayChange($event)" (on-day-pick)="onDayPick($event)"></date-carousel>
  </div>
  <div class="container w-full max-w-6xl mx-auto px-2 py-8 " wire:model="matches">
    @if(!empty($this->matches))
      @foreach($this->matches as $key=>$matchs)
        <div class="text-center">
            <h3 class="font-bold break-normal mb-5">{{date_format(new \DateTime($key), 'H : i')}}</h3>
        </div>
        <div class="flex flex-wrap -mx-2"> 
          @foreach($matchs as $match)
            <div class="w-full md:w-1/3 pb-12 px-2">
              <div class="h-full bg-white rounded overflow-hidden shadow-md hover:shadow-lg relative smooth">
                <a  class="no-underline hover:no-underline"  x-data="{}" x-on:click="window.livewire.emitTo('tournament.program-modal','show', {{$match->id}})" >
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
    <div class="text-center">
      <h1 class="font-bold break-normal mb-5">Pas de match programmés</h1>
    </div>
    @endif

  </div>
  <livewire:tournament.program-modal>
</div>
<script type="text/javascript">
function openModal(modalId) {
    modal = document.getElementById(modalId)
    modal.classList.remove('hidden')
}

function closeModal() {
    modal = document.getElementById('modal')
    modal.classList.add('hidden')
}
</script>
@push('scripts')
  <script>
    function change(date){
      @this.set('f_dateProg', date);
      @this.change();
    }
  </script>
@endpush