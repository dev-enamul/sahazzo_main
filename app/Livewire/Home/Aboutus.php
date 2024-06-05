<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\Faq;
use App\Models\About;
class Aboutus extends Component
{
    public $about;
    public $faqs;
    public function mount(){
        $this->about = About::first();
        $this->faqs = Faq::all();

    }
    public function render()
    {
        return view('livewire.home.aboutus');
    }
}
