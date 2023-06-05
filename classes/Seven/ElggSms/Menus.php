<?php

namespace Seven\ElggSms;

class Menus {
	public static function setupPageMenu($hook, $type, $return, $params) {
		if (elgg_in_context('admin')) {
			$return[] = \ElggMenuItem::factory([
                'href' => 'admin/plugin_settings/seven_sms',
                'name' => 'seven:settings',
				'section' => 'seven',
				'text' => elgg_echo('seven:settings'),
			]);

			$return[] = \ElggMenuItem::factory([
                'href' => 'admin/seven/test_sms',
                'name' => 'seven:test',
				'section' => 'seven',
				'text' => elgg_echo('admin:seven:test_sms'),
			]);
		}

		return $return;
	}
}
