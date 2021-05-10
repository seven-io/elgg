<?php

/**
 * Sms77 SMS Service
 * @author    sms77 e.K. <support@sms77.io>
 * @copyright Copyright (c) 2021, sms77 e.K.
 */
@include_once __DIR__  . '/vendor/autoload.php';

elgg_register_event_handler('init', 'system', 'sms77_sms_init');

/**
 * Initialize the plugin
 * @return void
 */
function sms77_sms_init() {
    elgg_register_plugin_hook_handler('send', 'sms', 'sms77_sms_send');

    elgg_register_plugin_hook_handler('register', 'menu:page',
        [\Sms77\ElggSms\Menus::class, 'setupPageMenu']);

    elgg_register_action('sms77/test_sms', __DIR__ . '/actions/sms77/test_sms.php',
        'admin');
}

/**
 * Sends SMS using Sms77
 * @param string $hook "send"
 * @param string $type "sms"
 * @param bool $return Has the SMS been sent?
 * @param array $params Hook params
 * @return bool | void
 */
function sms77_sms_send($hook, $type, $return, $params) {
    if ($return === true) {
        return; // another plugin has already sent the SMS
    }

    return elgg_send_sms(
        elgg_extract('to', $params), elgg_extract('text', $params));
}

function sms77_get_setting($key) {
    return elgg_get_plugin_setting($key, 'sms77_sms');
}

/**
 * Send an SMS
 * @param string $to Phone number of the recipient
 * @param string $text Text of the SMS
 * @return bool | void
 */
function elgg_send_sms($to, $text) {
    $apiKey = sms77_get_setting('api_key');

    if (!$apiKey) {
        return;
    }

    $signature = sms77_get_setting('signature');
    if ($signature) {
        $text .= " $signature";
    }

    try {
        (new \Sms77\Api\Client($apiKey, 'elgg'))->sms($to, $text, [
            'debug' => sms77_get_setting('debug'),
            'flash' => sms77_get_setting('flash'),
            'foreign_id' => sms77_get_setting('foreign_id'),
            'from' => sms77_get_setting('from'),
            'label' => sms77_get_setting('label'),
            'no_reload' => sms77_get_setting('no_reload'),
            'performance_tracking' => sms77_get_setting('performance_tracking'),
            'type' => 'direct',
        ]);

        return true;
    } catch (Exception $e) {
        error_log($e->getMessage());
    }
}