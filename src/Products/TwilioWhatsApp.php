<?php

namespace ProgrammerHasan\TwilioWhatsApp\Products;

use ProgrammerHasan\TwilioWhatsApp\TwilioWhatsAppService;

class TwilioWhatsApp
{
    private TwilioWhatsAppService $twilioWhatsAppService;

    public function __construct()
    {
        $this->twilioWhatsAppService = new TwilioWhatsAppService();
    }

    public function sendMessage(string $phone, string $message): bool
    {
        return $this->twilioWhatsAppService->sendMessage($phone, $message);
    }

    public function sendOtp(string $phone, $otp = null): ?int
    {
        return $this->twilioWhatsAppService->sendOtp($phone, $otp);
    }

}
