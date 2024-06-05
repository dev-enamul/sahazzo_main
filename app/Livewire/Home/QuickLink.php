<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\QuickLink as Link;
class QuickLink extends Component
{
    public $link;
    public function mount(){
        $this->link = Link::first();
    }
    public function render()
    {
        return view('livewire.home.quick-link');
    }
}
