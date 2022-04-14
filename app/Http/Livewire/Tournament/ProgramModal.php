<?php

namespace App\Http\Livewire\Tournament;

use Illuminate\Support\Facades\App;
use Livewire\Component;
use App\Http\Livewire\Modal;
use App\Models\Matches;

class ProgramModal extends Modal
{
    public $matchEdit,$set1_a,$set2_a,$set3_a,$set1_b,$set2_b,$set3_b,$f_date,$f_heure,$f_aband = null,$f_winner = null;

    protected array $rules = [
        'set1_a' => 'required|integer|min:0|max:7',
        'set2_a' => 'required|integer|min:0|max:7',
        'set3_a' => 'required|integer|min:0|max:7',
        'set1_b' => 'required|integer|min:0|max:7',
        'set2_b' => 'required|integer|min:0|max:7',
        'set3_b' => 'required|integer|min:0|max:7',
    ];
    protected $messages = [
        'set1_a.min' => "Le score n'est pas correct",
        'set2_a.min' => "Le score n'est pas correct",
        'set3_a.min' => "Le score n'est pas correct",
        'set1_b.min' => "Le score n'est pas correct",
        'set2_b.min' => "Le score n'est pas correct",
        'set3_b.min' => "Le score n'est pas correct",
        'set1_a.max' => "Le score n'est pas correct",
        'set2_a.max' => "Le score n'est pas correct",
        'set3_a.max' => "Le score n'est pas correct",
        'set1_b.max' => "Le score n'est pas correct",
        'set2_b.max' => "Le score n'est pas correct",
        'set3_b.max' => "Le score n'est pas correct",
    ];

    public function update(){
        $this->set1_a =  $this->matchEdit->set1_a;
        $this->set2_a =  $this->matchEdit->set2_a;
        $this->set3_a =  $this->matchEdit->set3_a;
        $this->set1_b =  $this->matchEdit->set1_b;
        $this->set2_b =  $this->matchEdit->set2_b;
        $this->set3_b =  $this->matchEdit->set3_b;
        $this->f_date  = date_format(new \DateTime($this->matchEdit->date_match), 'Y-m-d');
        $this->f_heure  = date_format(new \DateTime($this->matchEdit->date_match), 'H:i');
    }

    
    public function upAband($idAband){

        if(is_null($this->matchEdit->abandon) && $this->matchEdit->abandon != $idAband){
            $this->f_aband =  $idAband;  
        }else{

            $this->f_aband =  null;  
        }
    }
    public function upWinner($idWinner){
        $this->f_winner =  $idWinner;     
    }
    public function save(){

        $this->validate();
        $msg ='Modification(s) effectuée(s)';
        $this->matchEdit->set1_a = $this->set1_a;
        $this->matchEdit->set2_a = $this->set2_a;
        $this->matchEdit->set3_a = $this->set3_a;
        $this->matchEdit->set1_b = $this->set1_b;
        $this->matchEdit->set2_b = $this->set2_b;
        $this->matchEdit->set3_b = $this->set3_b;
        $this->matchEdit->date_match = new \DateTime($this->f_date.' '.$this->f_heure);

        if(!is_null($this->f_winner)){
            $this->matchEdit->winner =  $this->f_winner;
        }
    
        $this->matchEdit->abandon =$this->f_aband;
    
        try{
            $this->matchEdit->save();
            $this->emit('change');
            $this->emit('success', $msg);

        }
        catch(\Exception  $e){
            $msg = 'Erreur dans la modification \n Aucun changement effectué';
            $this->emit('error', $msg);
        }
        
        
    }
    public function render()
    {
        $matches = Matches::find($this->idEdit);
        $this->matchEdit = $matches;
        return view('livewire.tournament.program-modal');
    }
}
