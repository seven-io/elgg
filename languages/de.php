<?php

return [
    'admin:seven' => 'seven',
    'admin:seven:test_sms' => 'Test-SMS senden',

    'menu:page:header:seven' => 'seven',

    'seven:sms:api_key' => 'API-Schlüssel',
    'seven:sms:api_key:help' => 'Erhältlich auf https://www.seven.io',
    'seven:sms:debug' => 'Debug',
    'seven:sms:debug:help' => 'Keine SMS werden versandt wenn aktiviert',
    'seven:sms:error' => 'SMS-Versand fehlgeschlagen',
    'seven:sms:flash' => 'Flash',
    'seven:sms:flash:help' => 'Flash-SMS werden, geräteabhängig, '
        . 'direkt im Display angezeigt und nicht gespeichert',
    'seven:sms:foreign_id' => 'Foreign ID',
    'seven:sms:foreign_id:help' =>
        'Max. 64 Zeichen bestehend aus a-z, A-Z, 0-9, .-_@',
    'seven:sms:from' => 'Absender',
	'seven:sms:from:help' =>
        'Absender - bis 11 alphanumerischen oder 16 numerischen Zeichen',
    'seven:sms:label' => 'Label',
    'seven:sms:label:help' => 'Max. 100 Zeichen bestehend aus a-z, A-Z, 0-9, .-_@',
    'seven:sms:no_reload' => 'Duplikate erlauben',
    'seven:sms:no_reload:help' => 'Erlaube Versand von Duplikaten - identischer Text '
        . 'und Empfänger innerhalb 180 Sekunden',
    'seven:sms:send' => 'SMS versenden',
    'seven:sms:performance_tracking' => 'Performance tracking',
	'seven:sms:performance_tracking:help' =>
        'Siehe https://help.seven.io/de/performance-tracking',
    'seven:sms:signature' => 'Signatur',
	'seven:sms:signature:help' => 'Text an ausgehende Nachrichten anhängen',
    'seven:sms:success' => 'SMS versandt',
    'seven:sms:text' => 'Text',
    'seven:sms:text:help' => 'Maximal 10000 Zeichen',
    'seven:sms:to' => 'Empfängernummer(n)',
    'seven:sms:to:help' => 'Rufnummer(n) getrennt per Komma eingeben',

	'seven:settings' => 'seven Einstellungen',
];
