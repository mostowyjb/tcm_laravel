<?php

namespace App\Http\Controllers\Tournament;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MatchesController extends Controller
{
    public function show()
    {
        return view('tournament.match');
    }
}
