<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\Caracteristic;
class Advantage extends Component
{
    public $caracteristics;
    public function mount(){
        $this->caracteristics = Caracteristic::all();
    }
    public function render()
    {
        return view('livewire.home.advantage');
    }
}
