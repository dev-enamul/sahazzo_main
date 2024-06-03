<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\JobApply as ApplyJobSUbmit;
class JobApply extends Component
{
    use WithFileUploads; 
    public $name;
    public $email;
    public $phone;
    public $coverLetter;
    public $cv; 
    public $submitting = false;

    protected $rules = [
        'name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
        'coverLetter' => 'nullable|string',
        'cv' => 'required|file|max:10240', 
    ];

    public function submitForm()
    { 
        $this->submitting = true;
        $this->validate(); 
        $existingApplication = ApplyJobSubmit::where('email', $this->email)
            ->orWhere('phone', $this->phone)
            ->exists();
    
        if ($existingApplication) {
            session()->flash('error', 'You have already applied');
            return;
        }  
    
        $cvPath = $this->cv->store('public/cvs');
        $cvFileName = pathinfo($cvPath, PATHINFO_BASENAME);
    
        ApplyJobSubmit::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'cover_letter' => $this->coverLetter,
            'cv' => $cvFileName,
        ]);
        
        $this->reset(['name', 'email', 'phone', 'coverLetter', 'cv']); 
        session()->flash('message', 'Your CV has been submitted successfully!');
        $this->submitting = false; 
    }
 


    public function render()
    {
        return view('livewire.job-apply');
    }
}
