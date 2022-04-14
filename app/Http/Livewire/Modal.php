<?php

namespace App\Http\Livewire;

use Livewire\Component;


class Modal extends Component
{
    public $show = false;
    public $idEdit = 0 ;
    protected $listeners = [
        'show' => 'show',
    ];

    public function show($id){
        $this->idEdit = $id;
        $this->show = true;
    }

    public function render()
    {
        return view('livewire.modal');
    }
}
