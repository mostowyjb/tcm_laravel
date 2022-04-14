<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Players;
class Matches extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'date_match',
        "set1_a",
        "set1_b",
        "set2_a",
        "set2_b",
        "set3_a",
        "set3_b",
    ];
    
    public function players()
    {
        return $this->belongsToMany(Players::class);
    }
}
