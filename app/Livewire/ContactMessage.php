<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactMessage as Contact;

class ContactMessage extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;
    public $submitting = false;

    protected $rules = [
        'name' => 'required|string',
        'email' => 'nullable|email',
        'phone' => 'nullable|string',
        'message' => 'required|string',
    ];

    public function submitForm()
    {
        $this->submitting = true;
        $this->validate();  
        
        Contact::create([
            'name' => $this->name,
            'email' => $this->email??'admin',
            'phone' => $this->phone,
            'message' => $this->message, 
        ]);
        
        $this->reset(['name', 'email', 'phone', 'message']); 
        session()->flash('message', 'Thank you for reaching out! Your message has been successfully submitted. Our team is dedicated to providing prompt responses, and we\'ll make sure to get back to you as soon as possible. Your inquiry is important to us, and we look forward to assisting you. Have a great day!');
        $this->submitting = false; 
    }

    public function render()
    {
        return view('livewire.contact-message');
    }
}
