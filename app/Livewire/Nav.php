<?php

namespace App\Livewire; 

use Livewire\Component;
use App\Models\About;
use App\Models\ServiceCategory;

class Nav extends Component
{ 
    public $services = [];
    public $logo;

    public function mount()
    { 
        $this->services = ServiceCategory::all();
        $this->logo = About::first()->company_logo;
    }
    public function render()
    {
        return view('livewire.nav');
    }
}
