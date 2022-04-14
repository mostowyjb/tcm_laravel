<div>
    @if($show)
    <div  wire:init="update()" class="modal fixed  w-full h-full top-0 left-0 flex items-center justify-center" style="z-index:10" x-data="{
        show:{{$show}}
    }" x-show ="show"
    x-on:keydown.escape.window="show=false;   @this.set('show', false);">
        <div class="modal-overlay absolute w-full h-full  bg-gray-200 opacity-75"></div>
        
        <div class="modal-container bg-white w-11/12 md:max-w-[45rem] mx-auto rounded shadow-lg z-50 overflow-y-auto">

          <!-- Add margin if you want to see some of the overlay behind the modal-->
          <div class="modal-content py-4 text-left px-6"> 
            <form wire:submit.prevent="save">
              <div class="grid grid-cols-3 gap-4">
                <div class="relative">
                  <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <i class="fas fa-calendar w-5 h-5 text-gray-500 dark:text-gray-400"></i>
                  </div>
                  <input name="date" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model.defer="f_date">
                </div>
                <div class="relative">
                  <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <i class="fas fa-clock w-5 h-5 text-gray-500 dark:text-gray-400"></i>
                  </div>
                  <input name="time" type="time" value ="23/05/2022" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select Heure"  wire:model.defer="f_heure">
                </div>
                <div class="relative">
                  <select class="px-3
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
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="categorie">
                    <option value="" selected disabled hidden>Choisissez la Catégorie</option>
                    <option value="SM">Simple Messieurs</option>
                    <option value="SM+35">Simple Messieurs +35</option>
                    <option value="SM+45">Simple Messieurs +45</option>
                    <option value="SM+55">Simple Messieurs +55</option>
                    <option value="SD">Simple Dames</option>
                    <option value="DM">Double Messieurs</option>
                    <option value="DD">Double Dames</option>
                    <option value="DX">Double Mixte</option>
                  </select>
                </div>
              </div>
             <!--Body-->
              <div class="p-6">
                  <div class="mx-auto my-2 rounded overflow-hidden shadow-md text-xs">

                      <div class="flex bg-gray-200 px-2 py-2">
                        <div class="w-7/12 text-gray-700 text-left text-red-700">{{date_format(new \DateTime($matchEdit->date_match), 'H : i')}} - {{$matchEdit->category}}</div>
                        <div class="w-5/12 flex justify-end items-center">
                          <div class=""><p class="w-[4rem] px-2 text-center">1</p></div>
                          <div class=""><p class="w-[4rem] px-2 text-center">2</p></div>
                          <div class=""><p class="w-[4rem] px-2 text-center">3</p></div>
                          <div class=""><p class="w-[2rem]  px-2 text-center">Vain.</p></div>
                          <div class=""><p class="w-[2rem] px-2 text-center">Ab.</p></div>
                        </div>
                      </div>
                    
                      <div class="flex px-2 py-2 items-center">
                        <div class="w-7/12 flex">
                          <img class="w-6 sm:w-10 mr-2 self-center" alt="away-logo" src="{{ asset('img/tcm-logo.png') }}">
                          <div class="flex flex-col">
                            <?php 
                              $pm = App\Models\PlayerMatch::where('id_matches',$matchEdit->id)->get();
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
                              / {{$player1bis->lastname}} {{$player1bis->firstname}}
                              @endif
                            </p>
                            @if(isset( $player1bis))
                              <p class="hidden sm:block text-gray-600">{{$player1->classement}} & {{$player1bis->classement}}</p>
                            @else 
                              <p class="hidden sm:block text-gray-600">{{$player1->club}}</p>
                            @endif                           
                          </div>
                        </div>
                        <div class="w-5/12 flex justify-end items-center">
                          <input type="number" class="form-control
                          block
                          w-[4rem]
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
                          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" min=0 max=7 value="{{$matchEdit->set1_a}}" wire:model="set1_a">
                          <input type="number" class="form-control
                          block
                          w-[4rem]
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
                          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" min=0 max=7 value="{{$matchEdit->set2_a}}" wire:model="set2_a"/>
                          <input type="number" class="form-control
                          block
                          w-[4rem]
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
                          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" min=0 max=7 value="{{$matchEdit->set3_a}}" wire:model="set3_a"/>
                          <div class="w-[4rem] text-center">
                            <input type="radio" class="form-radio" name="winner" wire:click="upWinner({{$player1->id}})" value="{{$player1->id}}" @if($player1->id === $matchEdit->winner) checked @endif>
                        </div>
                        <div class="w-[4rem] text-center">
                          <input type="checkbox" class="form-radio" name="aband"  wire:click="upAband({{$player1->id}})" value="{{$player1->id}}" @if($player1->id === $matchEdit->abandon) checked @endif>
                        </div>
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
                            <p class="text-sm font-bold">
                              {{$player2->lastname}} {{$player2->firstname}} 
                              @if(isset( $player2bis))
                                / {{$player2bis->lastname}} {{$player2bis->firstname}} 
                              @endif
                            </p>
                            @if(isset( $player2bis))
                              <p class="hidden sm:block text-gray-600">{{$player2->classement}} & {{$player2bis->classement}}</p>
                            @else 
                              <p class="hidden sm:block text-gray-600">{{$player2->club}}</p>
                            @endif                           
                          </div>
                        </div>
                        <div class="w-5/12 flex justify-end items-center">
                          <input type="number" class="form-control
                          block
                          w-[4rem]
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
                          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" min=0 max=7 value="{{$matchEdit->set1_b}}" wire:model="set1_b"/>
                          <input type="number" class="form-control
                          block
                          w-[4rem]
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
                          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" min=0 max=7 value="{{$matchEdit->set2_b}}" wire:model="set2_b"/>
                          <input type="number" class="form-control
                          block
                          w-[4rem]
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
                          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" min=0 max=7 value="{{$matchEdit->set3_b}}" wire:model="set3_b"/>
                          <div class="w-[4rem] px-2 text-center">
                            <input type="radio" class="form-radio" name="winner" wire:click="upWinner({{$player1->id}})" value="{{$player2->id}}" @if($player2->id === $matchEdit->winner) checked @endif>
                          </div>
                          <div class="w-[4rem] px-2 text-center ">
                            <input type="checkbox" class="form-radio" name="aband" wire:click="upAband({{$player2->id}})" value="{{$player2->id}}" @if($player2->id === $matchEdit->abandon) checked @endif>
                          </div>
                        </div>

                      </div>
                    
                  </div>
                  @error('set1_a') <div class="w-100"> <span class="text-red-700 mx-auto">{{ $message }}</span> </div>  @enderror
                  @error('set2_a') <div class="w-100"> <span class="text-red-700 mx-auto">{{ $message }}</span> </div>  @enderror
                  @error('set3_a') <div class="w-100"> <span class="text-red-700 mx-auto">{{ $message }}</span> </div>  @enderror
                  @error('set1_b') <div class="w-100"> <span class="text-red-700 mx-auto">{{ $message }}</span> </div>  @enderror
                  @error('set2_b') <div class="w-100"> <span class="text-red-700 mx-auto">{{ $message }}</span> </div>  @enderror
                  @error('set3_b') <div class="w-100"> <span class="text-red-700 mx-auto">{{ $message }}</span> </div>  @enderror
              </div>
      
              <!--Footer-->
              <div class="flex justify-end pt-2">
                <button type="submit" class="px-4 bg-transparent p-3 rounded-lg text-marine hover:bg-gray-100 hover:text-marine mr-2" > Valider</button>
                <a class="modal-close px-4 bg-marine p-3 rounded-lg text-white hover:bg-indigo-400" x-on:click="show=false;window.livewire.emitTo('tournament.programmationController','change');   @this.set('show', false); ">Fermer</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    @endif    
</div>
@push('scripts')
<script>
  
  window.message = function (message) {
    Swal.fire({
        text: message,
        toast: true,
        position: 'top-end',
        confirmButtonColor: '#3490dc',
    });
};
Livewire.on('error', message =>{
    Swal.fire({
        icon: 'error',
        text:message,
        position: 'center'
    })

})
Livewire.on('warning', message =>{
    Swal.fire({
        icon: 'warning',
        text:message,
        position: 'center'
    })

})
Livewire.on('message', msg => {
    message(msg);
});


</script>
@endpush
