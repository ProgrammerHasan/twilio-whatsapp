<?php

namespace ProgrammerHasan\TwilioWhatsApp\Facades;

use Illuminate\Support\Facades\Facade;

class TwilioWhatsApp extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'twilio.whatsapp';
    }
}
