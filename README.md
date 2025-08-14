# ProgrammerHasan/TwilioWhatsApp

A Laravel package to send **WhatsApp OTPs** and **SMS messages** using Twilio.

Supports:
- WhatsApp messages & OTPs
- SMS messages

---

## **Requirements**

1. PHP >= 8.0
2. Laravel >= 9.x
3. Twilio SDK (included via composer)

---

## **Twilio Setup**

### **1. Create a WhatsApp Service**
- Go to [Twilio WhatsApp Services](https://console.twilio.com/us1/develop/sms/services)
- Create a new WhatsApp Service
- Note down your **Service SID**

### **2. Content Template**
- Go to [Twilio Content Template Builder](https://console.twilio.com/us1/develop/sms/content-template-builder)
- Create your template for OTP or messages
- Copy the **Content SID**
- For OTP - use default Verification Content SID

### **3. WhatsApp Sender**
- Go to [WhatsApp Senders](https://console.twilio.com/us1/develop/sms/senders/whatsapp-senders)
- Register your WhatsApp number
- Use the number in your config as `whatsapp_from` (without the `whatsapp:` prefix)

---

## **Installation**

```bash
composer require programmerhasan/twilio-whatsapp
```
## Publishing config file
```
php artisan vendor:publish --provider="ProgrammerHasan\TwilioWhatsApp\TwilioWhatsAppServiceProvider" --tag=config
```

Add your .env values:
```
TWILIO_SID=your_twilio_sid
TWILIO_AUTH_TOKEN=your_twilio_auth_token
TWILIO_CONTENT_SID=your_whatsapp_content_sid
TWILIO_WHATSAPP_FROM=+1415XXXXXXX
```

## Usage
### WhatsApp OTP
```
use TwilioWhatsApp;

$otp = TwilioWhatsApp::sendOtp('+88017XXXXXXXX');
```

### Send WhatsApp Message
```
use TwilioWhatsApp;

TwilioWhatsApp::sendMessage('+88017XXXXXXXX', 'Hello from Twilio WhatsApp!');
```

### Support: programmerhasan.s@gmail.com or +8801975568604

## License

This repository is licensed under the [MIT License](http://opensource.org/licenses/MIT).

Copyright 2025 [ProgrammerHasan](https://github.com/ProgrammerHasan). 