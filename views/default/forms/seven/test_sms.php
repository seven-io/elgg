<?php

echo elgg_view_field([
	'#help' => elgg_echo('seven:sms:to:help'),
    '#label' => elgg_echo('seven:sms:to'),
    '#type' => 'text',
    'name'=> 'to',
    'required' => true,
]);

echo elgg_view_field([
    '#help' => elgg_echo('seven:sms:text:help'),
    '#label' => elgg_echo('seven:sms:text'),
    '#type' => 'plaintext',
    'name' => 'text',
    'required' => true,
	'rows' => 2,
]);

elgg_set_form_footer(elgg_view_field([
    '#type' => 'submit',
    'value' => elgg_echo('seven:sms:send'),
]));
