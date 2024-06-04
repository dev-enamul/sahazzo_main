<?php

namespace App\Livewire\About;

use Livewire\Component;

class MissionVission extends Component
{
    public $data;
 
    public function mount($data = null)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('livewire.about.mission-vission');
    }
}
