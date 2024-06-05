<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\Blog;

class News extends Component
{
    public $news; 
    public function mount(){
        $this->news = Blog::get();
    }
    public function render()
    {
        return view('livewire.home.news');
    }
}
