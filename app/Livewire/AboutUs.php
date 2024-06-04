<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\About;
class AboutUs extends Component
{
    public $about;
    public function mount(){
        $this->about = About::first();
    } 

    public function render()
    {
        return view('livewire.about-us');
    }
}
