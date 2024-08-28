<?php


namespace App\Enum;

class EmailData
{
    const SIMPLE_EMAIL = 1;
    const INTERNAL_INTERACTIVE_EMAIL = 2;
    
    const EMAIL_TYPE = [
        'simple_email',
        'internal_interactive_email',
    ];

    const TO = 1;
    const CC = 2;
    const BCC = 3;

    const TYPE_TO = [
        'to',
        'cc',
        'bcc',
    ];
}
