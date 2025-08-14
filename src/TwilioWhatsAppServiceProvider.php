<?php

namespace ProgrammerHasan\TwilioWhatsApp;

use Illuminate\Support\ServiceProvider;

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

        $this->app->singleton('twilio.whatsapp', function () {
            return new TwilioWhatsAppService();
        });
    }
}
