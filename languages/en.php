<?php

return [
    'admin:seven' => 'seven',
    'admin:seven:test_sms' => 'Send Test SMS',

    'menu:page:header:seven' => 'seven',

    'seven:sms:api_key' => 'API key',
    'seven:sms:api_key:help' => 'Get yours at https://www.seven.io',
    'seven:sms:error' => 'SMS could not be sent',
    'seven:sms:flash' => 'Flash',
    'seven:sms:flash:help' => 'Flash SMS get directly displayed in the receivers display',
    'seven:sms:foreign_id' => 'Foreign ID',
    'seven:sms:foreign_id:help' =>
        'Max. 64 chars, allowed characters: a-z, A-Z, 0-9, .-_@',
    'seven:sms:from' => 'From',
	'seven:sms:from:help' =>
        'Sender number - up to 11 alphanumeric or 16 numeric characters',
    'seven:sms:label' => 'Label',
    'seven:sms:label:help' => 'Max. 100 chars, allowed characters: a-z, A-Z, 0-9, .-_@',
    'seven:sms:no_reload' => 'No reload',
    'seven:sms:no_reload:help' =>
        'If enabled, prevents sending the same SMS (text, type and recipient alike)'
        . ' within 180 seconds',
    'seven:sms:send' => 'Send SMS',
    'seven:sms:performance_tracking' => 'Performance tracking',
	'seven:sms:performance_tracking:help' =>
        'See https://help.seven.io/en/performance-tracking',
    'seven:sms:signature' => 'Signature',
	'seven:sms:signature:help' => 'Text to append to outgoing messages',
    'seven:sms:success' => 'SMS has been sent',
    'seven:sms:text' => 'Text',
    'seven:sms:text:help' => 'Maximum of 10000 characters',
    'seven:sms:to' => 'Recipient(s)',
    'seven:sms:to:help' => 'Enter a phone number separated by comma',

	'seven:settings' => 'seven Settings',
];
