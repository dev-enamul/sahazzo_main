<?php

namespace App\Livewire; 
use Livewire\Component;
use App\Models\Service as ServiceModel;
use App\Models\Portfolio;
use App\Models\ServiceCategory;

class Service extends Component
{
    public $service_category;
    public $services;
    public $projects;

    public function mount($slug)
    {
        $this->service_category = ServiceCategory::where('slug', $slug)->first(); 
        if ($this->service_category) { 
            $this->services = ServiceModel::where('category_id', $this->service_category->id)->get(); 
            $this->projects = Portfolio::whereIn('service_id', $this->services->pluck('id'))->latest()->get();
        } else { 
            $this->services = [];
            $this->projects = [];
        }
    }

    public function render()
    {
        return view('livewire.service');
    }
}
