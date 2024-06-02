<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Portfolio;

class ProjectDetails extends Component
{
    public $project;
    public function mount($slug){
        $this->project = Portfolio::where('slug',$slug)->first();
    }

    public function render()
    {
        return view('livewire.project-details');
    }
}
