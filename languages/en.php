<?php

return [
    'admin:sms77' => 'sms77',
    'admin:sms77:test_sms' => 'Send Test SMS',

    'menu:page:header:sms77' => 'sms77',

    'sms77:sms:api_key' => 'API key',
    'sms77:sms:api_key:help' => 'Get yours at https://www.sms77.io',
    'sms77:sms:debug' => 'Debug',
    'sms77:sms:debug:help' => 'If activated no SMS will be sent or calculated',
    'sms77:sms:error' => 'SMS could not be sent',
    'sms77:sms:flash' => 'Flash',
    'sms77:sms:flash:help' => 'Flash SMS get directly displayed in the receivers display',
    'sms77:sms:foreign_id' => 'Foreign ID',
    'sms77:sms:foreign_id:help' =>
        'Max. 64 chars, allowed characters: a-z, A-Z, 0-9, .-_@',
    'sms77:sms:from' => 'From',
	'sms77:sms:from:help' =>
        'Sender number - up to 11 alphanumeric or 16 numeric characters',
    'sms77:sms:label' => 'Label',
    'sms77:sms:label:help' => 'Max. 100 chars, allowed characters: a-z, A-Z, 0-9, .-_@',
    'sms77:sms:no_reload' => 'No reload',
    'sms77:sms:no_reload:help' =>
        'If enabled, prevents sending the same SMS (text, type and recipient alike)'
        . ' within 180 seconds',
    'sms77:sms:send' => 'Send SMS',
    'sms77:sms:performance_tracking' => 'Performance tracking',
	'sms77:sms:performance_tracking:help' =>
        'See https://help.sms77.io/de/articles/3125341-performance-tracking',
    'sms77:sms:signature' => 'Signature',
	'sms77:sms:signature:help' => 'Text to append to outgoing messages',
    'sms77:sms:success' => 'SMS has been sent',
    'sms77:sms:text' => 'Text',
    'sms77:sms:text:help' => 'Maximum of 10000 characters',
    'sms77:sms:to' => 'Recipient(s)',
    'sms77:sms:to:help' => 'Enter a phone number separated by comma',

	'sms77:settings' => 'sms77 Settings',
];
