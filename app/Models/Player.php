<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Matches;
class Player extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'lastname',
        'firstname',
        'club',
        'classement'
    ];
    
    /**
     * The matches that belong to the user.
     */
    public function matches()
    {
        return $this->belongsToMany(Matches::class);
    }
}
