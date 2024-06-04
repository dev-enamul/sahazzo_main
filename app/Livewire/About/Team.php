<?php

namespace App\Livewire\About;

use Livewire\Component;
use App\Models\Team as TeamModel;

class Team extends Component
{
    public $teams;
    public function mount(){
        $this->teams = TeamModel::get();
    }
    public function render()
    {
        return view('livewire.about.team');
    }
}
