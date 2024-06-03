<?php

namespace App\Livewire\Blog;

use Livewire\Component;
use App\Models\Service;
use App\Models\Blog;

class Blogsidebar extends Component
{
    public $categoris;
    public $recentBlogs;

    public function mount(){
        $this->categoris = Service::with('blogs')->get();
        $this->recentBlogs = Blog::take(10)->latest()->get();
    }
    public function render()
    {
        return view('livewire.blog.blogsidebar');
    }
}
