<?php

/**
 * seven SMS Service
 * @author seven communications GmbH & Co. KG <support@seven.io>
 * @copyright Copyright (c) 2021-2022, sms77 e.K. ; 2023-present seven communications GmbH & Co. KG
 */
@include_once __DIR__  . '/vendor/autoload.php';

elgg_register_event_handler('init', 'system', 'seven_sms_init');

/**
 * Initialize the plugin
 * @return void
 */
function seven_sms_init() {
    elgg_register_plugin_hook_handler('send', 'sms', 'seven_sms_send');

    elgg_register_plugin_hook_handler('register', 'menu:page',
        [\Seven\ElggSms\Menus::class, 'setupPageMenu']);

    elgg_register_action('seven/test_sms', __DIR__ . '/actions/seven/test_sms.php',
        'admin');
}

/**
 * Sends SMS using seven
 * @param string $hook "send"
 * @param string $type "sms"
 * @param bool $return Has the SMS been sent?
 * @param array $params Hook params
 * @return bool | void
 */
function seven_sms_send($hook, $type, $return, $params) {
    if ($return === true) {
        return; // another plugin has already sent the SMS
    }

    return elgg_send_sms(
        elgg_extract('to', $params), elgg_extract('text', $params));
}

function seven_get_setting($key) {
    return elgg_get_plugin_setting($key, 'seven_sms');
}

/**
 * Send an SMS
 * @param string $to Phone number of the recipient
 * @param string $text Text of the SMS
 * @return bool | void
 */
function elgg_send_sms($to, $text) {
    $apiKey = seven_get_setting('api_key');

    if (!$apiKey) {
        return;
    }

    $signature = seven_get_setting('signature');
    if ($signature) {
        $text .= " $signature";
    }

    try {
        (new \Sms77\Api\Client($apiKey, 'elgg'))->sms($to, $text, [
            'debug' => seven_get_setting('debug'),
            'flash' => seven_get_setting('flash'),
            'foreign_id' => seven_get_setting('foreign_id'),
            'from' => seven_get_setting('from'),
            'label' => seven_get_setting('label'),
            'no_reload' => seven_get_setting('no_reload'),
            'performance_tracking' => seven_get_setting('performance_tracking'),
        ]);

        return true;
    } catch (Exception $e) {
        error_log($e->getMessage());
    }
}
