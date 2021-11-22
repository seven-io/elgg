<?php

return [
    'admin:sms77' => 'sms77',
    'admin:sms77:test_sms' => 'Test-SMS senden',

    'menu:page:header:sms77' => 'sms77',

    'sms77:sms:api_key' => 'API-Schlüssel',
    'sms77:sms:api_key:help' => 'Erhältlich auf https://www.sms77.io',
    'sms77:sms:debug' => 'Debug',
    'sms77:sms:debug:help' => 'Keine SMS werden versandt wenn aktiviert',
    'sms77:sms:error' => 'SMS-Versand fehlgeschlagen',
    'sms77:sms:flash' => 'Flash',
    'sms77:sms:flash:help' => 'Flash-SMS werden, geräteabhängig, '
        . 'direkt im Display angezeigt und nicht gespeichert',
    'sms77:sms:foreign_id' => 'Foreign ID',
    'sms77:sms:foreign_id:help' =>
        'Max. 64 Zeichen bestehend aus a-z, A-Z, 0-9, .-_@',
    'sms77:sms:from' => 'Absender',
	'sms77:sms:from:help' =>
        'Absender - bis 11 alphanumerischen oder 16 numerischen Zeichen',
    'sms77:sms:label' => 'Label',
    'sms77:sms:label:help' => 'Max. 100 Zeichen bestehend aus a-z, A-Z, 0-9, .-_@',
    'sms77:sms:no_reload' => 'Duplikate erlauben',
    'sms77:sms:no_reload:help' => 'Erlaube Versand von Duplikaten - identischer Text '
        . 'und Empfänger innerhalb 180 Sekunden',
    'sms77:sms:send' => 'SMS versenden',
    'sms77:sms:performance_tracking' => 'Performance tracking',
	'sms77:sms:performance_tracking:help' =>
        'Siehe https://help.sms77.io/de/articles/3125341-performance-tracking',
    'sms77:sms:signature' => 'Signatur',
	'sms77:sms:signature:help' => 'Text an ausgehende Nachrichten anhängen',
    'sms77:sms:success' => 'SMS versandt',
    'sms77:sms:text' => 'Text',
    'sms77:sms:text:help' => 'Maximal 10000 Zeichen',
    'sms77:sms:to' => 'Empfängernummer(n)',
    'sms77:sms:to:help' => 'Rufnummer(n) getrennt per Komma eingeben',

	'sms77:settings' => 'sms77 Einstellungen',
];
