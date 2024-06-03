<?php

namespace App\Livewire;

use App\Models\Blog as BlogPost;
use Livewire\Component; 
use Livewire\WithPagination;
class Blog extends Component
{
    use WithPagination;
 
    public $service_id = null; 
    
    public function mount(){
        $this->service_id = request()->query('service_id');
       
        
        
    }

    public function render()
    {
        if($this->service_id!=null){
            $blogs = BlogPost::where('status',1)->where('service_id',$this->service_id)->paginate(1);
        }else{
            $blogs = BlogPost::where('status',1)->paginate(1);
        }

        return view('livewire.blog',['blogs' => $blogs]);
    }
}
