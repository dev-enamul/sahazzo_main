<?php

namespace App\Livewire;
use App\Models\Service;

use Livewire\Component;
use App\Models\About;

class Nav extends Component
{ 
    public $services = [];
    public $logo;

    public function mount()
    { 
        $this->services = Service::all();
        $this->logo = About::first()->company_logo;
    }
    public function render()
    {
        return view('livewire.nav');
    }
}
