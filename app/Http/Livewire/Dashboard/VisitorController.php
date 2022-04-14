<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Visitor;
use Illuminate\Support\Facades\DB;

class VisitorController extends Component
{
    public $chart_data=[];
    public function mount(){
        $visitors = Visitor::select('date', DB::raw('count(*) as total'))->where('date', '>', today()->subMonth())->groupBy('date')->get();
        $this->chart_data = array();
        foreach ($visitors as $data)
        {
            array_push($this->chart_data, array($data->date->format('d.m.Y'), $data->total));
        }

    }
    public function render()
    {
        return view('livewire.dashboard.visitor')->extends('layouts.app-dashboard');
    }
}
