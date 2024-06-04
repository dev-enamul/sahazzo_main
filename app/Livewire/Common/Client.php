<?php

namespace App\Livewire\Common;

use Livewire\Component;
use App\Models\Client as ClientModel;

class Client extends Component
{
    public $clients;
    public function mount(){
        $this->clients = ClientModel::all();
    }
    public function render()
    {
        return view('livewire.common.client');
    }
}
