<img src="https://www.seven.io/wp-content/uploads/Logo.svg" width="250" />

seven SMS provider
===================
![Elgg Logo](https://img.shields.io/badge/Elgg-2.1.x-orange.svg?style=flat-square)

## Features

 * Send SMS using seven API

### Usage

This plugin provides a handler for SMS notification delivery for the `notifications_sms` plugin.

It also supports sending SMS messages programmatically:

```php
notify_user($member->guid, 0, $subject, $message, [
		'action' => 'something',
		'object' => $entity,
        'sms' => $sms, // Custom text of the SMS notification, falls back to 'summary' and then to 'subject'
		'summary' => $summary,
        'url' => $entity->getURL(),
], ['email', 'site', 'sms']);
```

```php
elgg_send_sms('+4987654210', 'HI2U!');
```

#### Support

Need help? Feel free to [contact us](https://www.seven.io/en/company/contact/).
