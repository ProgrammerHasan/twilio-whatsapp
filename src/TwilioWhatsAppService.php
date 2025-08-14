<?php

namespace ProgrammerHasan\TwilioWhatsApp;

use Twilio\Rest\Client;
use ProgrammerHasan\TwilioWhatsApp\Helpers\Helper;

class TwilioWhatsAppService
{
    protected Client $twilio;
    protected string $from;
    protected mixed $contentSid;

    public function __construct()
    {
        $this->twilio = new Client(
            config('twilio-whatsapp.sid'),
            config('twilio-whatsapp.token')
        );
        $this->contentSid = config('twilio-whatsapp.content_sid');
        $this->from = 'whatsapp:' . config('twilio-whatsapp.whatsapp_from');
    }

    public function sendMessage(string $phone, string $message): bool
    {
        try {
            $formattedPhone = Helper::formatPhoneNumber($phone);

            $this->twilio->messages->create(
                'whatsapp:' . $formattedPhone,
                [
                    'from' => $this->from,
                    'body' => $message,
                ]
            );

            return true;
        } catch (\Throwable $th) {
            \Log::error('WhatsApp Send Error: ' . $th->getMessage());
            return false;
        }
    }

    public function sendOtp(string $phone, $otp = null): ?int
    {
        try {
            $otp = $otp ?? random_int(100000, 999999);
            $formattedPhone = Helper::formatPhoneNumber($phone);

            $this->twilio->messages->create(
                'whatsapp:' . $formattedPhone,
                [
                    'from' => $this->from,
                    'contentSid' => $this->contentSid,
                    'contentVariables' => json_encode(["1" => (string)$otp], JSON_THROW_ON_ERROR),
                ]
            );

            return $otp;
        } catch (\Throwable $th) {
            \Log::error('WhatsApp OTP Send Error: ' . $th->getMessage());
            return null;
        }
    }
}
