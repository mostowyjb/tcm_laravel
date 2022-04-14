<div>
  <div class="bg-gray-800 pt-3">
    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
        <h1 class="font-bold pl-2">Match</h1>
    </div>
  </div>

  <form class="flex flex-wrap" wire:submit.prevent="addMatch">
    <div wire:loading.delay class="loader-spin"></div>
    <!-- JOUEUR 1 --> 
    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
      <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md mx-auto">
        <div class="form-group mb-6">
          <select id="player1" name="player1" class="select2 form-control block 
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
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" wire:model.debounce.300ms="f_player1">
            @if(!empty($this->player1))
              <option value="{{$this->player1->id}}">{{$this->player1->firstname}} {{$this->player1->lastname}}</option>
              @foreach(\App\Models\Player::where("id","!=",$this->player1->id)->orderBy('lastname')->get() as $p)
                <option value="{{$p ->id}}">{{$p->firstname}} {{$p->lastname}}</option>
              @endforeach
            @else
              <option value="" ></option>
              @foreach(\App\Models\Player::orderBy('lastname')->get() as $p)
                <option value="{{$p ->id}}">{{$p->firstname}} {{$p->lastname}}</option>
              @endforeach
            @endif
          </select>
        </div>
        <div class="grid grid-cols-2 gap-4">
          <div class="form-group mb-6">
            <label type="text" class="form-control
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
            >

              @if(!empty($this->player1))
                {{$this->player1->lastname}}
              @else
                Nom
              @endif
            
            </label>
          </div>

          <div class="form-group mb-6">
            <label type="text" class="form-control
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
            >

              @if(!empty($this->player1))
                {{$this->player1->firstname}}
              @else
                Prénom
              @endif
            
            </label>
          </div>
        </div>
        <div class="form-group mb-6">
          <label type="text" class="form-control
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
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="club" name="club"
          >

            @if(!empty($this->player1))
              {{$this->player1->club}}
            @else
              Club
            @endif
          
          </label>
        </div>
        <div class="form-group mb-6">
          <label type="text" class="form-control
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
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="classement" name="classement"
          >

            @if(!empty($this->player1))
              {{$this->player1->classement}}
            @else
              Classement
            @endif
          
          </label>
        </div>
      </div>
    </div>
    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
      <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md mx-auto">
        <div class="form-group mb-6">
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
              <option value="DM" >Double Messieurs</option>
              <option value="DD">Double Dames</option>
              <option value="DX">Double Mixte</option>
            </select>
        </div>
        <div class="form-group mb-6 mx-auto">
          <i class="em em-crossed_swords" aria-role="presentation" aria-label=""  style="width: 100%; height:6rem;"></i>
        </div>
        <div class="grid grid-cols-2 gap-4">
          <div class="relative">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
              <i class="fas fa-calendar w-5 h-5 text-gray-500 dark:text-gray-400"></i>
            </div>
            <input name="date" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select Date" wire:model.defer="date_match">
          </div>
          <div class="relative">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
              <i class="fas fa-clock w-5 h-5 text-gray-500 dark:text-gray-400"></i>
            </div>
            <input name="time" type="time" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select Heure"  wire:model.defer="heure_match">
          </div>
        </div>
        <div class="form-group mb-6">

        </div>
      </div>
    </div>
    <!-- JOUEUR 2 --> 
    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
      <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md mx-auto">
        <div class="form-group mb-6">
          <select id="player2" name="player2" class="select2 form-control block 
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
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" wire:model.debounce.300ms="f_player2">
            @if(!empty($this->player2))
              <option value="{{$this->player2->id}}">{{$this->player2->firstname}} {{$this->player2->lastname}}</option>
              @foreach(\App\Models\Player::where("id","!=",$this->player2->id)->orderBy('lastname')->get() as $p)
                <option value="{{$p ->id}}">{{$p->firstname}} {{$p->lastname}}</option>
              @endforeach
            @else
              <option value="" ></option>
              @foreach(\App\Models\Player::orderBy('lastname')->get() as $p)
                <option value="{{$p ->id}}">{{$p->firstname}} {{$p->lastname}}</option>
              @endforeach
            @endif
          </select>
        </div>
        <div class="grid grid-cols-2 gap-4">
          <div class="form-group mb-6">
            <label type="text" class="form-control
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
            >

              @if(!empty($this->player2))
                {{$this->player2->lastname}}
              @else
                Nom
              @endif
            
            </label>
          </div>

          <div class="form-group mb-6">
            <label type="text" class="form-control
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
            >

              @if(!empty($this->player2))
                {{$this->player2->firstname}}
              @else
                Prénom
              @endif
            
            </label>
          </div>
        </div>
        <div class="form-group mb-6">
          <label type="text" class="form-control
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
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="club" name="club"
          >

            @if(!empty($this->player2))
              {{$this->player2->club}}
            @else
              Club
            @endif
          
          </label>
        </div>
        <div class="form-group mb-6">
          <label type="text" class="form-control
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
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="classement" name="classement"
          >

            @if(!empty($this->player2))
              {{$this->player2->classement}}
            @else
              Classement
            @endif
          
          </label>
        </div>
      </div>
    </div>
    @if($is_double)
    <!-- JOUEUR 1 BIS --> 
    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
      <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md mx-auto">
        <div class="form-group mb-6">
          <select id="player1bis" name="player1bis" class="select2 form-control block 
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
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" wire:model.debounce.300ms="f_player1bis">
            @if(!empty($this->player1bis))
              <option value="{{$this->player1bis->id}}">{{$this->player1bis->firstname}} {{$this->player1bis->lastname}}</option>
              @foreach(\App\Models\Player::where("id","!=",$this->player1bis->id)->orderBy('lastname')->get() as $p)
                <option value="{{$p ->id}}">{{$p->firstname}} {{$p->lastname}}</option>
              @endforeach
            @else
              <option value="" ></option>
              @foreach(\App\Models\Player::orderBy('lastname')->get() as $p)
                <option value="{{$p ->id}}">{{$p->firstname}} {{$p->lastname}}</option>
              @endforeach
            @endif
          </select>
        </div>
        <div class="grid grid-cols-2 gap-4">
          <div class="form-group mb-6">
            <label type="text" class="form-control
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
            >

              @if(!empty($this->player1bis))
                {{$this->player1bis->lastname}}
              @else
                Nom
              @endif
            
            </label>
          </div>

          <div class="form-group mb-6">
            <label type="text" class="form-control
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
            >

              @if(!empty($this->player1bis))
                {{$this->player1bis->firstname}}
              @else
                Prénom
              @endif
            
            </label>
          </div>
        </div>
        <div class="form-group mb-6">
          <label type="text" class="form-control
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
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="club" name="club"
          >

            @if(!empty($this->player1bis))
              {{$this->player1bis->club}}
            @else
              Club
            @endif
          
          </label>
        </div>
        <div class="form-group mb-6">
          <label type="text" class="form-control
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
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="classement" name="classement"
          >

            @if(!empty($this->player1bis))
              {{$this->player1bis->classement}}
            @else
              Classement
            @endif
          
          </label>
        </div>
      </div>
    </div>
    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
      <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md mx-auto">
        <div class="form-group mb-6">

        </div>
        <div class="form-group mb-6 mx-auto">
          <i class="em em-crossed_swords" aria-role="presentation" aria-label=""  style="width: 100%; height:6rem;"></i>
        </div>
        <div class="grid grid-cols-2 gap-4">
    
        </div>
        <div class="form-group mb-6">

        </div>
      </div>
    </div>
    <!-- JOUEUR 2 BIS --> 
    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
      <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md mx-auto">
        <div class="form-group mb-6">
          <select id="player2bis" name="player2bis" class="select2 form-control block 
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
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" wire:model.debounce.300ms="f_player2bis">
            @if(!empty($this->player2bis))
              <option value="{{$this->player2bis->id}}">{{$this->player2bis->firstname}} {{$this->player2bis->lastname}}</option>
              @foreach(\App\Models\Player::where("id","!=",$this->player2bis->id)->orderBy('lastname')->get() as $p)
                <option value="{{$p ->id}}">{{$p->firstname}} {{$p->lastname}}</option>
              @endforeach
            @else
              <option value="" ></option>
              @foreach(\App\Models\Player::orderBy('lastname')->get() as $p)
                <option value="{{$p ->id}}">{{$p->firstname}} {{$p->lastname}}</option>
              @endforeach
            @endif
          </select>
        </div>
        <div class="grid grid-cols-2 gap-4">
          <div class="form-group mb-6">
            <label type="text" class="form-control
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
            >

              @if(!empty($this->player2bis))
                {{$this->player2bis->lastname}}
              @else
                Nom
              @endif
            
            </label>
          </div>

          <div class="form-group mb-6">
            <label type="text" class="form-control
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
            >

              @if(!empty($this->player2bis))
                {{$this->player2bis->firstname}}
              @else
                Prénom
              @endif
            
            </label>
          </div>
        </div>
        <div class="form-group mb-6">
          <label type="text" class="form-control
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
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="club" name="club"
          >

            @if(!empty($this->player2bis))
              {{$this->player2bis->club}}
            @else
              Club
            @endif
          
          </label>
        </div>
        <div class="form-group mb-6">
          <label type="text" class="form-control
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
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="classement" name="classement"
          >

            @if(!empty($this->player2bis))
              {{$this->player2bis->classement}}
            @else
              Classement
            @endif
          
          </label>
        </div>
      </div>
    </div>
    @endif
    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
    </div>
    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
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
        ease-in-out">Créer
      </button>
    </div>
  </form>

@push('scripts')
  <script>

    $(document).on('change', '#player1', function(e) {
      let data = $(this).val();
      @this.set('f_player1', data);
      @this.change();
      select2();
    });

    $(document).on('change', '#player1bis', function(e) {
      let data = $(this).val();

      @this.set('f_player1bis', data);
      @this.change();
      select2();
    });

    $(document).on('change', '#categorie', function(e) {
      let data = $(this).val();
      @this.set('f_categorie', data);
      if(data.startsWith('D')){
        @this.set('is_double', true); 
      }else{
        @this.set('is_double', false);
      }
      select2();
    });


    $(document).on('change', '#player2', function(e) {
      let data = $(this).val();

      @this.set('f_player2', data);
      @this.change();
      select2();
    });

    $(document).on('change', '#player2bis', function(e) {
      let data = $(this).val();

      @this.set('f_player2bis', data);
      @this.change();
      select2();
    });

    window.livewire.on('select2', msg => {
      select2();
    });

    function select2() {
      $('.select2').select2({
        placeholder: "Choisissez le Joueur"
      });
    }
    select2();

  </script>
@endpush



