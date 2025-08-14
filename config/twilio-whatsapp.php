<?php

return [
    'sid' => env('TWILIO_SID'),
    'token' => env('TWILIO_AUTH_TOKEN'),
    'content_sid' => env('TWILIO_CONTENT_SID'),
    'whatsapp_from' => env('TWILIO_WHATSAPP_FROM'), // without "whatsapp:"
];
