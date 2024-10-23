<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class ClientDataCreateEmailAction extends Component
{
    public $isVisible = false;
    public $clientsData;


    //------------------Action Table -----------
    public $action_name;
    public $action_date;
    public $no_of_days;
    public $actionTypeId;
    public $actionType;
    public $created_by = 1;
    public $selectedActionType = null;

    //------------------Email Table -----------

    public $subject;
    public $editorContent;
    public $get_a_copy = 0;
    public $request_an_acknowledgment = 0;
    public $resolvers;
    public $typesTo;
    public $type_To;
    public $resolver;
    public $recipients = [];


    //---------------------files table data--------------------
    public $file_name;
    public $desc;
    public $visiable_in_internal;
    public $visiable_in_external;



    #[On('loadSendEmailComponent')]
    public function showForm()
    {

        $this->isVisible = true;
        $this->subject = $this->clientsData->company_name . " / " . $this->clientsData->company_code;
        foreach ($this->clientsData->contacts as $clientContacts){
        }

    }


    #[On('closeForm')]
    public function hideForm()
    {
        $this->isVisible = false;
    }


    public function render()
    {
        return view('livewire.client-data-create-email-action');
    }
}
