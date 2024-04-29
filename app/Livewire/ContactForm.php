<?php

namespace App\Livewire;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;


use Livewire\Component;


class ContactForm extends Component{
    public $name;
    public $email;
    public $message;

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function submitForm()
{
    // Validate form data
    $validatedData = $this->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    if ($validatedData) {
        // Send email using the ContactFormMail Mailable
        Mail::to('rozariodavid271@gmail.com')->send(new ContactFormMail(
            $validatedData['name'],
            $validatedData['email'],
            $validatedData['message']
        ));

        // Clear form fields
        $this->reset(['name', 'email', 'message']);

        // Flash success message
        session()->flash('message', 'Your message has been sent successfully!');
    }
}

   
}
