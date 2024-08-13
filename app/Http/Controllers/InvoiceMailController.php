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
use App\Mail\InvoiceMail;
use Illuminate\Support\Facades\Mail;

 
class InvoiceMailController extends Controller
{
    public function sendInvoice(Request $request)
    {
        $from = $request->from;
        $recipient = 'recipient@example.com';
        $attachmentPath = storage_path('app/public/invoice.pdf'); // Path to the attachment
        $subject = $request->mail_subject;
        $content = $request->mail_content; 
        $sub_replacements = [
            '#my_company_name' => 'Business Solution',
            '#client_name' => $request->client_name,
            '#client_code' => $request->client_code,
        ];
       
        //'#items_amount' => '',
        //items_list_monthly
        //items_list_overdue
        foreach ($sub_replacements as $placeholder => $value) {
            if (strpos($subject, $placeholder) !== false) {
                $subject = str_replace($placeholder, $value, $subject);
            }
        }
        

        $data = [
            'from'=>$from,
            'to'=>$recipient,
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
 
        // Send the email
        Mail::to($recipient)->send(new InvoiceMail($attachmentPath, $data));

        return 'Email sent with attachment and data!';  
    }
   
  
}
