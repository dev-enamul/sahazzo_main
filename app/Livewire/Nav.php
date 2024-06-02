<?php

namespace App\Livewire;
use App\Models\Service;

use Livewire\Component;

class Nav extends Component
{ 
    public $services = [];

    public function mount()
    { 
        $this->services = Service::all();
    }
    public function render()
    {
        return view('livewire.nav');
    }
}
