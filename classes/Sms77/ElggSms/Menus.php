<?php

namespace Sms77\ElggSms;

class Menus {
	public static function setupPageMenu($hook, $type, $return, $params) {
		if (elgg_in_context('admin')) {
			$return[] = \ElggMenuItem::factory([
                'href' => 'admin/plugin_settings/sms77_sms',
                'name' => 'sms77:settings',
				'section' => 'sms77',
				'text' => elgg_echo('sms77:settings'),
			]);

			$return[] = \ElggMenuItem::factory([
                'href' => 'admin/sms77/test_sms',
                'name' => 'sms77:test',
				'section' => 'sms77',
				'text' => elgg_echo('admin:sms77:test_sms'),
			]);
		}

		return $return;
	}
}