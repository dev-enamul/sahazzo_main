<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Portfolio;

class ProjectDetails extends Component
{
    public $project;
    public $galleris;
    public function mount($slug){
        $this->project = Portfolio::where('slug',$slug)->first();
        $this->galleris = Gallery::where('project_id',$this->project->id)->get();
    }

    public function render()
    {
        return view('livewire.project-details');
    }
}
