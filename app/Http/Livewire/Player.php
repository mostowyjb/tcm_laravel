<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Player as PlayeModel;
use App\Classes\Player\PlayerXlsManager;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Player extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $lastname,$firstname,$club,$classement;
    public $players;
    public $importFile;
    public $sortField ='id';
    public $sortAsc = true;


    public $searchTerm;

    public function sortBy($field)
    {
        if($this->sortField === $field)
        {
            $this->sortAsc = ! $this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function addPlayer(Request $request)
    {
        
        $rules = [
            'lastname' => ['required', 'string', 'max:255'],
            "firstname" => ['required', 'string', 'max:255'],
            "club" => ['required', 'string', 'max:255'],
            "classement" => ['required', 'string', 'max:255'],
        ];
        $this->validate($rules);
        PlayeModel::create([
            "lastname" => $this->lastname,
            "firstname" =>  $this->firstname,
            "club" =>  $this->club,
            "classement" =>  $this->classement
        ]);
        $this->emit('success',"$this->lastname $this->firstname a été ajouté(e)");
        $this->refresh();
    }
    public function mount()
    {
        //$this->players = PlayeModel::all();
    }
    public function refresh()
    {
        $this->players = PlayeModel::all();
    }
    public function deletePlayer(Request $request,$id){
        $player = PlayeModel::find($id);
        $player->delete();

        return redirect()->route('player');
    }

    public function updatePlayer(Request $request,$id){
        PlayeModel::where('id',$id)->update(['title'=>'Updated title']);
      
        return redirect()->route('player');
    }

    public function hydrate()
    {
        $this->emit('select2');
    }


    /**
     * Import excel.
     */
    public function updatedImportFile()
    {
        $this->validate([
            'importFile' => 'file|max:1024', // 1MB Max
        ]);
        $fileName = $this->importFile->getClientOriginalName();
        $path = $this->importFile->storeAs('import_', $fileName);
        $fullpath = Storage::path($path);
        $xlsManager = new PlayerXlsManager($fullpath);
        $playersList = $xlsManager->verifyExcel();
        $this->emit('error', implode('.', $xlsManager->getErrors()));
        if (!empty($playersList)) {
            foreach ($playersList as $ref => $player) {
                // dd($produit);
                $this->addOneProduct(
                    $ref,
                    $player['promo'],
                    $this->vp,
                    $player['designation'],
                    $player['multiple'],
                    $player['prix_cession'],
                    $player['date_debut'],
                    $player['date_fin'],
                    $player['commentaire']
                );
            } 
        }
        $nb = count($playersList);
        if (empty($this->importErrors)) {
            $this->emit('message', "$nb produits ajoutés à l'opération");
        } 
    }

    public function render()
    {        
        $searchTerm = '%'.$this->searchTerm.'%';
        $players = PlayeModel::where('lastname','like', $searchTerm)
            ->orWhere('firstname','like', $searchTerm)
            ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
            ->get();
        $this->players = $players;
        return view('livewire.player')->extends('layouts.app-dashboard');
    }
}
