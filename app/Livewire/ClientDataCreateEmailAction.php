<?php

namespace App\Livewire;

use App\Models\Action;
use App\Models\Email;
use App\Models\File;
use App\Models\TypeTo;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;
use Livewire\Component;

class ClientDataCreateEmailAction extends Component
{
    public $isVisible = false;
    public $clientsData;
    public $itemId;
    public $clientContacts;

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



    #[On('loadSendEmail')]
    public function showEmailForm()
    {
        $this->typesTo = TypeTo::all();

        
        $this->resolvers = User::with('role')->get();
        $this->clientContacts = $this->clientsData->contacts;


        $this->subject = $this->clientsData->company_name . " / " . $this->clientsData->company_code;

        $this->isVisible = true;
    }


    #[On('loadSendInternalEmail')]
    public function showInternalEmailForm()
    {
        $this->isVisible = true;
        $this->subject = $this->clientsData->company_name . " / " . $this->clientsData->company_code;
        foreach ($this->clientsData->contacts as $clientContact) {
            $this->clientContacts = $clientContact;
        }
    }


    #[On('closeForm')]
    public function hideForm()
    {
        $this->isVisible = false;
    }


    public function submit()
    {
        DB::beginTransaction();
        $action = Action::create([
            'action_name' => 'email',
            'action_date' => now(),
            'action_type_id' => 5,
            'item_id' => $this->itemId,
            'created_by' => $this->created_by,
            // 'automatic_action' => $this->automatic_action,
            // 'automatic_action_to_be_confirmed' => $this->automatic_action_to_be_confirmed,
            // 'internal_interactive_emailLink' => $this->internal_interactive_emailLink,
        ]);
        $newEmail = new Email([
            'created_by' => $this->created_by,
            'resolver' => $this->resolver,
            'subject' => $this->clientsData->id,
            'message' => $this->editorContent,
        ]);
        $action->emails()->save($newEmail);
        if ($this->file_name) {
            foreach ($this->file_name as $file) {
                $filePath = $file->store('items_files', 'public');
                $newEmail = Email::findOrFail($newEmail->id);
                $newEmailFiles = new File([
                    'file_name' => $filePath,
                    'file_size' => $file->getSize(),
                    'desc' => $this->desc,
                    'visiable_in_internal' => $this->visiable_in_internal,
                    'visiable_in_external' => $this->visiable_in_external,
                ]);
                $newEmail->files()->save($newEmailFiles);
            }
        }
        DB::commit();
        return to_route('clients.index');
    }

    public function render()
    {
        return view('livewire.client-data-create-email-action');
    }
}
