<?php

namespace ProgrammerHasan\TwilioWhatsApp;

use Illuminate\Support\ServiceProvider;
use ProgrammerHasan\TwilioWhatsApp\Facade\TwilioWhatsApp;

class TwilioWhatsAppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/twilio-whatsapp.php' => config_path('twilio-whatsapp.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/twilio-whatsapp.php', 'twilio-whatsapp'
        );

        $this->app->bind("TwilioWhatsApp", function () {
            return new TwilioWhatsApp();
        });

        $this->app->singleton(TwilioWhatsAppService::class, function ($app) {
            return new TwilioWhatsAppService();
        });
    }
}
