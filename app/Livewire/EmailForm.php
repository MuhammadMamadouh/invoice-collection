<?php

namespace App\Livewire;
use Livewire\Attributes\On; 
use App\Models\SentEmail;
use Livewire\Component;

class EmailForm extends Component
{
    public $email_type;
    public $from;
    public $get_a_copy = false;
    public $request_an_acknowledgment = false;
    public $to;
    public $subject;
    public $editorContent; 
    // public $email_type;
    public $message;

    public $resolver;
    public $itemStatusActions;

    public $nums;


    
    public function updated_email_type($value)
    {

        $this->email_type = $value;
    }

    #[On('updateEmail')]
    public function updateEmail($resolver, $nums)
    {
        $this->resolver = $resolver;
        $this->nums = $nums;
    }
    public function render()
    {
        return view('livewire.email-form');
    }
}
