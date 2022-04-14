<?php

namespace App\Http\Livewire\Tournament;

use Livewire\Component;
use App\Models\Player;
use App\Models\Matches;
use App\Models\PlayerMatch as PM;

class MatchesController extends Component
{   

    public $f_player1,$f_player2,$f_player1bis,$f_player2bis,$date_match,$heure_match,$f_categorie;
    public $player1 = null;
    public $player2 = null;
    public $player1bis = null;
    public $player2bis = null;
    public $is_double=false;
    
    protected array $rules = [
        'f_categorie' => 'required|string',
        'player1' => 'required|array',
        'player2' => 'required|array',
        'date_match' => 'required|string',
        'heure_match' => 'required|string',
    ];

    public function render()
    {
        return view('livewire.tournament.match')->extends('layouts.app-dashboard');
    }
    public function hydrate()
    {
        $this->emit('select2');
    }

    public function change(){
        $this->player1 = null;
        $this->player2 = null;
        $this->player1 = $this->getInfosPlayer($this->f_player1);
        $this->player2 = $this->getInfosPlayer($this->f_player2);
        if($this->is_double){
            $this->player1bis = $this->getInfosPlayer($this->f_player1bis);
            $this->player2bis = $this->getInfosPlayer($this->f_player2bis);
        }
    }

    public function getInfosPlayer($id)
    {
        $player = Player::find($id);
        return $player;
    }
    public function addMatch(){
        $this->validate();
        $match = Matches::create([
            "category" => $this->f_categorie,
            "date_match" =>  new \DateTime($this->date_match.' '.$this->heure_match),
            "set1_a" => 0,
            "set1_b" => 0,
            "set2_a" => 0,
            "set2_b" => 0,
            "set3_a" => 0,
            "set3_b" => 0,
        ]);
        if($this->is_double){
            PM::create([
                "id_matches" =>$match->id,
                "id_player1" =>$this->f_player1,
                "id_player2" =>$this->f_player2,
                "id_player1bis" =>$this->f_player1bis,
                "id_player2bis" =>$this->f_player2bis,
                "is_double" =>$this->is_double,
            ]);
        }else{
            PM::create([
                "id_matches" =>$match->id,
                "id_player1" =>$this->f_player1,
                "id_player2" =>$this->f_player2,
                "is_double" =>$this->is_double,
            ]);
        }

        $this->emit('success', "Le match a été créé");

        $this->f_player1 = $this->f_player2 = $this->date_match = $this->heure_match = null;
    }

}
