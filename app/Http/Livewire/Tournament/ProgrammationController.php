<?php

namespace App\Http\Livewire\Tournament;

use Livewire\Component;
use App\Models\Player;
use App\Models\Matches;
use App\Models\PlayerMatch as PM;

use function PHPUnit\Framework\matches;

class ProgrammationController extends Component
{
    public $matches;
    public $matches1 = null;
    public $f_dateProg = null;
    public $showModal = false;
    public $idMatchEdit;

    protected $listeners = ['change'];

    protected $queryString = [
        'f_dateProg' => ['as' => 'd'],
    ];

    public function render()
    {
        return view('livewire.tournament.programmation')->extends('layouts.app-dashboard');
    }

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


   
}
