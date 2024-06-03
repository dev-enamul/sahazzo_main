<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact as ContactModel;

class Contact extends Component
{
    public $contact;
    public function mount(){
        $this->contact = ContactModel::first();
    }
    public function render()
    {
        return view('livewire.contact');
    }
}
