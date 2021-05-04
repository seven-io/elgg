<?php
$entity = elgg_extract('entity', $vars);

$sms77_switch = static function ($name) use($entity) {
    echo elgg_view_field([
        '#help' => elgg_echo("sms77:sms:$name:help"),
        '#label' => elgg_echo("sms77:sms:$name"),
        '#type' => 'checkbox',
        'checked' => 1 === (int)$entity->$name,
        'default' => 0,
        'name' => "params[$name]",
        'switch' => true,
        'value' => 1,
    ]);
};

$sms77_text = static function($name, $required = false) use($entity) {
    echo elgg_view_field([
        '#help' => elgg_echo("sms77:sms:$name:help"),
        '#label' => elgg_echo("sms77:sms:$name"),
        '#type' => 'text',
        'name' => "params[$name]",
        'required' => $required,
        'switch' => true,
        'value' => $entity->$name,
    ]);
};

$sms77_text('api_key', true);
$sms77_text('foreign_id');
$sms77_text('from');
$sms77_text('label');
$sms77_text('signature');

$sms77_switch('debug');
$sms77_switch('flash');
$sms77_switch('no_reload');
$sms77_switch('performance_tracking');