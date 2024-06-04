<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\Slider as SliderModel;

class Slider extends Component
{
    public $slider;
    public function mount(){
        $this->slider = SliderModel::first();
    }
    public function render()
    {
        return view('livewire.home.slider');
    }
}
