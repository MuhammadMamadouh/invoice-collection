<?php

namespace App\Livewire;

use App\Models\SentEmail;
use Livewire\Component;

class EmailForm extends Component
{
    public $selectedOption;
    public $from;
    public $get_a_copy = false;
    public $request_an_acknowledgment = false;
    public $to;
    public $subject;
    public $editorContent; 
    public $email_type;
    public $message;


    
    public function updatedSelectedOption($value)
    {
        $this->selectedOption = $value;
    }

    public function submit()
    {
        // $this->validate([
        //     'selectedOption' => 'required',
        //     'from' => 'required',
        //     'to' => 'required',
        //     'subject' => 'required',
        //     'editorContent' => 'required',
        //     'message' => 'required',
        //     'get_a_copy' => 'required',
        //     'request_an_acknowledgment' => 'required'
        // ]);
        $data = [
            'email_type' => $this->selectedOption,
            'from' => $this->from,
            'to' => $this->to,
            'subject' => $this->subject,
            'message' => '$this->editorContent',
            'get_a_copy' => $this->get_a_copy,
            'request_an_acknowledgment' => $this->request_an_acknowledgment
        ];
        SentEmail::create($data);
        session()->flash('message', 'Email content saved successfully!');
        return redirect()->route('clients.index'); 
    }
    public function render()
    {
        return view('livewire.email-form');
    }
}
