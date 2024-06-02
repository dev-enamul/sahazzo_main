<?php

namespace App\Livewire; 
use Livewire\Component;
use App\Models\Service as ServiceModel;

class Service extends Component
{
    public $service;

    public function mount($slug)
    {
        $this->service = ServiceModel::where('slug',$slug)->first();
    }

    public function render()
    {
        return view('livewire.service');
    }
}
