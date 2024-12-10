<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;

class ShowContactPage extends Component
{
    public $name = "";
    public $email = "";
    public $message = "";

    protected $rules = [
        'name' =>'required',
        'email' =>'required|email',
    ];

    public function submit()
    {
        $this->validate();

        $mailData =[
            'subject' => 'You have recived a contact email',
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message, 
        ];

        Mail::to('admin@example.com')->send(new ContactEmail($mailData));

        session()->flash('success', 'Thank you for contacting us!');

        $this->redirect('/contact');
    }

    public function render()
    {
        return view('livewire.show-contact-page');
    }
}
