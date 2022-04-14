<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Players;
use App\Models\Matches;

class PlayerMatch extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id_matches',
        'id_player1',
        'id_player2',
        'is_double',
        'id_player1bis',
        'id_player2bis',
    ];

    public function matches()
    {
        return $this->belongsToMany(Matches::class);
    }
    
    public function players()
    {
        return $this->belongsToMany(Players::class);
    }
}
