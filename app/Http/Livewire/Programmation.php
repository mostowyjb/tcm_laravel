<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Matches;

class Programmation extends Component
{
    public $matches;
    public $matches1 = null;
    public $f_dateProg;
    public $showModal = false;
    public $idMatchEdit;
    protected $queryString = [

        'f_dateProg' => ['as' => 'd'],

    ];

    public function mount(){
        if (blank($this->f_dateProg)) {
            $this->f_dateProg= date('Y-m-d');
        }
        $this->query();
        $result = array();
        foreach ($this->matches  as $element) {
            $result[$element['date_match']][] = $element;
        }
        $this->matches = $result;
        
    }
    private function query()
    {
        $dateProg =$this->f_dateProg;
        $this->matches = Matches::all()->where('date_match', '>=', $dateProg.' 00:00:00')->where('date_match', '<=', $dateProg.' 23:59:59')->sortBy('date_match');
    
    }

    public function change()
    {
        $this->query();
        $result = array();
        foreach ($this->matches  as $element) {
            $result[$element['date_match']][] = $element;
        }
        $this->matches = $result;
    }

    public function render()
    {
        return view('livewire.programmation')->extends('layouts.app-livewire');
    }
}
