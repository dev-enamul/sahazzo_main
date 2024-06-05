<?php

namespace App\Livewire\About;

use Livewire\Component;
use App\Models\Counter as CounterModel;
class Counter extends Component
{
    public $counters;
    public function mount(){
        $this->counters = CounterModel::all();
    }
    public function render()
    {
        return view('livewire.about.counter');
    }
}
