<?php

namespace App\Livewire\About;

use Livewire\Component;
use App\Models\Faq as FaqModel;
class Faq extends Component
{
    public $faqs;
    public function mount(){
        $this->faqs = FaqModel::all();
    }
    public function render()
    {
        return view('livewire.about.faq');
    }
}
