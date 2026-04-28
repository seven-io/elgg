<p align="center">
  <img src="https://www.seven.io/wp-content/uploads/Logo.svg" width="250" alt="seven logo" />
</p>

<h1 align="center">seven SMS for Elgg</h1>

<p align="center">
  SMS provider for <a href="https://elgg.org/">Elgg</a> - hooks into the <code>notifications_sms</code> plugin and exposes a programmatic <code>elgg_send_sms()</code> helper.
</p>

<p align="center">
  <a href="LICENSE"><img src="https://img.shields.io/badge/License-MIT-teal.svg" alt="MIT License" /></a>
  <img src="https://img.shields.io/badge/Elgg-2.1.x-orange" alt="Elgg 2.1.x" />
  <img src="https://img.shields.io/badge/PHP-5.6%2B-purple" alt="PHP 5.6+" />
</p>

---

## Features

- **Notification Channel** - Registered as an `sms` delivery method for the Elgg notifications subsystem
- **Programmatic Send** - Use `elgg_send_sms($number, $text)` from any plugin
- **Notification Body Override** - Pass a custom `sms` field in `notify_user()` for SMS-specific copy

## Prerequisites

- [Elgg](https://elgg.org/) 2.1.x
- The bundled `notifications_sms` plugin enabled
- A [seven account](https://www.seven.io/) with API key ([How to get your API key](https://help.seven.io/en/developer/where-do-i-find-my-api-key))

## Installation

```bash
composer require seven.io/elgg
```

Enable the plugin via the Elgg admin under **Configure > Plugins**.

## Configuration

Open the seven plugin settings page and paste your API key.

## Usage

### As notification channel

Add `sms` to the delivery methods passed to `notify_user()`:

```php
notify_user($member->guid, 0, $subject, $message, [
    'action'  => 'something',
    'object'  => $entity,
    'sms'     => $sms, // SMS-specific copy; falls back to summary, then subject
    'summary' => $summary,
    'url'     => $entity->getURL(),
], ['email', 'site', 'sms']);
```

### Programmatic send

```php
elgg_send_sms('+4987654210', 'HI2U!');
```

## Support

Need help? Feel free to [contact us](https://www.seven.io/en/company/contact/) or [open an issue](https://github.com/seven-io/elgg/issues).

## License

[MIT](LICENSE)
