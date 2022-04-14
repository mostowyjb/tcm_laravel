<?php

namespace App\Http\Controllers\Tournament;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Matches;


class ProgController extends Controller
{
    public function show()
    {
        $matches = Matches::all()->whereDay('date_match' ,'=',date('d'))->whereMonth('date_match' ,'=',date('m'))->whereYear('date_match' ,'=',date('Y'))->sortBy('date_match');
        $result = array();
        foreach ($matches  as $element) {
            $result[$element['date_match']][] = $element;
        }
        $matches = $result;
        return view('tournament.prog',['matches' => $matches]);
    }
}
