<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Service;
use App\Models\Portfolio;
class Project extends Component
{

    public $services; 
    public $projects;

    public function mount(){
        $this->services = Service::all();
        $this->projects = Portfolio::all();
    }

 
    public function render()
    {
        return view('livewire.project');
    }
}
