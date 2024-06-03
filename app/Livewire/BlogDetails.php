<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Blog;

class BlogDetails extends Component
{
    public $blog;  
    public $nextSlug;
    public $prevSlug;
    public function mount($slug){
        $this->blog = Blog::where('slug',$slug)->first();
        $nextBlog = Blog::where('id', '>', $this->blog->id)->first();
        $this->nextSlug = $nextBlog ? $nextBlog->slug : null;

        $previousBlog = Blog::where('id', '<', $this->blog->id)->orderByDesc('id')->first();
        $this->prevSlug = $previousBlog ? $previousBlog->slug : null;
    }

    public function render()
    {
        return view('livewire.blog-details');
    }
}
