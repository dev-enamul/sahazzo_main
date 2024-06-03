<?php

namespace App\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public $contactData;
    public function mount(){
        $this->contactData = Contact::first();
    }
    public function render()
    {
        return view('livewire.contact');
    }
}
