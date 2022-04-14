<?php

namespace App\Http\Controllers\Tournament;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Matches;

class TournamentController extends Controller
{
    public function show()
    {
        $matches = Matches::all()->where('date_match', '>=', date('Y-m-d').' 00:00:00')->where('date_match', '<=', date('Y-m-d').' 23:59:59')->sortBy('date_match');
        $result = array();
        foreach ($matches  as $element) {
            $result[$element['date_match']][] = $element;
        }
        $matches = $result;

        $matchesNow = Matches::all()->where('date_match', '>=', date('Y-m-d').' 00:00:00')->where('date_match', '<=', date('Y-m-d').' 23:59:59')->whereNull('winner')->sortBy('date_match')->take(3);
        
        $now = array();
        $i = 0;
        foreach ($matchesNow  as $element) {
            $now[$i] = $element;
            $i++;
        }
        $matchesNow = $now;
        return view('tournament.index',['matches' => $matches,'matchesNow' => $matchesNow]);
    }
}
