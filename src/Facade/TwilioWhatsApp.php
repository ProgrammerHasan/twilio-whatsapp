<?php

namespace ProgrammerHasan\TwilioWhatsApp\Facade;

use Illuminate\Support\Facades\Facade;

class TwilioWhatsApp extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'TwilioWhatsApp';
    }
}
