<?php

namespace App\Livewire\Common;

use Livewire\Component;

class Breadcrumb extends Component
{
    public $name = '';
    public function mount($name = ''){
        $this->name = $name;
    }
    public function render()
    {
        return view('livewire.common.breadcrumb');
    }
}
