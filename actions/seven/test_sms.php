<?php

if (!elgg_send_sms(get_input('to'), get_input('text'))) {
	return elgg_error_response(elgg_echo('seven:sms:error'));
}

return elgg_ok_response('', elgg_echo('seven:sms:success'));
