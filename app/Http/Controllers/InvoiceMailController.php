<?php

namespace App\Http\Controllers;

use App\Http\Requests\CollectionScenarioRequest;
use App\Models\ActionsCollectionScenario;
use App\Models\ActionType;
use App\Models\CollectionScenario;
use App\Models\Item;
use App\Models\Client;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvoiceMail;
//use Illuminate\Support\Facades\Mail; 

 
class InvoiceMailController extends Controller 
{
    public function sendInvoice(Request $request)
    {
        $from = $request->from;
        $to = $request->email_to0;
        $toEmails = $request->input('email_to', []);
        $ccEmails = $request->input('cc_emails', []); 
        $cc_emails = [];
        $bccEmails = []; 
        $count = 0; 
        if(count($ccEmails) !== 0 && count($toEmails) !== 0)
        {
        foreach($ccEmails as $key => $value) 
        {
            if($value == "cc")
            {
                $cc_emails [] = $toEmails[$count];
            }
            elseif($value == "bcc")
            {
                $bccEmails [] =  $toEmails[$count];
            }
            $count++;
        }
        }
        $clientId = $request->client_id; 
        $subject = $request->mail_subject;
        $content = $request->mail_content; 
        $client = Client::where('id',$clientId)->first();
        $sub_replacements = [
            '#my_company_name' => 'Business Solutions',
            '#client_name' => $client->company_name,
            '#client_code' => $client->company_code,   
        ];
        foreach ($sub_replacements as $placeholder => $value) {
            if (strpos($subject, $placeholder) !== false) {
                $subject = str_replace($placeholder, $value, $subject);
            }
        }
        $data = [
            'from'=>$from,
            'to'=>$to,
            'subject' => $subject,
            'items_amount_overdue_exclude_disputes_include_late_penalties' => 12354600,
            'interactive_page_button' => 'View my account statement',
            'my_company_signature' => '',
            'client_code' => $request->client_code,
            'items_amount_overdue_exclude_disputes' => '12345',
            'my_name' => 'Paul Mayer',
            'my_phone' => '+33 4 12 34 56 78',
            'my_email' => 'demo@mydsomanager.com',
            'my_company_name' => 'Business Solutions',
            'my_company_logo' => 'img/logo.png',
        ];
        $attachments = [];
        foreach ($request->allFiles() as $fileInput) {
            if (is_array($fileInput)) {
                foreach ($fileInput as $file) {
                    $attachments[] = [
                        'path' => $file->getRealPath(),
                        'name' => $file->getClientOriginalName(),
                        'mime' => $file->getMimeType(),
                    ];
                } 
            }
        }
        // Send the email
        if($request->has('copy'))  
        {
            Mail::to($to)
            ->cc($from)
            ->cc($cc_emails)
            ->bcc($bccEmails) 
            ->send(new InvoiceMail($attachments, $data));  
         } 
         else
         {
            // Mail::to($to)
            // ->send(new InvoiceMail($attachments, $data));
          //  Mail::to($to)->send(new InvoiceMail($attachments, $data));
         }  
        
         return back()->with('success', 'Invoice sent successfully with attachments.');  
    }
} 
       