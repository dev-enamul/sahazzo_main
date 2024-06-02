<?php

namespace App\Livewire; 
use Livewire\Component;
use App\Models\Service as ServiceModel;
use App\Models\Portfolio;

class Service extends Component
{
    public $service;
    public $projects;

    public function mount($slug)
    {
        $this->service = ServiceModel::where('slug',$slug)->first();
        $this->projects = Portfolio::where('service_id',$this->service->id)->latest()->get();
    }

    public function render()
    {
        return view('livewire.service');
    }
}
