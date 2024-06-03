<?php

namespace App\Livewire\Common;

use Livewire\Component;
use App\Models\Contact;

class Footer extends Component
{
    public $contact; 

    public function mount(){
        $this->contact = Contact::first();
    }
    public function render()
    {
        return view('livewire.common.footer');
    }
}
