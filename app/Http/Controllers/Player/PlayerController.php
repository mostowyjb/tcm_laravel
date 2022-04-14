<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PlayerController extends Controller
{
    public function show()
    {
        $players = Player::all();
        return view('player.index',['players' => $players]);
    }
    public function addPlayer(Request $request)
    {
        $rules = [
            'lastname' => ['required', 'string', 'max:255'],
            "firstname" => ['required', 'string', 'max:255'],
            "club" => ['required', 'string', 'max:255'],
            "classement" => ['required', 'string', 'max:255'],
        ];
        $request->validate($rules);
        Player::create([
            "lastname" => $request->lastname,
            "firstname" =>  $request->firstname,
            "club" =>  $request->club,
            "classement" =>  $request->classement
        ]);
        
    
        return redirect()->route('player');
    }

    public function deletePlayer(Request $request,$id){
        $player = Player::find($id);
        $player->delete();

        return redirect()->route('player');
    }

    public function updatePlayer(Request $request,$id){
        Player::where('id',$id)->update(['title'=>'Updated title']);
      
        return redirect()->route('player');
    }
}
