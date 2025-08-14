<?php

namespace ProgrammerHasan\TwilioWhatsApp\Helpers;

class Helper
{
    public static function formatPhoneNumber(string $phone): string
    {
        $phone = preg_replace('/\D/', '', $phone);
        if (!str_starts_with($phone, '88')) {
            $phone = '88' . $phone;
        }
        return '+' . $phone;
    }
}
