<?php
$entity = elgg_extract('entity', $vars);

$seven_switch = static function ($name) use($entity) {
    echo elgg_view_field([
        '#help' => elgg_echo("seven:sms:$name:help"),
        '#label' => elgg_echo("seven:sms:$name"),
        '#type' => 'checkbox',
        'checked' => 1 === (int)$entity->$name,
        'default' => 0,
        'name' => "params[$name]",
        'switch' => true,
        'value' => 1,
    ]);
};

$seven_text = static function($name, $required = false) use($entity) {
    echo elgg_view_field([
        '#help' => elgg_echo("seven:sms:$name:help"),
        '#label' => elgg_echo("seven:sms:$name"),
        '#type' => 'text',
        'name' => "params[$name]",
        'required' => $required,
        'switch' => true,
        'value' => $entity->$name,
    ]);
};

$seven_text('api_key', true);
$seven_text('foreign_id');
$seven_text('from');
$seven_text('label');
$seven_text('signature');

$seven_switch('debug');
$seven_switch('flash');
$seven_switch('no_reload');
$seven_switch('performance_tracking');
