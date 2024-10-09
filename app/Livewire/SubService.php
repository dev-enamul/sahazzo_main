<?php

namespace App\Livewire;

use App\Models\Portfolio;
use App\Models\Service;
use Livewire\Component;

class SubService extends Component
{ 
    public $service;
    public $projects;

    public function mount($slug)
    { 
        $this->service = Service::where('slug', $slug)->first(); 
        if ($this->service) {  
            $this->projects = Portfolio::where('service_id', $this->service->id)->take(10)->latest()->get();
        } else { 
            $this->service = [];
            $this->projects = [];
        }
    }

    public function render()
    {
        return view('livewire.sub-service');
    }
}
