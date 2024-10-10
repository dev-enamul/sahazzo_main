<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\ServiceCategory;

class Project extends Component
{

    public $categories; 
    public $projects;

    public function mount(){
        $this->categories = ServiceCategory::all();
        $this->projects = Portfolio::all();
    }

 
    public function render()
    {
        return view('livewire.project');
    }
}
